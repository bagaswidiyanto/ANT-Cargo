<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Testimonial extends MY_Controller {
  public function index() {
  	$this->data['testimonial']=$this->db->get_where('tbl_testimonial',array('status'=>1))->result();

    $this->middle = 'content/v_testimonial'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout(); 
  }
  public function tambah() {
  	//$this->data['testimonial']=$this->db->get('tbl_testimonial')->result();

    $this->middle = 'content/v_testimonial_tambah'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout(); 
  }
  public function baca() {
  	$id=$this->uri->segment(3);
  	$this->data['testimonial']=$this->db->get_where('tbl_testimonial',array('id'=>$id))->row();

    $this->middle = 'content/v_testimonial_baca'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout(); 
  }

  public function kirim() {
  	$data=array(
  	'nama'=>$this->input->post('nama'),
  	'email'=>$this->input->post('email'),
  	'wilayah'=>$this->input->post('wilayah'),
  	'judul'=>$this->input->post('judul'),
  	'rating'=>$this->input->post('rating'),
  	'testimoni'=>$this->input->post('testimonial')
  	);

  	$this->db->insert('tbl_testimonial',$data);
  }

}