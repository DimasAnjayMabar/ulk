<?php
require("../includes/connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the article ID and other form fields
    $id = $_POST['id'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $author_id = !empty($_POST['id_author']) ? $_POST['id_author'] : NULL;  // Allow NULL if no author is selected
    $content = $_POST['content'];
    $video_link = $_POST['video_link'];

    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $imageName = $_FILES['image']['name'];
        $imageTmp = $_FILES['image']['tmp_name'];
        $imagePath = '../assets/images/article_photo/' . $imageName;
        move_uploaded_file($imageTmp, $imagePath);  // Simpan gambar baru
    } else {
        // Gunakan gambar lama jika tidak ada gambar baru diunggah
        $imagePath = $_POST['current_photo_path'];
    }

    try {
        // Prepare the SQL query to update the article
        $query = "UPDATE article SET title = :title, date = :date, id_author = :author_id, content = :content, video_link = :video_link, photo_path = :photo_path WHERE id = :id";
        
        // Prepare the statement
        $stmt = $conn->prepare($query);
        
        // Bind the parameters
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':author_id', $author_id, PDO::PARAM_INT);  // Can be NULL
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':video_link', $video_link);
        $stmt->bindParam(':photo_path', $imagePath);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the query
        $stmt->execute();

        // Redirect or display a success message
        header("Location: ../admin/database-view.php");  // Redirect to the article list page
        exit();
    } catch (PDOException $e) {
        // Handle the error
        echo "Error updating article: " . $e->getMessage();
    }
}
?>
