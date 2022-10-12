<div style="background: url('<?=base_url();?>assets/img/mgs-logo-design-05.png') center center repeat;
padding: 20px 0;" class="no-mb">
            <div class="container"  data-animate="fadeInUp">
                <div class="row"><center>
                    <div class="heading">
					<h3 class="h-bold">TRACKING</h3>
			<div data-animate="fadeInUp"> 
                           
                        </div>
                     </div>



			

					<h3>Tracking AWB No: <?php echo $barcode;?></h3>

					<?php
					if($query->num_rows() > 0){

					 foreach ($query->result_array() as $res) { ?>
					<fieldset>	
					<legend>Keterangan Pengirim</legend>
					<table style="width:50%">
						<tr>
							<td width="3%">No. Resi</td>
							<td width="1%">:</td>
							<td width="10%" ><?php echo $res['Konid']; ?></td>
						</tr>	
						<tr>
							<td width="3%">Nama Pengirim</td>
							<td width="1%">:</td>
							<td width="10%" ><?php echo $res['namaPengirim']; ?></td>
						</tr>
						<tr>
							<td width="3%">Kota Asal</td>
							<td width="1%">:</td>
							<td width="10%" ><?php echo $res['kotaPengirim']; ?></td>
						</tr>
					</table>
				</fieldset>
				<br>
				<fieldset>
				    <legend>Keterangan Penerima</legend>
					<table style="width:50%;">
						<tr>
							<td width="3%">Nama Penerima</td>
							<td width="1%">:</td>
							<td width="10%" ><?php echo $res['namaPenerima']; ?></td>
						</tr>	
						<tr>
							<td width="3%">Kota Tujuan</td>
							<td width="1%">:</td>
							<td width="10%" ><?php echo $res['kotaPenerima']; ?></td>
						</tr>
						<tr>
							<td width="3%">Jumlah Barang</td>
							<td width="1%">:</td>
							<td width="10%" ><?php echo $res['Koli']; ?> Koli</td>
						</tr>
						<tr>
							<td width="3%">Berat</td>
							<td width="1%">:</td>
							<td width="10%" ><?php echo $res['Kilo']; ?> Kg</td>
						</tr>		
					</table>
				</fieldset>
				<br>
<fieldset>
    <legend>Informasi Penerima Barang</legend>
	<table style="width:50%;">
		<tr>
			<td width="3%">Status</td>
			<td width="1%">:</td>
			<td width="10%" ><?php if($res['Diterima']==''){echo "On Progress";}else{echo "Diterima";} ?></td>
		</tr>	
		<tr>
			<td width="3%">Diterima Oleh</td>
			<td width="1%">:</td>
			<td width="10%" ><?php echo $res['Diterima']; ?></td>
		</tr>
		<tr>
			<td width="3%">Tanggal</td>
			<td width="1%">:</td>
			<td width="10%" ><?php if($res['Diterima']==''){echo "";}else{echo $res['Tgl_Diterima'];} ?></td>
		</tr>		
	</table>
</fieldset>
<br>
<fieldset>
    <legend>Tracking</legend>
	<table  style="width:100%" border="1" style="border-style: solid;
    border-color: #ccccc;">
    		<tr style="background-color:#203c92;color:#fff; font-weight: bold;">
			<td width="10%" style="padding-left:8px;">Tanggal</td>
			<td width="40%" style="padding-left:8px;">Status</td>
		</tr>	
<?php foreach ($tracking as $value) { ?>
		<tr style="background-color:#fff;">
			<td width="10%" style="padding-left:8px;"><?php echo $value['Tanggal']; ?></td>
			<td width="40%" style="padding-left:8px;"><?php echo $value['Status']; ?></td>
		</tr>	
<?php } ?>				
	</table>
</fieldset>
					<?php
					}
				}else{
					echo "Maaf data yang anda cari tidak ada";
				}
					?>

					<a href="<?php echo base_url();?>">Check Lainnya</a>

					<div class="divider-short"></div><br>
			</div>
            </div>
        </div>
        <!-- /.bar -->