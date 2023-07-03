<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Understimate Dashboard</title>
  <!-- loader-->
  <link href="{{ asset('template/css/pace.min.css') }}" rel="stylesheet"/>
  <script src="{{ asset('template/js/pace.min.js') }}"></script>
  <!--favicon-->
  <link rel="icon" href="{{ asset('template/images/favicon.ico') }}" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="{{ asset('template/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{ asset('template/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('template/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('template/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{ asset('template/css/sidebar-menu.css') }}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ asset('template/css/app-style.css') }}" rel="stylesheet"/>
  
  
</head>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="{{route('dashboard')}}">
       <img src="{{ asset('template/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Understimate Admin</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-case-check"></i> <span>Product</span>
        </a>
      </li>

      <li>
        <a href="#">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Category-Product</span>
        </a>
      </li>

      <li>
        <a href="#">
          <i class="zmdi zmdi-accounts-list"></i> <span>Buyers</span>
        </a>
      </li>

      <li>
        <a href="#">
          <i class="zmdi zmdi-accounts-list"></i> <span>Sellers</span>
        </a>
      </li>

      <li>
        <a href="#">
          <i class="zmdi zmdi-face"></i> <span>Profile</span>
        </a>
      </li>

      <li>
        <a href="#" target="_blank">
          <i class="zmdi zmdi-lock"></i> <span>Login</span>
        </a>
      </li>

       <li>
        <a href="#" target="_blank">
          <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
        </a>
      </li>

      {{-- <li class="sidebar-header">LABELS</li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li> --}}

    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i></a>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-bell-o"></i></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
              <h6 class="mt-2 user-title">Admin1</h6>
            <p class="user-subtitle">mccoy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
    <h6 class="mt-2 user-title">Admin1</h6>
  </ul>
</nav>
</header>
<!--End topbar header-->


        <section class="content">
            <div class="clearfix"></div>
	
            <div class="content-wrapper">
              <div class="container-fluid">
                @yield('content')
            </div>


        </section>
<!--start overlay-->
<div class="overlay toggle-menu"></div>
<!--end overlay-->

</div>
<!-- End container-fluid-->

</div><!--End content-wrapper-->
<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->

<!--Start footer-->
<footer class="footer">
<div class="container">
<div class="text-center">
  Copyright © 2023 Alpa
</div>
</div>
</footer>
<!--End footer-->

<!--start color switcher-->
<div class="right-sidebar">
<div class="switcher-icon">
<i class="zmdi zmdi-settings zmdi-hc-spin"></i>
</div>
<div class="right-sidebar-content">

<p class="mb-0">Gaussion Texture</p>
<hr>

<ul class="switcher">
<li id="theme1"></li>
<li id="theme2"></li>
<li id="theme3"></li>
<li id="theme4"></li>
<li id="theme5"></li>
<li id="theme6"></li>
</ul>

<p class="mb-0">Gradient Background</p>
<hr>

<ul class="switcher">
<li id="theme7"></li>
<li id="theme8"></li>
<li id="theme9"></li>
<li id="theme10"></li>
<li id="theme11"></li>
<li id="theme12"></li>
<li id="theme13"></li>
<li id="theme14"></li>
<li id="theme15"></li>
</ul>

</div>
</div>
<!--end color switcher-->

</div><!--End wrapper-->

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('template/js/jquery.min.js') }}"></script>
<script src="{{ asset('template/js/popper.min.js') }}"></script>
<script src="{{ asset('template/js/bootstrap.min.js') }}"></script>

<!-- simplebar js -->
<script src="{{ asset('template/plugins/simplebar/js/simplebar.js') }}"></script>
<!-- sidebar-menu js -->
<script src="{{ asset('template/js/sidebar-menu.js') }}"></script>
<!-- loader scripts -->
<script src="{{ asset('template/js/jquery.loading-indicator.js') }}"></script>
<!-- Custom scripts -->
<script src="{{ asset('template/js/app-script.js') }}"></script>
<!-- Chart js -->

<script src="{{ asset('template/plugins/Chart.js/Chart.min.js') }}"></script>

<!-- Index js -->
<script src="{{ asset('template/js/index.js') }}"></script>


</body>
</html>
