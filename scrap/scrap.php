<div id="article-video" class="rounded">
            <?php if ($article['video_path']) { ?>
                <video controls><source src="<?php echo $article['video_path']; ?>" type="video/mp4"></video>
            <?php } ?>
        </div>