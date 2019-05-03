<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SISFO | Alumni </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- Data Table -->
  <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/ respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>A</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SISFO</b>ALUMNI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <?php if($this->session->userdata('akses')=='1'):?>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user"></i>
                <span class="hidden-xs"><?= $user['username']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?= base_url('/foto/').$user['photo']?> " width="10px" class="img-circle">
                  <p>
                    <?= $user['username']; ?>
                    <small>Level : <?= $user['level']?></small>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?= base_url()?>users/logout_admin">
                      <button class="btn btn-danger">
                        Sign out
                      </button> 
                    </a>
                  </div>
                </li>
              </ul>
            <?php elseif($this->session->userdata('akses')=='2'):?>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user"></i>
                <span class="hidden-xs"><?= $user_pengurus['username']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?= base_url('/foto/').$user_pengurus['photo']?> " width="10px" class="img-circle">
                  <p>
                    <?= $user_pengurus['username']; ?>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?= base_url()?>users/logout_pengurus" >
                      <button class="btn btn-danger">
                        Sign out
                      </button> 
                    </a>
                  </div>
                </li>
              </ul>
            <?php else:?>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user"></i>
                <span class="hidden-xs"><?= $user['username']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?= base_url('/foto/').$user['photo']?> " width="10px" class="img-circle">
                  <p>
                    <?= $user['username']; ?>
                    <small><?= $user['email']?></small>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?= base_url()?>users/logout"> 
                      <button class="btn btn-danger">
                        Sign out
                      </button> 
                    </a>
                  </div>
                </li>
              </ul>
            <?php endif;?>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <ul class="sidebar-menu" data-widget="tree">
        <?php if($this->session->userdata('akses')=='1'):?>
        <li><a href="<?= base_url()?>users/akun_admin">
          <i class="fa fa-user"></i> <span>Akun</span>
        </a>
        <li><a href="<?= base_url()?>/alumni">
          <i class="fa fa-table"></i> <span>Data Alumni</span>
        </a>
        </li>
        <li><a href="<?= base_url()?>notulensi">
          <i class="fa fa-file-text-o"></i> <span>Notulensi Rapat</span>
        </a>
        </li>
        <li><a href="<?= base_url()?>info">
          <i class="fa fa-newspaper-o"></i> <span>Info</span>
        </a>
        </li>
        <li><a href="<?= base_url()?>admin">
          <i class="fa fa-users"></i> <span>Pengurus</span>
        </a>
        </li>
        <li><a href="<?= base_url()?>admin/grafik">
          <i class="fa fa-bar-chart"></i> <span>Grafik Alumni</span>
        </a>
        </li>

        <?php elseif($this->session->userdata('akses')=='2'):?>
        <li><a href="<?= base_url()?>users/akun_pengurus">
          <i class="fa fa-user"></i> <span>Akun</span>
        </a>
        <li><a href="<?= base_url()?>alumni/pengurus">
          <i class="fa fa-table"></i> <span>Data Alumni</span>
        </a>
        </li>
        <li><a href="<?= base_url()?>notulensi/pengurus">
          <i class="fa fa-file-text-o"></i> <span>Notulensi Rapat</span>
        </a>
        </li>
        <li><a href="<?= base_url()?>info/pengurus">
          <i class="fa fa-newspaper-o"></i> <span>Info</span>
        </a>
        </li>
        <li><a href="<?= base_url()?>pengurus/grafik">
          <i class="fa fa-newspaper-o"></i> <span>Grafik Alumni</span>
        </a>
        </li>

        <?php else:?>
        <li><a href="<?= base_url()?>page/akun_alumni">
          <i class="fa fa-user"></i> <span>Akun</span>
        </a>
        </li>
        <li><a href="<?= base_url()?>/notulensi/alumni">
          <i class="fa fa-file-text-o"></i> <span>Notulensi Rapat</span>
        </a>
        </li>
        <li><a href="<?= base_url()?>/info/alumni">
          <i class="fa fa-newspaper-o"></i> <span>Info</span>
        </a>
        </li>
        <li><a href=" <?php echo base_url()?>login/registration">
          <i class="fa fa-user-plus"></i> <span>Registrasi</span>
        </a>
        </li>
        <?php endif;?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<body>
