<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tracking extends MY_Controller
{

  public function index()
  {
    $this->data['awb'] = $this->input->post('tracking');

    // $this->load->view('content/v_getresi.php');
    $this->middle = 'content/v_tracking'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout();
  }
}
