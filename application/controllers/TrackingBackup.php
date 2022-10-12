<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tracking extends MY_Controller
{

  public function index()
  {

    if ($this->input->post('tracking') == '') {

      $this->middle = 'content/v_resi'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

      $this->layout();
    } else {



      $this->data['query'] = $this->db->query("SELECT 
                A.Konid,
                A.namaPengirim,
                B.kabName as asal,
                C.kabName as tujuan,
                A.kotaPengirim,
                A.kotaPenerima,
                A.namaPenerima,
              A.Koli,
              A.Kilo,
              A.Diterima,
              A.Tgl_Diterima,
              A.keteranganDiterima,
              A.CreatedUserId,
              A.createDate,
              A.No_Manifest
              FROM em_konos_detail A 
              LEFT JOIN log_kabupaten B ON A.Asal=B.ID 
              LEFT JOIN log_kabupaten C ON A.Tujuan=C.ID
              WHERE Konid LIKE '" . $this->input->post('tracking') . "'");
      $this->data['tracking'] = $this->db->query("SELECT Tanggal,Status FROM em_log_tracking WHERE Barcode LIKE '" . $this->input->post('tracking') . "' GROUP BY Status ORDER BY Tanggal DESC")->result_array();


      //   $this->db->order_by('Tanggal','asc');
      // $this->db->join('em_branch b', 'em_log_tracking.Location = b.kode');

      $this->data['barcode'] = $this->input->post('tracking');

      // $this->middle = 'content/v_tracking'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

      $this->layout();
    }
  }
}
