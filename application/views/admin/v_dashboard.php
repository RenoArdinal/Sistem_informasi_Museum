<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>M-Techno | Pengguna</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assetsadm/images/favicon.png' ?>">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assetsadm/bootstrap/css/bootstrap.min.css' ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assetsadm/font-awesome/css/font-awesome.min.css' ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assetsadm/plugins/datatables/dataTables.bootstrap.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assetsadm/dist/css/AdminLTE.min.css' ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assetsadm/dist/css/skins/_all-skins.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assetsadm/plugins/toast/jquery.toast.min.css' ?>" />

</head> 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>


  </section>

  <!-- Main content -->
  <section class="content">
    <div class="alert alert-info mt-2" role="alert"> <strong>WELCOME ! Selamat datang di Museum Adityawarman <i class="fa fa-heart"></i></strong></div>
    <!-- Info boxes -->
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>
          <?php
          $query = $this->db->query("SELECT * FROM tbl_pengunjung WHERE DATE_FORMAT(tanggal_kunjungan,'%m%y')=DATE_FORMAT(CURDATE(),'%m%y')");
          $jml = $query->num_rows();
          ?>
          <div class="info-box-content">
            <span class="info-box-text">Visitor<br> Bulan Ini</span>
            <span class="info-box-number"><?php echo number_format($jml); ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
          <?php
          $query = $this->db->query("SELECT * FROM tbl_portfolio");
          $jml = $query->num_rows();
          ?>
          <div class="info-box-content">
            <span class="info-box-text">FASILITAS</span>
            <span class="info-box-number"><?php echo $jml; ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- /.col -->
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="fa fa-key"></i></span>
          <?php
          $query = $this->db->query("SELECT * FROM tbl_pengguna");
          $jml = $query->num_rows();
          ?>
          <div class="info-box-content">
            <span class="info-box-text">PENGGUNA</span>
            <span class="info-box-number"><?php echo $jml; ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-xs-12">
          <div class="box">
              <div class="box">
                  <!-- /.box-header -->
                  <div class="box-body">
                      <table id="example1" class="table table-striped" style="font-size:13px;">
                          <thead>
                              <tr>
                                  <th>id</th>
                                  <th>Nama Pengunjung</th>
                                  <th>Pekerjaan</th>
                                  <th>Jenis Kelamin</th>
                                  <th>Nomor Telepon</th>
                                  <th>Tipe</th>
                                  <th>Tanggal Kunjungan</th>
                                  <th>Jam Kunjungan</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($data as $i) : // Menggunakan $data yang dikirim dari controller
                                $pengunjung_id = $i['pengunjung_id'];
                                $nama_pengunjung = $i['nama_pengunjung'];
                                $pekerjaan_pengunjung = $i['pekerjaan_pengunjung'];
                                $jenis_kelamin = $i['jenis_kelamin'];
                                $nomor_telepon = $i['nomor_telepon'];
                                $tipe_pengunjung = $i['tipe_pengunjung'];
                                $tanggal_kunjungan = $i['tanggal_kunjungan'];
                                $jam_kunjungan = $i['jam_kunjungan'];
                            ?>
                                <tr>
                                    <td><?php echo $pengunjung_id; ?></td>
                                    <td><?php echo $nama_pengunjung; ?></td>
                                    <td><?php echo $pekerjaan_pengunjung; ?></td>
                                    <td><?php echo $tipe_pengunjung; ?></td>
                                    <td><?php echo $tanggal_kunjungan; ?></td>
                                    <td><?php echo $jam_kunjungan; ?></td>
                                </tr>
                            <?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </section>
</div>


<?php
$this->load->view('admin/v_footer');
?>


</div>
<!-- ./wrapper -->

<script src="<?php echo base_url() . 'assetsadm/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() . 'assetsadm/bootstrap/js/bootstrap.min.js' ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url() . 'assetsadm/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assetsadm/plugins/datatables/dataTables.bootstrap.min.js' ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() . 'assetsadm/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url() . 'assetsadm/plugins/fastclick/fastclick.js' ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() . 'assetsadm/dist/js/app.min.js' ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() . 'assetsadm/dist/js/demo.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assetsadm/plugins/toast/jquery.toast.min.js' ?>"></script>
<script>
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>

</body>

</html>