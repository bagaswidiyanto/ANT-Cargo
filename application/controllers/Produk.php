<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk extends MY_Controller {

  public function index() {

  



  	$this->data['gallery']=$this->db->get('tbl_gallery')->result();

    $this->middle = 'content/v_produk.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout(); 

    

  }

}