<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        require("../includes/head.php");
        include('logout-modal.php');
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
         /* Modal Styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
            max-width: 600px;
            border-radius: 8px;
        }

        .close {
            color: #aaa;
            font-size: 28px;
            font-weight: bold;
            position: absolute;
            right: 10px;
            top: 10px;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
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
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="add-article.php" class="navbar-brand d-flex align-items-center">
                    <!-- Logo Images -->
                    <img src="../assets/images/website_photo/logo-plp.jpeg" alt="Logo Part 1" style="height: 50px;" class="me-2">
                    <img src="../assets/images/website_photo/logo-wm.jpeg" alt="Logo Part 2" style="height: 50px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="home-page.php" class="nav-item nav-link active">Insert</a>
                        <a href="database-view.php" class="nav-item nav-link">Database</a>
                        <a href="#" class="nav-item nav-link" onclick="openModal()">Log Out</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Add Article Start -->
    <div class="text-center mx-auto mb-5" style="max-width: 500px;">
        <h1 class="display-4 border-bottom border-5 custom-border2" style="color: #522e38 !important;">ARTIKEL BARU</h1>
    </div id="registrationForm" method="POST" action="../functions/insert-article.php">
    <div class="card mb-3 mx-auto p-3 bg-light d-flex justify-content-center align-items-center" style="max-width: 800px; min-height: 400px; border: 3px solid #d3d3d3; border-radius: 10px; overflow: hidden;">
        <div class="card-body text-center">
            <h6 class="card-subtitle mb-2 text-body-secondary" style="color: #522e38 !important;">Tambah Artikel Baru</h6>
            <form id="registrationForm" method="POST" action="../functions/insert-article.php">
                <div class="form-outline mb-4" style="margin-top:5%; color: #522e38 !important;">
                    <select id="authorDropdown" name="id_author" class="form-control" required>
                        <option value="" disabled selected>Pilih Penulis</option>
                        <!-- Options will be dynamically populated -->
                    </select>
                    <label class="form-label" for="authorDropdown">Penulis</label>
                </div>
                <div data-mdb-input-init class="form-outline mb-4" style="margin-top:5%; color: #522e38 !important;">
                    <input type="title" id="form2Example1_title" name="title" class="form-control" required />
                    <label class="form-label" for="form2Example1_title">Judul</label>
                    <div id="titleError" class="error"></div> <!-- Error message container -->
                </div>
                <div data-mdb-input-init class="form-outline mb-4" style="margin-top:5%; color: #522e38 !important;">
                    <input type="content" id="form2Example1_content" name="content" class="form-control" required />
                    <label class="form-label" for="form2Example1_content">Konten</label>
                    <div id="contentError" class="error"></div> <!-- Error message container -->
                </div>
                <div data-mdb-input-init class="form-outline mb-4" style="margin-top:5%; color: #522e38 !important;">
                    <input type="photo" id="form2Example1_photo" name="photo_path" class="form-control" required />
                    <label class="form-label" for="form2Example1_photo">Directory Foto</label>
                    <div id="directoryError" class="error"></div> <!-- Error message container -->
                </div>
                <div data-mdb-input-init class="form-outline mb-4" style="margin-top:5%; color: #522e38 !important;">
                    <input type="video" id="form2Example1_video" name="video_link" class="form-control" required />
                    <label class="form-label" for="form2Example1_video">Link Video</label>
                    <div id="linkError" class="error"></div> <!-- Error message container -->
                </div>
                <a type="button" class="btn btn-lg btn-primary rounded-pill custom-button" onclick="showModal()">Tambah</a>
            </form>
        </div>
    </div>
    <!-- Add Article End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5" style="background-color: #522e38 !important;">
        <div class="container py-5">
            <div class="row g-5">
            <!-- Get In Touch Section -->
            <div class="col-lg-3 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4 custom-border" style="color: #ffb3c6 !important;">Catatan</h4>
                <p class="mb-4">Semua kolom tidak perlu diisi semua. Setiap submit akan langsung tercatat dalam database</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script for Fetching Author -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Fetch authors on page load
            fetchAuthors();
        });

        function fetchAuthors() {
            // The endpoint that returns authors in JSON format
            const url = '../functions/fetch-author.php'; // Replace with the actual path to your PHP script

            fetch(url)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.error) {
                        console.error(data.error);
                        return;
                    }
                    populateAuthorsDropdown(data);
                })
                .catch(error => {
                    console.error('Error fetching authors:', error);
                });
        }

        function populateAuthorsDropdown(authors) {
            const dropdown = document.getElementById("authorDropdown");
            // Clear existing options except the placeholder
            dropdown.innerHTML = '<option value="" disabled selected>Pilih Penulis</option>';

            // Populate dropdown with author options
            authors.forEach(author => {
                const option = document.createElement("option");
                option.value = author.id_author; // Use `id_author` as the option value
                option.textContent = author.nama_author; // Display `nama_author` in the dropdown
                dropdown.appendChild(option);
            });
        }
    </script>

    <!-- Script for Inserting Added Article -->
    <script>
        // Trigger the login form submission when Enter is pressed
        document.getElementById("form2Example1_title").addEventListener("keypress", function (event) {
            if (event.key === "Enter") {
                event.preventDefault();  // Prevent form submission
                validateForm(event);      // Trigger form validation and submission
            }
        });

        document.getElementById("form2Example1_content").addEventListener("keypress", function (event) {
            if (event.key === "Enter") {
                event.preventDefault();  // Prevent form submission
                validateForm(event);      // Trigger form validation and submission
            }
        });

        document.getElementById("form2Example1_photo").addEventListener("keypress", function (event) {
            if (event.key === "Enter") {
                event.preventDefault();  // Prevent form submission
                validateForm(event);      // Trigger form validation and submission
            }
        });

        document.getElementById("form2Example1_video").addEventListener("keypress", function (event) {
            if (event.key === "Enter") {
                event.preventDefault();  // Prevent form submission
                validateForm(event);      // Trigger form validation and submission
            }
        });

        // Show the modal
        function showModal() {
            // Create the modal structure as innerHTML
            const modalHTML = `
                <div id="confirmationModal" class="modal" style="display: flex;">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal()">&times;</span>
                        <h2>Apakah Anda yakin ingin menyimpan?</h2>
                        <div class="modal-footer">
                            <button class="btn btn-lg btn-primary rounded-pill custom-button" onclick="closeModal()">Kembali</button>
                            <button class="btn btn-lg btn-primary rounded-pill custom-button" onclick="saveData()">Simpan</button>
                        </div>
                    </div>
                </div>
            `;

            // Append the modal to the body
            document.body.insertAdjacentHTML('beforeend', modalHTML);

            // Add event listener for keydown to handle Enter and Escape keys
            document.addEventListener("keydown", handleKeydownInModal);
        }

        // Close the modal and remove it from the DOM
        function closeModal() {
            const modal = document.getElementById("confirmationModal");
            if (modal) {
                modal.remove();
            }

            // Remove the keydown event listener when the modal is closed
            document.removeEventListener("keydown", handleKeydownInModal);
        }

        // Save action
        function saveData() {
            closeModal(); // Close the modal after saving
            // Submit the form
            document.getElementById("registrationForm").submit();
        }

        // Handle keydown events for Enter and Escape keys
        function handleKeydownInModal(event) {
            if (event.key === "Enter") {
                // Prevent default action to avoid conflicts
                event.preventDefault();
                saveData();
            } else if (event.key === "Escape") {
                event.preventDefault();
                closeModal();
            }
        }

        // Form validation function
        function validateForm(event) {
            event.preventDefault(); // Prevent form submission

            // Clear previous error messages
            document.getElementById("titleError").textContent = '';
            document.getElementById("contentError").textContent = '';
        
            // Check if all fields are filled
            let isValid = true;

            // Validate title
            if (document.getElementById("form2Example1_title").value === '') {
                document.getElementById("titleError").textContent = 'Judul tidak boleh kosong';
                isValid = false;
            }

            // Validate content
            if (document.getElementById("form2Example1_content").value === '') {
                document.getElementById("contentError").textContent = 'Konten tidak boleh kosong';
                isValid = false;
            }

            // If all fields are valid, show the modal
            if (isValid) {
                showModal();
            }
        }
    </script>
</body>
</html>