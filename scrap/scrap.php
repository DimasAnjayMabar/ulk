<!-- PLACE ALL SCRAP HERE SO YOU DONT HAVE TO CODE ALL OVER AGAIN -->
<!-- IF ANOTHER FILE TYPE SCRAPS THEN YOU HAVE TO CREATE NEW FILE INSIDE SCRAP FOLDER -->


<div id="article-video" class="rounded">
            <?php if ($article['video_path']) { ?>
                <video controls><source src="<?php echo $article['video_path']; ?>" type="video/mp4"></video>
            <?php } ?>
</div>