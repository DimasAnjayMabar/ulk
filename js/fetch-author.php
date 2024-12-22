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
            // Clear existing options except the placeholder
            dropdown.innerHTML = '<option value="" disabled selected>Pilih Penulis</option>';

            // Populate dropdown with author options
            authors.forEach(author => {
                const option = document.createElement("option");
                option.value = author.id_author; // Use `id_author` as the option value
                option.textContent = author.nama_author; // Display `nama_author` in the dropdown
                dropdown.appendChild(option);
            });
        }
    </script>