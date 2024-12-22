<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        require("../includes/head.php");
    ?>
    <style>
        /* Center the container */
        .container {
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center;   /* Center vertically */
            min-height: 100vh;     /* Full height of viewport */
        }

        form {
            width: 100%;
            max-width: 400px;     /* Optional: limit the form width */
        }

        .form-control:focus {
            border-color: #ffb3c6 !important; /* Change the border color on focus */
            box-shadow: 0 0 0 0.2rem rgba(255, 179, 198, 0.25) !important; /* Optional: add a soft glow */
        }

        .hover-effect {
            color: #ffb3c6; /* Default color */
            text-decoration: none; /* Remove underline */
            transition: color 0.3s ease, text-decoration 0.3s ease; /* Smooth hover effect */
        }

        /* Hover effect */
        .hover-effect:hover {
            color: #ff3366 !important; /* Hover color with !important */
            text-decoration: underline; /* Add underline on hover */
        }

        /* Error message */
        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
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
                <a class="btn btn-lg btn-primary rounded-pill custom-button" href="home-page.php" onclick="validateForm(event)">Login</a>
            </div>
        </form>
    </div>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Trigger the login form submission when Enter is pressed
        document.getElementById("form2Example1").addEventListener("keypress", function (event) {
            if (event.key === "Enter") {
                event.preventDefault();  // Prevent form submission
                validateForm(event);      // Trigger form validation and submission
            }
        });

        document.getElementById("form2Example2").addEventListener("keypress", function (event) {
            if (event.key === "Enter") {
                event.preventDefault();  // Prevent form submission
                validateForm(event);      // Trigger form validation and submission
            }
        });
        
        function validateForm(event) {
            event.preventDefault(); // Prevent default form submission

            // Clear previous error messages
            document.getElementById("usernameError").textContent = '';
            document.getElementById("passwordError").textContent = '';

            // Get input values
            const username = document.getElementById("form2Example1").value.trim();
            const password = document.getElementById("form2Example2").value.trim();

            let isValid = true;

            // Validate username
            if (username === '') {
                document.getElementById("usernameError").textContent = 'Username diperlukan';
                isValid = false;
            }

            // Validate password
            if (password === '') {
                document.getElementById("passwordError").textContent = 'Password diperlukan';
                isValid = false;
            }

            if (isValid) {
                // Send login data to the backend
                $.ajax({
                    url: "../functions/check-author.php", // Adjust path to backend script
                    method: "POST",
                    data: {
                        username: username,
                        password: password,
                    },
                    success: function (response) {
                        if (response === "success") {
                            // Redirect to the Add Article page on successful login
                            window.location.href = "add-article.php";
                        } else {
                            // Display the backend error message directly in the form
                            if (response === "User tidak ditemukan") {
                                document.getElementById("usernameError").textContent = response;
                            } else if (response === "Password salah") {
                                document.getElementById("passwordError").textContent = response;
                            } else {
                                // Generic error message if response is not as expected
                                document.getElementById("passwordError").textContent = "Login gagal. Silahkan coba lagi.";
                            }
                        }
                    },
                    error: function () {
                        // In case of any AJAX errors
                        alert("An error occurred while processing your request.");
                    },
                });
            }
        }
    </script>
</body>
</html>
