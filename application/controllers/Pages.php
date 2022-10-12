<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends MY_Controller {
public function index()
	{
		$pages=$this->uri->segment(3);
		$nav=$this->db->get_where('tbl_navigation',array('slug'=>$pages));
		
		if(($nav->num_rows()) >0){
		$this->data['nav']=$nav->row();
		$this->middle = 'content/v_pages.php'; 
    	$this->layout();  
		}else{
			redirect(base_url());

		}
	}
}