<script>
        // Fungsi untuk mengubah link video menjadi format embed
        function generateEmbedLink(url) {
            if (url.includes("youtube.com") || url.includes("youtu.be")) {
                let videoId = '';
                
                // Untuk URL pendek YouTube (youtu.be)
                if (url.includes("youtu.be")) {
                    videoId = url.split('/').pop().split('?')[0];  // Ambil videoId dari URL pendek
                } else {
                    // Untuk URL biasa YouTube (youtube.com/watch?v=videoId)
                    const urlParams = new URLSearchParams(new URL(url).search);
                    videoId = urlParams.get('v');
                }
                
                // Return embed URL untuk YouTube
                return `https://www.youtube.com/embed/${videoId}`;
            } else if (url.includes("instagram.com")) {
                // Ubah link Instagram menjadi format embed
                return url.replace("/p/", "/embed/");
            }
            return url; // Jika bukan YouTube atau Instagram, biarkan link seperti semula
        }

        // Tangani input video dan ubah link menjadi embed format secara langsung
        document.getElementById("form2Example1_video").addEventListener("input", function() {
            let videoLink = this.value.trim();
            
            // Ubah link video jika valid
            if (videoLink) {
                const embedLink = generateEmbedLink(videoLink);
                // Perbarui value input dengan embed link
                this.value = embedLink;
            }
        });
    </script>