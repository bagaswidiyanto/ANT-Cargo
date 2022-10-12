<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail extends CI_Controller {

	
	public function index()
	{
		
		$this->load->library('email');

		$name=$this->input->post('name');
		$address=$this->input->post('address');
		$subject=$this->input->post('subject');
		$email=$this->input->post('email');
		$contact=$this->input->post('contact');
		$message=$this->input->post('message');

		 
		$this->db->query("INSERT INTO tbl_email_header (judul,nama,email,noTelp,alamat) VALUES ('".$subject."','".$name."','".$email."','".$contact."','".$address."') ");
		$cek=$this->db->query("SELECT * from tbl_email_header order by id desc limit 1")->row();

		$this->db->query("INSERT INTO tbl_email_detail (headerID,isi) VALUES ('".$cek->id."','".$message."') ");

		$setting=$this->db->get('tbl_email',1)->row();

		$this->email->from($email, $name);
		$this->email->to($setting->emailTo);
		$this->email->cc($setting->emailCc);
		$this->email->bcc($setting->emailBcc);

		$this->email->subject($setting->emailSubject);
		$this->email->message('Resi : '.$subject.'<br/>Name : '.$name.'<br/> Address : '.$address.'<br/> Contact : '.$contact. '<br/> Message : '.$message);

		$this->email->send();

		echo $this->email->print_debugger();

	}

	public function partnership(){


		$this->load->library('email');

		$name=$this->input->post('name');
		$address=$this->input->post('address');
		$email=$this->input->post('email');
		$contact=$this->input->post('contact');
		

		 
		$this->db->query("INSERT INTO tbl_partner_form (nama,email,notelp,alamat) VALUES ('".$name."','".$email."','".$contact."','".$address."') ");
		

		$setting=$this->db->get('tbl_email',1)->row();

		$this->email->from($email, $name);
		$this->email->to($setting->emailTo);
		$this->email->cc($setting->emailCc);
		$this->email->bcc($setting->emailBcc);

		$this->email->subject('MESSAGE FROM PARTNERSHIP FORM');
		$this->email->message('Name : '.$name.'<br/> Address : '.$address.'<br/> Contact : '.$contact. '<br/> Message : '.$message);

		$this->email->send();

		echo $this->email->print_debugger();

	}
}
