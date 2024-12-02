<?php
include '../includes/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $articleId = $_POST['id'];
    
    // Prepare and execute the DELETE query
    $stmt = $conn->prepare("DELETE FROM article WHERE id = ?");
    $stmt->execute([$articleId]);

    // After deletion, redirect back to the database view page
    header("Location: ../admin/database-view.php");
    exit(); // Always call exit after redirect to ensure no further code is executed
} else {
    echo "Article ID missing.";
    exit;
}
?>
