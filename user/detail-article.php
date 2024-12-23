<?php
    // Include the PHP logic file that handles fetching the article data
    require('../functions/load-article.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    require("../includes/head.php"); 
    require("../functions/separate-paragraph.php");
    ?>
</head>
<body>
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="detail-article.php" class="navbar-brand d-flex align-items-center">
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

    <!-- Article Start -->
    <div class="text-center mx-auto mb-5" style="max-width: 500px;">
        <h1 class="display-4 border-bottom border-5 custom-border2 text-uppercase" style="color: #522e38 !important;"><?php echo $article['title']; ?></h1>
        <p class="m-0" style="color: #522e38 !important;"><?php echo $article['date']; ?> / <?php echo $article['nama_author']; ?></p>
    </div>
    <!-- Navigator Start -->
    <div class="container" style="margin-top: 5%;">
        <div class="row justify-content-between align-items-center mb-3">
            <div class="col-auto">
                <a class="btn btn-lg btn-primary rounded-pill custom-button" href="psycho-education.php">Menu Utama</a>
            </div>
            <div class="col-auto">
                <?php if (isset($prevId)) { ?>
                    <form action="detail-article.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $prevId; ?>">
                        <button type="submit" class="btn btn-lg btn-primary rounded-pill custom-button">
                            <i class="bi bi-arrow-left text" style="color: #522e38 !important;"></i>
                        </button>
                    </form>
                <?php } ?>
                <?php if (isset($nextId)) { ?>
                    <form action="detail-article.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $nextId; ?>">
                        <button type="submit" class="btn btn-lg btn-primary rounded-pill custom-button">
                            <i class="bi bi-arrow-right text" style="color: #522e38 !important;"></i>
                        </button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Navigator End -->
    <div class="card bg-light p-4" style="background-color: #ffe5ec !important; width: 80%; margin: auto;">
        <?php if (!empty($article['video_link'])): ?>
            <!-- If video link exists, display iframe -->
            <iframe width="560" height="315" src="<?php echo $article['video_link']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="article-video" style="border-radius: 15px;"></iframe>
            <p style="color: #522e38 !important; margin-top: 2%;">Memiliki masalah dengan video?. Klik <a href="<?php echo $article['video_link']; ?>">di sini</a></p>
        <?php else: ?>
            <!-- If no video link, display image -->
            <img src="<?php echo $article['photo_path']; ?>" class="rounded" alt="Article Image" id="article-image">
        <?php endif; ?>
        <div class="article-content">
            <?php 
            // Assuming $article['content'] contains the article text
            echo '<p class="paragraph-separator">' . splitParagraphs($article['content']) . '</p>';
            ?>
        </div>
    </div>
    <!-- Article End -->


    <!-- Navigator Start -->
    <div class="container" style="margin-top: 5%;">
        <div class="row justify-content-between align-items-center mb-3">
            <div class="col-auto">
                <a class="btn btn-lg btn-primary rounded-pill custom-button" href="psycho-education.php">Menu Utama</a>
            </div>
            <div class="col-auto">
                <?php if (isset($prevId)) { ?>
                    <form action="detail-article.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $prevId; ?>">
                        <button type="submit" class="btn btn-lg btn-primary rounded-pill custom-button">
                            <i class="bi bi-arrow-left text" style="color: #522e38 !important;"></i>
                        </button>
                    </form>
                <?php } ?>
                <?php if (isset($nextId)) { ?>
                    <form action="detail-article.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $nextId; ?>">
                        <button type="submit" class="btn btn-lg btn-primary rounded-pill custom-button">
                            <i class="bi bi-arrow-right text" style="color: #522e38 !important;"></i>
                        </button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Navigator End -->

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
