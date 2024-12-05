<?php
require("../includes/connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']); // Sanitize input
    
    // Prepare the deletion query
    $stmt = $conn->prepare("DELETE FROM article WHERE id = :id");
    
    // Bind the parameter using PDO syntax
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "Article deleted successfully.";
        // Optionally redirect to the previous page
        header("Location: ../admin/database-view.php");
        exit;
    } else {
        echo "Error deleting article.";
    }
}
?>
