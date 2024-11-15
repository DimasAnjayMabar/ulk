<?php
$servername = "localhost";  // Hostname (usually localhost)
$username = "postgres";         // PostgreSQL username
$password = "admin";             // PostgreSQL password (if any)
$database = "digital_leadership";  // PostgreSQL database name

try {
    // Create the connection string for PostgreSQL
    $conn = new PDO("pgsql:host=$servername;dbname=$database", $username, $password);
    
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Optionally, you can add additional settings, like setting the default fetch mode:
    // $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    // If connection fails, output the error message
    echo "Connection failed: " . $e->getMessage();
    exit; // Stop execution if the connection fails
}
?>
