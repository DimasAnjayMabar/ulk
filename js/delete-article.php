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