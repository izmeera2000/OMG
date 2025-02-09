<?php
// Simple Router with Functions
session_start();

include('includes/functions.php');


$requestUri = trim($_SERVER['REQUEST_URI'], '/');
include 'includes/settings.php';

// Remove basePath from the request URI if it exists
if (strpos($requestUri, $basePath) === 0) {
    $requestUri = substr($requestUri, strlen($basePath));
    $requestUri = trim($requestUri, '/');
}

$requestMethod = $_SERVER['REQUEST_METHOD'];

// Define route functions
function home() {
    include 'views/user/index.php';
}

function shop() {
    include 'views/user/shop.php';
}

function product($productName) {
    include 'views/user/product.php';
}

function notFound() {
    http_response_code(404);
    echo "404 Not Found";
}

// Route Definitions
$routes = [
    '' => 'home',
    'shop' => 'shop',
];

 
 
 
// Route Matching
if (isset($routes[$requestUri])) {
    call_user_func($routes[$requestUri]);
} elseif (strpos($requestUri, 'shop/') === 0) {

    
    $productName = substr($requestUri, 5); // Extract product name
    product($productName);
} else {
    notFound();
}
?>
