<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
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
                        <a href="home-page.php" class="nav-item nav-link active">Menu Utama</a>
                        <!-- <a href="self-report.php" class="nav-item nav-link">Tes Mental</a> -->
                        <a href="counseling-registration.php" class="nav-item nav-link">Registrasi Konseling</a>
                        <a href="psycho-education.php" class="nav-item nav-link">Psikoedukasi</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 1); color: #ffe5ec !important;">ANDA TIDAK SENDIRI KAMI ADA BERSAMA ANDA</h1>
                    <div class="pt-2" >
                        <a href="counseling-registration.php" class="btn btn-primary rounded-pill py-md-3 px-md-5 mx-2" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5); background-color: #ffb3c6 !important;">Registrasi Konseling</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="../assets/images/website_photo/about us.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5 custom-border" style="color: #ffb3c6 !important;">Tentang Kami</h5>
                        <h1 class="display-4 text-dark" style="color: #522e38 !important;">Unit Layanan Konseling (ULK) UKWMS</h1>
                    </div>
                    <div class="card bg-light p-4" style="background-color: #ffe5ec !important;">
                        <p style="color: #522e38 !important; font-weight: bold;">Membentuk komunitas akademik yang reflektif, kreatif, dan berdampak positif bagi peningkatan kehidupan sesama, serta dilandasi oleh nilai-nilai Pancasila dan prinsip-prinsip Katolik merupakan visi yang dimiliki Universitas Katolik Widya Mandala Surabaya (UKWMS). Untuk mewujudkan hal tersebut, UKWMS berpegang pada nilai keutamaan yang menghidupi penyelenggaraan universitas yaitu Peduli, Komit, Antusias (PeKA). Salah satu perwujudan nyata atas nilai ini, UKWMS membentuk Unit Layanan Konseling (ULK). 
                        </p>
                    </div>
                    <div class="row g-3 pt-3">
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-user-md text-primary mb-3" style="color: #ffb3c6 !important;"></i>
                                <h6 class="mb-0 text-secondary" style="color: #522e38 !important;">Konselor<small class="d-block text-primary" style="color: #ffb3c6 !important;">Terkualifikasi</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-check text-primary mb-3" style="color: #ffb3c6 !important;"></i>
                                <h6 class="mb-0 text-secondary" style="color: #522e38 !important;">Pelayanan<small class="d-block text-primary" style="color: #ffb3c6 !important;">Terbaik</small></h6>
                            </div>
                        </div>
                        <!-- <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-microscope text-primary mb-3" style="color: #ffb3c6 !important;"></i>
                                <h6 class="mb-0 text-secondary" style="color: #522e38 !important;">Tes<small class="d-block text-primary" style="color: #ffb3c6 !important;">Akurat</small></h6>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Vision and Mission Start -->
    <!-- <div class="text-center mx-auto mb-5" style="max-width: 500px;">
        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5 custom-border" style="color: #ffb3c6 !important;">Tentang Kami</h5>
        <h1 class="display-4 text-dark" style="color: #522e38 !important;">Visi dan Misi</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card bg-light p-4" style="background-color: #ffe5ec !important;">
                    <h4 class="text-primary text-uppercase mb-3" style="color: #522e38 !important;">Visi</h4>
                    <p style="color: #522e38 !important; font-weight: bold;">Meningkatkan kesadaran masyarakat tentang kesehatan mental dan menyediakan forum bagi mereka yang membutuhkan bantuan mental.</p>
                    <h4 class="text-primary text-uppercase mb-3 mt-4" style="color: #522e38 !important;">Misi</h4>
                    <ul style="color: #522e38; font-weight: bold; list-style-type: disc; padding-left: 20px;">
                        <li>Meningkatkan kesadaran masyarakat akan pentingnya kesehatan mental dan mencegah bunuh diri.</li>
                        <li>Menyediakan ruang yang aman bagi orang-orang untuk berbagi pemikiran tentang kesehatan mental mereka.</li>
                        <li>Berkolaborasi dengan komunitas lokal untuk menjangkau lebih banyak orang dalam hal kesehatan mental.</li>
                    </ul>
                </div>
            </div>
        </div> -->
        <!-- <div class="row justify-content-center mt-4">
            <div class="col-lg-7 mt-4">
                <div class="ratio ratio-16x9" >
                    <iframe src="https://www.youtube.com/embed/vpWpEKXoS80" 
                            title="YouTube video player" 
                            allowfullscreen style="border-radius: 15px;">
                    </iframe>
                </div>
                <p style="color: #522e38 !important; margin-top: 2%; text-align: center;">Got problem with the video? Visit this <a href="https://www.youtube.com/embed/vpWpEKXoS80">link</a>
                </p>
            </div>
        </div> -->
    <!-- </div> -->
    <!-- Vision and Mission End -->

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5 custom-border" style="color: #ffb3c6 !important;">Pelayanan</h5>
                <h1 class="display-4 text-dark" style="color: #522e38 !important;">Pelayanan Konseling Terbaik</h1>
            </div>
            <div class="row g-5">
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-stethoscope text-white"></i>
                        </div>
                        <h4 class="mb-3" style="color: #522e38 !important;">Pemeriksaan Kesehatan Mental</h4>
                        <p class="m-0">Kenali kondisi mental Anda saat ini dengan para ahli kami yang tersedia</p>
                        <div class="button-container">
                                <button class="btn btn-lg btn-primary rounded-pill" style="background-color: #ffb3c6 !important; border-color: #ffb3c6 !important" id="1" onclick="handleDirect1()">
                                    <i class="bi bi-arrow-right text" style="color: #ffffff"></i>
                                </button>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="background: linear-gradient(145deg, #f7e8ea, #f3d4db); box-shadow: 0px 4px 8px rgba(0,0,0,0.1); padding: 20px; transition: all 0.3s ease-in-out;">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-user-md text-white"></i>
                        </div>
                        <h4 class="mb-3" style="color: #522e38 !important;">Registrasi Konseling</h4>
                        <p class="m-0">Anda tidak pernah sendirian <br> Selalu ada cara untuk membantu Anda</p>
                        <div class="button-container">
                                <button class="btn btn-lg btn-primary rounded-pill" style="background-color: #ffb3c6 !important; border-color: #ffb3c6 !important" id="2" onclick="handleDirect2()">
                                    <i class="bi bi-arrow-right text" style="color: #ffffff"></i>
                                </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="background: linear-gradient(145deg, #f7e8ea, #f3d4db); box-shadow: 0px 4px 8px rgba(0,0,0,0.1); padding: 20px; transition: all 0.3s ease-in-out;">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-people-group" style="color: white;"></i>
                        </div>
                        <h4 class="mb-3" style="color: #522e38 !important;">Psikoedukasi</h4>
                        <p class="m-0">Baca artikel untuk menambah wawasan anda tentang kesehatan mental</p>
                        <div class="button-container">
                                <button class="btn btn-lg btn-primary rounded-pill" style="background-color: #ffb3c6 !important; border-color: #ffb3c6 !important" id="3" onclick="handleDirect3()">
                                    <i class="bi bi-arrow-right text" style="color: #ffffff"></i>
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

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
    <?php
        require('../includes/foot.php');
    ?>
    
    <script>
        function handleDirect1() {
        window.location.href = 'self-report.php';
    }
    </script>

    <script>
        function handleDirect2() {
        window.location.href = 'counseling-registration.php';

    }
    </script>

    <script>
        function handleDirect3() {
        window.location.href = 'psycho-education.php';
    }
    </script>
</body>
</html>