<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        require("../includes/head.php");
    ?>
    <title>Unit Layanan Psikologi</title>
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="counseling-registration.php" class="navbar-brand d-flex align-items-center">
                    <!-- Logo Images -->
                    <img src="../assets/images/website_photo/logo-plp.jpeg" alt="Logo Part 1" style="height: 50px;" class="me-2">
                    <img src="../assets/images/website_photo/logo-wm-4.png" alt="Logo Part 2" style="height: 40px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="home-page.php" class="nav-item nav-link">Menu Utama</a>
                        <!-- <a href="self-report.php" class="nav-item nav-link">Tes Mental</a> -->
                        <a href="counseling-registration.php" class="nav-item nav-link active">Registrasi Konseling</a>
                        <a href="psycho-education.php" class="nav-item nav-link">Psikoedukasi</a>
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
        <div class="card-body text-center" style="background-image: url('../assets/images/website_photo/regis-konseling.png'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; height: 100%; border-radius: 10px;">
            <h2 class="card-title text-light" style="margin-top: 11%; font-size: 50px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 1); color: #ffe5ec !important;">Registrasi Konseling Di Sini</h2>
            <br>
            <p class="card-text text-light" style="font-weight: bolder; text-shadow: 2px 2px 5px rgba(0, 0, 0, 1); color: #ffe5ec !important;">Tekan tombol ini untuk registrasi konseling</p>
            <br>
            <a class="btn btn-lg btn-primary rounded-pill custom-button" href="https://bit.ly/daftarkonselingULKUKWMS">Hubungi Kami</a>
        </div>
    </div>
    <!-- Registration End -->

    <!-- Registration Start -->
    <div class="text-center mx-auto mb-5" style="max-width: 500px; margin-top: 5%">
        <h1 class="display-4 border-bottom border-5 custom-border2" style="color: #522e38 !important;">SURVEY KONSELING</h1>
    </div>
    <div class="card mb-3 mx-auto p-3 bg-light d-flex justify-content-center align-items-center" style="max-width: 800px; min-height: 400px; border: 3px solid #d3d3d3; border-radius: 10px; overflow: hidden;">
        <div class="card-body text-center" style="background-image: url('../assets/images/website_photo/survey-konseling.png'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; height: 100%; border-radius: 10px;">
            <h2 class="card-title text-light" style="margin-top: 11%; font-size: 50px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 1); color: #ffe5ec !important;">Apa Sudah Pernah Mengikuti Konseling Sebelumnya?</h2>
            <br>
            <p class="card-text text-light" style="font-weight: bolder; text-shadow: 2px 2px 5px rgba(0, 0, 0, 1); color: #ffe5ec !important;">Tekan tombol ini untuk survey kepuasan konseling</p>
            <br>
            <a class="btn btn-lg btn-primary rounded-pill custom-button" href="https://bit.ly/evaluasi_konselor">Isi Survey</a>
        </div>
    </div>
    <!-- Registration End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5" style="background-color: #522e38 !important;">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Get In Touch Section -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4 custom-border" style="color: #ffb3c6 !important;">Hubungi</h4>
                    <p class="mb-4">Tekan nomor atau alamat di bawah ini untuk hubungi atau temui kami</p>
                    <p class="mb-0">
                        <a href="https://maps.app.goo.gl/TGrosBs6pzHLDqfw5" style="text-decoration: none; color: #ffffff !important;" onmouseover="this.style.color='#e67fa1'" 
                        onmouseout="this.style.color='#ffffff'">
                            <i class="fa fa-map-marker-alt text-primary me-3" style="color: #ffb3c6 !important;"></i>Jl. Mojopahit No.4, Keputran, Kec. Tegalsari, Surabaya, Jawa Timur 60265
                        </a>
                    </p>
                    <p class="mb-0" style="margin-top: 5%">
                        <a href="https://wa.me/+62 851-7997-9529" style="text-decoration: none; color: #ffffff !important;" onmouseover="this.style.color='#e67fa1'" 
                        onmouseout="this.style.color='#ffffff'">
                            <i class="fa fa-phone-alt text-primary me-3" style="color: #ffb3c6 !important;"></i>+62 851-7997-9529
                        </a>
                    </p>
                </div>

                <!-- Follow Us Section -->
                <div class="col-lg-3 col-md-6 text-start">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4 custom-border" style="color: #ffb3c6 !important;">Ikuti Kami</h4>
                    <p class="mb-4">Ikuti kami di sosial media</p>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary rounded-circle me-2 custom-button" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-lg btn-primary rounded-circle me-2 custom-button" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Survey Section -->
                <div class="col-lg-3 col-md-6 text-start">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4 custom-border" style="color: #ffb3c6 !important;">Survey</h4>
                    <p class="mb-4">Klik tombol di bawah ini untuk melakukan survey penggunaan website. Kepuasan pengguna sangat berarti untuk kami</p>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary rounded-circle me-2 custom-button" href="https://forms.gle/yFin2ciwsyCsEPKE7"><i class="fa-solid fa-square-poll-vertical"></i></a>
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
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top custom-button" id="backOnTop"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>