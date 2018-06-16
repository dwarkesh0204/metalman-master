<!DOCTYPE html>
<html lang="en" class="loading">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<title>Dashboard | Metalman Auto</title>
<link rel="shortcut icon" href="{{asset('img/ico/favicon.png')}}">
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
<!-- BEGIN VENDOR CSS-->

 <!-- Fonts -->
    
    <link href="{{asset('css/datatables.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/fonts/font-awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/pickadate.css')}}">
<!-- font icons-->
<!-- END VENDOR CSS-->
<!-- BEGIN APEX CSS-->
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<!-- END APEX CSS-->
<!-- BEGIN Page Level CSS-->
<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<!-- END Custom CSS-->
</head>
<body data-col="2-columns" class=" 2-columns dashboard">
<div id="overlay"> <img src="{{asset('/img/preloader.gif')}}" alt=""> </div>

<div class="wrapper nav-collapsed sites"> 
  
	<!-- main menu--> 
  	<!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
 	<div data-active-color="white" data-background-color="white" data-image="{{asset('/img/sidebar-bg/01.jpg')}}" class="app-sidebar"> 
    <!-- main menu header--> 
    <!-- Sidebar Header starts-->
	    <div class="sidebar-header">
	      	<div class="logo clearfix"><a href="dashboard.html" class="logo-text float-left">
	        	<div class="logo-img"><img src="{{ asset('/img/logo.png')}}"/></div>
	        	<span class="text align-middle"><img src="{{ asset('/img/logo-new.png') }}" alt=""></span></a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="collapsed" class="ft-toggle-left toggle-icon"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a>
	        </div>
	    </div>
	    <!-- Sidebar Header Ends--> 
	    <!-- / main menu header--> 
	    <!-- main menu content-->
	    <div class="sidebar-content">
	      <div class="nav-container">
	        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
	          <li class="nav-item active"><a href="dashboard.html"><i class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a> </li>
	          <li class="nav-item"><a href="{{ url('/site') }}"><i class="ft-sidebar"></i><span data-i18n="" class="menu-title">Sites</span></a> </li>
	          <li class="nav-item"><a href="{{ url('/employee') }}"><i class="ft-user"></i><span data-i18n="" class="menu-title">Employee</span></a> </li>
	          <li class="nav-item"><a href="activities.html"><i class="ft-activity"></i><span data-i18n="" class="menu-title">Activity &amp; Report</span></a> </li>
	            <li class="nav-item"><a href="create-invite.html"><i class="ft-inbox"></i><span data-i18n="" class="menu-title">Create Invite</span></a> </li>
	             <li class="nav-item"><a href="venues.html"><i class="ft-map-pin"></i><span data-i18n="" class="menu-title">Venues</span></a> </li>
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

  <!-- Navbar 1(Header) Starts--> 
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
                <a href="index.html" class="dropdown-item"><i class="ft-power mr-2"></i><span>Logout</span></a> </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar (Header) Ends--> 

  	<!-- / main menu-->  
	<div class="main-panel">
	    <div class="main-content">
	      <div class="content-wrapper"> 
	        <!-- Venue, Checked In Visitors, Checked In Members, Firelist -->
	        <div class="basic-information">
	          <div class="row"> 
	            <!-- Select Venues -->
	            <div class="col-md-3">
	              <div class="select-site">
	                <div class="card">
	                  <div class="card-body">
	                    <div class="card-block">
	                      <form action="" class="form">
	                        <div class="form-body">
	                          <fieldset class="form-group">
	                            <select class="form-control" id="basicSelect">
	                              <option>Select Sites</option>
	                              <option>National Industries</option>
	                              <option>Campbell International</option>
	                              <option>Metalman Microturners(JV)-Unit 1</option>
	                              <option>Metalman Microturners(JV)-Unit 2</option>
	                            </select>
	                          </fieldset>
	                        </div>
	                      </form>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	              <!-- Total Checked In -->
	            <div class="col-md-3">
	              <div class="card">
	                <div class="card-header">
	                  <div class="card-title mb-0">Total Visits <span class="badge badge-pill badge-danger float-right mr-1 mt-1">3</span></div>
	                </div>
	              </div>
	            </div>
	            <!-- Overstayed In -->
	            <div class="col-md-3">
	              <div class="card">
	                <div class="card-header">
	                  <div class="card-title mb-0">Total Checked In<span class="badge badge-pill badge-danger float-right mr-1 mt-1">7</span></div>
	                </div>
	              </div>
	            </div>
	            <!-- Overstayed Out -->
	            <div class="col-md-3">
	              <div class="card">
	                <div class="card-header">
	                  <div class="card-title mb-0">Total Checked Out<span class="badge badge-pill badge-danger float-right mr-1 mt-1">5</span></div>
	                </div>
	              </div>
	            </div>
	            
	          </div>
	        <!-- -->
	         <div class="list-layout">
	        <div class="row"> 
	          <!-- Just Checked In -->
	          <div class="col-md-4">
	            <div class="card">
	              <div class="card-header">
	                <h4 class="card-title mb-0">Current Visitors</h4>
	              </div>
	              <div class="card-body">
	                <div class="card-block"> 
	                <!--one -->
	                 <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="{{asset('/img/portrait/small/avatar-s-3.png')}}" alt="Generic placeholder image"> <i></i> </span>
	                  <div class="media-body">
	                    <h6 class="list-group-item-heading">Elizabeth Elliott <span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
	                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
	                  </div>
	                  </span> 
	                  </div> 
	                  <!-- Two -->
	                   <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="{{asset('/img/portrait/small/avatar-s-4.png')}}" alt="Generic placeholder image"> <i></i> </span>
	                  <div class="media-body">
	                    <h6 class="list-group-item-heading">Kristopher Candy <span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
	                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
	                  </div>
	                  </span> 
	                  </div>
	                  <!-- Three -->
	                   <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="{{asset('/img/portrait/small/avatar-s-1.png')}}" alt="Generic placeholder image"> <i></i> </span>
	                  <div class="media-body">
	                    <h6 class="list-group-item-heading">Sarah Woods<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
	                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
	                  </div>
	                  </span> 
	                  </div>
	                   <!-- Four -->
	                   <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="{{asset('/img/portrait/small/avatar-s-5.png')}}" alt="Generic placeholder image"> <i></i> </span>
	                  <div class="media-body">
	                    <h6 class="list-group-item-heading">Heather Howell<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
	                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
	                  </div>
	                  </span> 
	                  </div>
	                  <!-- Five -->
	                  <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="{{asset('/img/portrait/small/avatar-s-5.png')}}" alt="Generic placeholder image"> <i></i> </span>
	                  <div class="media-body">
	                    <h6 class="list-group-item-heading">Clark Gomez<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
	                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
	                  </div>
	                  </span> 
	                  </div>
	                  <!-- Six -->
	                  <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="{{asset('/img/portrait/small/avatar-s-5.png')}}" alt="Generic placeholder image"> <i></i> </span>
	                  <div class="media-body">
	                    <h6 class="list-group-item-heading">Clark Gomez<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
	                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
	                  </div>
	                  </span> 
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	          <!-- Just Checked Out -->
	          <div class="col-md-4">
	            <div class="card">
	              <div class="card-header">
	                <h4 class="card-title mb-0">Upcoming Visitors</h4>
	              </div>
	              <div class="card-body">
	                <div class="card-block"> 
	                <!--one -->
	                 <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="{{asset('/img/portrait/small/avatar-s-2.png')}}" alt="Generic placeholder image"> <i></i> </span>
	                  <div class="media-body">
	                    <h6 class="list-group-item-heading">Elizabeth Elliott <span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
	                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
	                  </div>
	                  </span> 
	                  </div> 
	                  <!-- Two -->
	                   <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="{{asset('/img/portrait/small/avatar-s-7.png')}}" alt="Generic placeholder image"> <i></i> </span>
	                  <div class="media-body">
	                    <h6 class="list-group-item-heading">Kristopher Candy <span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
	                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
	                  </div>
	                  </span> 
	                  </div>
	                  <!-- Three -->
	                   <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="{{asset('/img/portrait/small/avatar-s-8.png')}}" alt="Generic placeholder image"> <i></i> </span>
	                  <div class="media-body">
	                    <h6 class="list-group-item-heading">Sarah Woods<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
	                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
	                  </div>
	                  </span> 
	                  </div>
	                   <!-- Four -->
	                   <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="{{asset('/img/portrait/small/avatar-s-10.png')}}" alt="Generic placeholder image"> <i></i> </span>
	                  <div class="media-body">
	                    <h6 class="list-group-item-heading">Heather Howell<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
	                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
	                  </div>
	                  </span> 
	                  </div>
	                  <!-- Five -->
	                  <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="{{asset('/img/portrait/small/avatar-s-9.png')}}" alt="Generic placeholder image"> <i></i> </span>
	                  <div class="media-body">
	                    <h6 class="list-group-item-heading">Johnson Wayne<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
	                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
	                  </div>
	                  </span> 
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-4">
	            <div class="card">
	              <div class="card-header">
	                <h4 class="card-title mb-0">History</h4>
	              </div>
	              <div class="card-body">
	                <div class="card-block"> 
	                <!--one -->
	                 <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="{{asset('/img/portrait/small/avatar-s-2.png')}}" alt="Generic placeholder image"> <i></i> </span>
	                  <div class="media-body">
	                    <h6 class="list-group-item-heading">Elizabeth Elliott <span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
	                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
	                  </div>
	                  </span> 
	                  </div> 
	                  <!-- Two -->
	                   <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="{{asset('/img/portrait/small/avatar-s-7.png')}}" alt="Generic placeholder image"> <i></i> </span>
	                  <div class="media-body">
	                    <h6 class="list-group-item-heading">Kristopher Candy <span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
	                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
	                  </div>
	                  </span> 
	                  </div>
	                  <!-- Three -->
	                   <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="{{asset('/img/portrait/small/avatar-s-8.png')}}" alt="Generic placeholder image"> <i></i> </span>
	                  <div class="media-body">
	                    <h6 class="list-group-item-heading">Sarah Woods<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
	                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
	                  </div>
	                  </span> 
	                  </div>
	                   <!-- Four -->
	                   <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="{{asset('/img/portrait/small/avatar-s-10.png')}}" alt="Generic placeholder image"> <i></i> </span>
	                  <div class="media-body">
	                    <h6 class="list-group-item-heading">Heather Howell<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
	                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
	                  </div>
	                  </span> 
	                  </div>
	                  <!-- Five -->
	                  <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="{{asset('/img/portrait/small/avatar-s-9.png')}}" alt="Generic placeholder image"> <i></i> </span>
	                  <div class="media-body">
	                    <h6 class="list-group-item-heading">Johnson Wayne<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
	                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
	                  </div>
	                  </span> 
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        </div>  
	          </div>
	        </div>
	        
	        <!-- Information List Layout --> 
	    </div>
	    @include('layouts/footer')
  	</div>
 </div>
  
<!-- ////////////////////////////////////////////////////////////////////////////--> 

<!-- START Notification Sidebar--> 

<!-- END Notification Sidebar--> 

<!-- BEGIN VENDOR JS--> 
<script src="{{asset('js/core/jquery-3.2.1.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('js/core/popper.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('js/core/bootstrap.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('js/prism.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('js/jquery.matchHeight-min.js')}}" type="text/javascript"></script> 
<script src="{{asset('js/pace/pace.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('js/pickadate/picker.js')}}" type="text/javascript"></script> 
<script src="{{asset('js/pickadate/picker.date.js')}}" type="text/javascript"></script> 
<!-- BEGIN VENDOR JS--> 
<!-- BEGIN PAGE VENDOR JS--> 

<!-- END PAGE VENDOR JS--> 
<!-- BEGIN APEX JS--> 
<script src="{{asset('/js/app-sidebar.js')}}" type="text/javascript"></script> 
<script src="{{asset('/js/customizer.js')}}" type="text/javascript"></script>
<!-- END APEX JS--> 
<!-- BEGIN PAGE LEVEL JS--> 

<script src="{{asset('/js/pick-a-datetime.js')}}" type="text/javascript"></script>
<script>
      setTimeout(function() {
        $('#overlay').fadeOut();
        $('#overlay').delay(150).fadeOut('slow');
      }, 400);

    </script> 
<!-- END PAGE LEVEL JS-->
</body>
</html>

    
<!-- <script src="{{asset('/js/components-modal.min.js')}}" type="text/javascript"></script> -->
    




