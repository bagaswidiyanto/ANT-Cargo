<div class="container-xxl px-0 bg-primary hero-service">
    <img src="assets/imagenew/kontak.png" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->


<div class="container-xxl my-5 bg-grey kontak">
    <div class="container py-5 px-lg-5">
        <div class="header-title text-center">
            <h1 class="text-dark fw-bold">Kontak Kami</h1>
        </div>
        <?php
        $number = $website->phone;
        $n1 = substr($number, 0, 4);
        $n2 = substr($number, 4, 4);
        $n3 = substr($number, 8, 4);
        $wa = $n1 . '-' . $n2 . '-' . $n3;
        ?>
        <div class="row mt-5">
            <div class="col-lg-6">
                <?= $maps->frame; ?>
            </div>
            <div class="col-lg-6 ps-5">
                <div class="address mb-0">
                    <h4 class="my-0">Alamat</h4>
                    <?= $website->address; ?>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Telepon</h4>
                        <p><?= $wa; ?></p>
                    </div>
                    <div class="col">
                        <h4>Fax</h4>
                        <p><?= $website->fax; ?></p>
                    </div>
                    <div class="col">
                        <h4>Email</h4>
                        <p><?= $website->email; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-kontak mt-5">
            <form id="kontak">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mt-3">
                            <h5 class="d-flex align-items-center text-dark mb-0">
                                <img src="https://splcargo.co.id/img/icon/user.png" class="img-fluid me-2" alt="">
                                Nama
                            </h5>
                            <input type="text" class="form-control" name="inputName" id="inputName" required>
                        </div>
                        <div class="mt-3">
                            <h5 class="d-flex align-items-center text-dark mb-0">
                                <img src="https://splcargo.co.id/img/icon/email.png" class="img-fluid me-2" alt="">
                                Email
                            </h5>
                            <input type="text" class="form-control" name="inputEmail" id="inputEmail" required>
                        </div>
                        <div class="mt-3">
                            <h5 class="d-flex align-items-center text-dark mb-0">
                                <img src="https://splcargo.co.id/img/icon/contact.png" class="img-fluid me-2" alt="">
                                Telepon
                            </h5>
                            <input type="text" class="form-control" name="inputContact" id="inputContact" required>
                        </div>
                    </div>
                    <div class="col-lg-7 ps-5">
                        <div class="mt-3">
                            <h5 class="d-flex align-items-center text-dark mb-0">
                                <img src="https://splcargo.co.id/img/icon/message.png" class="img-fluid me-2" alt="">
                                Pesan
                            </h5>
                            <textarea name="inputMessage" id="inputMessage" class="form-control" rows="3" maxlength="5000"></textarea>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn bg-dark text-warning">Kirim Pesan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>


<script>
    $(document).ready(function() {
        base_url = '<?php echo base_url(); ?>';
        $("#kontak").submit(function() {
            $(".btn").attr("disabled", true);

            var data = {
                name: $("#inputName").val(),
                email: $("#inputEmail").val(),
                contact: $("#inputContact").val(),
                address: $("#inputAddress").val(),
                subject: $("#tipeLangganan").val(),
                message: $("#inputMessage").val()
            };

            $.ajax({
                type: "POST",
                url: base_url + "sendmail",
                data: data,
                success: function() {
                    $('.success').fadeIn(1000);
                    setInterval(function() {
                        window.location = base_url + 'thank_you';
                    }, 3000);
                },
                error: function() {
                    $('.error').fadeIn(1000);
                    $(".btn").attr("disabled", false);
                }
            });
            return false;
        });
    });
</script>