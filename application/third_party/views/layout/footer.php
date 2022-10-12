<!-- *** FOOTER ***
_________________________________________________________ -->

  <footer id="footer">
            <div class="container"  data-animate="fadeInRight">
            <div class="col-md-4 col-sm-6">
                    <h4>TENTANG KAMI</h4>
                      <!-- <?=$website->description;?> -->
                      MGS Express merupakan perusahaan yang bergerak dalam bidang pelayanan jasa distribusi logistik, pergudangan dan kurir ke seluruh wilayah Indonesia. MGS Express secara profesional melayani pengiriman cepat, penanganan pergudangan serta distribusi logistik di seluruh wilayah Indonesia...
                      <a href="<?=base_url();?>pages/index/tentang-kami">Read More</a>
                </div>
                <div class="col-md-2 col-sm-6">
                    <h4>INFORMASI</h4>
                    <p><a href="<?=base_url();?>pages/index/istilah-dalam-pengiriman">Terms in delivery</a></p>
                    <p><a href="<?=base_url();?>pages/index/syarat-dan-ketentuan">Terms and Conditions</a></p>
                    <p><a href="<?=base_url();?>pages/index/kebijakan-privasi">Privacy Policy</a></p>
                </div>

                <div class="col-md-4 col-sm-6">
                    <h4>Kontak </h4>
                    <p><?php echo $website->address;?>
                        <?php echo $website->phone;?>
                        <br>
                       <div class="social">
                       		 <?php foreach($sosmed as $s){?>
                               <a href="<?php echo $s->link;?>" class="external <?php echo strtolower($s->name);?>" data-animate-hover="pulse"><i class="fa <?php echo $s->icon;?>"></i></a>
                                
                                <?php
                                }
                                ?>
                                
                            </div>
                    </p>
                </div>
                
            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

       <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; Copyright 2016 - <a href="http://www.digitalindo.co.id" target="_blank">Digitalindo</a>. All rights reserved.</p>
                    </p>
                </div>
                      
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

   
    
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />

<script>
        
$( document ).ready(function() {
base_url = '<?=base_url();?>';
        $( "#hint" ).autocomplete({
                source: base_url+"autocomplete/search/"+$("#hint").val(),
                select: function (event, ui) {
                	event.preventDefault();
			        $("#hint").val(ui.item.label); // display the selected text
			        $("#asal").val(ui.item.value); // save selected id to hidden input
			    },
                focus: function(event, ui) {
			        event.preventDefault();
			        $("#hint").val(ui.item.label);
			    },
                
                minLength:3
                });

        	$( "#hint2" ).autocomplete({
                source: base_url+"autocomplete/search/"+$("#hint").val(),
                select: function (event, ui) {
                	event.preventDefault();
			        $("#hint2").val(ui.item.label); // display the selected text
			        $("#tujuan").val(ui.item.value); // save selected id to hidden input
			    },
                focus: function(event, ui) {
			        event.preventDefault();
			        $("#hint2").val(ui.item.label);
			    } ,   
                
                minLength:3
                });
	
  });
             </script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    
    

    <script src="<?=base_url();?>assets/js/jquery.cookie.js"></script>
    <script src="<?=base_url();?>assets/js/waypoints.min.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?=base_url();?>assets/js/front.js"></script>

   

    <!-- owl carousel -->
    <script src="<?=base_url();?>assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=95161811"></script>
