<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ADVIIDE POS APP </title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-yellow sidebar-mini">

<div class="wrapper">
  <header class="main-header">
    <a href="<?=base_url('dashboard')?>assets/index2.html" class="logo">
      <span class="logo-mini"><b>A</b>VI</span>
      <span class="logo-lg"><b>Ad</b>VIIIDE</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">3</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 3 tasks</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <h3>Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li> -->

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>assets/dist/img/avatar.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$this->fungsi->user_login()->username?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?=base_url()?>assets/dist/img/avatar.png" class="img-circle" alt="User Image">
                <p><?=$this->fungsi->user_login()->name?>
                  <small><?=$this->fungsi->user_login()->address?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?=site_url('auth/logout')?>" class="btn btn-flat bg-red">Sign out</a>
                  </div>
                </li>
</ul>
              </li>
            </ul>
</div>
</nav>
</header>


<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/dist/img/avatar.png" class="img-circle">
        </div>
        <div class="pull-left info">
          <p><?=ucfirst($this->fungsi->user_login()->username)?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
        </div>
    </form> -->

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> <span>Dashbor</span></a>
        </li>
        <li>
          <a href="<?=site_url('supplier')?>"><i class="fa fa-truck"></i> <span>Agen/Supplier</span></a>
        </li>
        <li>
          <a href="<?=site_url('customer')?>">
            <i class="fa fa-users"></i> <span>Pelanggan</span>
          </a>
        </li>
        <li class="treeview">
              <a href="#">
                <i class="fa fa-archive"></i> <span>Produk</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
              </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('category')?>"><i class="fa fa-circle-o"></i>Kategori</a></li>
            <li><a href="<?=site_url('unit')?>"><i class="fa fa-circle-o"></i>Unit</a></li>
            <li><a href="<?=site_url('item')?>"><i class="fa fa-circle-o"></i>Barang</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i> <span>Transaction</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('stock/in')?>"><i class="fa fa-circle-o"></i> Stock In</a></li>
            <li><a href="<?=site_url('sale')?>"><i class="fa fa-circle-o"></i> Sales</a></li>
          </ul>
        </li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i><span>Reports</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Sales</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Stock</a></li>
          </ul>
        </li> -->
        <?php if($this->session->userdata('level')== 1) {?>
        <li class="header">SETTINGS</li>
        <li><a href="<?=site_url('user')?>"><i class="fa fa-user"></i> <span>Users</span></a></li>
        <?php } ?>
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    <?php echo $contents ?>


  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Universitas</b>Tarumanagara
    </div>
    <strong><a href="https://edward.com">Edward Thomas</a>.</strong> 535210102
  </footer>

</div>

<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>


</body>
</html>
