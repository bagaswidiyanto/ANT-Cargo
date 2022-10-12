
<section  class="home-section bg-gray" style="margin-top: 3%">
	<div class="container marginbot-0">
		<div class="row">
			


				<div class="container" id="kontak" style="padding-bottom:5%">
							<div class="box text-center">
									<h2 ><?=$testimonial->judul;?></h2>
									<p><?=$testimonial->nama;?> | <?=$testimonial->wilayah;?></p>
								</div>
    							<?=$testimonial->testimoni;?><br/><br/><a href="<?=base_url();?>testimonial">Lihat Lainnya</a>
								
				</div>	
				
		</div>
		</div>

</section>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>



$( document ).ready(function() {

	base_url = '<?php echo base_url();?>';

    $("#contact").submit(function() {

    $("#contact .btn").attr("disabled", true);

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

	        $("#contact .btn").attr("disabled", false);

	        setInterval(function(){ window.location=base_url+'thank_you'; }, 3000);

	    },

	    error: function(){

	    	$('.error').fadeIn(1000);

	    	$("#contact .btn").attr("disabled", false);

	    }

	});

	 return false;

;    });

});

</script>