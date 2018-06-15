  <!-- main menu--> 
  <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
  <div data-active-color="white" data-background-color="white" data-image="{{ asset('/img/sidebar-bg/01.jpg') }}" class="app-sidebar"> 
    <!-- main menu header--> 
    <!-- Sidebar Header starts-->
    <div class="sidebar-header">
      <div class="logo clearfix"><a href="dashboard.html" class="logo-text float-left">
        <div class="logo-img"><img src="{{ asset('/img/logo.png')}}"/></div>
        <span class="text align-middle"><img src="{{ asset('/img/logo-new.png') }}" alt=""></span></a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="collapsed" class="ft-toggle-left toggle-icon"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a></div>
    </div>
    <!-- Sidebar Header Ends--> 
    <!-- / main menu header--> 
    <!-- main menu content-->
    <div class="sidebar-content">
      <div class="nav-container">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class="nav-item active"><a href="dashboard.html"><i class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a> </li>
          <li class="nav-item"><a href="{{ url('/site') }}"><i class="ft-sidebar"></i><span data-i18n="" class="menu-title">Sites</span></a> </li>
          <li class="nav-item"><a href="employee.html"><i class="ft-user"></i><span data-i18n="" class="menu-title">Employee</span></a> </li>
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
<script type = 'text/javascript'>
</script>
