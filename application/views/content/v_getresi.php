<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-responsive" src="<?= base_url(); ?>assets/img/service_ant.png" alt="First slide">
    </div>
  </div>
</div>

<div style="background: url('<?= base_url(); ?>assets/img/berita.png')  center center repeat; background-size: 90%;
padding: 20px 0; " class="no-mb">

  <?
  // $AWB = $this->input->post('awb');
  if ($awb != '') {
    $arr_kon  = preg_split('/\r\n|[\r\n]/',  $awb);
    if (isset($arr_kon)) {
      $jmlAWB = count($arr_kon);
      $i = 0;
      $koray = "";
      $jml = 0;
      $ttl = 0;
      foreach ($arr_kon as $row1) {

        if ($row1 != '') {
          if ($i == 0) {
            $koray .= ' A.Konid="' . $row1 . '" OR A.No_DO="' . $row1 . '" ';
          } else {
            $koray .= ' OR A.Konid="' . $row1 . '" OR A.No_DO="' . $row1 . '"  ';
          }
          $ttl += 1;
          $i++;
        } else {
          $koray .= '';
          $ttl += 0;
        }
      }

      $kon_array = "  " . $koray . "";
      $jml = $ttl;
    }
  }
  if ($jml == 0) {
  ?>
    <div class="col-md-12" style="display: flex;justify-content: center;">
      <div class="col-md-8">
        <center>
          <div class="alert alert-danger" style="width:100%;" role="alert">No. AWB yang anda cari tidak dapat ditemukan</div>
        </center>
      </div>
    </div>



    <?
  } else {


    $cek = $this->db->query('SELECT COUNT(A.ID) as jml FROM em_konos_detail A where ' . $kon_array . ' ');
    $row = $cek->row();


    if ($row->jml > 0) {
    ?>

      <fieldset>
        <table id="table-tracking" class="table" style="width:100%;border-collapse: collapse;border-radius: 5px;overflow: hidden;border-color:#ccccc;margin-bottom: 30px;">
          <tr style="background-color:#263238;color:#fff; font-weight: bold;text-align: center;">
            <td style="padding-left:8px;border: 1px solid #fff;border-top: none;">No.</td>
            <td style="padding-left:8px;border: 1px solid #fff;border-top: none;">No. AWB</td>
            <td style="padding-left:8px;border: 1px solid #fff;border-top: none;" class="table-tracking-767">No. DO</td>
            <td style="padding-left:8px;border: 1px solid #fff;border-top: none;" class="table-tracking-600">Layanan</td>
            <td style="padding-left:8px;border: 1px solid #fff;border-top: none;" class="table-tracking-767">Moda</td>
            <td style="padding-left:8px;border: 1px solid #fff;border-top: none;" class="table-tracking-480">Asal</td>
            <td style="padding-left:8px;border: 1px solid #fff;border-top: none;" class="table-tracking-480">Tujuan</td>
            <td style="padding-left:8px;border: 1px solid #fff;border-top: none;">Status</td>
            <td style="padding-left:8px;border: 1px solid #fff;border-top: none;">Diterima Oleh</td>
            <td style="padding-left:8px;border: 1px solid #fff;border-top: none;">Detail</td>
          </tr>
          <?
          $no = 1;
          foreach ($this->db->query('SELECT 
        A.ID,
                A.Konid,
                A.No_DO,
                B.kabName as asal,
                F.kabName as tujuan,
              D.serviceName,
              E.modaBy,
              (CASE A.statusDiterima WHEN "1" THEN "BACK TO OFFICE" WHEN "2" THEN "DELIVERED" ELSE "ON PROGRESS" END) as status,
              A.Diterima
        FROM em_konos_detail A 
        LEFT JOIN log_kabupaten B ON A.Asal=B.ID
        LEFT JOIN log_kabupaten F ON A.Tujuan=F.ID  
        -- LEFT JOIN log_dbranch B1 ON B.kode_dbranch=B1.branchID
        -- LEFT JOIN log_kabupaten B2 ON B1.kabupaten=B2.ID

        
        LEFT JOIN log_services D ON D.serviceID=A.Satuan
        LEFT JOIN log_moda E ON E.modaID=A.moda
        WHERE  ' . $kon_array . ' ')->result() as $track) {
          ?>

            <?
            if ($no % 2 == 0) { ?>
              <tr style="background-color:#ddd;text-align: center;color: #263238;">
                <td style="padding-left:8px;border: 1px solid #2f3562;"><?= $no; ?></td>
                <td style="padding-left:8px;border: 1px solid #2f3562;"><?= $track->Konid; ?></td>
                <td style="padding-left:8px;border: 1px solid #2f3562;" class="table-tracking-767"><?= $track->No_DO; ?></td>
                <td style="padding-left:8px;border: 1px solid #2f3562;" class="table-tracking-600"><?= $track->serviceName; ?></td>
                <td style="padding-left:8px;border: 1px solid #2f3562;" class="table-tracking-767"><?= $track->modaBy; ?></td>
                <td style="padding-left:8px;border: 1px solid #2f3562;" class="table-tracking-480"><?= strtoupper($track->asal); ?></td>
                <td style="padding-left:8px;border: 1px solid #2f3562;" class="table-tracking-480"><?= strtoupper($track->tujuan); ?></td>
                <td style="padding-left:8px;border: 1px solid #2f3562;"><?= $track->status; ?></td>
                <td style="padding-left:8px;border: 1px solid #2f3562;"><?= $track->Diterima; ?></td>
                <td style="padding: 5px 8px;border: 1px solid #2f3562;">
                  <form action="<?= base_url(); ?>tracking" method="post">
                    <input type="hidden" name="tracking" value="<?= $track->Konid ?>">
                    <input type="submit" data-loading-text="Loading..." class="btn btn-primary" value="Detail" style="font-size: 12px;padding: 0px 10px;background: #263238 !important;color: #cacaca;font-weight: bold;margin-bottom: 0px;">
                  </form>
                  <!-- <a class="btn btn-primary" onclick="getDetail('<?= $track->ID; ?>')" style="font-size: 12px;padding: 0px 10px;background: #2f3562 !important;color: #cacaca;font-weight: bold;margin-bottom: 0px;">Detail</a> -->

                </td>
              </tr>
            <?
            } else {
            ?>
              <tr style="background-color:#fff;text-align: center;color: #263238;">
                <td style="padding-left:8px;border: 1px solid #2f3562;"><?= $no; ?></td>
                <td style="padding-left:8px;border: 1px solid #2f3562;"><?= $track->Konid; ?></td>
                <td style="padding-left:8px;border: 1px solid #2f3562;" class="table-tracking-767"><?= $track->No_DO; ?></td>
                <td style="padding-left:8px;border: 1px solid #2f3562;" class="table-tracking-600"><?= $track->serviceName; ?></td>
                <td style="padding-left:8px;border: 1px solid #2f3562;" class="table-tracking-767"><?= $track->modaBy; ?></td>
                <td style="padding-left:8px;border: 1px solid #2f3562;" class="table-tracking-480"><?= strtoupper($track->asal); ?></td>
                <td style="padding-left:8px;border: 1px solid #2f3562;" class="table-tracking-480"><?= strtoupper($track->tujuan); ?></td>
                <td style="padding-left:8px;border: 1px solid #2f3562;"><?= $track->status; ?></td>
                <td style="padding-left:8px;border: 1px solid #2f3562;"><?= $track->Diterima; ?></td>
                <td style="padding: 5px 8px;border: 1px solid #2f3562;">

                  <form action="<?= base_url(); ?>tracking" method="post">
                    <input type="hidden" name="tracking" value="<?= $track->Konid ?>">
                    <input type="submit" data-loading-text="Loading..." class="btn btn-primary" value="Detail" style="font-size: 12px;padding: 0px 10px;background: #cacaca !important;color: #2f3562;font-weight: bold;margin-bottom: 0px;">
                  </form>
                  <!-- <a class="btn btn-primary" onclick="getDetail('<?= $track->ID; ?>')" style="font-size: 12px;padding: 0px 10px;background: #cacaca !important;color: #2f3562;font-weight: bold;margin-bottom: 0px;">Detail</a> -->
                </td>
              </tr>
            <?
            } ?>

          <?
            $no++;
          } ?>
        </table>
      </fieldset>
    <? } else { ?>
      <div class="col-md-12" style="display: flex;justify-content: center;">
        <div class="col-md-8">
          <center>
            <div class="alert alert-danger" style="width:100%;" role="alert">No. AWB yang anda cari tidak dapat ditemukan</div>
          </center>
        </div>
      </div>

  <?php
    }
  }
  ?>