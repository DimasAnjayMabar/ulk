<?php
require('../includes/connection.php'); // Sesuaikan path ke file koneksi MySQL Anda

$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username'], $_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $username = trim($_POST['username']);
        $password = $_POST['password'];

        try {
            // Siapkan SQL untuk memeriksa kredensial pengguna
            $stmt = $conn->prepare("SELECT * FROM author WHERE username = :username");
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();

            // Periksa apakah username ada
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                $hashed_password = hash('sha256', $password);

                // Verifikasi password
                if ($hashed_password === $user['password']) {
                    // Mulai sesi dan simpan detail pengguna
                    session_start();
                    $_SESSION['user_id'] = $user['id_author'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['nama_author'] = $user['nama_author'];
                    $_SESSION['isloggedin'] = true;

                    echo "success"; // Kirim respons sukses
                } else {
                    $errorMessage = "Password salah";
                }
            } else {
                $errorMessage = "User tidak ditemukan";
            }
        } catch (PDOException $e) {
            echo "Error: " . htmlspecialchars($e->getMessage());
        }
    } else {
        echo "Silakan isi semua bidang.";
    }
} else {
    echo "Invalid request method.";
}
?>
