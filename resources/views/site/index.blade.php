<!DOCTYPE html>
<html lang="en" class="loading">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<title>Sites | Metalman Auto</title>

<!-- END APEX CSS-->
<!-- BEGIN Page Level CSS-->
<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<!-- END Custom CSS-->
</head>
@extends('layouts.app')
@section('content')
<body data-col="2-columns" class=" 2-columns ">
<div id="overlay"> <img src="app-assets/img/preloader.gif" alt=""> </div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper nav-collapsed sites"> 
  <!-- main menu--> 
  <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
  <!-- / main menu--> 
  @include('layouts/sidebar')  
  <!-- / main menu--> 
  
  <!-- Navbar (Header) Starts-->
  @include('layouts/navbar')
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
                <div class="card-header"></div>
                <div class="filters">
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
                </div>
                <div class="card-body">
                  <div class="card-block">
                    <table class="table table-responsive-md text-center">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Site Name</th>
                          <th>Address</th>
                          <th>City</th>
                          <th>State</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Metalman Auto - Head Office</td>
                          <td>B 31 MIDC, Waluj, Aurangabad, Maharashtra 431136</td>
                          <td>Aurangabad</td>
                          <td>Maharashtra</td>
                          <td><a href="#" class="danger" data-original-title="" title=""> <i class="ft-eye font-medium-3 success"></i> </a><a href="edit-site.html" class="danger" data-original-title="" title=""> <i class="ft-edit font-medium-3 success"></i> </a><a href="#" class="danger" data-original-title="" title=""> <i class="ft-trash-2 font-medium-3 danger"></i> </a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Metalman Auto - Head Office</td>
                          <td>B 31 MIDC, Waluj, Aurangabad, Maharashtra 431136</td>
                          <td>Aurangabad</td>
                          <td>Maharashtra</td>
                         <td><a href="#" class="danger" data-original-title="" title=""> <i class="ft-eye font-medium-3 success"></i> </a><a href="edit-site.html" class="danger" data-original-title="" title=""> <i class="ft-edit font-medium-3 success"></i> </a><a href="#" class="danger" data-original-title="" title=""> <i class="ft-trash-2 font-medium-3 danger"></i> </a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Metalman Auto - Head Office</td>
                          <td>B 31 MIDC, Waluj, Aurangabad, Maharashtra 431136</td>
                          <td>Aurangabad</td>
                          <td>Maharashtra</td>
                          <td><a href="#" class="danger" data-original-title="" title=""> <i class="ft-eye font-medium-3 success"></i> </a><a href="edit-site.html" class="danger" data-original-title="" title=""> <i class="ft-edit font-medium-3 success"></i> </a><a href="#" class="danger" data-original-title="" title=""> <i class="ft-trash-2 font-medium-3 danger"></i> </a></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Metalman Auto - Head Office</td>
                          <td>B 31 MIDC, Waluj, Aurangabad, Maharashtra 431136</td>
                          <td>Aurangabad</td>
                          <td>Maharashtra</td>
                          <td><a href="#" class="danger" data-original-title="" title=""> <i class="ft-eye font-medium-3 success"></i> </a><a href="edit-site.html" class="danger" data-original-title="" title=""> <i class="ft-edit font-medium-3 success"></i> </a><a href="#" class="danger" data-original-title="" title=""> <i class="ft-trash-2 font-medium-3 danger"></i> </a></td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Metalman Auto - Head Office</td>
                          <td>B 31 MIDC, Waluj, Aurangabad, Maharashtra 431136</td>
                          <td>Aurangabad</td>
                          <td>Maharashtra</td>
                          <td><a href="#" class="danger" data-original-title="" title=""> <i class="ft-eye font-medium-3 success"></i> </a><a href="edit-site.html" class="danger" data-original-title="" title=""> <i class="ft-edit font-medium-3 success"></i> </a><a href="#" class="danger" data-original-title="" title=""> <i class="ft-trash-2 font-medium-3 danger"></i> </a></td>
                        </tr>
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
        @include('layouts/footer')
  </div>
</div>

@section('script')
<script>
      setTimeout(function() {
        $('#overlay').fadeOut();
        $('#overlay').delay(150).fadeOut('slow');
      }, 400);

    </script> 
@endsection
</body>
</html>