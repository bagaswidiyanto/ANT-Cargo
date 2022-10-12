<section>
            <!-- *** HOMEPAGE CAROUSEL ***
 _________________________________________________________ -->

            <div class="home-carousel">
                <div class="dark-mask"></div>
                    <div class="homepage owl-carousel">
                    	<?php
                    	foreach($slider as $s){
                    	?>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-12">
                                <div class="container" data-animate="fadeInRight">
                             	<h1><?=$s->nameSlider;?></h1>
                                </div>
                                <div class="container" data-animate="fadeInRight">
                                    <?=$s->captionSlider;?>
                                </div>
                                <a href="<?=$s->url;?>"><img class="img-responsive" src="<?=base_url();?>mobile/upload/slider/<?=$s->imageSlider;?>" alt=""></a>
                            </div>
                        </div>
                        </div>
                        <?php
                        }
                        ?>
                        
                    </div>
                            </div>
                        </div>
                       
                        
                    </div>
            </div>

            <!-- *** HOMEPAGE CAROUSEL END *** -->
        </section>

        <section class="bar background-white min30">
            <div class="container min120" data-animate="fadeInDown">
                <div class="box-simple">
                    <div class="heading text-center">
                        <h2>CEK RESI</h2>
                    </div><center>
                    <p class="min20"><h4>Cek proses pengiriman Anda dengan mudah dan akurat. Masukkan nomor resi pengiriman Anda di sini.</h4></p><br>
 					<a href="<?=base_url();?>tracking"><button type="button" class="btn btn-lg btn-primary">CEK DISINI</button></a></center>
                 </div>         
            </div>
        </section>

        <section class="bar background-pentagon no-mb">
            <div class="container min" data-animate="fadeInUp">
                <div class="box-simple">
                    <div class="heading text-center">
                        <h2>CEK ONGKIR</h2>
                    </div><center>
                    <p class="min20"><h4>Cari tahu ongkos pengiriman Anda dengan memasukkan asal kiriman dan tujuan pengiriman anda.</h4></p><br>
                    <a href="<?=base_url();?>prices"><button type="button" class="btn btn-lg btn-primary">CEK DISINI</button></a></center><br>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section><br>
        <!-- /.bar -->
         <section >
            <div class="container " data-animate="fadeInDown">
        		<div class="heading text-center">
                	<h2>7 ALASAN TEPAT MEMILIH MGS EXPRESS</h2>
                </div>
     			<ul class="owl-carousel testimonials same-height-row">
                            <?php
                            foreach ($this->db->get('tbl_why_choose_us')->result() as $wcu) {
                             ?>
                            
                            <li class="item">
                                <div class="testimonial same-height-always"><center>
                                	<div class="name-picture">
                                       <img class="" alt="" src="<?=base_url();?>mobile/upload/why_choose_us/<?=$wcu->image;?>" style="width:130px;height: 130px;">
                                     </div></center>
                                    <div class="text"><center>
                                    <h5><?=$wcu->judul;?></h5>
                                        <p><?=$wcu->deskripsi;?></p></center>
                                    </div>
                                </div>
                            </li>
                            <?php
                            }
                            ?>
                           
                        </ul>   
            </div>
        </section>
        <div id="get-it">
            <div class="container">
                <div class="col-md-12 col-sm-12">
                    <h3>Kemitraan<br><br>Ingin menjadi agen kami di wilayah anda? Atau Ingin bergabung menjadi pelanggan dengan pelayanan khusus?</h3>
                    <a href="<?=base_url();?>mitra" class="btn btn-template-transparent-primary">gabung sekarang</a>
                </div>
               <!--  <div class="col-md-2 col-sm-12">
                    
                </div> -->
            </div>
        </div>
		<!--- News -->
        <section class="bar background-white no-mb">
            <div class="container min80"  data-animate="fadeInUp">

                <div class="col-md-12">
                    <!-- *** BLOG HOMEPAGE ***
_________________________________________________________ -->
 					<div class="heading text-center plus20">
                        <h2>Berita & Acara</h2>
                    </div>
                    <div class="row min20">
                    <?php foreach($posts as $p){
                    ?>
                    <div class="col-md-4 col-sm-6">
                            <div class="box-image-text blog">
                                <div class="top">
                                    <div class="image">
                                        <img src="<?=base_url();?>mobile/upload/posts/<?=$p->image;?>" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="<?=base_url();?>blog/baca/<?=$p->slug;?>" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="<?=base_url();?>blog/baca/<?=$p->slug;?>"><?=$p->Title;?></a></h4>
                                    <p class="author-category"><?=date('H:i, d M Y',strtotime($p->created_date));?>
                                    </p>
                                    <p class="intro"><?=substr(strip_tags($p->content),0,150);?>...</p>
                                    <p class="read-more"><a href="<?=base_url();?>blog/baca/<?=$p->slug;?>" class="btn btn-template-primary">Read More</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->

                        </div>
                    <?php
                    }?>
                        

                        

                    </div>
                    <!-- /.row -->

                    <!-- *** BLOG HOMEPAGE END *** -->

                </div>

            </div>
            <!-- /.container -->
        </section>
        <!-- /.News -->
        
        <!-- *** GET IT END *** -->
        <!-- /#content -->