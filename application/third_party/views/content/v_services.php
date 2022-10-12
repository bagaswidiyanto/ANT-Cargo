<div id="heading-breadcrumbs" class="no-mb">
            <div class="container"  data-animate="fadeInUp">
          <section>
            <div class="container">

                <div class="row"><center>
                       <div class="heading">
                          <h3>Produk & Layanan</h3>
                          <div data-animate="fadeInUp">  
                        </div></div>
                            </div>

                        <div class="tabs">
                            <ul class="nav nav-pills ">
                                <?php
                                $no=0;
                                foreach($group=$this->db->query("SELECT type FROM log_services GROUP BY type asc")->result() as $type){
                                    if($no=="0"){
                                        $class="active";
                                    }else{
                                        $class="";
                                    }
                                    echo '<li class="'.$class.'"><a href="#tab2-'.$no.'" data-toggle="tab">'.$type->type.'</a></li>';
                                    $arrtype[]=$type->type;
                                    $no++;
                                   

                                }
                                ?>
                               
                                </li>
                            </ul>
                            <div class="tab-content tab-content-inverse">
                            <?php
                            // var_dump($arrtype);
                            foreach ($arrtype as $key => $value) {
                              if($key=="0"){
                                  $class="active";
                              }else{
                                  $class="";
                              }
                            
                            ?>
                            
                                <div class="tab-pane <?=$class;?>" id="tab2-<?=$key;?>">
                                <ul class="owl-carousel testimonials">
                                <?php foreach($this->db->query("SELECT * FROM log_services WHERE type='".$value."' order by type asc")->result() as $s){ ?>
                            <li class="item">
                                <div class="testimonial same-height-always"><center>
                                	<div class="round">
                                       <a href="<?=base_url();?>"><img class="" alt="" src="<?=base_url();?>mobile/upload/service/<?=$s->picture;?>"></a>
                                     </div></center>
                                    <div class="text"><center>
                                    <a href="<?=base_url();?>"><h3><?=$s->serviceName;?></h3></a>
                                         <p><?=$s->serviceDescription;?></p>
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