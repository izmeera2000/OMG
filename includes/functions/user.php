<?php

function registerUser($fullname, $email, $password, $conn) {
    // Check if email already exists
    $check_email = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $check_email->bind_param("s", $email);
    $check_email->execute();
    $check_email->store_result();
    
    if ($check_email->num_rows > 0) {
        return "Email already registered!";
    }
    $check_email->close();

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into database
    $stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $fullname, $email, $hashed_password);

    if ($stmt->execute()) {
        return "User registered successfully!";
    } else {
        return "Error: " . $stmt->error;
    }

 }




 if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["user_register"])) {
    $fullname = trim($_POST["fullname"]);
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $password = $_POST["password"];
    $csrf_token = $_POST["csrf_token"];

    // Validate CSRF token
    if (!isset($_SESSION['csrf_token']) || $csrf_token !== $_SESSION['csrf_token']) {
        die("Invalid CSRF token!");
    }

    // Input validation
    if (!$fullname || !preg_match("/^[a-zA-Z ]+$/", $fullname)) {
        die("Invalid full name!");
    }

    if (!$email) {
        die("Invalid email format!");
    }

    if (strlen($password) < 8) {
        die("Password must be at least 8 characters!");
    }

    echo registerUser($fullname, $email, $password, $conn);
}