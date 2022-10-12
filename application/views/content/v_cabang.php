<div class="container-xxl px-0 bg-primary hero-service">
  <img src="assets/imagenew/cabang.png" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->

<div class="container-xxl cabang bg-grey" id="about">
  <div class="container py-5 px-lg-5">
    <h3 class="text-dark">Pilih Lokasi Cabang</h3>
    <div class="row justify-content-lg-end">
      <div class="col-xl-4 col-lg-5 col-md-5 col-sm-5 col-4">
        <div class="tab p-3">
          <div class="search position-relative">
            <input type="text" id="mySearch" onkeyup="myFunction()" class="form-control" placeholder="Cari Berdasarkan Kota...">
            <button class="p-0 position-absolute top-0 end-0 m-2 w-auto bg-transparent border-0"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
          <div class="content mt-3" id="content">
            <?php foreach ($this->db->query("SELECT * FROM tbl_branch")->result() as $b) { ?>

              <button class="tablink bg-transparent py-3 border-0" onclick="openCity(event, '<?= $b->id; ?>')">
                <h4><?= $b->kota; ?></h4>
                <div class="address mt-2">
                  <p><?= $b->alamat1; ?></p>
                  <p>Email. <?= $b->email; ?></p>
                  <p><?= $b->telepon; ?></p>
                </div>
              </button>
            <?php } ?>
            <!-- <button class="tablink bg-transparent py-3 border-0" onclick="openCity(event, '2')">
              <h4>Paris</h4>
              <div class="address mt-2">
                <p>Jl. Pura Martasari 2 NO. 4D, Denpasar, Bali</p>
                <p>Email. antcargo@gmail.com</p>
                <p>0361-475 3135</p>
              </div>
            </button>

            <button class="tablink bg-transparent py-3 border-0" onclick="openCity(event, '3')">
              <h4>Tokyo</h4>
              <div class="address mt-2">
                <p>Jl. Pura Martasari 2 NO. 4D, Denpasar, Bali</p>
                <p>Email. antcargo@gmail.com</p>
                <p>0361-475 3135</p>
              </div>
            </button> -->

          </div>
        </div>
      </div>
      <div class="col-xl-8 col-lg-7 col-md-7 col-sm-7 col-8">
        <div class="tab-content h-100">
          <?php foreach ($this->db->query("SELECT * FROM tbl_branch")->result() as $b) { ?>

            <div id="<?= $b->id; ?>" class="tabcontent h-100">
              <?= $b->map; ?>
            </div>
          <?php } ?>
          <!-- <div id="2" class="tabcontent h-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15858.84089901951!2d106.85323844999999!3d-6.4312586000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ea51076644cd%3A0xa6679772f403093d!2sPT%20BEST%20MEGA%20INDUSTRI!5e0!3m2!1sid!2sid!4v1663656837231!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div id="3" class="tabcontent h-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35599.840171650765!2d106.88280215736364!3d-6.460513143933175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69bff00606740d%3A0xeaa813ed492f4f30!2sPT%20Prasadha%20Pamunah%20Limbah%20Industri%20-%20PPLI!5e0!3m2!1sid!2sid!4v1663656876577!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function openCity(evt, cityName) {
    var i, tabcontent, tabcontentclass, tablink;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
      tabcontent[i].className = tabcontent[i].className.replace(" active", "");
    }
    tablink = document.getElementsByClassName("tablink");
    for (i = 0; i < tablink.length; i++) {
      tablink[i].className = tablink[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    document.getElementById(cityName).className += " active";
    evt.currentTarget.className += " active";
  }


  function myFunction() {
    var input, filter, button, h4, i;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    content = document.getElementById("content");
    button = content.getElementsByTagName("button");
    for (i = 0; i < button.length; i++) {
      h4 = button[i].getElementsByTagName("h4")[0];
      if (h4.innerHTML.toUpperCase().indexOf(filter) > -1) {
        button[i].style.display = "";
      } else {
        button[i].style.display = "none";
      }
    }
  }
</script>