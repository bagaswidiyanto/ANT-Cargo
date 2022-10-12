
<section id="tentangkami" class="home-section bg-gray" style="margin-top: 3%">
		<div class="container marginbot-0">
			<div class="wow fadeInDown" data-wow-delay="0.1s"><br>
				<div class="box text-center">
					<h2 class="h-bold">TAMBAH TESTIMONI</h2>	
                <p>Silakan isi testimonial anda</p>
				</div>
				<div class="divider-short"></div>
				<div class="col-lg-6 box">
					<form role="form" id="testimonials" method="post" class="lead">


					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label>Judul</label>
								<input type="text" name="nama" id="judul" class="form-control input-md" required >
							</div>
						</div>
                     </div>
                    <div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama" id="nama" class="form-control input-md" required >
							</div>
						</div>
                     </div>
                     <div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label>Wilayah</label>
								<input type="text" name="wilayah" id="wilayah" class="form-control input-md" required >
							</div>
						</div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12">
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" id="email" class="form-control input-md" required >
							</div>
						</div>
					</div>
					<div class="row">
                        <div class="col-xs-12">
							<div class="form-group">
								<label>Rating</label>
								<select name="rating" id="rating" class="form-control input-md" required >
								<option value="5">5</option>
								<option value="4">4</option>
								<option value="3">3</option>
								<option value="2">2</option>
								<option value="1">1</option>
								</select>
							</div>
						</div>
					</div>
                     <div class="row">
                        <div class="col-xs-12">
							<div class="form-group">
								<label>Testimonial</label>
                                <textarea name="pesan" id ="testimonial" cols="" rows="" class="form-control"></textarea>
							</div>
						</div>
					</div>
                     <div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6  col-md-6">
							<div class="form-group">
								<input type="submit" value="Submit" class="btn btn-skin"><br><br>
							</div>
						</div>
					</div>
					</form>
					</div>
			</div>
			</div>
	</section>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>



$( document ).ready(function() {

	base_url = '<?php echo base_url();?>';

    $("#testimonials").submit(function() {

    $("#testimonials .btn").attr("disabled", true);

	var data = {

    nama: $("#nama").val(),

    email: $("#email").val(),

    wilayah: $("#wilayah").val(),

    judul: $("#judul").val(),

    rating: $("#rating").val(),

    testimonial: $("#testimonial").val()

	};

	$.ajax({

	    type: "POST",

	    url: base_url+"testimonial/kirim",

	    data: data,

	    success: function(){

	        // $('.success').fadeIn(1000);

	        alert('Terima Kasih, Testimoni anda akan di moderasi lebih dulu');

	        $("#testimonials .btn").attr("disabled", false);

	        setInterval(function(){ window.location=base_url+'testimonial'; }, 1000);

	    },

	    error: function(){

	    	// $('.error').fadeIn(1000);

	    	alert('error send testimoni');

	    	$("#testimonials .btn").attr("disabled", false);

	    }

	});

	 return false;

;    });

});

</script>