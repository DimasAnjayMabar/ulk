<script>
        // Form validation function
        function validateForm() {
            // Clear previous error messages
            document.getElementById("titleError").textContent = '';
            document.getElementById("contentError").textContent = '';

            let isValid = true;

            // Validate title
            if (document.getElementById("title").value.trim() === '') {
                document.getElementById("titleError").textContent = 'Judul tidak boleh kosong';
                isValid = false;
            }

            // Validate content
            if (document.getElementById("content").value.trim() === '') {
                document.getElementById("contentError").textContent = 'Konten tidak boleh kosong';
                isValid = false;
            }

            return isValid;
        }

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
                    document.getElementById("update").submit();
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