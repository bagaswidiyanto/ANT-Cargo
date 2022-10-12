<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Armada extends MY_Controller {
public function index()
	{
		// $service=$this->db->get_where('log_services',array("serviceStatus"=>"Y"));
		
		// if(($service->num_rows()) >0){
		// $this->data['service']=$service->result();
		$this->data['armada']=$this->db->get('tbl_armada')->result();
		$this->middle = 'content/v_armada.php'; 
    		$this->layout();  
		// }else{
		// 	redirect(base_url());

		// }
	}
}