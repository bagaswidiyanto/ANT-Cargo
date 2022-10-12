<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Berita extends MY_Controller
{
	public function index()
	{
		//$blog=$this->uri->segment(3);
		$param = @$_GET['search'];

		$this->load->library('pagination');
		$jml = $this->db->count_all('tbl_posts');
		$config['base_url'] = base_url() . 'berita/index/';
		$config['uri_segment'] = 3;
		$config['total_rows'] = $jml;
		$config['per_page'] = 5;
		$config['full_tag_open'] = '<center><ul class="pagination pagination-sm no-margin">';
		$config['full_tag_close'] = '</ul></center>';
		$config['cur_tag_open'] = '<li><a style="color:#FFF;background:#d07609;"><b>';
		$config['cur_tag_close'] = '</b></a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->pagination->initialize($config);


		$this->db->order_by('created_date', 'desc');
		$this->db->limit($config['per_page']);
		$this->db->offset($page);
		$this->db->like('Title', $param);
		$blog = $this->db->get('tbl_posts');


		$this->data['blog'] = $blog;
		$this->data['pagination'] = $this->pagination->create_links();
		$this->middle = 'content/v_blogs.php';
		$this->layout();
	}

	public function baca()
	{
		$slug = $this->uri->segment(3);
		$blog = $this->db->get_where('tbl_posts', array('slug' => $slug));
		$this->data['blog'] = $blog->row();
		if ($blog->num_rows() > 0) {


			$this->db->order_by('id', 'desc');
			$this->db->limit('4');
			$this->data['recent'] = $this->db->get('tbl_posts');
			$this->middle = 'content/v_blogs_detail.php';
			$this->layout();
		} else {
			redirect(base_url() . 'berita');
		}
	}
}
