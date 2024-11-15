<?php
    require("includes/connection.php");
    require("functions/limit-words.php");
    require("functions/fetch-card-identity.php");  // This file fetches the articles
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require("includes/head.php"); ?>
    <title>Unit Layanan Psikologi</title>
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="home-page.html" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary" style="color: #ffb3c6 !important;"><i class="fa fa-clinic-medical me-2"></i>ULK</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="home-page.php" class="nav-item nav-link">Menu Utama</a>
                        <a href="self-report.php" class="nav-item nav-link">Tes Mental</a>
                        <a href="counseling-registration.php" class="nav-item nav-link">Registrasi Konseling</a>
                        <a href="psycho-education.php" class="nav-item nav-link active">Psiko Edukasi</a>
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
                <h1 class="display-4 border-bottom border-5 custom-border2" style="color: #522e38 !important;">ARTIKEL PSIKO EDUKASI</h1>
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
                            <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                                <div>
                                    <img src="' . $picture . '" alt="Service Icon" class="rounded card-image" style="width: 150px; height: 130px;">
                                </div>
                                <h4 class="mb-3 card-title" style="color: #522e38 !important; margin-top: 5%;">' . $title . '</h4>
                                <p class="m-0 card-content" style="color: #522e38 !important; font-weight: bold;">' . $contentPreview . '</p>
                                <form action="detail-article.php" method="POST" style="display:inline;">
                                    <input type="hidden" name="id" value="' . $articleId . '">
                                    <button type="submit" class="btn btn-lg btn-primary rounded-pill custom-button">
                                        <i class="bi bi-arrow-right text" style="color: #522e38 !important;"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        ';
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
                    <p class="mb-4">Hubungi atau temui kami di sini</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3" style="color: #ffb3c6 !important;"></i>Surabaya, Jawa Timur, Indonesia</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3" style="color: #ffb3c6 !important;"></i>c14230127@john.petra.ac.id</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3" style="color: #ffb3c6 !important;"></i>0895340299650</p>
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
                    <p class="mb-4">Klik tombol di bawah ini untuk melakukan survey. Kepuasan pengguna sangat berarti untuk kami</p>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary rounded-circle me-2 custom-button" href=""><i class="fa-solid fa-square-poll-vertical"></i></a>
                    </div>
                </div>

                <!-- Bug Report Section -->
                <div class="col-lg-3 col-md-6 text-start">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4 custom-border" style="color: #ffb3c6 !important;">Lapor Bug</h4>
                    <p class="mb-4">Klik tombol di bawah ini untuk melaporkan bug dalam website</p>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary rounded-circle me-2 custom-button" href=""><i class="fa-solid fa-bug"></i></a>
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
