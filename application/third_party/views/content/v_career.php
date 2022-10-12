<div id="heading-breadcrumbs" class="no-mb">
            <div class="container"  data-animate="fadeInUp">
          <section>
            <div class="container">

                <div class="row"><center>
                       <div class="heading">
                          <h3>Carrer</h3>
                          <div data-animate="fadeInUp">  
                        </div>
                        </div>
                    <table class="table">
                    <tr style="background-color:#1c4e94 !important;color:#fff;">
                    <th>Position</th>
                    <th>City</th>
                    <th>Expired Date</th>  
                    </tr> 
                    <?php foreach($this->db->query("SELECT * FROM tbl_carrer WHERE expiredDate >= CURDATE()")->result() as $c) { ?>    
                    <tr>
                    <td><a href="<?=base_url();?>career/careerdetail/<?=$c->id;?>"><?=$c->position;?></a></td>
                    <td><?=$c->city;?></td>
                    <td><?=$c->expiredDate;?></td>
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
