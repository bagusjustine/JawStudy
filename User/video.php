<?php include ("header.php") ?>

<div class="kolom">
    <div class="row justify-content-center">
    <div class="d-flex justify-content-center">
        <div class="col-sm-10 mb-3 mb-sm-0" style="padding-left: 10px; padding-right: 10px;">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center">VIDEO PEMBELAJARAN <i class="bi bi-play-btn"></i></h2>
                    <br>
                    <?php
                        // Link video YouTube
                        $youtubeLink = "https://www.youtube.com/embed/zLp88GKMpHk?si=M6q4CCZuF4otUGtH";
                    ?>
                    <!-- Responsive iframe -->
                    <div class="ratio ratio-16x9">
                        <iframe src="<?php echo $youtubeLink; ?>" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
</div>
    </div>
</div>

<?php include ("footer.php") ?>