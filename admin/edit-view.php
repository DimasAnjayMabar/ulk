<?php
    require("../functions/authentication.php");
    // Include the PHP logic file that handles fetching the article data
    require('../functions/load-article.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require("../includes/head.php");
        require("../functions/separate-paragraph.php")
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
                        <a href="home-page.php" class="nav-item nav-link ">Insert</a>
                        <a href="database-view.php" class="nav-item nav-link active">Database</a>                   
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Edit Start -->
    <div class="text-center mx-auto mb-5" style="max-width: 500px;">
        <h1 class="display-4 border-bottom border-5 custom-border2" style="color: #522e38 !important;">EDIT ARTIKEL</h1>
    </div>
    <div class="card bg-light p-4" style="background-color: #ffe5ec !important; width: 80%; margin: auto;">
        <form id="update" action="../functions/update-article.php" method="POST" enctype="multipart/form-data">
            <!-- Hidden field to store article ID -->
            <input type="hidden" name="id" value="<?php echo $article['id']; ?>">

            <div class="mb-3">
                <label for="title" class="form-label" style="color: #522e38 !important;">Author</label>
                    <select id="authorDropdown" name="id_author" class="form-control" required>
                        <option value="" disabled selected>Pilih Penulis</option>
                        <!-- Options will be dynamically populated -->
                    </select>         
            </div>

            <!-- Editable Title -->
            <div class="mb-3">
                <label for="title" class="form-label" style="color: #522e38 !important;">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($article['title']); ?>" required>
            </div>
            <div id="titleError" class="error"></div> <!-- Error message container -->

            <!-- Date Picker for Date -->
            <div class="mb-3">
                <label for="date" class="form-label" style="color: #522e38 !important;">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="<?php echo $article['date']; ?>" required>
            </div>

            <!-- Editable Video Link (optional) -->
            <div class="mb-3">
                <label for="video_link" class="form-label" style="color: #522e38 !important;">Video Link (Optional)</label>
                <input type="text" class="form-control" id="video_link" name="video_link" value="<?php echo htmlspecialchars($article['video_link']); ?>">
            </div>

            <!-- Editable Content -->
            <div class="mb-3">
                <label for="content" class="form-label" style="color: #522e38 !important;">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required><?php echo htmlspecialchars($article['content']); ?></textarea>
            </div>
            <div id="contentError" class="error"></div> <!-- Error message container -->

            <!-- Image Upload -->
            <div class="mb-3">
                <label for="image" class="form-label" style="color: #522e38 !important;">Upload New Image (Optional)</label>
                <input type="file" class="form-control" id="image" name="image">
                <!-- Input untuk menyimpan path gambar lama -->
                <input type="hidden" name="current_photo_path" value="<?php echo htmlspecialchars($article['photo_path']); ?>">
            </div>

            <!-- Submit Button -->
            <button type="button" class="btn btn-lg btn-primary rounded-pill custom-button" data-bs-toggle="modal" data-bs-target="#confirmationModal">
                Simpan
            </button>
        </form>
    </div>
    <!-- Edit End -->


    <!-- Modal Start -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="confirmationModalLabel" style="color: #522e38 !important;">Konfirmasi Perubahan Artikel</h5>
        </div>
        <div class="modal-body">
            Apakah Anda yakin ingin menyimpan perubahan artikel?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-lg btn-primary rounded-pill custom-button" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-lg btn-primary rounded-pill custom-button" data-bs-dismiss="modal" onclick="handleSave()">Simpan</button>
        </div>
        </div>
    </div>
    </div>
    <!-- Modal End -->

    <!-- Navigator Start -->
    <div class="container" style="margin-top: 5%;">
        <div class="row justify-content-between align-items-center mb-3">
            <div class="col-auto">
                <a class="btn btn-lg btn-primary rounded-pill custom-button" href="database-view.php">Menu Utama</a>
            </div>
        </div>
    </div>
    <!-- Navigator End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5" style="background-color: #522e38 !important;">
        <div class="container py-5">
            <div class="row g-5">
            <!-- Note -->
            <div class="col-lg-3 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4 custom-border" style="color: #ffb3c6 !important;">Catatan</h4>
                <p class="mb-4">Ini adalah tempat pengeditan artikel. Perlu diingat untuk mengisi ulang author dan reupload gambar ketika mengedit agar tidak terjadi error pada program</p>
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
        // Fetch author
        require('../js/fetch-author(edit).php');
        // Update article
        require('../js/update-article.php');
        // Save article
        require('../js/save-article(edit).php');
        //Script for inactivity logout
        require('../js/inactivity-logout.php');
    ?>
</body>
</html>
