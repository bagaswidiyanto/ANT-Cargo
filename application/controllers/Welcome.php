<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends MY_Controller
{
	public function index()
	{
		$this->data['slider'] = $this->db->get('tbl_slider')->result();
		$this->data['client'] = $this->db->get('tbl_client')->result();
		$this->data['maps'] = $this->db->get('tbl_maps')->row();
		$this->db->limit('3');
		$this->db->order_by('id', 'desc');
		$this->data['posts'] = $this->db->get('tbl_posts')->result();
		$this->data['brands'] = $this->db->get('tbl_brands')->result();
		$this->data['branch'] = $this->db->get('log_dbranch')->result();
		$this->data['gallery'] = $this->db->get('tbl_gallery')->result();
		$this->middle = 'content/home'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
		$this->layout();
	}
}
