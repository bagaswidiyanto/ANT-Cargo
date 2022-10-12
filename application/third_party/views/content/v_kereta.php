

<div class="bg-image page-title">

				<div class="container-fluid">

					<a href="#"><h1>Cabang Perwakilan Khusus Kereta</h1></a>

					<div class="pull-right">

						<a href="<?php echo base_url();?>"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="<?php echo base_url();?>kereta">Cabang</a>&nbsp;&nbsp;

					</div>

				</div>

			</div>



			<div class="container-fluid block-content">

				<div class="row main-grid">

					<div class="col-sm-12">

					

					<table border="1" width="100%" style="text-align: center;padding:10px;">

					<thead>

					<tr style="background-color:#228dcb;color:#fff; font-weight: bold;">

					<td>No. </td>

					<td>Kota</td>

					<td>Kepala Cabang</td>

					<td>Wakil Cabang</td>

					<td>Telp Kantor</td>

					<td>Telp Hp</td>

					</tr>

					</thead>

					<tbody>

					<?php
					$no=1;
					foreach($kereta as $p){

?>
					<tr>

					<td><?php echo $no;;?></td>

					<td align="left"><?php echo $p->kota;?></td>

					<td align="left"><?php echo $p->namaKA;?></td>

					<td align="left"><?php echo $p->namaWakil;?></td>

					<td align="left"><?php echo $p->telpKantor;?></td>

					<td align="left"><?php echo $p->telpMobile;?></td>

					</tr>

					<?php
					$no++;

					}

					?>

					</tbody>

					</table><br/>


					</div>

				</div>

			</div>