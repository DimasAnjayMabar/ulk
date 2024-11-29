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
        <h1 class="display-4 border-bottom border-5 custom-border2" style="color: #522e38 !important;">ARTIKEL</h1>
    </div>
    <div class="card mb-3 mx-auto p-3 bg-light d-flex justify-content-center align-items-center" style="max-width: 800px; min-height: 400px; border: 3px solid #d3d3d3; border-radius: 10px; overflow: hidden;">
        <div class="card-body text-center">
            <h6 class="card-subtitle mb-2 text-body-secondary" style="color: #522e38 !important;">Tambah Artikel Baru</h6>
            <form>
                <div data-mdb-input-init class="form-outline mb-4" style="margin-top:5%; color: #522e38 !important;">
                    <input type="email" id="form2Example1" name="username" class="form-control" required />
                    <label class="form-label" for="form2Example1">Judul</label>
                    <div id="emailError" class="error"></div> <!-- Error message container -->
                </div>
                <div data-mdb-input-init class="form-outline mb-4" style="margin-top:5%; color: #522e38 !important;">
                    <input type="email" id="form2Example1" name="username" class="form-control" required />
                    <label class="form-label" for="form2Example1">Konten</label>
                    <div id="emailError" class="error"></div> <!-- Error message container -->
                </div>
                <div data-mdb-input-init class="form-outline mb-4" style="margin-top:5%; color: #522e38 !important;">
                    <input type="email" id="form2Example1" name="username" class="form-control" required />
                    <label class="form-label" for="form2Example1">Directory Foto</label>
                    <div id="emailError" class="error"></div> <!-- Error message container -->
                </div>
                <div data-mdb-input-init class="form-outline mb-4" style="margin-top:5%; color: #522e38 !important;">
                    <input type="email" id="form2Example1" name="username" class="form-control" required />
                    <label class="form-label" for="form2Example1">Link Video</label>
                    <div id="emailError" class="error"></div> <!-- Error message container -->
                </div>
                <a class="btn btn-lg btn-primary rounded-pill custom-button" href="login-page.php">Tambah</a>
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
</body>
</html>