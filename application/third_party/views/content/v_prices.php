<div style="background: url('<?=base_url();?>assets/img/mgs-logo-design-05.png') center center repeat;
padding: 20px 0;" class="no-mb">

			<div class="container"  data-animate="fadeInUp">
                <div class="row"><center>
                    <div class="heading">
                                <h3>Cek ONGKIR</h3>
                                <div data-animate="fadeInUp"> 
                           
                        </div>
                            </div>
                             <form action="" method="post"><br>
                            
                                <p class="min40"><h4>Masukan lokasi asal dan tujuan serta berat untuk mengetahui tarif pengiriman kami</h4></p><br>
                                	<div class="row">
                                        <div class="inputform">
                                            <input type="text" id="hint" name="asal" class="dropdown-header" required="required" />
					    <input type="hidden" id="asal" name="dari" class="dropdown-header" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="inputform">
                                            <input type="text" id="hint2" name="ke" class="dropdown-header" required="required"/>
					    <input type="hidden" id="tujuan" name="tujuan" class="dropdown-header" />
                                        </div>
                                    </div>
                                     <div class="row weight">
                                        <div class="inputform">
                                            <input type="text" class="form-control weight" value="1" name ="berat" id="" placeholder="BERAT" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-lg btn-primary">CEK</button>
                                </div>
                                <!-- /.row -->
                            </form>
                            </center>
                </div>
            </div>

            <div class="container"  data-animate="fadeInUp">
                <div class="row"><center>
                    <div class="heading">

					<h3><?=$asal->branchName;?> ke <?=$tujuan->branchName;?><br><?=$this->input->post('berat');?> kg</3>

		 			<div data-animate="fadeInUp"> 
                           
                        </div>
               </div>


               			<table border="1" cellspacing="1" cellpadding="1" class="table" style="border-color:#204d74;  ">
               			<tr style="background-color:#286090;color:#fff;">
               			<th>Service</th>
               			<!-- <th>Deskripsi</th> -->
               			<th>Tarif</th>
               			<th>Estimasi</th>
               			</tr>
						<?php foreach($prices as $p) { 
							$berat=$this->input->post('berat');
							$hargaKGP=$p->KGP;
							$hargaKGS=$p->KGS;
							if($p->minKG>$berat){
								$real=$p->minKG*$hargaKGP;
							}else{
								$beratkotor=$berat-$p->minKG;
								$real=$hargaKGP +($hargaKGS*$beratkotor);
							}
							?>



						<tr>
						<td><?=$p->Layanan;?></td>
						<!-- <td><?=$p->serviceDescription;?></td> -->
						<td>Rp <?=number_format($real,0);?></td>
						<td><?=$p->Estimasi;?> Hari</td>
						</tr>
					<!-- <div class="col-lg-12 col-xs-6">
						<div class="info-box">
							<span class="info-box-icon bg-yellow">
								<i class="ion ion-ios-gear-outline"><b><?=$p->Layanan;?></b></i>
							</span>
							<div class="info-box-content">
								<span class="info-box-text" style="font-size: 24px;margin-top: 10%;"><b>Rp <?=number_format($real,0);?></b></span>
								<small><?=$p->Estimasi;?> Hari</small>
								</span>
							</div>
						</div>
					</div> -->
				
  

                            <?php

                            }

                            ?>
                           </table>

					<div class="remark" style="font-weight:bold;">


						Untuk informasi lebih lanjut silakan menghubungi CALL CENTER : <?=$website->phone;?>, E-MAIL : <?=$website->email;?><br>
						<a href="<?php echo base_url();?>">Klik, Harga lainnya</a>

					</div>

		</div>
            </div>
        </div>
        <!-- /.bar -->


 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

 
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
   
        <style>
       .ui-autocomplete {
            max-height: 200px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            padding-right: 20px;
        } 
	</style> 
        <script>
        
$( document ).ready(function() {
base_url = '<?=base_url();?>';
        $( "#hint" ).autocomplete({
                source: base_url+"autocomplete/search/"+$("#hint").val(),
                select: function (event, ui) {
                	event.preventDefault();
			        $("#hint").val(ui.item.label); // display the selected text
			        $("#asal").val(ui.item.value); // save selected id to hidden input
			    },
                focus: function(event, ui) {
			        event.preventDefault();
			        $("#hint").val(ui.item.label);
			    },
                
                minLength:3
                });

        	$( "#hint2" ).autocomplete({
                source: base_url+"autocomplete/search/"+$("#hint").val(),
                select: function (event, ui) {
                	event.preventDefault();
			        $("#hint2").val(ui.item.label); // display the selected text
			        $("#tujuan").val(ui.item.value); // save selected id to hidden input
			    },
                focus: function(event, ui) {
			        event.preventDefault();
			        $("#hint2").val(ui.item.label);
			    } ,   
                
                minLength:3
                });
	
  });
             </script> 