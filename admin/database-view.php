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
    ?>
    <title>Unit Layanan Psikologi</title>
    <style>
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

    <!-- Modal Start -->
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
                    <button type="button" class="btn btn-lg btn-primary rounded-pill custom-button" data-bs-dismiss="modal">Batal</button>
                    <form id="delete-article-modal-form" action="../functions/delete-article.php" method="POST">
                        <input type="hidden" name="id" id="modal-article-id">
                        <button type="submit" class="btn btn-lg btn-danger rounded-pill custom-button">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

    <!-- Modal Start -->
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
    <!-- Modal End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5" style="background-color: #522e38 !important;">
        <div class="container py-5">
            <div class="row g-5">
            <!-- Get In Touch Section -->
            <div class="col-lg-3 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4 custom-border" style="color: #ffb3c6 !important;">Catatan</h4>
                <p class="mb-4">Ini adalah isi artikel yang sudah ditambahkan dalam database</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top custom-button" id="backOnTop"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Script for Deleting Article -->
    <script>
        // Handle keydown event on the entire document
        document.addEventListener("keydown", function (event) {
            if (event.key === "Enter") {
                event.preventDefault(); // Prevent default Enter key action
                
                // Check if the modal is currently shown
                const modalElement = document.getElementById("confirmationModal");
                const isModalOpen = modalElement.classList.contains("show");

                if (!isModalOpen) {
                    // Validate the form and show the modal if valid
                    if (validateForm()) {
                        const modal = new bootstrap.Modal(modalElement);
                        modal.show();
                    }
                } else {
                    // If modal is open and Enter is pressed, submit the form
                    document.getElementById("delete-article-modal-form").submit();
                }
            } else if (event.key === "Escape") {
                // Close the modal when Esc key is pressed
                const modalElement = document.getElementById("confirmationModal");
                const modal = bootstrap.Modal.getInstance(modalElement);
                if (modal) {
                    modal.hide();
                }
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.delete-button');
            
            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const articleId = this.getAttribute('data-id'); // Get article ID
                    const modalInput = document.getElementById('modal-article-id'); // Find hidden input
                    modalInput.value = articleId; // Set the value of the hidden input
                });
            });
        });
    </script>

    <script>
        function handleLogout() {
        // Redirect to logout logic or clear session storage
        window.location.href = '../functions/logout.php'; // Adjust the path as necessary
    }
    </script>
</body>
</html>
