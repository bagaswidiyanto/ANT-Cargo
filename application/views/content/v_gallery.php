<div class="container-xxl px-0 bg-primary hero-service">
  <img src="assets/imagenew/galeri.png" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->


<div class="container-xxl my-5 gallery">
  <div class="container py-5 px-lg-5">
    <div class="header-title text-center">
      <h1 class="text-dark fw-bold">Documentasi Kegiatan</h1>
    </div>
    <div class="row gallery-container mt-5">
      <?php foreach ($gallery as $g) { ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 gallery-item filter-app">
          <div class="gallery-wrap">
            <a href="https://newant.digitalindo.co.id/upload/galeri/<?= $g->image; ?>" data-gallery="portfolioGallery" class="gallery-lightbox" title="<?= $g->name; ?>">
              <img src="https://newant.digitalindo.co.id/upload/galeri/<?= $g->image; ?>" class="img-fluid" alt="">
            </a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>