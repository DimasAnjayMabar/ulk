<?php
require('../includes/connection.php'); // Adjust path as needed

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username'], $_POST['password'], $_POST['nama_author']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['nama_author'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $author_name = $_POST['nama_author'];

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        try {
            $stmt = $conn->prepare("INSERT INTO author (username, password, nama_author) VALUES (:username, :password, :nama_author)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $hashed_password);
            $stmt->bindParam(':nama_author', $author_name);
            $stmt->execute();

            header("Location: ../login-page.php");
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Please fill in all fields.";
    }
}
?>
