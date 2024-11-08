<?php
require("includes/connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $articleId = $_POST['id'];

    // Fetch the article
    $stmt = $conn->prepare("SELECT * FROM article WHERE id = ?");
    $stmt->execute([$articleId]);
    $article = $stmt->fetch();

    if ($article) {
        // Fetch previous and next articles for navigation
        $prevStmt = $conn->prepare("SELECT id FROM article WHERE id < ? ORDER BY id DESC LIMIT 1");
        $prevStmt->execute([$articleId]);
        $prevArticle = $prevStmt->fetch();
    
        $nextStmt = $conn->prepare("SELECT id FROM article WHERE id > ? ORDER BY id ASC LIMIT 1");
        $nextStmt->execute([$articleId]);
        $nextArticle = $nextStmt->fetch();
    
        // Handle edge case for first and last article
        $lastArticleStmt = $conn->prepare("SELECT id FROM article ORDER BY id DESC LIMIT 1");
        $lastArticleStmt->execute();
        $lastArticle = $lastArticleStmt->fetch();
        $lastArticleId = $lastArticle['id'];
    
        // Set the prevId and nextId with default values or handle edge cases
        $prevId = $prevArticle['id'] ?? $lastArticleId; // If no previous article, go to the last article
        $nextId = $nextArticle['id'] ?? 1; // If no next article, go to the first article
    }
    
} else {
    echo "Article ID is missing.";
    exit;
}
?>
