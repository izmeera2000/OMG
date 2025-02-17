<?php


$conn = mysqli_connect($_ENV['host'], $_ENV['user'], $_ENV['pass'], $_ENV['database5']);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
