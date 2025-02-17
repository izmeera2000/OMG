<?php

function insertProduct($conn, $name, $base_price, $description, $categories = [], $specs = [])
{
    // Insert product into `products` table
    $stmt = $conn->prepare("INSERT INTO products (name, base_price) VALUES (?, ?)");
    $stmt->bind_param("sd", $name, $base_price);

    if (!$stmt->execute()) {
        return "Error inserting product: " . $stmt->error;
    }

    // Get the last inserted product ID
    $product_id = $stmt->insert_id;
    $stmt->close();

    // Insert specifications into `product_specs` table
    $stmt = $conn->prepare("INSERT INTO product_specs (product_id, spec_type_id, spec_value, extra_price) VALUES (?, ?, ?, ?)");
    foreach ($specs as $spec) {
        $stmt->bind_param("iisd", $product_id, $spec['spec_type_id'], $spec['spec_value'], $spec['extra_price']);

        if (!$stmt->execute()) {
            return "Error inserting specification: " . $stmt->error;
        }
    }

    $stmt->close();
    return "Product and specifications added successfully!";
}

 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["product_insert"])) {

    $name = $_POST['name'];
    $base_price = $_POST['base_price'];
    $description = $_POST['description'];

    // Example specs array from form input (should be sanitized)
    $specs = [
        // ['spec_type_id' => 1, 'spec_value' => '8GB RAM', 'extra_price' => 50.00],
        // ['spec_type_id' => 2, 'spec_value' => '256GB SSD', 'extra_price' => 100.00]
    ];

    echo insertProduct($conn, $name, $base_price, $description, '', '');
}