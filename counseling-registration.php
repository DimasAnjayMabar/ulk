<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        require("includes/head.php");
    ?>
    <title>Unit Layanan Psikologi</title>
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="home-page.html" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary" style="color: #ffb3c6 !important;"><i class="fa fa-clinic-medical me-2" sty></i>ULK</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="home-page.php" class="nav-item nav-link">Menu Utama</a>
                        <a href="self-report.php" class="nav-item nav-link">Tes Mental</a>
                        <a href="counseling-registration.php" class="nav-item nav-link active">Registrasi Konseling</a>
                        <a href="psycho-education.php" class="nav-item nav-link">Psiko Edukasi</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Registration Start -->
    <div class="text-center mx-auto mb-5" style="max-width: 500px;">
        <h1 class="display-4 border-bottom border-5 custom-border2" style="color: #522e38 !important;">REGISTRASI KONSELING</h1>
    </div>
    <div class="card mb-3 mx-auto p-3 bg-light d-flex justify-content-center align-items-center" style="max-width: 800px; min-height: 400px; border: 3px solid #d3d3d3; border-radius: 10px; overflow: hidden;">
        <div class="card-body text-center" style="background-image: url('assets/images/website_photo/group-community.png'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; height: 100%; border-radius: 10px;">
            <h2 class="card-title text-light" style="margin-top: 11%; font-size: 50px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 1); color: #ffe5ec !important;">Registrasi Konseling Di Sini</h2>
            <br>
            <p class="card-text text-light" style="font-weight: bolder; text-shadow: 2px 2px 5px rgba(0, 0, 0, 1); color: #ffe5ec !important;">Tekan tombol ini untuk registrasi konseling</p>
            <br>
            <a class="btn btn-lg btn-primary rounded-pill custom-button" id="popupAd" href="#">Hubungi Kami</a>
        </div>
    </div>
    <!-- Refistration End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5" style="background-color: #522e38 !important;">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Get In Touch Section -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4 custom-border" style="color: #ffb3c6 !important;">Hubungi</h4>
                    <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor</p>
                </div>
    
                <!-- Contact Details Section -->
                <div class="col-lg-3 col-md-6" style="margin-top: 7.6%;">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3" style="color: #ffb3c6 !important;"></i>Surabaya, Jawa Timur, Indonesia</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3" style="color: #ffb3c6 !important;"></i>c14230127@john.petra.ac.id</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3" style="color: #ffb3c6 !important;"></i>0895340299650</p>
                </div>
    
                <!-- Follow Us Section -->
                <div class="col-lg-3 col-md-6 ms-auto text-start">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4 custom-border" style="color: #ffb3c6 !important;">Ikuti Kami</h4>
                    <div class="d-flex flex-column align-items-start">
                        <div class="d-flex">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2 custom-button" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2 custom-button" href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top custom-button" id="backOnTop"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>