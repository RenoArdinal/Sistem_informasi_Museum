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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

  <!-- Custom CSS for Hero Section -->
  <style>
    #hero {
      background: url('<?php echo base_url('assets/img/profil.jpg'); ?>') center center;
      background-size: cover;
      /* Mengatur gambar agar menutupi seluruh kontainer */
      background-repeat: no-repeat;
      /* Mencegah pengulangan gambar */
      position: relative;
      z-index: 1;
    }

    #hero::before {
      content: "";
      background: rgba(0, 0, 0, 0.5);
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: -1;
    }
  </style>

  <!-- Modernizr JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

        <nav class="nav-menu d-none">
          <ul>
            <li class="active"><a href="#header">Beranda</a></li>
            <li><a href="#about">Tentang Kami</a></li>
            <li><a href="#services">Fasilitas</a></li>
            <li><a href="#portfolio">Galery</a></li>
            <li><a href="#faq">Faq</a></li>
            <li><a href="#contact"> Contact</a></li>
            <li><a data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-info" href="#" style="color:white;"> Pesan Tiket</a></li>
          </ul>
        </nav><!-- .nav-menu -->

      </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
      <div class="container" data-aos="fade-in">
        <h1>Selamat Datang di Museum Adityawarman !</h1>
        <h2></h2>
        <div class="d-flex align-items-center" style="margin-bottom: 0;">
          <i class="bx bxs-right-arrow-alt get-started-icon" style="margin-right: 5px;"></i>
          <a href="#about" class="btn-get-started scrollto" style="margin-bottom: 0;">Mari Berkenalan</a>
        </div>
      </div>
    </section><!-- End Hero -->

    <main id="main">
      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us">
        <div class="container">
          <div class="row">
            <div class="col" data-aos="fade-up">
              <div class="content" style="padding: 20px; margin: 20px 10px 0 10px; border: 1px solid #ddd; border-radius: 5px; text-align: justify;">
                <h3>Profil Museum Adityawarman</h3>
                <p data-aos="fade-up">Museum Adityawarman berlokasi di Jalan Diponegoro No. 10 Padang, diresmikan 16 Maret 1977 oleh Mendikbud Prof. DR. Syarif Thayeb. Berdasarkan SK Mendikbud RI No. 01/1989 tanggal 9 Januari 1989, Museum ini diberi nama Adityawarman. Hal tersebut untuk mengingat jasa seorang raja Minangkabau di abad XIV Masehi.</p>
                <p data-aos="fade-up">Tentang kebesarannya dapat kita ketahui melalui peninggalannya berupa prasasti yang terdapat di Saruaso, Lima Kaum, Pagaruyung, serta arca Bhairawa (sekarang berada di Museum Nasional - Jakarta) dan candi Padang Rocok di daerah Sijunjung.</p>
                <p data-aos="fade-up">Sesuai dengan SK Pemda Tingkat II Padang No. 3071/SDTK/XVIII-74 tanggal 8 Agustus 1974. Museum ini berlokasi di komplek Lapangan Tugu Jl. Diponegoro Padang. Dibangun di atas tanah seluas 2,5 Ha ditumbuhi 100 jenis tanaman berupa pohon pelindung, tanaman hias dan apotek hidup.</p>
                <p data-aos="fade-up">Lokasi ini dulunya dikenal dengan Taman Melati, sebuah taman tempat bermain warga Kota Padang. Pada zaman penjajahan Belanda di lokasi ini berdiri Tugu Micheils yang pada masa penjajahan jepang menurut ceritanya, tugu ini diruntuhkan, dan besi-besinya dibawa ke Jepang</p>
                <p data-aos="fade-up">Museum sebagai lembaga pelestarian warisan budaya melaksanakan kegiatan penerbitan, seminar, pagelaran/lomba, Survei Pengadaan Koleksi, Supervisi Museum Lokal, Museum Masuk Sekolah, Penyuluhan Informasi Budaya, dll.</p>
                <div class="text-center">
                  <a href="#services" class="more-btn">Fasilitas<i class="bx bx-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Why Us Section -->

      <div class="jumbotron jumbotron-fluid bg-warning">
        <div class="container">
          <div class="row" style="display: flex; align-items: center;">
            <div class=" col-lg-6">
              <h1 class="text-white"><b>PESAN TIKET SEKARANG</b></h1>
              <p class="lead text-white">Beli tiketmu sekarang, jadilah member dan dapatkan diskon menarik setiap pembelian di Museum Adityawarman</p>
            </div>
            <div class="col-lg-3">
              <a data-toggle="modal" data-target="#modaltambah" class="btn btn-xl btn-danger pesan-tiket" href="#contact"> Pesan Tiket</a>
            </div>
            <div class="col-lg-3">
              <a href="<?= base_url('tiket'); ?>" class="btn btn-xl btn-primary pesan-tiket" href="#contact"> CEK Tiketmu</a>
            </div>
          </div>
        </div>
      </div>


      <!-- ======= About Section ======= -->
      <section id="about" class="about section-bg">
        <div class="container">

          <div class="row">
            <div class="col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch" data-aos="fade-right">
              <iframe class="video-box" width="100%" height="450" src="https://www.youtube.com/embed/ZH4J0GZ9KSs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </a>
            </div>

            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center px-lg-5">
              <h3 data-aos="fade-up">Museum Adityawarman</h3>
              <div class="icon-box" data-aos="fade-up">
                <div class="icon"><i class="bx bx-rocket"></i></div>
                <h4 class="title"><a href="">Visi</a></h4>
                <p class="description">Terwujudnya Ruang Publik untuk Pelestarian Warisan Budaya dan Cagar Budaya sebagai Warisan Budaya Dunia</p>
              </div>

              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bx bx-star"></i></div>
                <h4 class="title"><a href="">Misi</a></h4>
                <div class="description">
                  <li>Meningkatkan pelestarian warisan budaya dan cagar budaya melalui penelitian, pengkajian, pengumpulan, pengelolaan, perawatan, pengawetan dan penyajian koleksi museum.</li>
                  <li>Menyempurnakan registrasi dan herregistrasi koleksi museum.</li>
                  <li>Meningkatkan pengamanan, pelindungan dan pendokumentasian koleksi museum.</li>
                  <li>Meningkatkan kualitas layanan bimbingan, edukasi, dan promosi koleksi museum.</li>
                  <li>Meningkatkan kerjasama dan kemitraan dengan berbagai pihak.</li>
                  <li>Meningkatkan pemasaran dalam penyebarluasan informasi, promosi jasa dan pemanfaatan fasilitas museum.</li>
                  <li>Mewujudkan pameran koleksi museum yang bertaraf nasional.</li>
                  <li>Meningkatkan pengelolaan perpustakaan museum.</li>
                </div>
              </div>

              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bx bx-pin"></i></div>
                <h4 class="title"><a href="">Alamat</a></h4>
                <p class="description">Jalan Diponegoro No. 10 Kota Padang</p>
              </div>

            </div>
          </div>

        </div>
      </section><!-- End About Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="team section-bg">
        <div class="container">

          <div class="section-title">
            <h2 data-aos="fade-up">Fasilitas</h2>
            <p data-aos="fade-up">Berbagai macam fasilitas yang sangat lengkap di Museum Adityawarman yang akan semakin menambah kenyamanan dan kebahagiaan anda dalam menikmati liburan bersama keluarga.</p>
          </div>

          <div class="row">
            <?php
            foreach ($fasilitas->result_array() as $j) :
              $post_id = $j['port_id'];
              $port_judul = $j['port_judul'];
              $port_image = $j['port_image'];
            ?>

              <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-5" data-aos="fade-up">
                <div class="member">
                  <div class="member-img">
                    <img src="<?php echo base_url() . 'assetsadm/images/' . $port_image; ?>" class="img-fluid" alt="">
                  </div>
                  <div class="member-info">
                    <h4><?php echo $port_judul; ?></h4>
                    <!-- <span>Chief Executive Officer</span> -->
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <!-- ======= Gallery Section ======= -->
      <section id="portfolio" class="Portfolio">
        <div class="container">

          <div class="section-title">
            <h2 data-aos="fade-up">Gallery</h2>
            <p data-aos="fade-up">Foto-foto taman Museum Adityawarman Indah berupa keindahan taman Museum Adityawarman , fasilitas-fasilitas, dan kegiatan-kegiatan yang pernah dilaksanakan di dalam lingkungan Museum Adityawarman.</p>
          </div>

          <div class="row portfolio-container mt-5" data-aos="fade-up" data-aos-delay="200">
            <?php
            foreach ($galeri->result_array() as $j) :
              $galeri_image = $j['galeri_gambar'];
              $galeri_judul = $j['galeri_judul'];
            ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img style="border-radius:10px;" src="assetsadm/images/<?= $galeri_image; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <p><b><?= $galeri_judul; ?></b></p>
                  <a href="assetsadm/images/<?= $galeri_image; ?>" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->

      <!-- ======= F.A.Q Section ======= -->
      <section id="faq" class="faq section-bg">
        <div class="container">

          <div class="section-title">
            <h2 data-aos="fade-up">F.A.Q</h2>
            <p data-aos="fade-up">Beberapa kumpulan pertanyan yang sering diajukan kepada kami, silahkan disimak untuk mengetahui harga tiket, jam buka, hari beroprasi, dan lain-lain yang berhubungan dengan Museum Adityawarman. </p>
          </div>

          <div class="faq-list mt-5">
            <ul>
              <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Pukul Berapa Museum Adityawarman Buka ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                  <p>
                    Museum Adityawarman buka selasa-minggu mulai pukul 09:00 pagi sampai pukul 16:00 sore.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Apakah Museum Adityawarman tetap buka saat tanggal merah atau tanggal libur Nasional ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                  <p>
                    Untuk memenuhi kebutuhan liburanmu Museum Adityawarman tetap buka walaupun hari libur nasional.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Apakah ada batasan umur saat ingin masuk ke Museum Adityawarman ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                  <p>
                    Untuk memaasuki Museum Adityawarman Indah memang tida ada batasan usia.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Berapakah harga tiket masuk di Museum Adityawarman ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                  <p>
                    Harga tiket di Museum Adityawarman sangat terjangkau, yaitu sebesar Rp 5.000 untuk dewasa dan Rp 3.000 untuk anak-anak.
                  </p>
                </div>
              </li>

            </ul>
          </div>

        </div>
      </section><!-- End F.A.Q Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">

          <div class="section-title">
            <h2 data-aos="fade-up">Kontak</h2>
            <p data-aos="fade-up">Mari lebuh dekat kami, jangan pernah merasa sungkan untuk bertanya, memberi kritik bagi Museum Adityawarman kami akan sangat senang jika bisa lebih dekat dengan anda, kirimkan pertanyaan, saran atau kritik anda melalui kontak dibawah ini</p>
          </div>

          <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Alamat</h3>
                <p><a href="https://maps.app.goo.gl/Vzj3r5ZDdQ6rKNB7A" target="_blank">Map Museum Adityawarman</a></p>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
              <div class="info-box">
                <i class="bx bx-envelope"></i>
                <h3>Email</h3>
                <p><a href="gmail:hai@museumadityawarman.org">hai@museumadityawarman.org</a></p>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
              <div class="info-box">
                <i class="fab fa-whatsapp"></i>
                <h3>Whatsapp</h3>
                <p><a href="https://wa.me/6282315026446" target="_blank">+6282315026446</a></p>
              </div>
            </div>
          </div>


          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">

            <div class="col-xl-9 col-lg-12 mt-4">
              <form action="<?php echo base_url() . 'kontak/kirim_pesan' ?>" method="post" role="form">
                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Nama Anda" />
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Email Anda" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Kirim Pertanyaan, Kritik / Saran"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="text-center"> <button type="submit" name="input" id="btn-add" class="btn btn-info text-white btn-block"><i class='fa fa-ticket'></i> KIRIM PESAN </button> </div>
              </form>
            </div>
          </div>

        </div>
      </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Museum Adityawarman</h3>
              <p>
                Jalan Diponegoro No. 10 Kota Padang <br><br>
                <strong>Phone:</strong> +6281-798-510-11<br>
                <strong>Email:</strong> MuseumAdityawarman@gmail.com<br>
              </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Menu</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#header">Beranda</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang Kami</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#services">Fasilitas</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Galery</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#faq">Faq</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#contact"> Contact</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Fasilitas</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Auditorium</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Spot Foto</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Taman</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Musala</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Toilet</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
              <img style="width:300px;" src="<?php echo base_url('assets/img/museum.png') ?>" alt="" class="img-fluid mb-3">
            </div>

          </div>
        </div>
      </div>

      <!--MODAL ADD TIKETING-->
      <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="modalTambah" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><I class="fa fa-user"></i> BELI TIKETMU</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class='fa fa-times-circle'></i></button>
            </div>
            <div class="modal-body p-4">
              <form action="<?= base_url('tiket/add'); ?>" method="POST">

                <div class="form-group">
                  <label for="keperluan">Keperluan Kunjungan</label>
                  <input type="text" class="form-control" required="" name="keperluan" id="keperluan" placeholder="Keperluan">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" required="" name="email" id="email" placeholder="Email">
                </div>

                <div class="form-group">
                  <label for="tgl_kunjungan">Tanggal Kunjungan</label>
                  <input type="date" class="form-control" required="" name="tgl_kunjungan" id="tgl_kunjungan" placeholder="">
                </div>

                <div class="form-group">
                  <label for="jam_kunjungan">Jam Kunjungan</label>
                  <input type="time" class="form-control" required="" name="jam_kunjungan" id="jam_kunjungan" placeholder="">
                </div>

                <div class="form-group">
                  <label for="jumlah_dewasa">Jumlah Tiket Dewasa</label>
                  <input type="number" min="0" class="form-control" required="" name="jumlah_dewasa" id="jumlah_dewasa" placeholder="" onkeyup="generateForms('dewasa');" onchange="generateForms('dewasa');">
                </div>

                <div id="form_dewasa_container"></div>

                <div class="form-group">
                  <label for="jumlah_anak">Jumlah Tiket Anak-Anak</label>
                  <input type="number" min="0" class="form-control" required="" name="jumlah_anak" id="jumlah_anak" placeholder="" onkeyup="generateForms('anak');" onchange="generateForms('anak');">
                </div>

                <div id="form_anak_container"></div>

                <!-- Total Bayar -->
                <div class="form-group">
                  <label for="tottal">Total Bayar</label>
                  <input readonly="" type="number" min="1" class="form-control" required="" name="tottal" id="tottal" placeholder="">
                </div>
            </div>

            <div class="modal-footer">
              <button type="submit" name="input" id="btn-add" class="btn-info text-white btn-block"><i class='fa fa-ticket'></i> PESAN </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>
      <!--MODAL ADD TIKETING-->




      <div class="container d-lg-flex py-4">
        <div class="mr-lg-auto text-center text-lg-left">
          <div class="copyright">
            &copy; 2024 Copyright <strong><span>Museum Adityawarman</span></strong>. Kota Padang
          </div>
          <div class="credits">

          </div>
        </div>
        <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

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

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>

    <!-- PENJUMLAHAN TIKET -->
    <script>
      function generateForms(type) {
        var container = document.getElementById('form_' + type + '_container');
        container.innerHTML = '';
        var jumlah = document.getElementById('jumlah_' + type).value;
        for (var i = 0; i < jumlah; i++) {
          var form = `
            <div class="form-group-container">
              <div class="form-group-header">Tiket ${type.charAt(0).toUpperCase() + type.slice(1)} ${i + 1}</div>
              <div class="form-group">
                <label for="nama_${type}_${i}">Nama</label>
                <input type="text" class="form-control" required="" name="nama_${type}[]" id="nama_${type}_${i}" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="pekerjaan_${type}_${i}">Pekerjaan</label>
                <input type="text" class="form-control" required="" name="pekerjaan_${type}[]" id="pekerjaan_${type}_${i}" placeholder="Pekerjaan">
              </div>
              <div class="form-group">
                <label for="jenis_kelamin_${type}_${i}">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin_${type}_${i}" name="jenis_kelamin_${type}[]">
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>`;
          if (type === 'dewasa') {
            form += `
            <div class="form-group">
              <label for="no_telpon_${type}_${i}">No Telepon</label>
              <input type="text" class="form-control" required="" name="no_telpon_${type}[]" id="no_telpon_${type}_${i}" placeholder="No Telepon">
            </div>`;
          }
          form += `<input type="hidden" name="tipe_pengunjung_${type}[]" value="${type.charAt(0).toUpperCase() + type.slice(1)}">`;
          form += `</div>`;
          container.innerHTML += form;
        }
        calculateTotal();
      }

      function calculateTotal() {
        var jumlahDewasa = document.getElementById('jumlah_dewasa').value || 0;
        var jumlahAnak = document.getElementById('jumlah_anak').value || 0;
        var total = (jumlahDewasa * 5000) + (jumlahAnak * 3000);
        document.getElementById('tottal').value = total;
      }
    </script>

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

    <!-- AJAX Input -->
    <script>
      $(document).ready(function() {

        //SIMPAN BARANG
        $('#btn-add').on('click', function() {
          var no_ktp = $('#no_ktp').val();
          var nama = $('#nama').val();
          var jenis_kelamin1 = $('#jenis_kelamin1').val();
          var jenis_kelamin2 = $('#jenis_kelamin2').val();
          var email = $('#email').val();
          var no_telpon = $('#no_telpon').val();
          var alamat = $('#alamat').val();
          var tgl_kunjungan = $('tgl_kunjungan').val();
          var jam_kunjungan = $('#jam_kunjungan').val();
          $.ajax({
            type: "POST",
            url: "<?= base_url('tiket/add') ?>",
            dataType: "JSON",
            data: {
              no_ktp: no_ktp,
              nama: nama,
              jenis_kelamin1: jenis_kelaimin1,
              jenis_kelamin2: jenis_kelaimin2,
              email: email,
              no_telpon: no - telpon,
              alamat: alamat,
              tgl_kunjungan: tgl_kunjungan,
              jam_kunjungan: jam_kunjungan
            },

            success: function(convert) {
              $('[name="nama"]').val("");
              $('[name="jk]').val("");
              $('[name="email"]').val("");
              $('[name="no_telpon"]').val("");
              $('[name="alamat"]').val("");
              $('[name="tgl_kunjungan"]').val("");
              $('[name="jam_kunjungan"]').val("");
              $('#modaltambah').modal('hide');
            }
          })
        });
      });
    </script>

  </body>

</html>