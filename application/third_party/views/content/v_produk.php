
<section  class="home-section bg-gray">
	<div class="container marginbot-0">
		<div class="row">
			<div class="wow fadeInDown" data-wow-delay="0.1s">
			<div class="box text-center">
					<h2 class="h-bold">PRODUK</h2>
			</div>
						<div id="owl-works" class="owl-carousel">
                        <?php foreach($gallery as $g){?>

                         <div class="item" style="width:65%;"><a href="<?=base_url();?>digital-admin/upload/gallery/<?=$g->image;?>" title="<?=$g->name;?>" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?=base_url();?>digital-admin/upload/gallery/<?=$g->image;?>"><img src="<?=base_url();?>digital-admin/upload/gallery/<?=$g->image;?>" class="img-responsive " alt="<?=$g->name;?>"></a></div>
                         <?php } ?>
                    </div>

                    <div class="divider"></div><br>
			</div>
		</div>
</div>
</section>