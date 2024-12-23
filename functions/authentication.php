<?php
    session_start();
    // Cek apakah user sudah login
    if (!isset($_SESSION['user_id'])) {
        // Redirect ke halaman login jika belum login
        header("Location: login-page.php");
        exit();
    }
?>