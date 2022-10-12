<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cabang extends MY_Controller {
  public function index() {
   // $this->data['cabang']=$this->db->get('log_branch')->result();
    
    $this->middle = 'content/v_branch'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout(); 
  }
  public function cabangdetail() {
    if($this->uri->segment(3)!=''){
    $this->data['detailcabang']=$this->db->get_where('log_branch',array('kode'=>$this->uri->segment(3)))->row();
    
    $this->middle = 'content/v_detail_branch'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout(); 
    }else{
        redirect('cabang');
    }
  }
}