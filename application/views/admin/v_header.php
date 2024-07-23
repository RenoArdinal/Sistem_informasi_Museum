<header class="main-header">

  <!-- Logo -->
  <a href="" style="background-color:#000000;" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img style="width:20px;" src="<?php echo base_url('assets/img/museum.png') ?>" alt="" class="img-fluid mb-3"></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">Museum </span>
  </a>

  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <?php
        $id_admin = $this->session->userdata('idadmin');
        $q = $this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_id='$id_admin'");
        $c = $q->row_array();
        ?>
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo base_url() . 'assetsadm/images/' . $c['pengguna_photo']; ?>" class="user-image" alt="">
            <span class="hidden-xs"><?php echo $c['pengguna_nama']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo base_url() . 'assetsadm/images/' . $c['pengguna_photo']; ?>" class="img-circle" alt="">

              <p>
                <?php echo $c['pengguna_nama']; ?>
                <?php if ($c['pengguna_level'] == '1') : ?>
                  <small>Administrator</small>
                <?php else : ?>
                  <small>Author</small>
                <?php endif; ?>
              </p>
            </li>
            <!-- Menu Body -->

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-right">
                <a href="<?php echo base_url() . 'administrator/logout' ?>" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="<?php echo base_url() . '' ?>" target="_blank" title="Lihat Website"><i class="fa fa-eye"></i></a>
        </li>
      </ul>
    </div>

  </nav>
</header>