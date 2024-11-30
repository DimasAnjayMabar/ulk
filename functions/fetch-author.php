<?php
require_once("../includes/connection.php");

try {
    // Set JSON response header
    header('Content-Type: application/json');
    
    // Fetch authors from the database
    $query = "SELECT id_author, nama_author FROM author"; // Replace `authors` with your actual table name
    $stmt = $conn->query($query);
    $authors = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Return data as JSON
    echo json_encode($authors);
} catch (PDOException $e) {
    // Return error in JSON format
    http_response_code(500);
    echo json_encode(['error' => 'Failed to fetch authors: ' . $e->getMessage()]);
}
?>
