<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "shoe_store_pos";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>


