<script>
    // Set idle time to 15 minutes (900 seconds)
    let idleTime = 0;
    const idleLimit = 900; // 15 minutes

    // Function to destroy session and redirect to login page
    function destroySessionAndRedirect() {
        // Call the PHP script to destroy session
        window.location.href = "../functions/logout.php"; // Redirect to logout page that will destroy session
    }

    // Reset the idle timer on user activity (e.g. mouse movement, key press)
    function resetIdleTimer() {
        idleTime = 0;
    }

    // Increment idle time every second
    function incrementIdleTime() {
        idleTime++;
        if (idleTime >= idleLimit) {
            destroySessionAndRedirect();
        }
    }

    // Event listeners to track activity
    window.onload = function () {
        // Track mouse movement and key presses
        document.onmousemove = resetIdleTimer;
        document.onkeypress = resetIdleTimer;

        // Increment idle time every second
        setInterval(incrementIdleTime, 1000);
    };
</script>


