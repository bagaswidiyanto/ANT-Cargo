<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Career extends MY_Controller {
  public function index() {
   // $this->data['cabang']=$this->db->get('log_branch')->result();
    
    $this->middle = 'content/v_career'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout(); 
  }
  public function careerdetail() {
    if($this->uri->segment(3)!=''){
    $this->data['career']=$this->db->get_where('tbl_carrer',array('id'=>$this->uri->segment(3)))->row();
    
    $this->middle = 'content/v_detail_career'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout(); 
    }else{
        redirect('career');
    }
  }
}