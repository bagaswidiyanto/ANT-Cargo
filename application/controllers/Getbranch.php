<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Getbranch extends MY_Controller
{

  public function index()
  {
    $this->data['branch'] = $this->input->post('branch');

    // $this->load->view('content/v_getresi.php');
    $this->middle = 'content/v_getbranch'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout();
  }
}
