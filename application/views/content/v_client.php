<div class="container-xxl px-0 bg-primary hero-service">
  <img src="assets/imagenew/bg-service.png" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->


<div class="container-xxl my-5 customer">
  <div class="container py-5 px-lg-5">
    <div class="header-title text-center">
      <h1 class="fw-bold">CUSTOMER KAMI</h1>
    </div>
    <div class="row mt-5">
      <div class="col-lg-12">
        <div class="slider-container">
          <div class="swiper-container customer-slider pb-5">
            <div class="swiper-wrapper">
              <?php foreach ($this->db->query("SELECT * FROM tbl_client")->result() as $c) { ?>

                <div class="swiper-slide">
                  <div class="img-customer text-center">
                    <img src="https://newant.digitalindo.co.id/upload/client/<?= $c->image; ?>" title="<?= $c->name; ?>" class="img-fluid" alt="">
                  </div>
                </div>
              <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>