<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends MY_Controller {
public function index()
	{
		//$blog=$this->uri->segment(3);
		$param=@$_GET['search'];
		$this->db->order_by('created_date','desc');
		$this->db->limit('12');
		$this->db->like('Title',$param);
		$blog=$this->db->get('tbl_posts');
		
		
		$this->data['blog']=$blog;
		$this->middle = 'content/v_blogs.php'; 
    	$this->layout();  
		
	}

	public function baca(){
	$slug=$this->uri->segment(3);
	$blog=$this->db->get_where('tbl_posts',array('slug'=>$slug));
	$this->data['blog']=$blog->row();
		if($blog->num_rows()>0){ 
		
		
		$this->db->order_by('id','desc');
		$this->db->limit('4');
		$this->data['recent']=$this->db->get('tbl_posts');
		$this->middle = 'content/v_blogs_detail.php'; 
    	$this->layout();  
		}else{
		redirect(base_url().'blog');	
		}
	}

}