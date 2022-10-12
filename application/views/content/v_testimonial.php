 <!-- Section: testimonial -->

    <div class="container marginbot-0 margintop-50 paddingtop-90" >

		<div class="row" style="margin-top: 3%">

			<div class="wow fadeInDown" data-wow-delay="0.1s">

				<div class="box text-center color"><br><br>

					<h2 class="h-bold color">TESTIMONI</h2> 	

                <div id="thanks"><p><center><a href="<?php echo base_url();?>testimonial/tambah" class="btn btn-primary">Tambah Testimoni</a></center></p></div>

 			       

					<p>Berikut ini adalah testimonial dari customer JMX EXPRESS XTRA SOLUTION.</p>

					</div>

                    </div> 

					</div>

					<div class="divider-short"></div>

			</div>

	</div>

	<div class="carousel-reviews broun-block">

    <div class="container">

        <div class="row">

            <div id="carousel-reviews" class="carousel slide paddingbot-30" data-ride="carousel">

                <div class="carousel-inner">

                    <div class="item active">



                    <?php foreach($testimonial as $t){ ?>

                	    <div class="col-md-4 col-sm-6">

        				    <div class="block-text2 rel zmin">

						        <a title="" href="<?php echo base_url().'testimonial/baca/'.$t->id;?>"> <?php echo substr($t->judul,0,132);?>	</a>

							    <div class="mark">My rating: <span class="rating-input">

							    <?php for($i=1;$i<=5;$i++){ 

							    	if($t->rating >= $i){

							    		?>

							    		<span data-value="<?php echo $i;?>" class="glyphicon glyphicon-star"></span>

							    <?php 

							    	}else{ ?>

							    		<span data-value="<?php echo $i;?>" class="glyphicon glyphicon-star-empty"></span>

							    <?php

							    	}

							    }

							    ?>

							    <!--<span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  

								-->

							    </span></div>

						        <?php echo substr($t->testimoni,0,132); echo (strlen($t->testimoni) > 132)? '...':'';?>							    

						        <ins class="ab zmin sprite sprite-i-triangle block"></ins>

					        </div>

							<div class="person-text rel text-light color">					

								<a title="" href="<?php echo base_url().'testimonial/baca/'.$t->id;?>" class="color"><?php echo substr($t->nama,0,132);?></a>

								<span><?php echo $t->wilayah;?></span>

							</div>

						</div>

					<?php } ?>	

            			

                    </div>

                </div>

				

                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">

                    <span class="glyphicon glyphicon-chevron-left top"></span>

                </a>

                <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">

                    <span class="glyphicon glyphicon-chevron-right top"></span>

                </a>

            </div>

        </div>

    </div>

</div>

    

	<!-- /Section: testimonial -->