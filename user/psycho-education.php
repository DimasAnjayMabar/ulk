<?php
    require("../includes/connection.php");
    require("../functions/limit-words.php");
    require("../functions/fetch-card-identity.php");  // This file fetches the articles
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require("../includes/head.php"); ?>
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="psycho-education.php" class="navbar-brand d-flex align-items-center">
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
                        <a href="counseling-registration.php" class="nav-item nav-link">Registrasi Konseling</a>
                        <a href="psycho-education.php" class="nav-item nav-link active">Psikoedukasi</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Article Menu Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-4 border-bottom border-5 custom-border2" style="color: #522e38 !important;">ARTIKEL PSIKOEDUKASI</h1>
                <p class="m-0" style="color: #522e38 !important;">Tekan pada area artikel untuk memunculkan tombol ke detail artikel.</p>
                <p class="m-0" style="color: #522e38 !important;">Tekan tombol panah untuk membaca artikel. </p>
            </div>
            <div class="row g-5" id="card-container">
                <?php
                if ($articles) {
                    foreach ($articles as $article) {
                        $title = !empty($article['title']) ? htmlspecialchars($article['title']) : "Default Title";
                        $content = !empty($article['content']) ? htmlspecialchars($article['content']) : "No content available.";
                        $picture = !empty($article['photo_path']) ? htmlspecialchars($article['photo_path']) : "assets/images/website_photo/empty.png";
                        $articleId = $article['id'];  // Still needed for the redirect link
                        
                        // Limit content for preview
                        $contentPreview = limitWords($content, 12);
                        
                        echo '
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center" 
                                    style="background: linear-gradient(145deg, #f7e8ea, #f3d4db); box-shadow: 0px 4px 8px rgba(0,0,0,0.1); padding: 20px; transition: all 0.3s ease-in-out;">
                                    <div>
                                        <img src="' . $picture . '" alt="Service Icon" class="rounded card-image" 
                                            style="width: 150px; height: 130px; border: 3px solid #ffb3c6; box-shadow: 0px 4px 6px rgba(0,0,0,0.1);">
                                    </div>
                                    <h4 class="mb-3 card-title" 
                                        style="color: #522e38 !important; margin-top: 5%; font-size: 1.5rem; font-weight: 600;">' . $title . '</h4>
                                    <p class="m-0 card-content" 
                                        style="color: #522e38 !important; font-weight: bold; font-size: 1rem; opacity: 0.9;">' . $contentPreview . '</p>
                                    
                                    <!-- Button container -->
                                    <div class="button-container mt-3">
                                        <!-- View button -->
                                        <form action="detail-article.php" method="POST">
                                            <input type="hidden" name="id" value="' . $articleId . '">
                                            <button type="submit" class="btn btn-lg btn-primary rounded-pill" 
                                                style="background-color: #ffb3c6 !important; border-color: #ffb3c6 !important; padding: 10px 20px; font-size: 1.1rem; transition: background 0.3s ease;">
                                                <i class="bi bi-arrow-right text" style="color: #ffffff"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Article Menu End -->

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
</body>
</html>
