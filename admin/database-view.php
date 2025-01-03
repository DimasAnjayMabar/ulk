<?php
    require("../functions/authentication.php");
    require("../includes/connection.php");
    require("../functions/limit-words.php");
    require("../functions/fetch-card-identity.php");  // This file fetches the articles
?>

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
                <a href="database-view.php" class="navbar-brand d-flex align-items-center">
                    <!-- Logo Images -->
                    <img src="../assets/images/website_photo/logo-plp.jpeg" alt="Logo Part 1" style="height: 50px;" class="me-2">
                    <img src="../assets/images/website_photo/logo-wm-4.png" alt="Logo Part 2" style="height: 40px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="add-article.php" class="nav-item nav-link ">Insert</a>
                        <a href="database-view.php" class="nav-item nav-link active">Database</a>
                        <a href="#" class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#logoutModal">Log Out</a>
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
                <p class="m-0" style="color: #522e38 !important;">Tekan pada area artikel untuk memunculkan tombol ke detail artikel.</p>
                <p class="m-0" style="color: #522e38 !important;">Tekan tombol panah untuk membaca artikel.</p>
                <p class="m-0" style="color: #522e38 !important;">Tekan tombol pensil untuk mengedit artikel.</p>
                <p class="m-0" style="color: #522e38 !important;">Tekan tombol tong sampah untuk menghapus artikel.</p>
            </div>
            <div class="row g-5" id="card-container">
                <?php
                if ($articles) {
                    foreach ($articles as $article) {
                        $title = !empty($article['title']) ? htmlspecialchars($article['title']) : "Default Title";
                        $content = !empty($article['content']) ? htmlspecialchars($article['content']) : "No content available.";
                        $picture = !empty($article['photo_path']) ? htmlspecialchars($article['photo_path']) : "../assets/images/website_photo/empty.png";
                        $articleId = $article['id'];  // Still needed for the redirect link
                        
                        // Limit content for preview
                        $contentPreview = limitWords($content, 12);
                        
                        echo '
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center" style="background: linear-gradient(145deg, #f7e8ea, #f3d4db); box-shadow: 0px 4px 8px rgba(0,0,0,0.1); padding: 20px; transition: all 0.3s ease-in-out;">
                                    <div>
                                        <img src="' . $picture . '" alt="Service Icon" class="rounded card-image" style="width: 150px; height: 130px;">
                                    </div>
                                    <h4 class="mb-3 card-title" style="color: #522e38 !important; margin-top: 5%;">' . $title . '</h4>
                                    <p class="m-0 card-content" style="color: #522e38 !important; font-weight: bold;">' . $contentPreview . '</p>
                                    
                                    <!-- Button container -->
                                    <div class="button-container">
                                        <!-- View button -->
                                        <form action="detail-article.php" method="POST">
                                            <input type="hidden" name="id" value="' . $articleId . '">
                                            <button type="submit" class="btn btn-lg btn-primary rounded-pill" style="background-color: #ffb3c6 !important; border-color: #ffb3c6 !important">
                                                <i class="bi bi-arrow-right text" style="color: #ffffff"></i>
                                            </button>
                                        </form>

                                        <!-- Edit button -->
                                        <form action="edit-view.php" method="POST">
                                            <input type="hidden" name="id" value="' . $articleId . '">
                                            <button type="submit" class="btn btn-lg btn-warning rounded-pill custom-border" style="background-color: #ffb3c6 !important; border-color: #ffb3c6 !important">
                                                <i class="bi bi-pencil text" style="color: #ffffff"></i>
                                            </button>
                                        </form>

                                        <!-- Delete button -->
                                        <button type="button" class="btn btn-lg btn-primary rounded-pill custom-button delete-button" 
                                            data-id="' . $articleId . '" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#confirmationModal">
                                            <i class="bi bi-trash text" style="color: #ffffff;"></i>
                                        </button>
                                    </div>
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

    <!-- Modal Delete Start -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="confirmationModalLabel" style="color: #522e38 !important;">Konfirmasi Penghapusan Artikel</h5>
        </div>
        <div class="modal-body">
            Apakah Anda yakin ingin menghapus artikel?
        </div>
        <div class="modal-footer">
        <div>
            <button type="button" class="btn btn-lg btn-primary rounded-pill custom-button" data-bs-dismiss="modal">Batal</button>
            <form id="delete-article-modal-form" action="../functions/delete-article.php" method="POST" style="display: inline;">
                <input type="hidden" name="id" id="modal-article-id">
                <button type="submit" class="btn btn-lg btn-danger rounded-pill custom-button">Hapus</button>
            </form>
        </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Modal Delete End -->


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
                <p class="mb-4">Ini adalah isi artikel yang sudah ditambahkan dalam database</p>
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
        // Delete article
        require('../js/delete-article.php');
        // Logout
        require('../js/logout.php');
        //Script for inactivity logout
        require('../js/inactivity-logout.php');
    ?>
</body>
</html>
