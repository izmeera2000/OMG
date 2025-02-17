<?php
function addToCart($user_id, $product_id, $quantity, $selected_specs, $conn)
{
    // Get base price of product

    $base_price = 0;
    $extra_price = 0;
    $cart_id = null;
    $existing_quantity = 0;


    $stmt = $conn->prepare("SELECT base_price FROM products WHERE id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $stmt->bind_result($base_price);
    $stmt->fetch();
    $stmt->close();

    if (!$base_price) {
        return "Product not found!";
    }

    // Calculate total extra price from selected specs
    $total_extra_price = 0;
    foreach ($selected_specs as $spec_id) {
        $spec_stmt = $conn->prepare("SELECT extra_price FROM product_specs WHERE id = ?");
        $spec_stmt->bind_param("i", $spec_id);
        $spec_stmt->execute();
        $spec_stmt->bind_result($extra_price);
        $spec_stmt->fetch();
        $spec_stmt->close();

        $total_extra_price += $extra_price;
    }

    // Final price calculation
    $final_price = $base_price + $total_extra_price;

    // Check if product is already in cart
    $check_stmt = $conn->prepare("SELECT id, quantity FROM cart WHERE user_id = ? AND product_id = ?");
    $check_stmt->bind_param("ii", $user_id, $product_id);
    $check_stmt->execute();
    $check_stmt->bind_result($cart_id, $existing_quantity);
    $exists = $check_stmt->fetch();
    $check_stmt->close();

    if ($exists) {
        // Update quantity if product exists in cart
        $new_quantity = $existing_quantity + $quantity;
        $update_stmt = $conn->prepare("UPDATE cart SET quantity = ? WHERE id = ?");
        $update_stmt->bind_param("ii", $new_quantity, $cart_id);
        $update_stmt->execute();
        $update_stmt->close();
    } else {
        // Insert new product into cart
        $insert_stmt = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity, price) VALUES (?, ?, ?, ?)");
        $insert_stmt->bind_param("iiid", $user_id, $product_id, $quantity, $final_price);
        $insert_stmt->execute();
        $cart_id = $insert_stmt->insert_id; // Get the inserted cart ID
        $insert_stmt->close();
    }

    // Insert selected specifications into cart_specs
    foreach ($selected_specs as $spec_id) {
        $cart_spec_stmt = $conn->prepare("INSERT INTO cart_specs (cart_id, spec_id) VALUES (?, ?)");
        $cart_spec_stmt->bind_param("ii", $cart_id, $spec_id);
        $cart_spec_stmt->execute();
        $cart_spec_stmt->close();
    }

    return "Product added to cart!";
}



// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     include 'database.php'; // Database connection
//     include 'functions/cart.php';

//     $user_id = $_SESSION['user_id'];  // Assuming user is logged in
//     $product_id = $_POST['product_id'];
//     $quantity = $_POST['quantity'];
//     $selected_specs = $_POST['selected_specs']; // Array of spec IDs

//     echo addToCart($conn, $user_id, $product_id, $quantity, $selected_specs);
// }
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);

 

    // $user_id = 1; // Example user (replace with session user ID)
    $product_id = intval($data['product_id']);
    $quantity = intval($data['quantity']);
    $selected_specs = $data['selected_specs'];

    // // Call function to add to cart
    $message = addToCart($user_id, $product_id, $quantity, $selected_specs, $conn);

    // echo json_encode(["message" => $message]);
    // exit;


    if ($data['action'] === 'add_to_cart') {
        $_SESSION['cart'] = $data['cart']; // Save cart to session
        echo json_encode(["message" => "Cart updated"]);
        exit;
    }
}