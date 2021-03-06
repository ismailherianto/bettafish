<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('temp_admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('temp_admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('temp_admin/bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('temp_admin/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('temp_admin/dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{asset('temp_admin/bower_components/morris.js/morris.css')}}">
  <link rel="stylesheet" href="{{asset('temp_admin/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <link rel="stylesheet" href="{{asset('temp_admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('temp_admin/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('temp_admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <link rel="stylesheet" href="{{asset('temp_admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{route('home')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Dash</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('temp_admin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Auth::user()->nama}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('temp_admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  {{Auth::user()->nama}}
                  
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                {{-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> --}}
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
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
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('temp_admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->nama}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{Request::is('admin') ? 'active' : ''}}">
          <a href="{{route('home')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="{{Request::is('admin/user') ? 'active' : ''}}">
            <a href="{{route('master_user')}}">
                <i class="fa fa-user"></i> <span>User/Member</span>
            </a>
        </li>
        <li class="{{Request::is('admin/barang-lelang') || Request::is('brg_lelang/*') ? 'active' : ''}}">
            <a href="{{route('master_brg_lelang')}}">
                <i class="fa fa-bank"></i> <span>Lelang</span>
            </a>
        </li>
        <li class="{{Request::is('admin/barang-toko') || Request::is('brg_toko/*') ? 'active' : ''}}">
            <a href="{{route('master_brg_toko')}}">
                <i class="fa fa-cubes"></i> <span>Barang</span>
            </a>
        </li>
        <li class="{{Request::is('admin/penawaran') || Request::is('penawaran/*') ? 'act  ive' : ''}}">
            <a href="{{route('master_penawaran')}}">
                <i class="fa fa-commenting"></i> <span>Penawaran</span>
            </a>
        </li>
        <li class="{{Request::is('admin/info_lelang') || Request::is('info_lelang/*') ? 'active' : ''}}">
            <a href="{{route('master_info_lelang')}}">
                <i class="fa fa-bullhorn"></i> <span>Info Lelang</span>
            </a>
        </li>
        <li class="{{Request::is('admin/info_toko') || Request::is('info_toko/*') ? 'active' : ''}}">
            <a href="{{route('master_info_toko')}}">
                <i class="fa fa-desktop"></i> <span>Tentang Toko</span>
            </a>
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('temp_admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('temp_admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('temp_admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('temp_admin/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('temp_admin/bower_components/morris.js/morris.min.js')}}"></script>
<script src="{{asset('temp_admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('temp_admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('temp_admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('temp_admin/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<script src="{{asset('temp_admin/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('temp_admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('temp_admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('temp_admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{asset('temp_admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('temp_admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('temp_admin/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('temp_admin/dist/js/pages/dashboard.js')}}"></script>
<script src="{{asset('temp_admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('temp_admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
@yield('script')
</body>
</html>
