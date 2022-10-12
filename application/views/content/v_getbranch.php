<div class="container-xxl px-0 bg-primary hero-service">
	<img src="assets/imagenew/cabang.png" class="img-fluid" alt="">
</div>
</div>

<?php
$branch = $this->input->post('branch');
foreach ($this->db->query("SELECT * FROM tbl_branch where ID='" . $branch . "'  ")->result() as $b) {
?>
	<div class="container-xxl my-5 bg-grey kontak">
		<div class="container py-5 px-lg-5">
			<div class="header-title text-center">
				<h1 class="text-dark fw-bold"><?= $b->kota; ?></h1>
			</div>
			<?php
			$number = $b->telepon;
			$n1 = substr($number, 0, 4);
			$n2 = substr($number, 4, 4);
			$n3 = substr($number, 8, 4);
			$wa = $n1 . '-' . $n2 . '-' . $n3;
			?>
			<div class="row mt-5">
				<div class="col-lg-6">
					<?= $b->map; ?>
				</div>
				<div class="col-lg-6 ps-5">
					<div class="address mb-0">
						<h4 class="my-0">Alamat</h4>
						<p><?= $b->alamat1; ?></p>
					</div>
					<div class="row">
						<div class="col">
							<h4>Telepon</h4>
							<p><?= $wa; ?></p>
						</div>
						<div class="col">
							<h4>Email</h4>
							<p><?= $b->email; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>