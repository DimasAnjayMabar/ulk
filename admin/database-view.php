<?php
    require("../includes/connection.php");
    require("../functions/limit-words.php");
    require("../functions/fetch-card-identity.php");  // This file fetches the articles
?>

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
    </style>
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="database-view.php" class="navbar-brand d-flex align-items-center">
                    <!-- Logo Images -->
                    <img src="../assets/images/website_photo/logo-plp.jpeg" alt="Logo Part 1" style="height: 50px;" class="me-2">
                    <img src="../assets/images/website_photo/logo-wm.jpeg" alt="Logo Part 2" style="height: 50px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="add-article.php" class="nav-item nav-link ">Insert</a>
                        <a href="database-view.php" class="nav-item nav-link active">Database</a>
                        <a href="#" class="nav-item nav-link" onclick="openModal()">Log Out</a>
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
                        $picture = !empty($article['photo_path']) ? htmlspecialchars($article['photo_path']) : "../assets/images/website_photo/empty.png";
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
                                    
                                    <!-- Button container with Flexbox -->
                                    <div class="d-flex gap-3">
                                        <!-- First button -->
                                        <form action="detail-article.php" method="POST" style="display:inline;">
                                            <input type="hidden" name="id" value="' . $articleId . '">
                                            <button type="submit" class="btn btn-lg btn-primary rounded-pill custom-button" style="flex-grow: 0;">
                                                <i class="bi bi-arrow-right text" style="color: #522e38 !important;"></i>
                                            </button>
                                        </form>
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

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5" style="background-color: #522e38 !important;">
        <div class="container py-5">
            <div class="row g-5">
            <!-- Get In Touch Section -->
            <div class="col-lg-3 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4 custom-border" style="color: #ffb3c6 !important;">Catatan</h4>
                <p class="mb-4">Ini adalah isi artikel yang sudah ditambahkan dalam database.</p>
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
