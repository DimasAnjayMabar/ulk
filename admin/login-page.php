<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        // Mulai sesi
        session_start();

        // Cek jika pengguna sudah login
        if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] === true) {
            // Arahkan ke homepage jika sudah login
            header('Location: add-article.php');
            exit();
        }

        require("../includes/head.php");
    ?>
    <style>
        #login-form{
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center;   /* Center vertically */
            min-height: 100vh;     /* Full height of viewport */
        }
    </style>
    <meta http-equiv="no-cache" content="no-store, must-revalidate, post-check=0, pre-check=0">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
</head>

<body>
    <div class="container" id="login-form">
        <form id="loginForm">
            <div class="text-center">
                <h1 style="color: #522e38 !important;">Selamat Datang di Halaman Admin Artikel Psiko Edukasi</h1>
            </div>

            <div data-mdb-input-init class="form-outline mb-4" style="margin-top:5%; color: #522e38 !important;">
                <input type="email" id="form2Example1" class="form-control" />
                <label class="form-label" for="form2Example1">Username</label>
                <div id="usernameError" class="error"></div> <!-- Error message for username -->
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4" style="color: #522e38 !important;">
                <input type="password" id="form2Example2" class="form-control"/>
                <label class="form-label" for="form2Example2">Password</label>
                <div id="passwordError" class="error"></div> <!-- Error message for password -->
            </div>

            <!-- Submit button -->
            <div class="text-center" style="margin: 5%">
                <a class="btn btn-lg btn-primary rounded-pill custom-button" onclick="validateForm(event)">Login</a>
            </div>
        </form>
    </div>
    
    <!-- JavaScript Libraries -->
    <?php
        require('../includes/foot.php');
        //Login 
        require('../js/login.php');
    ?>
</body>
</html>
