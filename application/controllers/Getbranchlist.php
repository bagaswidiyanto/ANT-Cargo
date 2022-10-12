<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getbranchlist extends MY_Controller {

  public function index() {  

  	
  
  	$this->data['branch']=$this->input->post('branch');

    $this->load->view('content/v_getbranchlist.php');   

    

  }

}