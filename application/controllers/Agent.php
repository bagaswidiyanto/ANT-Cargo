<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class agent extends MY_Controller {

  public function index() {

  



  	$this->data['kereta']=$this->db->get('tbl_agent')->result();

    $this->middle = 'content/v_agent.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout(); 

    

  }

}