<?php
$servername = "localhost";  // Hostname (biasanya localhost)
$username = "root";         // MySQL username
$password = "";             // MySQL password (default kosong untuk XAMPP/LAMP/MAMP)
$database = "psikoedukasi";  // Nama database Anda

try {
    // Buat string koneksi untuk MySQL
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    
    // Atur mode error PDO ke exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Opsi tambahan, jika diperlukan, seperti mode fetch default:
    // $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    // Jika koneksi gagal, tampilkan pesan error
    echo "Connection failed: " . $e->getMessage();
    exit; // Hentikan eksekusi jika koneksi gagal
}
?>
