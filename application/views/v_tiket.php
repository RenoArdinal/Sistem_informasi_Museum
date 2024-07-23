<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/museum.png'); ?>" rel="icon">
  <link href="<?php echo base_url('assets/img/museum.png'); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/venobox/venobox.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/aos/aos.css" rel="stylesheet') ?>">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

  <!-- Modernizr JS -->
  <script src="<?php echo base_url() . 'theme/js/modernizr-2.6.2.min.js' ?>"></script>
  <?php
  error_reporting(0);
  function limit_words($string, $word_limit)
  {
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
  }

  ?>

</head>

<body>

  <!-- =======================================================
  * Template Name: Flexor - v2.0.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>

    <!-- ======= Header ======= -->
    <header id="header">
      <div class="container d-flex">
        <div class="logo mr-auto">
          <h5 class="text-light"><a href=""><span><img style="width:60px;" src="<?php echo base_url('assets/img/museum.png') ?>" alt="" class="img-fluid mb-3">
                <b>Museum Adityawarman</b></span></a></h5>
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="<?= base_url('home'); ?>">Beranda</a></li>
            <!-- <li><a data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-warning" href="#" style="color:white;"> Pesan Tiket</a></li> -->

          </ul>
        </nav><!-- .nav-menu -->

      </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center mb-5">
      <div class="container" data-aos="fade-in">
        <h1>DATA PEMESANAN TIKET</h1>
        <h2>Cari Data tiketmu dengan mengetik No Telfon atau email</h2>
        <form class="form-inline" action="<?php echo base_url('tiket/search'); ?>" method="POST">
          <div class="form-group">
            <input type="text" style="width:410px" required="" class="form-control" name="tiket" id="inputAddress" placeholder="Ketik keyword">
          </div>
          <div class="form-group">
            <button class="btn btn-info my-2 my-sm-0 ml-2" type="submit" name="cari">Cari</button>
          </div>
        </form>
      </div>
    </section><!-- End Hero -->

    <div class="data-ticket">
      <div class="container mb-5">
        <?= $this->session->flashdata('notif'); ?>
      </div>
    </div>

    <section class="data-ticket">
      <div class="container mb-5">
        <div class="row">

          <?php foreach ($tikets as $tiket) : ?>
            <div class="col-lg-6 mt-4">
              <div class="card mb-" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="<?= base_url('assets/img/tiket.jpg'); ?>" class="card-img mt-3" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><?= $tiket['kode_tiket']; ?></h5>
                      <p class="card-text"><?= $tiket['email']; ?></p>
                      <p class="card-text"><?= $tiket['jumlah_orang']; ?> Tiket</p>
                      <p class="card-text">Total Biaya: <?= $tiket['total_biaya']; ?></p>
                      <button class="btn btn-primary" data-toggle="modal" data-target="#detailModal<?= $tiket['kode_tiket']; ?>">Detail</button>
                      <button class="btn btn-warning" data-toggle="modal" data-target="#bayarModal<?= $tiket['kode_tiket']; ?>">Belum Dibayar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal Detail -->
            <div class="modal fade" id="detailModal<?= $tiket['kode_tiket']; ?>" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel<?= $tiket['kode_tiket']; ?>" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel<?= $tiket['kode_tiket']; ?>">DETAIL TIKETMU</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class='fa fa-times-circle'></i></button>
                  </div>
                  <div class="modal-body p-4">
                    <form>
                      <div class="form-group">
                        <h1><b>
                            <center><?= $tiket['kode_tiket']; ?></center>
                          </b></h1>
                        <hr>
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" value="<?= $tiket['email']; ?>" readonly>
                      </div>
                      <?php $pengunjung = $this->M_tiket->get_pengunjung_by_id_tiket($tiket['id'])[0]; ?>
                      <div class="form-group">
                        <label for="tanggal_kunjungan">Tanggal Kunjungan</label>
                        <input type="text" class="form-control" id="tanggal_kunjungan" value="<?= $pengunjung['tanggal_kunjungan']; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="jam_kunjungan">Jam Kunjungan</label>
                        <input type="text" class="form-control" id="jam_kunjungan" value="<?= $pengunjung['jam_kunjungan']; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="keperluan">Keperluan</label>
                        <input type="text" class="form-control" id="keperluan" value="<?= $pengunjung['keperluan']; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="jumlah_orang">Jumlah Tiket</label>
                        <input type="number" class="form-control" id="jumlah_orang" value="<?= $tiket['jumlah_orang']; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="total_biaya">Total Biaya</label>
                        <input type="text" class="form-control" id="total_biaya" value="<?= $tiket['total_biaya']; ?>" readonly>
                      </div>
                    </form>
                    <?php $pengunjungs = $this->M_tiket->get_pengunjung_by_id_tiket($tiket['id']); ?>
                    <?php $index = 1; ?>
                      <?php foreach ($pengunjungs as $pengunjung) : ?>
                      <div class="form-group-container">
                        <div class="form-group-header">Deskripsi Pengunjung <?= $pengunjung['tipe_pengunjung']; ?> <?= $index; ?></div>
                        <div class="form-group">
                        <?php $index++; ?>
                          <label for="nama_pengunjung">Nama</label>
                          <input type="text" class="form-control" id="nama_pengunjung" value="<?= $pengunjung['nama_pengunjung']; ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="pekerjaan_pengunjung">Pekerjaan</label>
                          <input type="text" class="form-control" id="pekerjaan_pengunjung" value="<?= $pengunjung['pekerjaan_pengunjung']; ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="jenis_kelamin">Jenis Kelamin</label>
                          <input type="text" class="form-control" id="jenis_kelamin" value="<?= $pengunjung['jenis_kelamin']; ?>" readonly>
                        </div>
                        <?php if ($pengunjung['tipe_pengunjung'] == 'Dewasa') : ?>
                          <div class="form-group">
                            <label for="nomor_telpon">No Telepon</label>
                            <input type="text" class="form-control" id="nomor_telepon" value="<?= $pengunjung['nomor_telepon']; ?>" readonly>
                          </div>
                        <?php endif; ?>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal Bayar -->
            <div class="modal fade" id="bayarModal<?= $tiket['kode_tiket']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalTambah" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user"></i> KONFIRMASI PEMBAYARAN TIKET</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class='fa fa-times-circle'></i></button>
                  </div>
                  <div class="modal-body p-4">
                    <div class="alert alert-primary" role="alert">
                      Data konfirmasi tiket tidak bisa diubah, <strong>pastikan anda mengisi data dengan benar!</strong>
                    </div>
                    <form action="<?= base_url('tiket/add_konfirmasi'); ?>" method="POST" enctype="multipart/form-data">
                      <input type="hidden" class="form-control" required="" name="kode_tiket" value="<?= $tiket['kode_tiket']; ?>" id="kode_tiket" placeholder="">
                      <div class="form-group">
                        <label for="no_rek">No Rekening</label>
                        <input type="text" class="form-control" required="" name="no_rek" id="no_rek" placeholder="No Rekening">
                        <small class="form-text form-danger"><?= form_error('no_rek'); ?></small>
                      </div>
                      <div class="form-group">
                        <label for="nama">Nama Pemilik Rekening</label>
                        <input type="text" class="form-control" required="" name="nama" id="nama" placeholder="Nama">
                      </div>
                      <div class="form-group">
                        <label for="foto">Foto Bukti Transfer</label>
                        <input type="file" class="form-control" required="" name="foto" id="foto">
                      </div>
                      <input type="hidden" name="tgl_tf" value="<?= date('Y-m-d'); ?>">
                      <input type="hidden" name="status" value="">
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="input" class="btn btn-primary">Simpan</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery-sticky/jquery.sticky.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/venobox/venobox.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/aos/aos.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>

    <style>
      .form-group-container {
        border: 1px solid #ddd;
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 5px;
        background-color: #f9f9f9;
      }
      .form-group-header {
        font-weight: bold;
        margin-bottom: 10px;
      }
    </style>

  </body>

</html>