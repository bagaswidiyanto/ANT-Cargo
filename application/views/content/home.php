<div class="container-xxl px-0 hero-header">
    <div class="slider-container">
        <div class="swiper-container hero-slider pb-4">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/img/hero2.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/hero.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/hero.png" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
</div>

<div class="container-xxl tracking" id="about">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="nav-item">
                        <a href="#tab-1" class="nav-link active" data-bs-toggle="tab">
                            <div class="d-md-flex justify-content-center align-items-center">
                                <img src="assets/imagenew/icon-pengiriman.svg" alt="">
                                <p>Cek Pengiriman</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab-2" class="nav-link" data-bs-toggle="tab">
                            <div class="d-md-flex justify-content-center align-items-center">
                                <img src="assets/imagenew/icon-tarif.svg" alt="">
                                <p>Cek Tarif</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab-3" class="nav-link" data-bs-toggle="tab">
                            <div class="d-md-flex justify-content-center align-items-center">
                                <img src="assets/imagenew/icon-point.svg" alt="">
                                <p>Drop Point</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="tab-content">
                    <div class="tab-pane  fade show active" id="tab-1">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="pengiriman blk ">
                                    <div class="form-box">
                                        <div class="row p-4">
                                            <div class="col-lg-8">
                                                <div class="text-header">
                                                    <h4 class="text-white">Cek Pengiriman</h4>
                                                    <small>*Lacak status pengiriman dengan menginput airwaybill</small>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-end">
                                                <div class="form-img">
                                                    <img src="assets/imagenew/pengiriman.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-content p-4">
                                        <form role="form" id="track" action="<?= base_url(); ?>tracking" method="post" class="login-form">
                                            <div class="mb-3">
                                                <textarea name="tracking" id="tracking" cols="70" rows="4" class="form-control"></textarea>
                                            </div>
                                            <div class="d-flex">
                                                <button type="submit" class="btn bg-red btn-100">Cek Pengiriman <i class="fa fa-check" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 text-center mt-sm-5">
                                <div class="img-content">
                                    <img src="assets/imagenew/bg-pengirim.svg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-2">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="pengiriman blk">
                                    <div class="form-box">
                                        <div class="row p-4">
                                            <div class="col-lg-8">
                                                <div class="text-header">
                                                    <h4 class="text-white">Cek Tarif</h4>
                                                    <small>Masukan Kota Asal dan Kota Tujuan Pengiriman</small>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-end">
                                                <div class="form-img">
                                                    <img src="assets/imagenew/tarif.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-content p-4">
                                        <form id="cekTarif" action="<?= base_url(); ?>prices" method="post" role="form" class="login-form">
                                            <div class="mb-3">
                                                <input type="text" id="hint" name="asal" class="form-control ui-autocomplete-input" placeholder=" Kota Asal" aria-describedby="basic-addon1">
                                                <input type="hidden" id="asal" name="dari" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" id="hint2" name="ke" class="form-control ui-autocomplete-input" placeholder=" Kota Tujuan" aria-describedby="basic-addon1">
                                                <input type="hidden" id="tujuan" name="tujuan" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" id="weight" name="berat" class="form-control" placeholder=" Berat (Kg)" aria-describedby="basic-addon1" onkeypress="return hanyaAngka(event)">
                                            </div>

                                            <button type="submit" class="btn bg-red btn-100">Cek Tarif <i class="fa fa-check" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 text-center mt-sm-5">
                                <div class="img-content">
                                    <img src="assets/imagenew/bg-tarif.svg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-3">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="pengiriman blk">
                                    <div class="form-box">
                                        <div class="row p-4">
                                            <div class="col-lg-8">
                                                <div class="text-header">
                                                    <h4 class="text-white">Drop Point</h4>
                                                    <small>Cari Drop Point Disekitar Anda</small>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-end">
                                                <div class="form-img">
                                                    <img src="assets/imagenew/point.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-content p-4">
                                        <form method="POST" action="<?= base_url('getbranch'); ?>">
                                            <div class="mb-3">
                                                <select name="branch" id="branch" class="form-control select2" data-placeholder="Pilih Asal ..." style="width: 100%;">
                                                    <option value=""></option>
                                                    <?php foreach ($this->db->query("SELECT * FROM tbl_branch")->result() as $dp) { ?>
                                                        <option value="<?= $dp->id; ?>"><?= $dp->kota; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="d-flex">
                                                <button type="submit" class="btn bg-red btn-100">Cek Cabang <i class="fa fa-check" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 text-center mt-sm-5">
                                <div class="img-content">
                                    <img src="assets/imagenew/bg-tarif.svg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>

<div class="container-xxl galeri-home">
    <div class="container py-5 px-lg-5">
        <div class="header-title text-center">
            <h1 class="text-dark fw-bold">GALERI</h1>
        </div>

        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="slider-container">
                    <div class="swiper-container galeri-slider pb-5">
                        <div class="swiper-wrapper">
                            <?php foreach ($gallery as $g) { ?>
                                <div class="swiper-slide">
                                    <div class="img-galeri text-center">
                                        <img src="https://ant.digitalindo.co.id/upload/galeri/<?= $g->image; ?>" class="img-fluid" alt="">
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


<div class="container-xxl my-5 customer-home">
    <div class="container py-5 px-lg-5">
        <div class="header-title text-center">
            <h1 class="fw-bold text-white">CUSTOMER KAMI</h1>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="slider-container">
                    <div class="swiper-container customer-slider pb-5">
                        <div class="swiper-wrapper">
                            <?php foreach ($client as $c) { ?>
                                <div class="swiper-slide">
                                    <div class="img-customer">
                                        <div class="box-customer">
                                            <img src="https://newant.digitalindo.co.id/upload/client/<?= $c->image; ?>" title="<?= $c->name; ?>" class="img-fluid" alt="">
                                        </div>
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


<div class="container-xxl my-5 berita-home">
    <div class="container py-5 px-lg-5">
        <div class="header-title text-center">
            <h1 class="text-dark fw-bold">BERITA TERKINI</h1>
        </div>
        <div class="row mt-5">

            <?php
            foreach ($this->db->query("SELECT * FROM tbl_posts ORDER BY created_date DESC LIMIT 3 ")->result() as $berita) {
            ?>
                <div class="col-lg-4 col-md-4 col-sm-8 mt-4 mt-md-0">
                    <div class="entry-box shadow  rounded">
                        <div class="entry-img">
                            <img src="https://newant.digitalindo.co.id/upload/berita/<?= $berita->image ?>" class="img-fluid" alt="">
                        </div>
                        <div class="p-3">
                            <div class="entry-meta">
                                <ul class="d-flex d-md-block d-lg-flex ps-0">
                                    <li class="d-flex align-items-center"><a href="#" class="ctg">Category</a></li>
                                    <li class="d-flex align-items-center ps-3 ps-md-0 ps-lg-3"><i class="fa fa-clock-o text-dark me-1"></i> <a href="#" class="text-dark">10:18, 02 Juli 2021</a></li>
                                </ul>
                            </div>
                            <div class="entry-title">
                                <a href="">
                                    <h5 class="text-dark"><?= substr($berita->Title, 0, 99); ?></h5>
                                </a>
                            </div>
                            <div class="entry-content">
                                <?= substr($berita->content, 0, 150); ?>
                            </div>
                            <div class="d-flex align-items-center read-more mt-3">
                                <a href="<?= base_url() . 'berita/baca/' . $berita->slug; ?>">Baca Selengkapnya</a>
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="container-xxl pengunjung-home">
    <div class="container py-5 px-lg-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="box-pengunjung rounded-2 bg-white p-3">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-lg-7 px-4">
                            <h3><?= date('d'); ?></h3>
                            <p>Juli 2021</p>
                        </div>
                        <div class="col-md-5">
                            <img src="assets/imagenew/kalender.svg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="box-pengunjung rounded-2 bg-white p-3">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-lg-7 px-4">
                            <h3><?= $online->jml; ?></h3>
                            <p>Online Visitor Today</p>
                        </div>
                        <div class="col-md-5">
                            <img src="assets/imagenew/online-visitor.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="box-pengunjung rounded-2 bg-white p-3">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-lg-7 px-4">
                            <h3><?= $today->jml; ?></h3>
                            <p>Visitor Today</p>
                        </div>
                        <div class="col-md-5">
                            <img src="assets/imagenew/user.svg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="box-pengunjung rounded-2 bg-white p-3">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-lg-7 px-4">
                            <h3><?= $all->jml; ?></h3>
                            <p>Total Visitor</p>
                        </div>
                        <div class="col-md-5">
                            <img src="assets/imagenew/tot-visitor.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .ui-autocomplete {
        max-height: 200px;
        overflow-y: auto;
        background-color: #c8ba37;
        /* prevent horizontal scrollbar */
        overflow-x: hidden;
        /* add padding to account for vertical scrollbar */
        padding-right: 20px;
        z-index: 1000;
    }

    .ui-autocomplete {
        position: absolute;
        cursor: default;
    }

    .ui-autocomplete {
        display: none;
        width: 305px !important;
        background: #FFF;
    }
</style>
<script type="text/javascript">
    $(document).ready(function() {
        $(".select2").select2();
    });

    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }
</script>

<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />