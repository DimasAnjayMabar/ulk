<?php
require_once("../includes/connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Retrieve form data
        $title = $_POST['title'];
        $content = $_POST['content'];
        $photo_path = $_POST['photo_path'];
        $video_link = $_POST['video_link'];
        $id_author = $_POST['id_author'];

        // Insert data into the article table
        $query = "INSERT INTO article (title, content, photo_path, video_link, id_author) 
                  VALUES (:title, :content, :photo_path, :video_link, :id_author)";
        $stmt = $conn->prepare($query);

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':photo_path', $photo_path);
        $stmt->bindParam(':video_link', $video_link);
        $stmt->bindParam(':id_author', $id_author);

        // Execute the query
        $stmt->execute();

        // Redirect or show success message
        header("Location: ../admin/add-article.php");
        exit;
    } catch (PDOException $e) {
        // Handle database errors
        echo "Error: " . $e->getMessage();
    }
}
?>
