<script>
        function handleSave() {
            const videoLinkInput = document.getElementById("form2Example1_video");
            const videoLink = videoLinkInput.value;
            videoLinkInput.value = generateEmbedLink(videoLink);
            document.getElementById("registrationForm").submit();
        }
    </script>