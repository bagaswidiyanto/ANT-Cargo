<div class="container-fluid footer">
    <div class="container px-lg-5">
        <div class="row position-relative justify-content-between">
            <div class="col-lg-5 mt-4">
                <?php
                $number = $website->phone;
                $n1 = substr($number, 0, 4);
                $n2 = substr($number, 4, 4);
                $n3 = substr($number, 8, 4);
                $wa = $n1 . '-' . $n2 . '-' . $n3;
                ?>
                <div class="address">
                    <h3>Alamat</h3>
                    <?= $website->address; ?>
                </div>
                <div class="row">
                    <div class="col">
                        <h3>Telepon</h3>
                        <p><?= $wa; ?></p>
                    </div>
                    <div class="col">
                        <h3>Fax</h3>
                        <p><?= $website->fax; ?></p>
                    </div>
                    <div class="col">
                        <h3>Email</h3>
                        <p><?= $website->email; ?></p>
                    </div>
                </div>
                <div class="cp">
                    <h3>Mengenai ANT Cargo</h3>
                    <p>Company Profile</p>
                </div>
                <div class="layanan">
                    <h3>Layanan</h3>
                    <p>Cek Pengiriman, Cek Tarif, Cek Cabang</p>
                </div>

            </div>
            <div class="col-lg-5 mt-4">
                <div class="get">
                    <h3 class="mb-3">Get in on:</h3>
                    <img src="imagenew/google-play.png" class="img-fluid" alt="">
                </div>
                <div class="row justify-content-center align-items-center mt-4">
                    <div class="col">
                        <div class="social-media">
                            <h3>Social Media :</h3>
                            <div class="d-flex">
                                <?php foreach ($sosmed as $s) { ?>
                                    <a href="<?= $s->link; ?>"><i class="fa <?= $s->icon; ?>" title="<?= $s->name; ?>"></i></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <img src="imagenew/logo-footer.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up text-white"></i></a>
</div>



<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-dark">Modal Heading</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="login" role="form" action="" class="login-form">
                    <div class="mt-3">
                        <label class="text-dark">username</label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Enter email" required>
                    </div>
                    <div class="mt-3">
                        <label class="text-dark">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-danger form-control">Login</button>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
<script>
    $(document).ready(function() {
        base_url = '<?= base_url(); ?>';
        $("#hint").autocomplete({
            source: base_url + "autocomplete/search/" + $("#hint").val(),
            select: function(event, ui) {
                event.preventDefault();
                $("#hint").val(ui.item.label); // display the selected text
                $("#asal").val(ui.item.value); // save selected id to hidden input
            },
            focus: function(event, ui) {
                event.preventDefault();
                $("#hint").val(ui.item.label);
            },

            minLength: 3
        });

        $("#hint2").autocomplete({
            source: base_url + "autocomplete/search/" + $("#hint").val(),
            select: function(event, ui) {
                event.preventDefault();
                $("#hint2").val(ui.item.label); // display the selected text
                $("#tujuan").val(ui.item.value); // save selected id to hidden input
            },
            focus: function(event, ui) {
                event.preventDefault();
                $("#hint2").val(ui.item.label);
            },

            minLength: 3
        });

    });



    $(document).ready(function() {


        $("form#login").submit(function() {
            $(".btn").attr("disabled", true);
            var data = {
                username: $("#username").val(),
                password: $("#password").val(),
                method: 'crosssite'
            };

            $.ajax({
                type: "POST",
                url: "https://newant.digitalindo.co.id/inc/login.php",
                data: data,
                success: function(data) {

                    if (data.indexOf(
                            "Maaf ada yang sedang menggunakan akun ini atau tunggu 10 menit"
                        ) > -1) {
                        alert(
                            'Maaf ada yang sedang menggunakan akun ini atau tunggu 10 menit'
                        );
                    } else if (data.indexOf("Username atau Password Salah") > -1) {
                        alert('Username atau Password Salahhh');
                    } else {

                        //redirect jika berhasil login

                        setInterval(function() {
                            window.location =
                                'https://newant.digitalindo.co.id/inc/login.php?t=' +
                                data;
                        }, 1000);
                    }
                    $(".btn").attr("disabled", false);


                },

                error: function() {

                    alert('Username atau Password Salah');
                    $(".btn").attr("disabled", false);

                }

            });

            return false;

        });

    });
</script>

<!-- JavaScript Libraries -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
<!-- Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/wow/wow.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/easing/easing.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/counterup/counterup.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/glightbox/js/glightbox.min.js"></script>

<!-- Template Javascript -->
<script src="<?= base_url(); ?>assets/js/swiper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/main.js"></script>