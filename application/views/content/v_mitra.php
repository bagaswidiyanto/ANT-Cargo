 <div id="heading-breadcrumbs" class="no-mb">
            <div class="container"  data-animate="fadeInUp">
          <section>
            <div class="container">

                

                       
                            <ul class="nav nav-pills ">
                                <li class="active"><a href="<?=base_url();?>mitra" >Partnership Form</a>
                                </li>
                                <li class=""><a href="<?=base_url();?>pages/index/keagenan" >Keagenan</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-content-inverse">
                                <div class="tab-pane active" id="tab2-1">
                                  <div class="col-md-12 col-sm-12" >
                                  <div class="heading" align="center">
                                  <h1>PARTNERSHIP FORM</h1>
                                  </div>
                                    <div class="col-md-6">
                                    Saatnya gunakan delivery yang cepat & Terpercaya
                                    <ol>
                                    <li>Isi data diri / online shop secara lengkap.</li>
                                    <li>Dapatkan Email / Sms dari kami.</li>
                                    <li>Anda telah menjadi partner dan nikmati layanan cepat dari kami.</li>
                                    </ol>
                                    </div>
                                    <div class="col-md-6">
                                    <form id="kontak">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" placeholder="Nama*" name="inputName" id="inputName"  required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" placeholder="Email*" name="inputEmail" id="inputEmail" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="telepon">No Telepon</label>
                                            <input type="text" class="form-control" placeholder="No Tlp*" name="inputContact" id="inputContact" required>
                                        </div>
                                    </div>
                                   
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="pesan">Alamat</label>
                                            <textarea  class="form-control" placeholder="Alamat*" name="inputAddress" id="inputAddress" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 text-center">
                                        <button type="submit"  class="btn btn-template-primary">Kirim Pesan</button>
                                        <div class="success" style="display:none; color:blue;">Email Sent...!</div>

                                          <div class="error" style="display:none; color:red;">Error...!</div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>
                                    </div>
                                  </div>
                                </div>
                               
                        
                </div>

            </div>
            <!-- /.container -->

        </section>

            </div>

<script>

$( document ).ready(function() {

  base_url = '<?php echo base_url();?>';

    $("form#kontak").submit(function() {

    $(".btn").attr("disabled", true);

  var data = {

   
    name: $("#inputName").val(),

    email: $("#inputEmail").val(),

    contact: $("#inputContact").val(),
    address: $("#inputAddress").val(),
   

    
  };

    
  $.ajax({

      type: "POST",

      url: base_url+"sendmail/partnership",

      data: data,

      success: function(){

          $('.success').fadeIn(1000);

          
          setInterval(function(){ window.location=base_url+'thank_you'; }, 3000);

      },

      error: function(){

        $('.error').fadeIn(1000);

        $(".btn").attr("disabled", false);

      }

  });

   return false;

    });

});

</script>