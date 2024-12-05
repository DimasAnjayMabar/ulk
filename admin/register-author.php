<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        require("../includes/head.php");
    ?>
    <title>Unit Layanan Psikologi</title>
    <style>
        form {
            width: 100%;
            max-width: 400px;     /* Optional: limit the form width */
        }

        .form-control:focus {
            border-color: #ffb3c6 !important; /* Change the border color on focus */
            box-shadow: 0 0 0 0.2rem rgba(255, 179, 198, 0.25) !important; /* Optional: add a soft glow */
        }
        
        /* Error message */
        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

         /* Center the card horizontally and vertically */
         body {
            display: flex;
            flex-direction: column; /* Allow vertical stacking */
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
            margin: 0; /* Remove default margin */
            background-color: #f8f9fa; /* Optional background color */
            text-align: center; /* Center all text inside body */
        }

        .card {
            display: inline-block; /* Ensure card adjusts to content */
        }

        h1 {
            margin-bottom: 20px; /* Add spacing between h1 and card */
        }
    </style>
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h1 class="display-4 border-bottom border-5 custom-border2" style="color: #522e38 !important;">AUTHOR BARU</h1>
        </div id="registrationForm" method="POST" action="../functions/insert-article.php">
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Add Author Start -->
    <div class="card mb-3 mx-auto p-3 bg-light text-center" style="display: inline-block;">
        <div class="card-body">
            <h6 style="color: #522e38 !important;">TAMBAH AUTHOR BARU</h6>
        </div>
    </div>
    <div class="card mb-3 mx-auto p-3 bg-light d-flex justify-content-center align-items-center" style="max-width: 800px; min-height: 400px; border: 3px solid #d3d3d3; border-radius: 10px; overflow: hidden;">
        <div class="card-body text-center">
            <h6 class="card-subtitle mb-2 text-body-secondary" style="color: #522e38 !important;">Tambah Artikel Baru</h6>
            <form id="registrationForm" method="POST" action="../functions/add-author.php">
                <div data-mdb-input-init class="form-outline mb-4" style="margin-top:5%; color: #522e38 !important;">
                    <input type="email" id="form2Example1" name="username" class="form-control" required />
                    <label class="form-label" for="form2Example1">Username</label>
                    <div id="usernameError" class="error"></div> <!-- Error message container -->
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
                <div class="text-center" style="margin-top: 5%;">
                    <div class="col">
                        <button type="button" class="btn btn-lg btn-primary rounded-pill custom-button" onclick="handleLogout()">
                            Kembali
                        </button>                   
                        <button type="button" class="btn btn-lg btn-primary rounded-pill custom-button" data-bs-toggle="modal" data-bs-target="#confirmationModal">
                            Registrasi
                        </button>                
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Add Author End -->

    <!-- Modal Start -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="confirmationModalLabel" style="color: #522e38 !important;">Konfirmasi Tambah Artikel</h5>
        </div>
        <div class="modal-body">
            Apakah Anda yakin ingin menyimpan artikel baru?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-lg btn-primary rounded-pill custom-button" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-lg btn-primary rounded-pill custom-button" data-bs-dismiss="modal">Simpan</button>
        </div>
        </div>
    </div>
    </div>
    <!-- Modal End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Form validation function
        function validateForm() {
            // Clear previous error messages
            document.getElementById("usernameError").textContent = '';
            document.getElementById("passwordError").textContent = '';
            document.getElementById("nameError").textContent = '';

            let isValid = true;

            // Validate username
            if (document.getElementById("form2Example1").value.trim() === '') {
                document.getElementById("usernameError").textContent = 'Username tidak boleh kosong';
                isValid = false;
            }

            // Validate password
            if (document.getElementById("form2Example2").value.trim() === '') {
                document.getElementById("passwordError").textContent = 'Password tidak boleh kosong';
                isValid = false;
            }

            // Validate name
            if (document.getElementById("form2Example3").value.trim() === '') {
                document.getElementById("nameError").textContent = 'Nama Author tidak boleh kosong';
                isValid = false;
            }

            return isValid;
        }

        // Handle keydown event on the entire document
        document.addEventListener("keydown", function (event) {
            const modalElement = document.getElementById("confirmationModal");
            const isModalOpen = modalElement && modalElement.classList.contains("show");

            if (event.key === "Enter") {
                event.preventDefault(); // Prevent default Enter key action
                if (!isModalOpen) {
                    // Validate the form and show the modal if valid
                    if (validateForm()) {
                        const modal = new bootstrap.Modal(modalElement);
                        modal.show();
                    }
                } else {
                    // If modal is open and Enter is pressed, submit the form
                    document.getElementById("registrationForm").submit();
                }
            } else if (event.key === "Escape") {
                // Close the modal when Esc key is pressed
                const modal = bootstrap.Modal.getInstance(modalElement);
                if (modal) {
                    modal.hide();
                }
            }
        });
    </script>

    <script>
        function handleLogout() {
        // Redirect to logout logic or clear session storage
        window.location.href = 'login-page.php'; // Adjust the path as necessary
    }
    </script>
</body>
</html>
