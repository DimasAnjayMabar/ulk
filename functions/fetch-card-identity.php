<?php
    require("includes/connection.php");

    // Query to fetch articles
    $query = "SELECT * FROM article";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
