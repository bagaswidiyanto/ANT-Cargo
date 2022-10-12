<div class="container-xxl px-0 bg-primary hero-service">
  <img src="assets/imagenew/bg-service.png" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->


<div class="container-xxl service bg-grey" id="about">
  <div class="container py-5 px-lg-5">
    <div class="row justify-content-lg-end">
      <div class="col-xl-3 col-lg-5 col-md-5 col-sm-5 col-4">
        <h4 class="text-dark mt-3">Service</h4>
        <ul class="nav nav-tabs" id="myTab">
          <?php foreach ($this->db->query("SELECT * FROM tbl_service")->result() as $s) { ?>
            <li class="nav-item mt-3">
              <a href="#tab-<?= $s->id; ?>" class="nav-link <?php
                                                            if ($s->id != "") {
                                                              if ($s->id == 2) {
                                                                echo "active";
                                                              }
                                                            } else {
                                                              if ($s->id == "") {
                                                                echo "active";
                                                              }
                                                            }
                                                            ?>" data-bs-toggle="tab"><?= $s->nama; ?></a>
            </li>
          <?php } ?>

        </ul>
      </div>
      <div class="col-xl-9 col-lg-7 col-md-7 col-sm-7 col-8">
        <div class="tab-content">
          <?php foreach ($this->db->query("SELECT * FROM tbl_service")->result() as $s) { ?>

            <div class="tab-pane fade <?php
                                      if ($s->id != "") {
                                        if ($s->id == 2) {
                                          echo "show active";
                                        }
                                      } else {
                                        if ($s->id == "") {
                                          echo "show active";
                                        }
                                      }
                                      ?>" id="tab-<?= $s->id; ?>">
              <div class="meta-content">
                <h2 class="text-dark text-center"><?= $s->nama; ?></h2>

                <div class="img-service my-4">
                  <img src="https://newant.digitalindo.co.id/upload/service/<?= $s->foto; ?>" class="img-fluid" alt="">
                </div>
                <?= $s->deskripsi; ?>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>