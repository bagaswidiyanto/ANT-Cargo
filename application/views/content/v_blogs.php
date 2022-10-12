<div id="heading-breadcrumbs2" class="no-mb">
            <div class="container space" style="margin-top: -10px;">
                <div class="row" style="margin-right: 0;">

                	
                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-12 blogs" id="blog-listing-small " data-animate="fadeInDown" >
           
                        <div class="row">
                               <span class="bg-white">
                        	<?php
                        	if(($blog->num_rows()) >0){ 
                                        foreach ($blog->result() as $b) {
				?>
                            <div class="col-md-2 col-sm-6">
                                <div class="box-image-text blog">
                                    <div class="top">
                                        <div class="image">
                                            <a href="<?=base_url();?>blog/baca/<?=$b->slug;?>">
                                            <img src="https://mobile.tamcargo.co.id/upload/posts/<?=$b->image;?>" alt="" class="img-responsive img-resize">
                                        </a>
                                        </div>
                                  <!--       <div class="bg"></div> -->
                                      <!--   <div class="text">
                                            <p class="buttons">
                                                <a href="<?=base_url();?>blog/baca/<?=$b->slug;?>" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                            </p>
                                        </div> -->
                                    </div>
                                    <div class="content">
                                        <h4><a href="<?=base_url();?>blog/baca/<?=$b->slug;?>"><?=$b->Title;?></a></h4>
                                        <!-- <p class="author-category"><?=date('H:i, d M Y',strtotime($b->created_date));?>
                                        </p> -->
                                        <p class="intro"><?=substr(strip_tags($b->content),0,175);?>...<br> <a href="<?=base_url();?>blog/baca/<?=$b->slug;?>" >Read More</a>
                                        </p>
                                      
                                        </p>
                                    </div>
                                </div>

                                <!-- /.box-image-text -->

                            </div>

                            <?php
                            }
                            }else{
                            ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="box-image-text blog">
                            <?php
                            echo "Maaf Berita tidak ditemukan";
                            ?>
                            </div>
                            </div>

                            <?php
                            }
                            ?>
                
                             <div class="col-md-12" style="margin-left:-100px;">
                     <?php  echo $pagination;?>
                    
                </div>
                </span>



                        </div>


<!-- 
                        <ul class="pager">
                            <li class="previous"><a href="#">&larr; Older</a>
                            </li>
                            <li class="next disabled"><a href="#">Newer &rarr;</a>
                            </li>
                        </ul> -->



                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
			 _________________________________________________________ -->

                   <!--  <div class="col-md-3" data-animate="fadeInRight"> -->

                        <!-- *** MENUS AND WIDGETS ***
 _________________________________________________________ -->

                       <!--  <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">PENCARIAN</h3>
                            </div>

                            <div class="panel-body plus20">
                                <form role="search" method="get" action="<?=base_url();?>blog">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Cari" required="required">
                                        <span class="input-group-btn">

		    <button type="submit" class="btn btn-template-main" style="color:#fff;"><i class="fa fa-search"></i></button>

		</span>
                                    </div>
                                </form>
                            </div>
                        </div> -->

                        <!-- <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading ">
                                <h3 class="panel-title">KATEGORI</h3>
                            </div>

                            <div class="panel-body plus20">
                                <ul class="nav nav-pills nav-stacked">
                                     <li class="active"><a href="berita.html">Berita</a>
                                    </li>
                                    <?php
                                   // foreach($this->db->get('tbl_kategori_berita')->result() as $kb){
                                    ?>
                                    <li><a href="#"><?=$kb->namaKategori;?></a>
                                    </li>
                                    <?php
                                   // }
                                    ?>
                                </ul>
                            </div>
                        </div> -->

                        

                        <!-- *** MENUS AND FILTERS END *** -->

                  <!--   </div> -->
                    <!-- /.col-md-3 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
            </div>
        </div>
        <!-- /.bar -->
  
