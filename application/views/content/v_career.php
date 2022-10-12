<div id="heading-breadcrumbs2" class="no-mb">
            <div class="container"  data-animate="fadeInUp" style="margin-top: -90px;">
          <section>
            <div class="container space">

                <div class="row"><center>
                       <div class="heading">
                          <h3>Career</h3>
                          <div data-animate="fadeInUp">  
                        </div>
                        </div>
                    <table class="table">
                    <tr style="background-color:#000 !important;color:#fff;">
                    <th>Position</th>
                    <th>City</th>
                    <th>Expired Date</th>  
                    <th></th>  
                    </tr> 
                    <?php foreach($this->db->query("SELECT * FROM tbl_carrer WHERE expiredDate >= CURDATE()")->result() as $c) { ?>    
                    <tr>
                    <td width="30%"><?=$c->position;?></td>
                    <td width="30%"><?=$c->city;?></td>
                    <td width="30%"><?=$c->expiredDate;?></td>
                    <td width="10%"><a href="<?=base_url();?>career/careerdetail/<?=$c->id;?>">Detail</a></td>
                    </tr>

                    <?php
                    }
                    ?>
                    </table>
                </div>

                        

            </div>
            <!-- /.container -->

        </section>

            </div>
        </div>
        <!-- /.bar -->
