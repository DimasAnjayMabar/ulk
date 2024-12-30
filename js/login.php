<script>
        // Trigger the login form submission when Enter is pressed
        document.getElementById("form2Example1").addEventListener("keypress", function (event) {
            if (event.key === "Enter") {
                event.preventDefault();  // Prevent form submission
                validateForm(event);      // Trigger form validation and submission
            }
        });

        document.getElementById("form2Example2").addEventListener("keypress", function (event) {
            if (event.key === "Enter") {
                event.preventDefault();  // Prevent form submission
                validateForm(event);      // Trigger form validation and submission
            }
        });
        
        function validateForm(event) {
            event.preventDefault(); // Prevent default form submission

            // Clear previous error messages
            document.getElementById("usernameError").textContent = '';
            document.getElementById("passwordError").textContent = '';

            // Get input values
            const username = document.getElementById("form2Example1").value.trim();
            const password = document.getElementById("form2Example2").value.trim();

            let isValid = true;

            // Validate username
            if (username === '') {
                document.getElementById("usernameError").textContent = 'Username diperlukan';
                isValid = false;
            }

            // Validate password
            if (password === '') {
                document.getElementById("passwordError").textContent = 'Password diperlukan';
                isValid = false;
            }

            if (isValid) {
                // Send login data to the backend
                $.ajax({
                    url: "../functions/check-author.php", // Adjust path to backend script
                    method: "POST",
                    data: {
                        username: username,
                        password: password,
                    },
                    success: function (response) {
                        if (response === "success") {
                            // Redirect to the Add Article page on successful login
                            window.location.href = "add-article.php";
                        } else {
                            // Display the backend error message directly in the form
                            if (response === "User tidak ditemukan") {
                                document.getElementById("usernameError").textContent = response;
                            } else if (response === "Password salah") {
                                document.getElementById("passwordError").textContent = response;
                            } else {
                                // Generic error message if response is not as expected
                                document.getElementById("passwordError").textContent = "Login gagal. Silahkan coba lagi.";
                            }
                        }
                    },
                    error: function () {
                        // In case of any AJAX errors
                        alert("An error occurred while processing your request.");
                    },
                });
            }
        }
    </script>