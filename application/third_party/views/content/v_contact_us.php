 <div id="content" >
        <section class="bar background-gray no-mb">
                <!-- /.container -->
            </section>
        <section class="bar background-pentagon no-mb min120">
            <div class="container" id="contact" data-animate="fadeInUp">

                <div class="row min30">
                    <div class="col-md-8">

                        <section>
                            <div class="heading">
                                <h3>Hubungi Kami</h3>
                            </div>

                            <form id="kontak">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" name="inputName" id="inputName"  required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="inputEmail" id="inputEmail" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="telepon">No Telepon</label>
                                            <input type="text" class="form-control" name="inputContact" id="inputContact" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="resi">No Resi</label>
                                            <input type="text" class="form-control" name="tipeLangganan" id="tipeLangganan">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="pesan">Pesan</label>
                                            <textarea class="form-control" name="inputMessage" id="inputMessage" required></textarea>
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

                        </section>

                    </div>

                    <div class="col-md-4">

                        <section>

                            <h3 class="text-uppercase">Kantor Pusat</h3>

                             <?php echo $website->address;?>

                            <h3 class="text-uppercase">Telepon</h3>

                            <p class="text-muted">Jika masih ada pertanyaan bisa langsung kontak ke nomer kami berikut ini:</p>
                            <?php echo $website->phone;?>



                            <h3 class="text-uppercase">Email</h3>

                            <p class="text-muted">Jika masih ada pertanyaan juga dapat langsung melalui email kami:</p>
                            <?php echo $website->email;?>
                            </ul>

                        </section>

                    </div>

                </div>
                <!-- /.row -->


            </div>
            <!-- /#contact.container -->
        </div>
        </div>
        <!-- /#content -->




<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>



$( document ).ready(function() {

	base_url = '<?php echo base_url();?>';

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

	    url: base_url+"sendmail",

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