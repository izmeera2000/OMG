<?php
// Simple Router with Functions
session_start();

include('includes/server.php');


$requestUri = trim($_SERVER['REQUEST_URI'], '/');

// Remove basePath from the request URI if it exists
if (strpos($requestUri, $basePath) === 0) {
    $requestUri = substr($requestUri, strlen($basePath));
    $requestUri = trim($requestUri, '/');
}

$requestMethod = $_SERVER['REQUEST_METHOD'];

// Define route functions
function home()
{
    include('includes/server.php');
    include 'views/user/home.php';
}

function shop()
{
    include('includes/server.php');

    include 'views/user/shop.php';
}

function checkout()
{
    include('includes/server.php');

    include 'views/user/checkout.php';
}
function admin_home()
{
    include('includes/server.php');

    include 'views/admin/home.php';
}

function product($productId, $productName)
{
    include('includes/server.php');

    // Fetch product details
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $productResult = $stmt->get_result();

    if ($productResult->num_rows > 0) {
        $product = $productResult->fetch_assoc();

        // Fetch product specifications
        $specStmt = $conn->prepare("
            SELECT st.name AS spec_type, ps.spec_value, ps.extra_price,  ps.id
            FROM product_specs ps
            JOIN spec_types st ON ps.spec_type_id = st.id
            WHERE ps.product_id = ?
        ");
        $specStmt->bind_param("i", $productId);
        $specStmt->execute();
        $specResult = $specStmt->get_result();

        $specs = [];
        while ($row = $specResult->fetch_assoc()) {
            $specs[] = $row;
        }

        include 'views/user/product.php';
    } else {
        notFound();
    }
}

function add_to_cart(): void
{

    include('includes/server.php');

    // http_response_code(404);
    // echo "404 Not Found";
}

function notFound()
{
    http_response_code(404);
    echo "404 Not Found";
}

// Route Definitions
$routes = [
    '' => 'home',
    'shop' => 'shop',
    'checkout' => 'checkout',
    'admin' => 'admin_home',
    'add_to_cart' => 'add_to_cart',
];



if (isset($routes[$requestUri])) {
    call_user_func($routes[$requestUri]);
} elseif (strpos($requestUri, 'product/') === 0) {
    // Split URL into parts
    $parts = explode('/', $requestUri);

    // Ensure it has at least 3 parts: ['product', ID, Name]
    if (isset($parts[1]) && isset($parts[2]) && is_numeric($parts[1])) {
        $productId = $parts[1]; // Extract product ID
        $productName = $parts[2]; // Extract product name
        product($productId, $productName);
    } else {
        notFound();
    }
} else {
    notFound();
}
?>