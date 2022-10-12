
    

		<div class="sp-body">
			<!-- Loader Landing Page -->
			<div id="ip-container" class="ip-container">
				<div class="ip-header" >
					<div class="ip-loader">
						<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
							<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,39.3,10z"/>
							<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
						</svg> 
					</div>
				</div>
			</div>
			<!-- Loader end -->
			<!-- Start Switcher -->
			<!-- <div class="switcher-wrapper">	
				<div class="demo_changer">
					<div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
					<div class="form_holder">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="predefined_styles">
									<div class="skin-theme-switcher">
										<h4>Color</h4>
										<a href="#" data-switchcolor="color1" class="styleswitch" style="background-color:#a91605;"> </a>
										<a href="#" data-switchcolor="color2" class="styleswitch" style="background-color:#228dcb;"> </a>
										<a href="#" data-switchcolor="color3" class="styleswitch" style="background-color:#00bff3;"> </a>							
										<a href="#" data-switchcolor="color4" class="styleswitch" style="background-color:#ff9600;"> </a>
										<a href="#" data-switchcolor="color5" class="styleswitch" style="background-color:#2dcc70;"> </a>
										<a href="#" data-switchcolor="color6" class="styleswitch" style="background-color:#6054c2;"> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>-->
			<!-- End Switcher --> 
			<header id="this-is-top">
				<div class="container-fluid">
				
					<div class="topmenu row">
						<nav class="col-sm-offset-3 col-md-offset-4 col-lg-offset-4 col-sm-6 col-md-5 col-lg-5">
						<!--
							<a href="#">BUY NOW</a>
							<a href="#">read documentation</a>
							<a href="#">WHY US</a>
								-->
						</nav>
						<nav class="text-right col-sm-3 col-md-3 col-lg-3">
							<?php foreach($sosmed as $s){?>
							<a href="<?php echo $s->link;?>"><i class="fa <?php echo $s->icon;?>"></i></a>
							<?php
							}
							?>
						</nav>
					</div>
				
					<div class="row header">
						<div class="col-sm-3 col-md-3 col-lg-3">
							<a href="<?php echo base_url();?>" id="logo"></a>
						</div>
						<div class="col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-sm-8 col-md-8 col-lg-8">
							<div class="text-right header-padding">
								<div class="h-block"><span>Hubungi Kami</span><?php echo $website->phone;?> / <?php echo $website->fax1;?> / <?php echo $website->fax2;?></div>
								<div class="h-block"><span>Email Kami</span><?php echo $website->email;?></div>
								<div class="h-block"><span>Jam Kerja</span>Senin - Sabtu  24 Jam</div>
								<!-- Trigger the modal with a button -->

								<a class="btn btn-success" href="javascript:void(0);" data-toggle="modal" data-target="#myModal">LOGIN</a>
							</div>
						</div>
					</div>
					<div id="main-menu-bg"></div>  
					<a id="menu-open" href="#"><i class="fa fa-bars"></i></a> 
					<nav class="main-menu navbar-main-slide">
					<?php echo $menu;?>
						
						<div class="search-form-modal transition">
							<form class="navbar-form header_search_form">
								<i class="fa fa-times search-form_close"></i>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn_search customBgColor">Search</button>
							</form>
						</div>
	                </nav>
					<a id="menu-close" href="#"><i class="fa fa-times"></i></a> 
				</div>
			</header>

			
