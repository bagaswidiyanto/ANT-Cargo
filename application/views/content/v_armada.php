 <!-- *** LOGIN MODAL END *** -->
        <div id="heading-breadcrumbs2" class="no-mb">
            <div class="container space"  data-animate="fadeInUp" >
                <div class="row"><center>
                    <div class="heading">
                                <h3 style="margin-bottom: 20px;">Gallery</h3>
                                <div data-animate="fadeInUp"> 
                                    <div class="form-group" >
                                       
                                  <!--     <div class="col-md-12 col-sm-12" style="text-align:center;margin-bottom: 20px;color: #fff;">

                                         <div class="service2">
                                            <h5>Armada</h5>
                                        </div>

                                    
                                        <img src="<?=base_url();?>assets/img/service2.png" style="width: 100%;height: auto;" >
                                       
                                      </div> -->

                                      <div class="col-md-12 col-sm-12 gallery" style="text-align:center;margin-bottom: 20px;">

                                      <div >
                                            <ul class="grid">
                                                      <?php
                                                    foreach($armada as $a){
                                                    ?>
                                              <li>
                                                  <a href="https://mobile.tamcargo.co.id/upload/armada/<?=$a->image;?>" data-fancybox="gallery">
                                                  <img src="https://mobile.tamcargo.co.id/upload/armada/<?=$a->image;?>" alt="">
                                                  </a>
                                              </li>
                                            
                                               <?php
                                                  }
                                                ?>
                                            </ul>

                                            <!-- <ul class="grid">
                                              <li>
                                                   <a href="<?=base_url();?>assets/img/truk/5.jpg" data-fancybox="gallery">
                                                  <img src="<?=base_url();?>assets/img/truk/5.jpg" alt="">
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="<?=base_url();?>assets/img/truk/6.jpg" data-fancybox="gallery">
                                                  <img src="<?=base_url();?>assets/img/truk/6.jpg" alt="">
                                                  </a>
                                              </li>
                                              <li>
                                                   <a href="<?=base_url();?>assets/img/truk/7.jpg" data-fancybox="gallery">
                                                  <img src="<?=base_url();?>assets/img/truk/7.jpg" alt="">
                                                  </a>
                                              </li>
                                              <li>
                                                   <a href="<?=base_url();?>assets/img/truk/8.jpg" data-fancybox="gallery">
                                                  <img src="<?=base_url();?>assets/img/truk/8.jpg" alt="">
                                                  </a>
                                              </li>
                                            </ul> -->
                                       
                                      </div>

                                     

                                     
                            </div>
                             
                            </center>
                </div>
            </div>
        </div>
        <!-- /.bar -->