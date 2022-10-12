<footer>
				<div class="color-part2"></div>
				<div class="color-part"></div>
				<div class="container-fluid">
					<div class="row block-content">
						<div class="col-xs-8 col-sm-4 wow zoomIn" data-wow-delay="0.3s">
							<a href="<?php echo base_url();?>" class="logo-footer"></a>
							<?php echo substr($website->description,0,500);?>
							
							<div class="footer-icons">
								<?php foreach($sosmed as $s){?>
								<a href="<?php echo $s->link;?>"><i class="fa <?php echo $s->icon;?> fa-2x"></i></a>
								<?php
							}
							?>
							</div>
							<a href="<?php echo base_url();?>contact_us" class="btn btn-lg btn-danger">GET A FREE QUOTE</a>
						</div>
						<div class="col-xs-4 col-sm-2 wow zoomIn" data-wow-delay="0.3s">
							<h4>WE OFFERS</h4>
							<nav>
								<a href="#">Sea Freight</a>
								<a href="#">Road Transportation</a>
								<a href="#">Air Freight</a>
								<a href="#">Railway Logistics</a>
								<a href="#">Packaging & Storage</a>
								<a href="#">Warehousing</a>
							</nav>
						</div>
						<div class="col-xs-6 col-sm-2 wow zoomIn" data-wow-delay="0.3s">
							<h4>MAIN LINKS</h4>
							<nav>
							<?php foreach ($footermenu as $fm) {?>
								
							
								<a href="<?php echo $fm->slug;?>"><?php echo $fm->title;?></a>
	                          
	                        <?php
	                    	}
	                    	?>
							</nav>
						</div>
						<div class="col-xs-6 col-sm-4 wow zoomIn" data-wow-delay="0.3s">
							<h4>Kontak Kami</h4>
							<div class="contact-info">
								<span><i class="fa fa-location-arrow"></i><strong><?php echo $website->name;?></strong><?php echo $website->address;?></span>
								<span><i class="fa fa-phone"></i><?php echo $website->phone;?> / <?php echo $website->fax1;?> / <?php echo $website->fax2;?></span>
								
								<span><i class="fa fa-envelope"></i><?php echo $website->email;?></span>
								<span><i class="fa fa-clock-o"></i><?php echo $website->working_hours;?></span>
							</div>
						</div>
					</div>
					<div class="copy text-right"><a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>Web Design by <a href="http://www.digitalindo.co.id">EMCO DIGITALINDO</a> &copy; 2016 <?php echo $website->name;?> All rights reserved.</div>
				</div>
			</footer>
		</div>

		<!--Main-->   
		<script src="<?php echo base_url();?>js/jquery-1.11.3.min.js"></script>
		<script src="<?php echo base_url();?>js/jquery-ui.min.js"></script>
		<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>js/modernizr.custom.js"></script>
		<!-- Loader -->
		<script src="<?php echo base_url();?>assets/loader/js/classie.js"></script>
		<script src="<?php echo base_url();?>assets/loader/js/pathLoader.js"></script>
		<script src="<?php echo base_url();?>assets/loader/js/main.js"></script>
		<script src="<?php echo base_url();?>js/classie.js"></script>
		<!--Switcher-->
		<script src="<?php echo base_url();?>assets/switcher/js/switcher.js"></script>
		<!--Owl Carousel-->
		<script src="<?php echo base_url();?>assets/owl-carousel/owl.carousel.min.js"></script>
        <!--Contact form--> 
        <script src="<?php echo base_url();?>assets/contact/jqBootstrapValidation.js"></script> 
        <script src="<?php echo base_url();?>assets/contact/contact_me.js"></script>
        <!-- SCRIPTS -->
	    <script type="text/javascript" src="<?php echo base_url();?>assets/isotope/jquery.isotope.min.js"></script>
		<!--Theme-->
		<script src="<?php echo base_url();?>js/jquery.smooth-scroll.js"></script>
		<script src="<?php echo base_url();?>js/wow.min.js"></script>
		<script src="<?php echo base_url();?>js/jquery.placeholder.min.js"></script>
		<script src="<?php echo base_url();?>js/smoothscroll.min.js"></script>
		<script src="<?php echo base_url();?>js/theme.js"></script>
	<script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=14345636"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
<script type="text/javascript">
  $('.select2').select2();
</script>