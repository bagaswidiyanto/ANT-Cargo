<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prices extends MY_Controller {

  public function index() {

  	if($this->input->post('dari')=='' || $this->input->post('tujuan')==''){
  		$this->db->order_by('branchName','asc');
		$this->data['kota']=$this->db->get('log_dbranch')->result();
		
  		$this->middle = 'content/v_ongkir'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

   		$this->layout();

  	}else{

      // $this->data['prices']=$this->db->query("SELECT mp.Layanan, mp.MataUang, mp.KGP, mp.KGS, mp.Estimasi, mp.Via FROM master_price mp
      //   INNER JOIN city CAsal ON CAsal.city_id  = mp.IDAsal AND CAsal.city_id = '".$this->input->post('dari')."'
      //   INNER JOIN city CTujuan ON CTujuan.city_id = mp.IDTujuan AND CTujuan.city_id = '".$this->input->post('tujuan')."'")->result();

            $this->data['prices']=$this->db->query("SELECT b.serviceID,b.serviceDescription,b.serviceName as Layanan,mp.minKG,mp.Tarif_Kg1 KGP, mp.Tarif KGS, mp.leadTime Estimasi, e.modaBy Via FROM log_customers_discount mp
        left join log_services b on b.serviceID=mp.serviceID      
        left join log_dbranch c on c.branchID=mp.Origin 
        left join log_dbranch d on d.branchID=mp.Destination 
        left join log_moda e on e.modaID=mp.Moda WHERE mp.custID='1' AND mp.Origin = '".$this->input->post('dari')."' AND mp.Destination = '".$this->input->post('tujuan')."'")->result();
  	// $this->db->order_by('Tanggal','asc');

   //      $this->db->select('em_customers_discount.*,b.nama as origin,c.nama as destination,d.keterangan as services');

   //  $this->db->join('em_branch b', 'b.kode = em_customers_discount.Origin', 'left');

   //   $this->db->join('em_branch c', 'c.kode = em_customers_discount.Destination', 'left');

   //   $this->db->join('em_services d', 'd.kode = em_customers_discount.Satuan', 'left');



  	// $this->data['prices']=$this->db->get_where('em_customers_discount',array('origin'=>$this->input->post('dari'),'destination'=>$this->input->post('tujuan'),'custID'=>'CUST00001'))->result();

     

    $this->data['asal']=$this->db->get_where('log_dbranch a',array('a.branchID'=>$this->input->post('dari')))->row();

    $this->data['tujuan']=$this->db->get_where('log_dbranch b',array('b.branchID'=>$this->input->post('tujuan')))->row();

    $this->data['berat']=$this->input->post('berat');

    $this->middle = 'content/v_prices'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout(); 

    }

  }

} 