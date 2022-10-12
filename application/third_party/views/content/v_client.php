<section id="galery" class="home-section bg-gray paddingbot-20" style="margin-top: 3%">

		<div class="container marginbot-20">

			<div class="row">

					<div class="wow fadeInDown" data-wow-delay="0.1s">

					<div class="section-heading text-center">

					<h2 class="h-bold">Client</h2>

					<p>Berikut adalah beberapa client kami.</p>

					</div>

					</div>

					<div class="divider-short"></div>

			</div>

		</div>

		

		<div class="container">

			<div class="row">

			<div class="col-lg-12">

          	<div id="owl-works" class="owl-carousel">

          		<?php if($client->num_rows()>0){
          			foreach($client->result() as $g){?>

                <div class="item"><a href="<?=base_url();?>digital-admin/upload/client/<?=$g->image;?>" title="<?=$g->name;?>" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?=base_url();?>digital-admin/upload/client/<?=$g->image;?>"><img width="270px" height="180px" src="<?=base_url();?>digital-admin/upload/client/<?=$g->image;?>" class="img-responsive" alt="img"></a></div>

                <?php }}else{echo "<div class='item'>No Data</div>";}?>

            </div>

			</div>

			</div>

		</div>



	</section>