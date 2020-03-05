<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Monitoring P2TL &amp; Harmet</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="icon" href="<?= base_url('assets/'); ?>dist/img/AdminLTELogo.png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
  
  <!-- Maps -->
  <script src="https://api.mapbox.com/mapbox-gl-js/v1.8.0/mapbox-gl.js"></script>
  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v1.8.0/mapbox-gl.css">
  
  <style>
    body { font-family: Arial; font-size:85% }
	.dataTables_filter { display: none }
	:not(.layout-fixed) .main-sidebar { height: 110%}
	.btn-form { width: 100px }
	.for-alert { color:#155724; background-color:#d4edda; border-color:#c3e6cb }
	.nav-sidebar .nav-item > .nav-link { color: white }
	[class*="sidebar-dark-"] .nav-treeview > .nav-item > .nav-link { color: #5a5a5a }
  </style>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-navbar-fixed layout-fixed">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <a href="javascript:void(0)" class="nav-link p-1"><h4><?= $title ?></h4></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a href="#" class="nav-link" data-toggle="dropdown">
		  Welcome, <?= $this->session->userdata('fullname'); ?>&nbsp;
		  <i class="far fa-user-circle"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <span class="dropdown-item dropdown-header">User's Menu</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-user-cog mr-2"></i> Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> Sign Out
          </a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: linear-gradient(to right, #44e0c8, #44b7e3)">
    <a href="javascript:void(0)" class="brand-link" style="border-bottom: 1px solid; background-color: grey">
      <img src="<?= base_url('assets/'); ?>dist/img/AdminLTELogo.png"
        alt="Meter Monitoring"
        class="brand-image img-circle elevation-3"
        style="opacity: .8">
      <span class="brand-text font-weight-light">&nbsp;&nbsp;inTEL</span>
    </a>
	
	<div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="border-bottom: 1px solid white">
        <div class="image">
          <img src="<?= base_url('assets/'); ?>dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info" style="margin-top:-6px">
          <span class="d-block text-light">&nbsp;&nbsp;<strong><?= $this->session->userdata('fullname'); ?></strong></span>
          <span class="d-block text-light">&nbsp;&nbsp;<?= $this->session->userdata('level'); ?></span>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		  <li class="nav-item">
            <a href="<?= base_url('/'); ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                &nbsp;&nbsp;Dashboard
              </p>
            </a>
          </li>
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                &nbsp;&nbsp;Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('user'); ?>" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>&nbsp;&nbsp;User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('customer'); ?>" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>&nbsp;&nbsp;Customer</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-dot-circle"></i>
              <p>
                &nbsp;&nbsp;Target Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('target'); ?>" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>&nbsp;&nbsp;P2TL</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('harmet'); ?>" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>&nbsp;&nbsp;Harmet</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-history"></i>
              <p>
                &nbsp;&nbsp;View History
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('target/history'); ?>" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>&nbsp;&nbsp;P2TL</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('harmet/history'); ?>" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>&nbsp;&nbsp;Harmet</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="dropdown-divider"></li>
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-download"></i>
              <p>
                &nbsp;&nbsp;Download Format
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('assets/'); ?>format/user_format.xls" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>&nbsp;&nbsp;Format Import User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('assets/'); ?>format/customer_format.xls" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>&nbsp;&nbsp;Format Import Customer</p>
                </a>
              </li>
            </ul>
          </li>
		</ul>
	  </nav>
	</div>
  </aside>
  
  <div class="content-wrapper">
    <section class="content p-2">