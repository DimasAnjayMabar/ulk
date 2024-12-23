<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();
        require('../functions/authentication.php');
        require("../includes/head.php");
    ?>
</head>
<body>
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="home-page.php" class="navbar-brand d-flex align-items-center">
                    <!-- Logo Images -->
                    <img src="../assets/images/website_photo/logo-plp.jpeg" alt="Logo Part 1" style="height: 50px;" class="me-2">
                    <img src="../assets/images/website_photo/logo-wm-4.png" alt="Logo Part 2" style="height: 40px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="add-article.php" class="nav-item nav-link active">Insert</a>
                        <a href="database-view.php" class="nav-item nav-link">Database</a>
                        <a href="#" class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#logoutModal">Log Out</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Add Article Start -->
    <div class="text-center mx-auto mb-5" style="max-width: 500px;">
        <h1 class="display-4 border-bottom border-5 custom-border2 text-uppercase" style="color: #522e38 !important;">HALO <?php echo isset($_SESSION['nama_author']) ? htmlspecialchars($_SESSION['nama_author']) : 'Guest'; ?></h1>
    </div id="registrationForm" method="POST" action="../functions/insert-article.php">
    <div class="card mb-3 mx-auto p-3 bg-light d-flex justify-content-center align-items-center" style="max-width: 800px; min-height: 400px; border: 3px solid #d3d3d3; border-radius: 10px; overflow: hidden;">
        <div class="card-body text-center">
            <h6 class="card-subtitle mb-2 text-body-secondary" style="color: #522e38 !important;">Tambah Artikel Baru</h6>
            <form id="registrationForm" method="POST" action="../functions/insert-article.php" enctype="multipart/form-data">
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
                <div class="form-outline mb-4" style="margin-top:5%; color: #522e38 !important;">
                    <input type="file" id="form2Example1_photo" name="photo" class="form-control" accept="image/*" required />
                    <label class="form-label" for="form2Example1_photo">Upload Foto</label>
                    <div id="photoError" class="error"></div> <!-- Error message container -->
                </div>
                <div data-mdb-input-init class="form-outline mb-4" style="margin-top:5%; color: #522e38 !important;">
                    <input type="video" id="form2Example1_video" name="video_link" class="form-control" required />
                    <label class="form-label" for="form2Example1_video">Link Video</label>
                    <div id="linkError" class="error"></div> <!-- Error message container -->
                </div>
                <button type="button" class="btn btn-lg btn-primary rounded-pill custom-button" data-bs-toggle="modal" data-bs-target="#confirmationModal">
                    Tambah
                </button>
            </form>
        </div>
    </div>
    <!-- Add Article End -->

    <!-- Modal Tambah Start -->
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
            <button type="button" class="btn btn-lg btn-primary rounded-pill custom-button" data-bs-dismiss="modal" onclick="handleSave()">Simpan</button>
        </div>
        </div>
    </div>
    </div>
    <!-- Modal Tambah End -->

    <!-- Modal Logout Start -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel" style="color: #522e38 !important;">Konfirmasi Keluar</h5>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin keluar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-primary rounded-pill custom-button" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-lg btn-primary rounded-pill custom-button" onclick="handleLogout()">Keluar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Logout End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5" style="background-color: #522e38 !important;">
        <div class="container py-5">
            <div class="row g-5">
            <!-- Note -->
            <div class="col-lg-3 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4 custom-border" style="color: #ffb3c6 !important;">Catatan</h4>
                <p class="mb-4">Semua kolom tidak perlu diisi semua. Setiap submit akan langsung tercatat dalam database</p>
            </div>
            <!-- Survey Section -->
            <div class="col-lg-3 col-md-6 text-start">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4 custom-border" style="color: #ffb3c6 !important;">Survey</h4>
                <p class="mb-4">Klik tombol di bawah ini untuk melakukan survey penggunaan website. Kepuasan pengguna sangat berarti untuk kami</p>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary rounded-circle me-2 custom-button" href="https://forms.gle/Boj72yZu5sYsFgQC9"><i class="fa-solid fa-square-poll-vertical"></i></a>
                </div>
            </div>
            <!-- Bug Report Section -->
            <div class="col-lg-3 col-md-6 text-start">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4 custom-border" style="color: #ffb3c6 !important;">Lapor Bug</h4>
                <p class="mb-4">Klik tombol di bawah ini untuk melaporkan bug dalam website</p>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary rounded-circle me-2 custom-button" href="https://forms.gle/YgTufCGB3ULa9GT78"><i class="fa-solid fa-bug"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top custom-button" id="backOnTop"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <?php
        require('../includes/foot.php');
        //Script for Fetching Author
        require('../js/fetch-author.php');
        //Script for Inserting Added Article
        require('../js/insert-article.php');
        //Script for convert link to embed
        require('../js/convert-link.php');
        //Script for logout
        require('../js/logout.php');
        //Script for handle save
        require('../js/save-article.php');
    ?>
</body>
</html>