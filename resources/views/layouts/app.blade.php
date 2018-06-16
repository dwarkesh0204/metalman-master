<!DOCTYPE html>
<html lang="en" class="loading">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<title>Dashboard | Metalman Auto</title>
<link rel="shortcut icon" href="{{asset('app-assets/img/ico/favicon.png')}}">
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
<!-- BEGIN VENDOR CSS-->
<!-- font icons-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/feather/style.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/simple-line-icons/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/font-awesome/css/fontawesome-all.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/perfect-scrollbar.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/prism.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/pickadate/pickadate.css')}}">
<!-- END VENDOR CSS-->

<link href="{{asset('css/jquery.dataTables.css') }}" rel="stylesheet">

<!-- BEGIN APEX CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}">
<!-- END APEX CSS-->
<!-- BEGIN Page Level CSS-->
<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<!-- END Custom CSS-->
</head>
<body data-col="2-columns" class=" 2-columns dashboard">
<div id="overlay"> <img src="{{asset('app-assets/img/preloader.gif')}}" alt=""> </div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper nav-collapsed"> 
  <!-- main menu--> 
  <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
  <div data-active-color="white" data-background-color="white" data-image="{{asset('app-assets/img/sidebar-bg/01.jpg')}}" class="app-sidebar"> 
    <!-- main menu header--> 
    <!-- Sidebar Header starts-->
    <div class="sidebar-header">
      <div class="logo clearfix"><a href="{{ url('/home') }}" class="logo-text float-left">
        <div class="logo-img"><img src="{{asset('app-assets/img/logo.png')}}"/></div>
        <span class="text align-middle"><img src="{{asset('app-assets/img/logo-new.png')}}" alt=""></span></a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="collapsed" class="ft-toggle-left toggle-icon"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a></div>
    </div>
    <!-- Sidebar Header Ends--> 
    <!-- / main menu header--> 
    <!-- main menu content-->
    <div class="sidebar-content">
      <div class="nav-container">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <li class="nav-item active"><a href="{{ url('/home') }}"><i class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a> </li>
            <li class="nav-item"><a href="{{ url('/site') }}"><i class="ft-sidebar"></i><span data-i18n="" class="menu-title">Sites</span></a> </li>
            <li class="nav-item"><a href="{{ url('/employee') }}"><i class="ft-user"></i><span data-i18n="" class="menu-title">Employee</span></a> </li>
            <li class="nav-item"><a href="{{ url('/activity') }}"><i class="ft-activity"></i><span data-i18n="" class="menu-title">Activity &amp; Report</span></a> </li>
            <li class="nav-item"><a href="{{ url('/create-invite') }}"><i class="ft-inbox"></i><span data-i18n="" class="menu-title">Create Invite</span></a> </li>
             <li class="nav-item"><a href="{{ url('/venues') }}"><i class="ft-map-pin"></i><span data-i18n="" class="menu-title">Venues</span></a> </li>
        </ul>
      </div>
    </div>
    <!-- main menu content-->
    <div class="sidebar-background"></div>
    <!-- main menu footer--> 
    <!-- include includes/menu-footer--> 
    <!-- main menu footer--> 
  </div>
  <!-- / main menu--> 
  
  <!-- Navbar (Header) Starts-->
  <nav class="navbar navbar-expand-lg navbar-light bg-faded">
    <div class="container-fluid"> 
      <div class="navbar-header">
            <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          </div>
      <!-- Navbar Container -->
      <div class="navbar-container">
        <div id="navbarSupportedContent" class="navbar-collapse">
          <ul class="navbar-nav">
            <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle" aria-expanded="false"><i class="ft-user font-medium-3 blue-grey darken-4"></i>
              <p class="d-none">User Settings</p>
              </a>
              <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right"><a href="profile.html" class="dropdown-item py-1"><i class="ft-user mr-2"></i><span>Profile</span></a>
                <div class="dropdown-divider"></div>
                <a href="{{url('/logout')}}" class="dropdown-item"><i class="ft-power mr-2"></i><span>Logout</span></a> </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar (Header) Ends-->
  
    <div class="main-panel">
        @yield('content')
    </div>
    <footer class="footer footer-static footer-light">
      <p class="clearfix text-muted text-sm-center px-2"><span>Copyright  &copy; 2018 <a href="#" class="text-bold-800 dark-blue">Metalman Auto </a>, All rights reserved. </span></p>
    </footer>
  </div>
  </div>
  
<!-- ////////////////////////////////////////////////////////////////////////////--> 

<!-- START Notification Sidebar--> 

<!-- END Notification Sidebar--> 

<!-- BEGIN VENDOR JS--> 
<script src="{{asset('app-assets/vendors/js/core/jquery-3.2.1.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('app-assets/vendors/js/core/popper.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('app-assets/vendors/js/core/bootstrap.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('app-assets/vendors/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('app-assets/vendors/js/prism.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('app-assets/vendors/js/jquery.matchHeight-min.js')}}" type="text/javascript"></script> 
<script src="{{asset('app-assets/vendors/js/pace/pace.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('app-assets/vendors/js/pickadate/picker.js')}}" type="text/javascript"></script> 
<script src="{{asset('app-assets/vendors/js/pickadate/picker.date.js')}}" type="text/javascript"></script> 
<!-- BEGIN VENDOR JS--> 
<!-- BEGIN PAGE VENDOR JS--> 

<!-- END PAGE VENDOR JS--> 
<!-- BEGIN APEX JS--> 
<script src="{{asset('app-assets/js/app-sidebar.js')}}" type="text/javascript"></script> 
<script src="{{asset('app-assets/js/customizer.js')}}" type="text/javascript"></script>
<script src="{{asset('/js/components-modal.min.js')}}" type="text/javascript"></script> 
<!-- END APEX JS--> 
<!-- BEGIN PAGE LEVEL JS--> 

<script src="{{asset('app-assets/js/pick-a-datetime.js')}}" type="text/javascript"></script>

<script  src="{{ asset('js/jquery.dataTables.js') }}"></script>

<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.js"></script> -->
@yield('script')
<script>
      setTimeout(function() {
        $('#overlay').fadeOut();
        $('#overlay').delay(150).fadeOut('slow');
      }, 400);

    </script> 
<!-- END PAGE LEVEL JS-->
</body>
</html>