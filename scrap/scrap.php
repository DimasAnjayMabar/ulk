<!-- PLACE ALL SCRAP HERE SO YOU DONT HAVE TO CODE ALL OVER AGAIN -->
<!-- IF ANOTHER FILE TYPE SCRAPS THEN YOU HAVE TO CREATE NEW FILE INSIDE SCRAP FOLDER -->


<div id="article-video" class="rounded">
            <?php if ($article['video_path']) { ?>
                <video controls><source src="<?php echo $article['video_path']; ?>" type="video/mp4"></video>
            <?php } ?>
</div>
assets/images/article_photo/layanan-konseling-gratis.jpg

<div class="container">
        <form id="loginForm">
            <div class="text-center">
                <h1 style="color: #522e38 !important;">Selamat Datang di Halaman Admin Artikel Psiko Edukasi</h1>
            </div>

            <div data-mdb-input-init class="form-outline mb-4" style="margin-top:5%; color: #522e38 !important;">
                <input type="email" id="form2Example1" class="form-control" />
                <label class="form-label" for="form2Example1">Username</label>
                <div id="usernameError" class="error"></div> <!-- Error message for username -->
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4" style="color: #522e38 !important;">
                <input type="password" id="form2Example2" class="form-control"/>
                <label class="form-label" for="form2Example2">Password</label>
                <div id="passwordError" class="error"></div> <!-- Error message for password -->
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="text-center">
                <div class="col">
                    <a href="#!" style="color: #ffb3c6 !important;" class="hover-effect">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            <div class="text-center" style="margin: 5%">
                <a class="btn btn-lg btn-primary rounded-pill custom-button" id="popupAd" href="home-page.php" onclick="validateForm(event)">Login</a>
            </div>

            <!-- Register buttons -->
            <div class="text-center">
                <p style="color: #522e38 !important;">Bukan Author Terdaftar? <a href="register-author.php" style="color: #ffb3c6 !important;" class="hover-effect">Daftar</a></p>
            </div>
        </form>
    </div>