<section id="tentangkami" class="home-section bg-gray">
		<div class="container marginbot-0">
			<div class="wow fadeInDown" data-wow-delay="0.1s"><br>
				<div class="box text-center">
					<h2 class="h-bold"><?php echo $detailcabang->nama;?></h2>
				</div>
		<?php
		if($detailcabang->frame !="")
		{		
		?>
                <div class="wow fadeInLeftBig" data-wow-delay="0.1s">
        			<div class="widget">
					
          <?php echo $detailcabang->frame;?>
					</div>
        		</div>
        		<?php
        		}?>
				<div class="box paddingtop-20">
                	<table class="table table-hover table-bordered">
  <tbody>
    <tr>
      <td style="width:20% !important">Nama Cabang</td>
      <td><?php echo $detailcabang->nama;?></td>
    </tr>
    
    <tr>
      <td>Alamat</td>
      <td><?php echo $detailcabang->alm1;?></td>
    </tr>
    <tr>
      <td>Kode Pos</td>
      <td><?php echo $detailcabang->zipcode;?></td>
    </tr>
    <tr>
      <td>Telepon</td>
      <td><?php echo $detailcabang->phone;?></td>
    </tr>
    <tr>
      <td>Fax</td>
      <td><?php echo $detailcabang->fax;?></td>
    </tr> 
<!--     <tr>
      <td>Nama Pimpinan</td>
      <td><?php echo $detailcabang->kacab;?></td>
    </tr> -->
    <tr>
      <td>Email</td>
      <td><?php echo $detailcabang->email;?></td>
    </tr>
  </tbody>
</table>
<a href="<?php echo base_url().'cabang';?>">Cek Cabang Lainnya</a>
				</div>
			</div>
			</div>
	</section>