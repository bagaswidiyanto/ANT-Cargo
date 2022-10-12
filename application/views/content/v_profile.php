<div class="container-xxl px-0 bg-primary hero-service">
    <img src="assets/imagenew/profile.png" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->


<div class="container-xxl service bg-grey" id="about">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-lg-end">
            <div class="col-xl-3 col-lg-5 col-md-5 col-sm-5 col-4">
                <h4 class="text-dark mt-3">Profil</h4>
                <ul class="nav nav-tabs" id="myTab">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_profile")->result() as $p) { ?>
                        <li class="nav-item mt-3">
                            <a href="#tab-<?= $p->id ?>" class="nav-link <?php
                                                                            if ($p->id != "") {
                                                                                if ($p->id == 1) {
                                                                                    echo "active";
                                                                                }
                                                                            } else {
                                                                                if ($p->id == "") {
                                                                                    echo "active";
                                                                                }
                                                                            }
                                                                            ?>" data-bs-toggle="tab"><?= $p->posisi; ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-xl-9 col-lg-7 col-md-7 col-sm-7 col-8">
                <div class="tab-content">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_profile")->result() as $p) { ?>

                        <div class="tab-pane fade <?php
                                                    if ($p->id != "") {
                                                        if ($p->id == 1) {
                                                            echo "show active";
                                                        }
                                                    } else {
                                                        if ($p->id == "") {
                                                            echo "show active";
                                                        }
                                                    }
                                                    ?>" id="tab-<?= $p->id ?>">
                            <div class="meta-content">
                                <h2 class="text-dark text-center"><?= $p->posisi; ?></h2>

                                <div class="img-service my-4">
                                    <img src="https://newant.digitalindo.co.id/upload/profile/<?= $p->image; ?>" class="img-fluid" alt="">
                                </div>
                                <?= $p->content; ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>