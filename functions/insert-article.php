<?php
require("../includes/connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Retrieve form data
        $title = $_POST['title'];
        $content = $_POST['content'];
        $video_link = $_POST['video_link'];
        $id_author = $_POST['id_author'];   
        
        // Handle file upload
        $photo_path = null; // Default value if no file uploaded
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = '../assets/images/article_photo/';
            $uploadFile = $uploadDir . basename($_FILES['photo']['name']);
            $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));

            // Validate file type
            $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
            if (!in_array($imageFileType, $allowedTypes)) {
                throw new Exception("File type not allowed. Only JPG, JPEG, PNG, and GIF are allowed.");
            }

            // Move the uploaded file
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
                $photo_path = $uploadFile;
            } else {
                throw new Exception("File upload failed.");
            }
        }

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
    } catch (Exception $e) {
        // Handle errors (both file upload and database)
        echo "Error: " . $e->getMessage();
    }
}
?>
