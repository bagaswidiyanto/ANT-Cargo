<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autocomplete extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function search()
	{
		// tangkap variabel keyword dari URL
		$keyword = $this->input->get('term');
		
		// cari di database
		$data = $this->db->from('log_dbranch')->like('branchName',$keyword)->get();	

		// format keluaran di dalam array
		foreach($data->result() as $row)
		{
			// $arr['query'] = $keyword;
			// $arr['suggestions'][] = array(
			// $arr[] = array(
			// 	'branchName'	=>$row->branchName,
			// 	'branchID'	=>$row->branchID

			// );
			$arr[]=array('value'=>$row->branchID,'label'=>$row->branchName);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}
}
?>