<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kereta extends MY_Controller {

  public function index() {

  



  	$this->data['kereta']=$this->db->get('tbl_kereta')->result();

    $this->middle = 'content/v_kereta.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout(); 

    

  }

}