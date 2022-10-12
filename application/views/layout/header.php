<div class="container-xxl position-relative p-0" id="home">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <!-- <h1 class="m-0">FitApp</h1> -->
            <img src="<?= base_url(); ?>assets/imagenew/logo-header.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <?php foreach ($this->db->query("SELECT * FROM tbl_navigation WHERE parent = 0 AND status = 1")->result() as $key) { ?>

                    <a href="<?= ($key->title != 'Beranda') ? base_url() . strtolower($key->slug) : base_url() ?>" onclick="window.location.href='<?= base_url() . $key->slug; ?>/';" class="nav-item nav-link <?php
                                                                                                                                                                                                                if ($key->slug != "") {
                                                                                                                                                                                                                    if ($this->uri->segment(1) == $key->slug) {
                                                                                                                                                                                                                        echo "active";
                                                                                                                                                                                                                    }
                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                    if ($this->uri->segment(1) == "") {
                                                                                                                                                                                                                        echo "active";
                                                                                                                                                                                                                    }
                                                                                                                                                                                                                }
                                                                                                                                                                                                                ?>"><?= $key->title ?></a>
                <?php } ?>
                <!-- <a href="<?= base_url(); ?>profile" class="nav-item nav-link">Profile</a>
                <a href="<?= base_url(); ?>service" class="nav-item nav-link">Service</a>
                <a href="<?= base_url(); ?>cabang" class="nav-item nav-link">Cabang</a>
                <a href="<?= base_url(); ?>client" class="nav-item nav-link">Customer</a>
                <a href="<?= base_url(); ?>transporter" class="nav-item nav-link">Transporter</a>
                <a href="<?= base_url(); ?>gallery" class="nav-item nav-link">Gallery</a>
                <a href="<?= base_url(); ?>kontak" class="nav-item nav-link">Kontak</a> -->
                <a href="<?= base_url(); ?>" class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#myModal">Login</a>
            </div>
        </div>
    </nav>