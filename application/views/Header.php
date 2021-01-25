<?php
$is_login = $this->session->userdata('is_login');
$level    = $this->session->userdata('level');

$username = $this->session->userdata("username");
$nama_user = $this->session->userdata("nama_user");

$profile = $this->session->userdata("profile");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta charset="utf-8" />
  <title>Ucok Pangan</title>

  <meta name="description" content="overview &amp; stats" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

  <!-- bootstrap & fontawesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

  <!-- page specific plugin styles -->

  <!-- text fonts -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets/css/fonts.googleapis.com.css" />

  <!-- ace styles -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

  <!--[if lte IE 9]>
      <link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets/css/ace-skins.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets/css/ace-rtl.min.css" />

  <!--[if lte IE 9]>
      <link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets/css/ace-ie.min.css" />
    <![endif]-->

  <!-- inline styles related to this page -->

  <!-- ace settings handler -->
  <script src="<?php echo base_url(); ?>asset/assets/js/ace-extra.min.js"></script>

  <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

  <!--[if lte IE 8]>
    <script src="<?php echo base_url(); ?>asset/assets/js/html5shiv.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="no-skin">
  <div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
      <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
        <span class="sr-only">Toggle sidebar</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>
      </button>

      <div class="navbar-header pull-left">
        <a href="<?php echo base_url(); ?>asset/index.html" class="navbar-brand">
          <small>
            <i class="fa fa-shopping-basket green"></i>
            Ucok Pangan Admin
          </small>
        </a>
      </div>

      <div class="navbar-buttons navbar-header pull-right" role="navigation">
        <ul class="nav ace-nav">
          <li class="grey dropdown-modal">
          </li>
          <li class="light-blue dropdown-modal">
            <a data-toggle="dropdown" href="" class="dropdown-toggle">
              <img class="nav-user-photo" src="<?php echo base_url(); ?>asset/assets/images/avatars/user.jpg" alt="Jason's Photo" />
              <small>Welcome,</small>
              Mr
            </a>
          <li class="divider"></li>
          <li>
            <a href="<?php echo base_url('index.php/login/logout'); ?>">
              <i class="ace-icon fa fa-power-off"></i>
              Logout
            </a>
          </li>
        </ul>
        </li>
        </ul>
      </div>
    </div><!-- /.navbar-container -->
  </div>

  <div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
      try {
        ace.settings.loadState('main-container')
      } catch (e) {}
    </script>

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
      <script type="text/javascript">
        try {
          ace.settings.loadState('sidebar')
        } catch (e) {}
      </script>



      <ul class="nav nav-list">
        <li class="active">
          <i class="menu-icon fa fa-tachometer"></i>
          <span class="menu-text"> Dashboard </span>

          <b class="arrow"></b>
        </li>

        <li class="">
          <a href="<?php echo base_url(); ?>asset/#" class="dropdown-toggle">
            <i class="menu-icon fa fa-home"></i>
            <span class="menu-text">
              Home
            </span>

            <b class="arrow fa fa-angle-down"></b>
          </a>

          <b class="arrow"></b>

          <ul class="submenu">


            <li><?= anchor('Home', 'Home') ?></li>
            <li><?= anchor('Person', 'Data Pelanggan') ?></li>
            <li><?= anchor('Pangan', 'Bahan Pangan') ?></li>
            <li><?= anchor('Pembelian', 'Pembelian') ?></li>
            <?php if ($level == "admin") : ?>
              <li><?= anchor('User', 'User') ?></li>
            <?php endif; ?>






          </ul>
        </li>


        <!--<li class="">
          <a href="<?php echo base_url(); ?>asset/#" class="dropdown-toggle">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text">
              Transaksi
            </span>

            <b class="arrow fa fa-angle-down"></b>
          </a>

          <b class="arrow"></b>

          <ul class="submenu">


            <li><?= anchor('Peminjaman', 'Peminjaman') ?></li>
            <li><?= anchor('Pengembalian', 'Pengembalian') ?></li>
            <li><?= anchor('Denda', 'Denda') ?></li>






          </ul>
        </li>

        <li class="">
          <a href="<?php echo base_url(); ?>asset/#" class="dropdown-toggle">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text">
              Laporan
            </span>

            <b class="arrow fa fa-angle-down"></b>
          </a>

          <b class="arrow"></b>

          <ul class="submenu">


            <li><?= anchor('Laporan/laporan_peminjaman', 'Laporan Peminjaman') ?></li>
            <li><?= anchor('Laporan/laporan_pengembalian', 'Laporan Pengembalian') ?></li>







          </ul>
        </li>





      </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
          <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>

    <div class="main-content">
      <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
          <ul class="breadcrumb">
            <li>
              <i class="ace-icon fa fa-home home-icon"></i>
              <a href="<?php echo base_url(); ?>asset/#">Home</a>
            </li>
            <li class="active">Dashboard</li>
          </ul><!-- /.breadcrumb -->

          <div class="nav-search" id="nav-search">
            <form class="form-search">
              <span class="input-icon">
                <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                <i class="ace-icon fa fa-search nav-search-icon"></i>
              </span>
            </form>
          </div><!-- /.nav-search -->
        </div>