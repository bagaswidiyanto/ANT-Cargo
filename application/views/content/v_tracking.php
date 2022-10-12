<div class="container-xxl px-0 bg-primary hero-service">
	<img src="assets/imagenew/bg-service.png" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->


<div class="container-xxl tracking-table bg-grey" id="about">
	<div class="container py-5 px-lg-5">
		<div class="header-title text-center">
			<h1 class="text-dark fw-bold">TRACKING</h1>
		</div>
		<?php
		if ($awb != '') {
			$arr_kon  = preg_split('/\r\n|[\r\n]/',  $awb);
			if (isset($arr_kon)) {
				$jmlAWB = count($arr_kon);
				$i = 0;
				$koray = "";
				$jml = 0;
				$ttl = 0;
				foreach ($arr_kon as $row1) {

					if ($row1 != '') {
						if ($i == 0) {
							$koray .= ' A.Konid="' . $row1 . '" OR A.No_DO="' . $row1 . '" ';
						} else {
							$koray .= ' OR A.Konid="' . $row1 . '" OR A.No_DO="' . $row1 . '"  ';
						}
						$ttl += 1;
						$i++;
					} else {
						$koray .= '';
						$ttl += 0;
					}
				}

				$kon_array = "  " . $koray . "";
				$jml = $ttl;
			}
		}
		if ($jml == 0) {
		?>

			<div class="header-title text-center">
				<h3 class="text-dark fw-bold">No. AWB yang anda cari tidak dapat ditemukan</h3>
			</div>

			<?php } else {

			$cek = $this->db->query('SELECT COUNT(A.ID) as jml FROM em_konos_detail A WHERE ' . $kon_array . ' ')->row();

			if ($cek->jml > 0) {
			?>
				<div style="overflow-x:auto;">
					<table class="table table-bordered mt-5">
						<thead>
							<tr align="center">
								<th>No</th>
								<th>No.AWB</th>
								<th>Layanan</th>
								<th>Moda</th>
								<th>Asal</th>
								<th>Tujuan</th>
								<th>Status</th>
								<th>Detail</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($this->db->query('SELECT 
						A.ID,
						A.Konid,
						A.No_DO,
						B.kabName as asal,
						F.kabName as tujuan,
						D.serviceName,
						E.modaBy,
						A.statusDiterima,
						A.Diterima
						FROM em_konos_detail A 
						LEFT JOIN log_kabupaten B ON A.Asal=B.ID
						LEFT JOIN log_kabupaten F ON A.Tujuan=F.ID  
						LEFT JOIN log_services D ON D.serviceID=A.Satuan
						LEFT JOIN log_moda E ON E.modaID=A.moda
						WHERE  ' . $kon_array . ' ')->result() as $key) {
							?>
								<tr align="center">
									<td><?= $no++; ?></td>
									<td><?= $key->Konid; ?></td>
									<td><?= $key->serviceName; ?></td>
									<td><?= $key->modaBy; ?></td>
									<td><?= strtoupper($key->asal); ?></td>
									<td><?= strtoupper($key->tujuan); ?></td>
									<td><?= $key->statusDiterima == 1 ? "BACK TO OFFICE" : ($key->statusDiterima == 2 ? "DELIVERED" : "ON PROGRESS"); ?></td>
									<td>
										<button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal<?= $key->Konid; ?>">Detail</button>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			<?php } else { ?>
				<div class="header-title text-center">
					<h3 class="text-dark fw-bold">No. AWB yang anda cari tidak dapat ditemukan</h3>
				</div>
			<?php } ?>
		<?php } ?>

		<div class="remark">
			<p>Untuk informasi lebih lanjut silakan menghubungi CALL CENTER : 0361-475 3135, E-MAIL : antcargo@gmail.com</p>
			<a href="">
				<- Back</a>

		</div>
	</div>
</div>



<?php
foreach ($this->db->query('SELECT 
A.Konid,
A.namaPengirim,
B.kabName as asal,
C.kabName as tujuan,
A.kotaPengirim,
A.kotaPenerima,
A.namaPenerima,
A.Koli,
A.Kilo,
A.Diterima,
A.Tgl_Diterima,
A.keteranganDiterima,
A.statusDiterima,
A.CreatedUserId,
A.createDate,
A.No_Manifest
FROM em_konos_detail A 
LEFT JOIN log_kabupaten B ON A.Asal=B.ID 
LEFT JOIN log_kabupaten C ON A.Tujuan=C.ID
WHERE  ' . $kon_array . ' ')->result() as $keyModal) {
?>

	<div class="modal modal-tracking" id="myModal<?= $keyModal->Konid ?>">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title text-white">Tracking AWB No: <?= $keyModal->Konid ?></h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<div class="row justify-content-center text-center mb-5">
						<div class="col-lg-4">
							<h2 class="tck">TRACKING</h2>
						</div>
					</div>
					<legend class="text-center">Tracking AWB No: <?= $keyModal->Konid; ?></legend>
					<fieldset>
						<legend>Keterangan Pengirim</legend>
						<div class="row justify-content-center">
							<div class="col-xl-7 col-lg-10">
								<table width="100%">
									<tr>
										<td width="35%">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle fa-stack-2x size25"></i>
												<i class="fa fa-barcode fa-stack-1x size17"></i>
											</span>
											No Resi
										</td>
										<td width="3%">:</td>
										<td width="100%"><?= $keyModal->Konid; ?></td>
									</tr>
									<tr>
										<td width="35%">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle fa-stack-2x size25"></i>
												<i class="fa fa-user fa-stack-1x size17"></i>
											</span>
											Nama Pengirim
										</td>
										<td width="3%">:</td>
										<td width="100%"><?= strtoupper($keyModal->namaPengirim); ?></td>
									</tr>
									<tr>
										<td width="35%">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle fa-stack-2x size25"></i>
												<i class="fa fa-map-marker fa-stack-1x size17"></i>
											</span>
											Kota Asal
										</td>
										<td width="3%">:</td>
										<td width="100%"><?= strtoupper($keyModal->asal); ?></td>
									</tr>

								</table>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Keterangan Penerima</legend>
						<div class="row justify-content-center">
							<div class="col-xl-7 col-lg-10">
								<table width="100%">
									<tr>
										<td width="35%">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle fa-stack-2x size25"></i>
												<i class="fa fa-barcode fa-stack-1x size17"></i>
											</span>
											Nama Penerima
										</td>
										<td width="3%">:</td>
										<td width="100%"><?= strtoupper($keyModal->namaPenerima) ?></td>
									</tr>
									<tr>
										<td width="35%">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle fa-stack-2x size25"></i>
												<i class="fa fa-map-marker fa-stack-1x size17"></i>
											</span>

											Kota Tujuan
										</td>
										<td width="3%">:</td>
										<td width="100%"><?= strtoupper($keyModal->tujuan) ?></td>
									</tr>
									<tr>
										<td width="35%">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle fa-stack-2x size25"></i>
												<i class="fa fa-cubes fa-stack-1x size17"></i>
											</span>

											Jumlah Barang
										</td>
										<td width="3%">:</td>
										<td width="100%"><?= $keyModal->Koli ?> Koli</td>
									</tr>
									<tr>
										<td width="35%">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle fa-stack-2x size25"></i>
												<i class="fa fa-balance-scale fa-stack-1x size17"></i>
											</span>

											Berat
										</td>
										<td width="3%">:</td>
										<td width="100%"><?= $keyModal->Kilo ?> Kg</td>
									</tr>

								</table>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Informasi Penerima Barang</legend>
						<div class="row justify-content-center">
							<div class="col-xl-7 col-lg-10">
								<table width="100%">
									<tr>
										<td width="35%">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle fa-stack-2x size25"></i>
												<i class="fa fa-check-square-o fa-stack-1x size17"></i>
											</span>
											Status
										</td>
										<td width="3%">:</td>
										<td width="100%"><?= $keyModal->statusDiterima == 1 ? "BACK TO OFFICE" : ($keyModal->statusDiterima == 2 ? "DELIVERED" : "ON PROGRESS"); ?></td>
									</tr>
									<tr>
										<td width="35%">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle fa-stack-2x size25"></i>
												<i class="fa fa-user fa-stack-1x size17"></i>
											</span>
											Diterima Oleh
										</td>
										<td width="3%">:</td>
										<td width="100%"><?= $keyModal->Diterima ?></td>
									</tr>
									<tr>
										<td width="35%">
											<span class="fa-stack fa-lg">
												<i class="fa fa-circle fa-stack-2x size25"></i>
												<i class="fa fa-calendar fa-stack-1x size17"></i>
											</span>

											Tanggal Diterima
										</td>
										<td width="3%">:</td>
										<td width="100%"><?= $keyModal->Tgl_Diterima == '0000-00-00 00:00:00' ? "" : date('d F Y', strtotime($keyModal->Tgl_Diterima)) ?></td>
									</tr>

								</table>
							</div>
						</div>
					</fieldset>

					<fieldset>
						<legend>Tracking</legend>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Tanggal</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($this->db->query("SELECT Tanggal,Status FROM em_log_tracking WHERE Barcode LIKE '" . $awb . "'  GROUP BY Status ORDER BY Tanggal DESC")->result() as $tck) { ?>
									<tr>
										<td><?= $tck->Tanggal; ?></td>
										<td><?= $tck->Status; ?></td>
									</tr>
								<?php } ?>
								<!-- <tr>
									<td>2022-09-20 18:32:07</td>
									<td>Masuk Manifest 44420220900220 pemberangkatan dari Cabang BANDUNG</td>
								</tr> -->
							</tbody>
						</table>
					</fieldset>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>

<?php } ?>