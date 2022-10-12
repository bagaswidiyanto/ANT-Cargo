<div id="heading-breadcrumbs" class="no-mb">
            <div class="container"  data-animate="fadeInUp">
          <section>
            <div class="container">

                <div class="row"><center>
                       <div class="heading">
                          <h3>Cabang</h3>
                          <div data-animate="fadeInUp">  
                        </div></div>
                            </div>

                        <div class="tabs">
                            <ul class="nav nav-pills ">
                               
                                <?php
                                $no=0;
                                foreach($group=$this->db->query("SELECT kota FROM log_branch GROUP BY kota asc")->result() as $kota){
                                    if($no=="0"){
                                        $class="active";
                                    }else{
                                        $class="";
                                    }
                                    echo '<li class="'.$class.'"><a href="#tab2-'.$no.'" data-toggle="tab">'.$kota->kota.'</a></li>';
                                    $arrkota[]=$kota->kota;
                                    $no++;
                                   

                                }
                                ?>
                                
                            </ul>
                            <div class="tab-content tab-content-inverse">
                            <?php
                            //var_dump($arrkota);
                            foreach ($arrkota as $key => $value) {
                              if($key=="0"){
                                  $class="active";
                              }else{
                                  $class="";
                              }
                            
                            ?>
                                <div class="tab-pane <?=$class;?>" id="tab2-<?=$key;?>">
                                <ul class="owl-carousel testimonials">
                            
                           <?php foreach($this->db->query("SELECT * FROM log_branch WHERE kota='".$value."' order by kota asc")->result() as $c) { ?>
                           
                            <li class="item"><div class="testimonial same-height-always"><center>
                                	<div class="round">
                                       <a href="<?=base_url();?>cabang/cabangdetail/<?=$c->kode;?>"><img class="" alt="" src="<?=base_url();?>mobile/upload/cabang/<?=$c->picture;?>"></a>
                                     </div></center>
                                    <div class="text"><center>
                                    <a href="<?=base_url();?>cabang/cabangdetail/<?=$c->kode;?>"><h3><?=$c->nama;?></h3></a>
                                         <p><strong><?=$c->alm1;?></strong>
                        
                        <br><?=$c->phone;?>
                        <br>
                                        </center>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                            </ul>
                                </div>
                                <!-- /.tab -->
                            <?php
                            }
                            ?>    
                               
                            </div>
                        </div>
                        <!-- /.tabs -->
                        
                </div>

            </div>
            <!-- /.container -->

        </section>

            </div>
        </div>
        <!-- /.bar -->
