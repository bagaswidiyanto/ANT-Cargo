<div class="container-xxl px-0 bg-primary hero-service">
    <img src="assets/imagenew/bg-service.png" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->


<div class="container-xxl price bg-grey" id="about">
    <div class="container py-5 px-lg-5">
        <div class="header-title text-center">
            <h1 class="text-dark fw-bold">CEK ONGKIR</h1>
            <p>Masukan lokasi asal dan tujuan serta berat untuk mengetahui tarif pengiriman kami</p>
        </div>
        <div class="form-content p-4">
            <form id="cekTarif" action="<?= base_url(); ?>prices" method="post" role="form" class="login-form">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
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

                        <button type="submit" class="btn bg-red btn-100">Cek Tarif <i class="fa fa-check" aria-hidden="true"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-xxl price-table bg-grey" id="about">
    <div class="container pb-5 px-lg-5">
        <div class="header-title text-center">
            <h1 class="text-dark fw-bold">CEK ONGKIR</h1>
            <h5 class="mt-3"><?= $asal->kabName; ?> ke <?= $tujuan->kabName; ?><br><?= $this->input->post('berat'); ?> Kg</h5>
        </div>
        <table class="table table-bordered mt-5">
            <thead>
                <tr align="center">
                    <th>Service</th>
                    <th>Tarif</th>
                    <th>Min KG</th>
                    <th>Estimasi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($prices as $p) {
                    $berat = $this->input->post('berat');
                    $hargaKGP = $p->KGP;
                    $hargaKGS = $p->KGS;
                    $real = $hargaKGS * $berat;
                ?>
                    <tr>
                        <td><?= $p->Layanan; ?></td>
                        <td align="right">Rp <?= number_format($real, 0); ?></td>
                        <td align="right"><?= $p->minKG; ?></td>
                        <td align="center"><?= $p->Estimasi; ?> Hari</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="remark">
            <p>Untuk informasi lebih lanjut silakan menghubungi CALL CENTER : 0361-475 3135, E-MAIL : antcargo@gmail.com</p>
            <a href="<?= base_url(); ?>">
                <- Back</a>

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
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }
</script>

<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />