<script>
        document.addEventListener("DOMContentLoaded", function () {
            // Fetch authors on page load
            fetchAuthors();
        });

        function fetchAuthors() {
            // The endpoint that returns authors in JSON format
            const url = '../functions/fetch-author.php'; // Replace with the actual path to your PHP script

            fetch(url)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.error) {
                        console.error(data.error);
                        return;
                    }
                    populateAuthorsDropdown(data);
                })
                .catch(error => {
                    console.error('Error fetching authors:', error);
                });
        }

        function populateAuthorsDropdown(authors) {
            const dropdown = document.getElementById("authorDropdown");
            const selectedAuthorId = "<?php echo $article['id_author']; ?>"; // Ambil ID author dari PHP

            // Clear existing options except the placeholder
            dropdown.innerHTML = '<option value="" disabled>Pilih Penulis</option>';

            // Populate dropdown with author options
            authors.forEach(author => {
                const option = document.createElement("option");
                option.value = author.id_author; // Gunakan `id_author` sebagai nilai
                option.textContent = author.nama_author; // Tampilkan `nama_author`

                // Tandai author yang sesuai dengan data artikel
                if (author.id_author === selectedAuthorId) {
                    option.selected = true;
                }

                dropdown.appendChild(option);
            });
        }
    </script>