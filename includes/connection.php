<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "digital_leadership";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit; // Stop execution if the connection fails
}
?>
