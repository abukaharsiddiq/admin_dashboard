<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('admin-title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/') }}back-end/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('/') }}back-end/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('/') }}back-end/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('/') }}back-end/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/') }}back-end/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('/') }}back-end/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('/') }}back-end/plugins/daterangepicker/daterangepicker.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('/') }}back-end/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{ asset('/') }}back-end/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('/') }}back-end/plugins/summernote/summernote-bs4.min.css">
   <link href="{{ asset('/') }}back-end/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet"
    />

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <link href="{{ asset('/') }}back-end/dist/css/jodit.min.css" rel="stylesheet">

</head>
@stack('admin-styles')
<style>
  .card-title {
    font-size:30px;
    font-weight: 600;
  }
 .brand-image {
  text-align: center;
  /* margin-left: 80px; */
  /* margin-top: 10px; */
  width: 60%;
  margin-left:0;
  /* height: 60px; */
}
/* .brand-text.font-weight-light {
  text-align: center;
  color: #fff;
  margin-top: 20px;
} */

.brand-text.font-weight-light {
	text-align: center;
	color: #fff;
	/* margin-top: 20px; */
	/* background: red; */
	padding: 14px;
	border-bottom: 1px solid rgba(0,0,0,.2);
}

[class*="sidebar-dark-"] .nav-treeview > .nav-item > .nav-link {
  color: #0be337;
  color: #000!important;
  font-size: 14px;
}
[class*="sidebar-dark-"] {
  background-color: #f8f9fa;
}
.nav-sidebar > .nav-item {
  margin-bottom: 0;
  border-bottom: 1px solid #dee2e6;
}
[class*="sidebar-dark-"] .nav-sidebar > .nav-item.menu-open > .nav-link, [class*="sidebar-dark-"] .nav-sidebar > .nav-item:hover > .nav-link, [class*="sidebar-dark-"] .nav-sidebar > .nav-item > .nav-link:focus {
  color: #000;
}
[class*="sidebar-dark-"] .sidebar a {
  color: #343a40;
}
[class*="sidebar-dark-"] .nav-sidebar > .nav-item > .nav-treeview {
  background-color: transparent;
  background: #e9ecef;
}
.sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active, .sidebar-light-primary .nav-sidebar > .nav-item > .nav-link.active {
  background-color: #007bff;
  color: #fff !important;
  box-shadow: none;
}
.cashin {
  background: #37a000 !important;
  color:#fff!important;
  border-radius: 0;
}
.cashout{
  background: #6cabbc!important;
  color:#fff!important;
  border-radius: 0;
}
.balance{ 
  background: #8459cf!important;
  color:#fff!important;
  border-radius: 0;
}
.balance1{ 
  background: #749057!important;
  color:#fff!important;
  border-radius: 0;
}

.chart-area {
  background: #fff;
  padding: 20px;
  /* margin-bottom: 20px; */
  margin: 0px 0px 20px 0px;
}
[class*="sidebar-dark"] .user-panel {
  border-bottom:none;
}
[class*="sidebar-dark"] .user-panel {
  border-bottom: none;
  margin-top: -20px !important;
}

.sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active, .sidebar-light-primary .nav-sidebar > .nav-item > .nav-link.active {
  background-color: #567d5682;
  color: #000 !important;
  box-shadow: none;
  border-radius: 0;
}

 .switch {
  position: relative;
  display: inline-block;
  width: 40px;
  height: 20px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  transition: 0.4s;
  border-radius: 50px;
}

.slider:before {
  position: absolute;
  content: "";
  height: 14px;
  width: 14px;
  left: 3px;
  bottom: 3px;
  background-color: white;
  transition: 0.4s;
  border-radius: 50%;
}

input:checked + .slider {
  background-color: #4caf50;
}

input:checked + .slider:before {
  transform: translateX(20px);
}
.table .edit_btn{
  width: 30px;
  height: 30px;
  border-radius: 50%;
  line-height: 20px;
}
.table .delete_btn{
  width: 30px;
  height: 30px;
  border-radius: 50%;
  line-height: 20px;
}
.card-footer button {
  margin-left: 166px;
  border-radius: 25px;
  padding: 3px 15px;
}

  .card{
        border-radius: 0;
    }
  .table thead tr th{
    background: #f5f5f5;
   }

   .table thead tr th, .table thead tr td{
      font-size: 14px;
   }

    .supplier-information {
        border: 1px solid rgba(0,0,0,.1);
        margin-bottom: 20px;
        padding: 5px 10px;
    }
    label {
    display: inline-block;
    margin-bottom: .5rem;
    font-size: 14px;
}
h4.card-title{
    font-size: 18px!important;
}
.card-header{
  position: relative;
}
.add_new_btn{
 position: absolute;
 right:10px;
}

.view_btn {
  position: absolute;
  right: 348px;
}

@media screen and (max-width: 768px) {
  .card-footer button {
    margin-left: 10px;
  }
  
}
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">
            {{ \Carbon\Carbon::now()->format('l, F d, Y') }}
        </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          Welcome to {{ Auth::user()->name }}
        </a>
      </li>
      <!-- Notifications Dropdown Menu -->

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link1">
  @if(isset($setting) && $setting->logo)
    <img src="{{ asset('back-end/setting/' . $setting->logo) }}" alt="Logo" class="brand-image" style="opacity: .8;">
  @else
    <h4 class="brand-text font-weight-light text-dark">
      {{ config('app.name') }}
      <!-- <img src="{{ asset('/') }}back-end/setting/logo.png" class="brand-image"> -->
    </h4>
  @endif
</a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="{{ asset('/') }}back-end/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <!-- <a href="#" class="d-block">
            {{ Auth::user()->name }}
          </a> -->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item menu-open">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>Dashboard</p>
    </a>
  </li>

  <!-- hero -->
  <li class="nav-item {{ Request::is('hero*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('hero*') ? 'active' : '' }}">
      <i class="nav-icon fas fa-cubes"></i>
      <p>Hero Section <i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview">

      <li class="nav-item">
        <a href="{{ route('hero.create') }}" class="nav-link {{ Request::is('hero') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Hero</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('hero.index') }}" class="nav-link {{ Request::is('hero') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Manage Hero</p>
        </a>
      </li>
    </ul>
  </li>
  <!-- hero -->

  <!-- about -->
  <li class="nav-item {{ Request::is('about*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('about*') ? 'active' : '' }}">
      <i class="nav-icon fas fa-cubes"></i>
      <p>About <i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview">

      <li class="nav-item">
        <a href="{{ route('about.create') }}" class="nav-link {{ Request::is('about') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Add About</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('about.index') }}" class="nav-link {{ Request::is('about') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Manage About</p>
        </a>
      </li>
    </ul>
  </li>
  <!-- about -->

  <!-- services -->
  <li class="nav-item {{ Request::is('service*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('service*') ? 'active' : '' }}">
      <i class="nav-icon fas fa-cubes"></i>
      <p>Services <i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview">

      <li class="nav-item">
        <a href="{{ route('service.create') }}" class="nav-link {{ Request::is('service') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Service</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('service.index') }}" class="nav-link {{ Request::is('service') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Manage Service</p>
        </a>
      </li>
    </ul>
  </li>
  <!-- services -->

  <!-- technology -->
  <li class="nav-item {{ Request::is('technology*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('technology*') ? 'active' : '' }}">
      <i class="nav-icon fas fa-cubes"></i>
      <p>Technology <i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview">

      <li class="nav-item">
        <a href="{{ route('technology.create') }}" class="nav-link {{ Request::is('technology') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Technology</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('technology.index') }}" class="nav-link {{ Request::is('technology') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Manage Technology</p>
        </a>
      </li>
    </ul>
  </li>
  <!-- technology -->

  <!-- why choose -->
  <li class="nav-item {{ Request::is('whychoose*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('whychoose*') ? 'active' : '' }}">
      <i class="nav-icon fas fa-cubes"></i>
      <p>Why Choose <i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview">

      <li class="nav-item">
        <a href="{{ route('whychoose.create') }}" class="nav-link {{ Request::is('whychoose') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Why Choose</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('whychoose.index') }}" class="nav-link {{ Request::is('whychoose') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Manage Why Choose</p>
        </a>
      </li>
    </ul>
  </li>
  <!-- why choose -->

  <!-- stat -->
  <li class="nav-item {{ Request::is('stat*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('stat*') ? 'active' : '' }}">
      <i class="nav-icon fas fa-cubes"></i>
      <p>Stat <i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview">

      <li class="nav-item">
        <a href="{{ route('stat.create') }}" class="nav-link {{ Request::is('stat') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Stat</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('stat.index') }}" class="nav-link {{ Request::is('stat') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Manage Stat</p>
        </a>
      </li>
    </ul>
  </li>
  <!-- stat -->

  <!-- client -->
  <li class="nav-item {{ Request::is('client*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('client*') ? 'active' : '' }}">
      <i class="nav-icon fas fa-cubes"></i>
      <p>Client <i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview">

      <li class="nav-item">
        <a href="{{ route('client.create') }}" class="nav-link {{ Request::is('client') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Client</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('client.index') }}" class="nav-link {{ Request::is('client') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Manage Client</p>
        </a>
      </li>
    </ul>
  </li>
  <!-- client -->

  
 <!--  <li class="nav-item {{ Request::is('category*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('category*') ? 'active' : '' }}">
      <i class="nav-icon fas fa-cubes"></i>
      <p>Categories <i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('category.index') }}" class="nav-link {{ Request::is('category/manage') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Category</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('product.index') }}" class="nav-link {{ Request::is('product') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Sub Category</p>
        </a>
      </li>
    </ul>
  </li> -->

  <!-- product variant -->
  <!-- <li class="nav-item {{ Request::is('product*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('product*') ? 'active' : '' }}">
      <i class="nav-icon fas fa-cubes"></i>
      <p>Product Variants<i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('product.create') }}" class="nav-link {{ Request::is('product/create') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Brand</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('product.index') }}" class="nav-link {{ Request::is('product') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Color</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('product.index') }}" class="nav-link {{ Request::is('product') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Sizes</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('product.index') }}" class="nav-link {{ Request::is('product') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Unit</p>
        </a>
      </li>

    </ul>
  </li> -->
  <!-- product variant -->

  <!-- product -->
<!--   <li class="nav-item {{ Request::is('product*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('product*') ? 'active' : '' }}">
      <i class="nav-icon fas fa-cubes"></i>
      <p>Product <i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('product.create') }}" class="nav-link {{ Request::is('product/create') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Product</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('product.index') }}" class="nav-link {{ Request::is('product') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Manage Product</p>
        </a>
      </li>
    </ul>
  </li> -->
  <!-- product -->

  <!-- orders -->
 <!--  <li class="nav-item {{ Request::is('product*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('product*') ? 'active' : '' }}">
      <i class="nav-icon fas fa-cubes"></i>
      <p>Orders <i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('product.create') }}" class="nav-link {{ Request::is('product/create') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>All</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('product.index') }}" class="nav-link {{ Request::is('product') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Pending</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('product.index') }}" class="nav-link {{ Request::is('product') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Confirm</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('product.index') }}" class="nav-link {{ Request::is('product') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Processing</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('product.index') }}" class="nav-link {{ Request::is('product') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Delivered</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('product.index') }}" class="nav-link {{ Request::is('product') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Cancelled</p>
        </a>
      </li>

    </ul>
  </li> -->
  <!-- orders -->

   <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Social
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('social.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Social</p>
                </a>
              </li>

            </ul>
          </li>


        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('setting.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Setting</p>
                </a>
              </li>

            </ul>
          </li>

           <li class="nav-item">
            <a href="{{ route('profile.change.password') }}" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Change Password
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Logout
              </p>
            </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
              </form>
          </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

       @yield('admin-content')

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 {{ config('app.name') }}.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
     Developed By <b><a href="https://www.emanagerit.com/" target="_blank">eManager</a></b>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('/') }}back-end/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('/') }}back-end/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/') }}back-end/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="{{ asset('/') }}back-end/plugins/select2/js/select2.full.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('/') }}back-end/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('/') }}back-end/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('/') }}back-end/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('/') }}back-end/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('/') }}back-end/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('/') }}back-end/plugins/moment/moment.min.js"></script>
<script src="{{ asset('/') }}back-end/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('/') }}back-end/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('/') }}back-end/plugins/summernote/summernote-bs4.min.js"></script>
<script src="{{ asset('/') }}back-end/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="{{ asset('/') }}back-end/dist/js/adminlte.js"></script>
<script src="{{ asset('/') }}back-end/dist/js/pages/dashboard.js"></script>
<script src="{{ asset('/') }}back-end/dist/js/phone-mask.min.js"></script>
 <script src="{{ asset('/') }}back-end/assets/extra-libs/DataTables/datatables.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

 <script src="{{ asset('/') }}back-end/dist/js/jodit.min.js"></script>
 <script src="{{ asset('/') }}back-end/dist/js/spectrum.js"></script>
 <script src="{{ asset('/') }}back-end/dist/js/spartan-multi-image-picker-min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
   $(".editor").each(function (el) {
        var $this = $(this);
        var buttons = $this.data("buttons");
        buttons = !buttons
            ? "bold,underline,italic,hr,|,ul,ol,|,align,paragraph,|,image,table,link,undo,redo"
            : buttons;

        var editor = new Jodit(this, {
            uploader: {
                insertImageAsBase64URI: true,
            },
            toolbarAdaptive: false,
            defaultMode: "1",
            toolbarSticky: false,
            showXPathInStatusbar: false,
            buttons: buttons,
        });
    });
</script>

 <script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 100,
            minHeight: null, 
            maxHeight: null,
            focus: true
        });
    });
</script>

<!-- Include Toastr JS library -->
<script>
  
    function confirmDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "Delete this item!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm-' + id).submit();
            }
        })
    }


</script>

  {!! Toastr::message() !!}
    <script>
      $("#zero_config").DataTable();

       $('.select2').select2();

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    </script>
       <script>
    document.addEventListener("DOMContentLoaded", function(){
        let date = new Date();
        let day = String(date.getDate()).padStart(2, '0');
        let month = String(date.getMonth() + 1).padStart(2, '0');
        let year = date.getFullYear();
        let formattedDate = day + '-' + month + '-' + year;

        document.getElementById('dateInput').value = formattedDate;
    });
</script>
@stack('admin-scripts')
</body>
</html>
