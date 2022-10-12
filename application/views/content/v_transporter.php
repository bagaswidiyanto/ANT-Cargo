<div class="container-xxl px-0 bg-primary hero-service">
  <img src="assets/imagenew/transporter.png" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->


<div class="container-xxl transportasi">
  <div class="container py-5 px-lg-5">
    <div class="row mt-5 text-center">
      <?php foreach ($this->db->query("SELECT * FROM tbl_transporter")->result() as $t) { ?>
        <div class="col-lg-6 mt-4">
          <div class="box-transport">
            <div class="img-transport">
              <img src="https://newant.digitalindo.co.id/upload/transporter/<?= $t->image; ?>" class="img-fluid" alt="">
            </div>
            <div class="text-center">
              <h5><?= $t->title; ?></h5>
              <p><?= $t->berat; ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>