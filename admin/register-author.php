<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        require("../includes/head.php");
    ?>
    <title>Unit Layanan Psikologi</title>
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

        /* Modal styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4); /* Transparent black background */
            padding-top: 0; /* Remove extra top padding */
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center;   /* Center vertically */
        }

        /* Modal content */
        .modal-content {
            background-color: #fefefe;
            padding: 20px;
            border: 1px solid #888;
            width: 100%;
            max-width: 400px;  /* Adjusted size */
            border-radius: 10px; /* Rounded corners */
        }

        /* Close button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-footer {
            text-align: center;
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
        <form id="registrationForm" method="POST" action="functions/add-author.php">
            <div class="text-center">
                <h1 style="color: #522e38 !important;">Registrasi Author</h1>
            </div>

            <div data-mdb-input-init class="form-outline mb-4" style="margin-top:5%; color: #522e38 !important;">
                <input type="email" id="form2Example1" name="username" class="form-control" required />
                <label class="form-label" for="form2Example1">Username</label>
                <div id="emailError" class="error"></div> <!-- Error message container -->
            </div>

            <div data-mdb-input-init class="form-outline mb-4" style="color: #522e38 !important;">
                <input type="password" id="form2Example2" name="password" class="form-control" required />
                <label class="form-label" for="form2Example2">Password</label>
                <div id="passwordError" class="error"></div> <!-- Error message container -->
            </div>

            <div data-mdb-input-init class="form-outline mb-4" style="color: #522e38 !important;">
                <input type="text" id="form2Example3" name="nama_author" class="form-control" required />
                <label class="form-label" for="form2Example3">Nama Author</label>
                <div id="nameError" class="error"></div> <!-- Error message container -->
            </div>

            <!-- Submit button -->
            <div class="text-center" style="margin-top: 5%;">
                <div class="col">
                    <a class="btn btn-lg btn-primary rounded-pill custom-button" href="login-page.php">Kembali</a>
                    <!-- Use onclick to trigger validation and show the modal -->
                    <a class="btn btn-lg btn-primary rounded-pill custom-button" onclick="validateForm(event)">Registrasi</a>
                </div>
            </div>
        </form>
    </div>

    <!-- Modal -->
    <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Apakah Anda yakin ingin menyimpan?</h2>
            <div class="modal-footer">
                <a class="btn btn-lg btn-primary rounded-pill custom-button" onclick="saveData()">Simpan</a>
                <a class="btn btn-lg btn-primary rounded-pill custom-button" onclick="closeModal()">Kembali</a>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Show the modal
        function showModal() {
            document.getElementById("confirmationModal").style.display = "flex"; /* Use flex to center */
        }

        // Close the modal
        function closeModal() {
            document.getElementById("confirmationModal").style.display = "none";
        }

        // Save action
        function saveData() {
            closeModal(); // Close the modal after saving
            // You can add logic to save the form data or redirect the user here
            document.getElementById("registrationForm").submit();        
        }

        // Form validation function
        function validateForm(event) {
            event.preventDefault();  // Prevent form submission

            // Clear previous error messages
            document.getElementById("emailError").textContent = '';
            document.getElementById("passwordError").textContent = '';
            document.getElementById("nameError").textContent = '';

            // Check if all fields are filled
            let isValid = true;

            // Validate email
            if (document.getElementById("form2Example1").value === '') {
                document.getElementById("emailError").textContent = 'Username tidak boleh kosong';
                isValid = false;
            }

            // Validate password
            if (document.getElementById("form2Example2").value === '') {
                document.getElementById("passwordError").textContent = 'Password tidak boleh kosong';
                isValid = false;
            }

            // Validate name
            if (document.getElementById("form2Example3").value === '') {
                document.getElementById("nameError").textContent = 'Nama Author tidak boleh kosong';
                isValid = false;
            }

            // If all fields are valid, show the modal
            if (isValid) {
                showModal();
            }
        }

        // Hide modal when page loads
        window.onload = function() {
            document.getElementById("confirmationModal").style.display = "none";  // Make sure modal is hidden initially
        };
    </script>
</body>
</html>
