<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Service extends MY_Controller {
public function index()
	{
		$service=$this->db->get_where('log_services',array("serviceStatus"=>"Y"));
		
		if(($service->num_rows()) >0){
		// $this->data['service']=$service->result();
		$this->middle = 'content/v_services.php'; 
    		$this->layout();  
		}else{
			redirect(base_url());

		}
	}
}