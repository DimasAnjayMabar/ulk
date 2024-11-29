<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        require("../includes/head.php");
    ?>
    <title>Unit Layanan Psikologi</title>
</head>

<body>
    <!-- Modal -->
    <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 style="color: #522e38 !important;">Apakah Anda yakin ingin keluar?</h2>
            <div class="modal-footer">
                <a class="btn btn-lg btn-primary rounded-pill custom-button" href="../functions/logout.php">Ya</a>
                <a class="btn btn-lg btn-primary rounded-pill custom-button" onclick="closeModal()">Kembali</a>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function openModal() {
            const modal = document.getElementById('confirmationModal');
            modal.style.display = 'block';
            modal.setAttribute('aria-hidden', 'false'); // Improve accessibility
        }

        function closeModal() {
            const modal = document.getElementById('confirmationModal');
            modal.style.display = 'none';
            modal.setAttribute('aria-hidden', 'true'); // Improve accessibility
        }

        window.onclick = function(event) {
            const modal = document.getElementById('confirmationModal');
            if (event.target === modal) {
                closeModal();
            }
        }
    </script>
</body>
</html>
