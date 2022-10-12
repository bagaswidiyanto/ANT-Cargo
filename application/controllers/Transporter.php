<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Transporter extends MY_Controller
{

  public function index()
  {

    $this->data['transport'] = $this->db->get('tbl_transporter')->result();


    $this->middle = 'content/v_transporter'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout();
  }
}
