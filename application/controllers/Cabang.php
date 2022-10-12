<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cabang extends MY_Controller {
  public function index() {
   // $this->data['cabang']=$this->db->get('log_branch')->result();
    
    $this->middle = 'content/v_cabang'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout(); 
  }
  
}