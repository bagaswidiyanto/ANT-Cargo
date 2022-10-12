<?
$branch = $this->input->post('branch');

foreach($this->db->query("SELECT * FROM tbl_branch where kota LIKE '%".$branch."%'   ")->result() as $b) { 
?>
<div class="branch-section3">
	<h4 style="font-weight: bold;color: #2f3562;"><a onclick="getBranch('<?=$b->id?>')" style="cursor: pointer;"><?=$b->kota;?></a></h4>
	<p><?=$b->alamat1;?></p>
	<p><?=$b->telepon;?></p>
</div>

<?}