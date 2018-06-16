<!DOCTYPE html>
<html lang="en" class="loading">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<title>Sites | Metalman Auto</title>
<link rel="shortcut icon" href="{{asset('/img/ico/favicon.png')}}">
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
<!-- BEGIN VENDOR CSS-->
<!-- font icons-->
<link rel="stylesheet" type="text/css" href="{{asset('/fonts/feather/style.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/fonts/simple-line-icons/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/fonts/font-awesome/css/fontawesome-all.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/perfect-scrollbar.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/prism.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/pickadate/pickadate.css')}}">

<link href="{{asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

<!-- END VENDOR CSS-->
<!-- BEGIN APEX CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/css/custom.css')}}">
<!-- END APEX CSS-->
<!-- BEGIN Page Level CSS-->
<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<!-- END Custom CSS-->
</head>
<body data-col="2-columns" class=" 2-columns ">
<div id="overlay"> <img src="{{asset('/img/preloader.gif')}}" alt=""> </div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper nav-collapsed sites"> 
  <!-- main menu--> 
  <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
  <div data-active-color="white" data-background-color="white" data-image="{{asset('/img/sidebar-bg/01.jpg')}}" class="app-sidebar"> 
    <!-- main menu header--> 
    <!-- Sidebar Header starts-->
    <div class="sidebar-header">
      <div class="logo clearfix"><a href="dashboard.html" class="logo-text float-left">
        <div class="logo-img"><img src="{{asset('/img/logo.png')}}"/></div>
        <span class="text align-middle"><img src="{{asset('/img/logo-new.png')}}" alt=""></span></a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="collapsed" class="ft-toggle-left toggle-icon"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a></div>
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
  <div class="main-panel">
    <div class="main-content">
      <div class="content-wrapper"> 
        <!-- Venue, Checked In Visitors, Checked In Members, Firelist -->
        <div class="row">
          <div class="col-md-4">
            <div class="content-header">Sites</div>
          </div>
          <div class="col-md-8 text-right">
            <div class="buttons-group">
              <form action="#">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addsiteform"><i class="fa fa-plus"></i>Add Site</button>
              </form>
            </div>
          </div>
        </div>
        <!-- Add Site Form -->
        <div class="modal fade text-left" id="addsiteform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <label class="modal-title text-text-bold-600" id="myModalLabel33">Add Site</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
              </div>
              {!! Form::open(array('route' => 'site.store','method'=>'POST','files'=>'true')) !!}
                <div class="modal-body">
                  <div class="sitename">
                    <fieldset class="form-group">
                      <label for="sitename">Site Name</label>
                      <input type="text" class="form-control" id="sitename" name="name" placeholder="Enter Site Name">
                    </fieldset>
                  </div>
                  <div class="address">
                    <fieldset class="form-group">
                      <label for="adress">Address</label>
                      <textarea class="form-control" placeholder="Enter Address" rows="3" name="address" id="address"></textarea>
                    </fieldset>
                  </div>
                   <div class="visitor-name">
                    <label>State</label>
                    
                    {!! Form::select('state', (['' => 'Select a State'] + $state), null, array('class' => 'form-control', 'id' => 'state', 'data-bv-notempty-message'=>"Please Select State")) !!}
                  </div>
                  <div class="host-name">
                    <label>City</label>
                    {!! Form::select('city', (['' => 'Select a City'] + $city), null, array('class' => 'form-control', 'id' => 'city', 'data-bv-notempty-message'=>"Please Select City")) !!}
                  </div>
                 
                </div>
                <div class="modal-footer">
                  <input type="submit" class="btn btn-success" value="Add Site">
                </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        <section class="table-structure">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <!-- <div class="card-header"></div> -->
                <!-- <div class="filters">
                  <div class="col-md-3 show-entries"> <span>Show</span>
                    <form action="" class="form entries">
                      <div class="form-body">
                        <fieldset class="form-group">
                          <select class="form-control" id="basicSelect">
                            <option>50</option>
                            <option>100</option>
                            <option>200</option>
                            <option>500</option>
                          </select>
                        </fieldset>
                      </div>
                    </form>
                    <span>Entries</span> </div>
                  <div class="filter-results float-right"> <span>Filter Records</span>
                    <form role="search" class="navbar-form mt-1 search">
                      <div class="position-relative has-icon-right">
                        <input type="text" placeholder="Search" class="form-control round">
                        <div class="form-control-position"><i class="ft-search"></i></div>
                      </div>
                    </form>
                  </div>
                </div> -->
                <div class="card-body">
                  <div class="card-block">
                    <table class="table table-responsive-md text-center" id="site-table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Site Name</th>
                          <th>Address</th>
                          <th>City</th>
                          <th>State</th>
                          <!-- <th>Actions</th> -->
                          <th>Created At</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      
      <!-- Information List Layout --> 
      
    </div>
  </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////--> 

<!-- START Notification Sidebar--> 

<!-- END Notification Sidebar--> 

<!-- BEGIN VENDOR JS--> 
<script src="{{asset('/js/core/jquery-3.2.1.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('/js/core/popper.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('/js/core/bootstrap.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('/js/prism.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('/js/jquery.matchHeight-min.js')}}" type="text/javascript"></script> 
<script src="{{asset('/js/pace/pace.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('/js/pickadate/picker.js')}}" type="text/javascript"></script> 
<script src="{{asset('/js/pickadate/picker.date.js')}}" type="text/javascript"></script> 
<!-- BEGIN VENDOR JS--> 
<!-- BEGIN PAGE VENDOR JS--> 

<!-- END PAGE VENDOR JS--> 
<!-- BEGIN APEX JS--> 
<script src="{{asset('/js/app-sidebar.js')}}" type="text/javascript"></script> 
<script src="{{asset('/js/customizer.js')}}" type="text/javascript"></script> 
<script src="{{asset('/js/components-modal.min.js')}}" type="text/javascript"></script> 
<!-- END APEX JS--> 
<!-- BEGIN PAGE LEVEL JS--> 

<script src="{{asset('/js/pick-a-datetime.js')}}" type="text/javascript"></script> 
<script  src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script  src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>

<script>
      setTimeout(function() {
        $('#overlay').fadeOut();
        $('#overlay').delay(150).fadeOut('slow');
      }, 400);

</script>
<script type="text/javascript">
jQuery(document).ready(function ($) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //Site Table
    $('#site-table').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
        ajax: {
            url: '{!! route('site.listAjax') !!}',
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'address', name: 'address' },
            { data: 'state', name: 'state' },
            { data: 'city', name: 'city' },
            { data: 'created_at', name: 'created_at'},
            /*{ data: 'id', name: 'actions'},*/
        ],
        aoColumnDefs: [
            {
                
            }
          ]
    });
});
</script> 
<!-- END PAGE LEVEL JS-->
</body>
</html>