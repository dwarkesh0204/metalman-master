@extends('layouts.app')

@section('content')
<div class="main-content">
  <div class="content-wrapper"> 
    <!-- Venue, Checked In Visitors, Checked In Members, Firelist -->
    <div class="row">
      <div class="col-md-4">
        <div class="content-header">Employee</div>
      </div>
      <div class="col-md-8 text-right">
        <div class="buttons-group">
          <form action="#">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addemployeeform"><i class="fa fa-plus"></i>Add Employee</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#importemployeeform"><i class="fa fa-cloud-download"></i>Import Employee</button>
            <a class="btn btn-primary" href="{{ route('employee.getExport') }}"><i class="fa fa-cloud-download"></i>Export Employee</a>
          </form>
        </div>
      </div>
    </div>
    <!-- Add Employee -->
    <div class="modal fade text-left" id="importemployeeform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <label class="modal-title text-text-bold-600" id="myModalLabel33">Import Employees</label>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
          </div>
          {!! Form::open(array('route' => 'employee.importEmployeeSave','method'=>'POST','files'=>'true')) !!}
            <div class="modal-body">
              <div class="employee_import_file">
                <fieldset class="form-group">
                  {{Form::file('employee_import_file',null,array('class' => 'form-control', 'accept' => '.xls,.xlsx'))}}
                </fieldset>
                <a href="{{asset('/sample_import.xls')}}">Import Sample File</a>
              </div>          
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-success" value="Submit">
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
    <!-- Add Employee -->
    <div class="modal fade text-left" id="addemployeeform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <label class="modal-title text-text-bold-600" id="myModalLabel33">Add Employee</label>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
          </div>
          {!! Form::open(array('route' => 'employee.store','method'=>'POST','files'=>'true')) !!}
            <div class="modal-body">
              <div class="sitename">
                <fieldset class="form-group">
                  <label for="sitename">Employee Name</label>
                  <input type="text" class="form-control" name="employee_name" id="sitename" placeholder="Enter Employee Name">
                </fieldset>
              </div>
              <div class="phonenumber">
                 <fieldset class="form-group">
                  <label for="phoneno">Phone Number</label>
                  <input type="number" class="form-control" id="phoneno" name="phone_number" placeholder="Enter Phone Number">
                </fieldset>
              </div>
               <div class="email-id">
              <fieldset class="form-group">
                  <label for="email">Email ID</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter Email ID">
                </fieldset>
              </div>
              <div class="designation mb-2">
                <label>Designation</label>
                {!! Form::select('designation', (['' => 'Select Designation'] + $designation), null, array('class' => 'form-control', 'id' => 'designation', 'data-bv-notempty-message'=>"Please Select Designation")) !!}
              </div>
              <div class="location">
                <label>Location</label>
                {!! Form::select('location', (['' => 'Select Location'] + $location), null, array('class' => 'form-control', 'id' => 'location', 'data-bv-notempty-message'=>"Please Select Location")) !!}
              </div>
             
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-success" value="Add Employee">
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
            <!-- Add as venue Admin -->
    <div class="modal fade text-left" id="addadmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <label class="modal-title text-text-bold-600" >Add as Venue Admin</label>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
          </div>
          <form action="#">
            <div class="modal-body">
               <div class="visitor-name">
                <label>Site</label>
                <select class="form-control">
                  <option>Select Site</option>
                  <option>Metalman Auto Head Office</option>
                  <option>Metalman Auto Head Office</option>
                 <option>Metalman Auto Head Office</option>
                  <option>Metalman Auto Head Office</option>
                  <option>Metalman Auto Head Office</option>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-success" value="Add">
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Remove as venue Admin -->
    <div class="modal fade text-left" id="removeadmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <label class="modal-title text-text-bold-600" >Remove as Venue Admin</label>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
          </div>
          <form action="#">
            <div class="modal-body">
               <div class="visitor-name">
                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                          <input id="notifications1" checked type="checkbox" class="custom-control-input cz-bg-image-display">
                          <label for="notifications1" class="custom-control-label">Metalman Auto Head Office</label>
                    </div>
              </div>
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-success" value="Remove">
            </div>
          </form>
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
                <table class="table table-responsive-md text-center" id="employee-table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Phone Number</th>
                      <th>Email ID</th>
                      <th>Designation</th>
                      <th>Location</th>
                      <th>Created At</th>
                      <!-- <th>Actions</th> -->
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
@endsection
@section('script')
<script type="text/javascript">
jQuery(document).ready(function ($) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //Site Table
    $('#employee-table').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
        ajax: {
            url: '{!! route('employee.listAjax') !!}',
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'employee_name', name: 'employee_name' },
            { data: 'phone_number', name: 'phone_number' },
            { data: 'email', name: 'email' },
            { data: 'designation', name: 'designation' },
            { data: 'location', name: 'location' },
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
@endsection