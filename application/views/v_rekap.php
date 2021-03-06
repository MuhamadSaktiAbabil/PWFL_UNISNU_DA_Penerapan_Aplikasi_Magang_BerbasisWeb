<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url() ?>assets/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
        
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Petugas PKN</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Petugas PKN
                  <small><?php  echo date("l, d M Y ");?></small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <div class="pull-right">
                  <a href="<?php echo base_url('login/logout');?>" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>

        <li>
          <a href="<?php echo base_url('c_dashboard');?>">
            <i class="fa fa-fw fa-home"></i> <span>Dashboard</span>
          </a>
        </li>

        
        <li class="header">FITUR</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Kelola PKN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('c_daftar');?>"><i class="fa fa-circle-o"></i>Pendaftaran</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('c_mahasiswa');?>"><i class="fa fa-circle-o"></i>Mahasiswa</a></li>
            <li><a href="<?php echo base_url('c_dosen');?>"><i class="fa fa-circle-o"></i>Dosen</a></li>
          </ul>
        </li>
        <li class="header">REKAP DATA</li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Rekapitulasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('c_mahasiswa/rekap');?>"><i class="fa fa-circle-o"></i> Rekap Magang</a></li>
          </ul>
        </li>
        <li class="header">PENGATURAN</li>

        <li>
          <a href="<?php echo base_url('login/logout');?>">
            <i class="fa fa-fw fa-sign-out"></i> <span>Keluar</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
              
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>              
                <tr>
					<th>No.</th>
          <th>Angkatan</th>
          <th>Total Mahasiswa</th>
					<th>Terdaftar</th>
				</tr>	
			</thead>
			
			<tbody>
        <?php  $no = 1;?>
				<tr>
          <td align="center"><?php echo $no++; ?></td>
          <td align="center">2019</td>
          <td align="center" data-toggle="modal" data-target="#modal_sum"><?php echo $sum;?></td>   
          <td align="center" data-toggle="modal" data-target="#modal_nomor"><?php echo $jumlahm;?></td>  
       
				</tr>
        <tr>
          <td align="center"><?php echo $no++; ?></td>
          <td align="center">2020</td>
          <td align="center" data-toggle="modal" data-target="#modal_sum"><?php echo $sum;?></td>   
          <td align="center" data-toggle="modal" data-target="#modal_nomor"><?php echo $nomor;?></td>  
        </tr>
			
			</tbody>
		</table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2019 <a href="unisnu.ac.id">UNISNU</a>.</strong> All rights
    reserved.
  </footer>
  <!-- modal banyak mahasiswa -->
<div class="modal fade" id="modal_sum" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel" align="center">Data Mahasiswa</h3>
            </div>
            <table id="mahasiswa" class="table table-bordered table-striped">
      <thead>              
        <tr>
          <th>No.</th>
          <th>NIM</th>
          <th>Nama Mahasiswa</th>
          <th>Nomor Hp</th>
          <th>Alamat</th>
          <th>Angkatan</th>
        
        </tr> 
      </thead>
      
      <tbody>
        <?php  $no = 1; foreach ($view as $a ) {?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $a['nim']; ?></td>
          <td><?php echo $a['nama_mahasiswa']; ?></td>
          <td><?php echo $a['no_telp']; ?></td>
          <td><?php echo $a['alamat']; ?></td>
          <td><?php echo $a['angkatan']; ?></td>
        
        </tr>
        <?php  } ?>
      </tbody>
    </table>
                
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                  
                </div>
            </form>
            </div>
            </div>
        </div>
        <!-- tutup modal banyak -->
          <!-- modal banyak mahasiswa -->
<div class="modal fade bd-example-modal-lg"  id="modal_nomor" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel" align="center">Pendaftar PKN</h3>
            </div>
            <table id="jumlah" class="table table-bordered table-striped">
                <thead>
      <tr>
        <th>No</th>
        <th>Nama Mahasiswa</th>
        <th>Lokasi KP</th>
        <th>Alamat</th>
        <th>No_KP</th>
        <th>Tanggal Pengajuan</th>
        <th>Nama Dosen Pendamping</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $no = 1;
        foreach($daftar as $p){
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $p->nama_mahasiswa; ?></td>
        <td><?php echo $p->nama_kp; ?></td>
        <td><?php echo $p->alamat_kp; ?></td>
        <td><?php echo $p->no_kp; ?></td>
        <td><?php echo $p->tgl_pencatatan ?></td>
        <td><?php echo $p->nama_dosen; ?></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
                
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                  
                </div>
            </form>
            </div>
            </div>
        </div>
        <!-- tutup modal banyak -->


  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#mahasiswa').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#jumlah').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
</body>
</html>
