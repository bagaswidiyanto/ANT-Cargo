<div class="container-xxl px-0 bg-primary hero-service">
    <img src="assets/imagenew/bg-service.png" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->


<div class="container-xxl service bg-grey" id="about">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="single-entry">
                    <div class="entry-title text-center">
                        <h2><?= $blog->Title; ?></h2>
                    </div>
                    <div class="entry-image text-center mt-5">
                        <img src="https://newant.digitalindo.co.id/upload/berita/<?= $blog->image; ?>" class="img-fluid" alt="">
                    </div>
                    <div class="entry-meta d-flex align-items-center mt-4">
                        <i class="fa fa-clock-o me-1"></i>
                        <small><?= date('H:i, d F Y', strtotime($blog->created_date)); ?></small>
                    </div>
                    <div class="entry-content mt-4">
                        <?= $blog->content; ?>
                    </div>
                </div>
                <a href="<?= base_url(); ?>berita">
                    <- Back</a>
            </div>
        </div>
    </div>
</div>