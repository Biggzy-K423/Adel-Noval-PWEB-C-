<?php

require_once __DIR__ . '/env.php';

$host = $_ENV['DB_HOST'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$database = $_ENV['DB_NAME'];

$con = mysqli_connect($host, $username, $password, $database);

if ($con) {
    // echo "Connected successfully";
} else {
    echo "Connection failed";
    exit();
}
?>
