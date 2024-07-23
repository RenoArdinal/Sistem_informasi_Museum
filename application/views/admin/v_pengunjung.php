<!--Counter Inbox-->

<!DOCTYPE html>
<html>

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

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Data Pengunjung
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Pengunjung</a></li>
                    <li class="active">Data Pengunjung</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
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
                                            <th>Tipe</th>
                                            <th>Nomor Telepon</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Keperluan</th>
                                            <th>Tanggal Kunjungan</th>
                                            <th>Jam Kunjungan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($data as $i) : // Menggunakan $data yang dikirim dari controller
                                          $pengunjung_id = $i['pengunjung_id'];
                                          $nama_pengunjung = $i['nama_pengunjung'];
                                          $pekerjaan_pengunjung = $i['pekerjaan_pengunjung'];
                                          $tipe_pengunjung = $i['tipe_pengunjung'];
                                          $nomor_telepon = $i['nomor_telepon'];
                                          $jenis_kelamin = $i['jenis_kelamin'];
                                          $keperluan = $i['keperluan'];
                                          $tanggal_kunjungan = $i['tanggal_kunjungan'];
                                          $jam_kunjungan = $i['jam_kunjungan'];
                                      ?>
                                          <tr>
                                              <td><?php echo $pengunjung_id; ?></td>
                                              <td><?php echo $nama_pengunjung; ?></td>
                                              <td><?php echo $pekerjaan_pengunjung; ?></td>
                                              <td><?php echo $tipe_pengunjung; ?></td>
                                              <td><?php echo $nomor_telepon; ?></td>
                                              <td><?php echo $jenis_kelamin; ?></td>
                                              <td><?php echo $keperluan; ?></td>
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
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
        $this->load->view('admin/v_footer');
        ?>
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->


    <!-- jQuery 2.2.3 -->
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
    <!-- page script -->
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