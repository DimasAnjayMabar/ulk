<?php
require('../includes/connection.php'); // Adjust the path to your connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username'], $_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        try {
            // Prepare SQL to check user credentials
            $stmt = $conn->prepare("SELECT * FROM author WHERE username = :username");
            $stmt->bindParam(':username', $username);
            $stmt->execute();

            // Check if the username exists
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                // Verify the password
                if (password_verify($password, $user['password'])) {
                    // Start a session and store user details
                    session_start();
                    $_SESSION['user_id'] = $user['id_author'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['nama_author'] = $user['nama_author'];

                    echo "success"; // Send success response
                } else {
                    echo "Password salah.";
                }
            } else {
                echo "Username tidak ditemukan.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Silakan isi semua bidang.";
    }
} else {
    echo "Invalid request method.";
}
?>
