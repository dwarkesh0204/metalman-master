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
            <form action="#" method="POST" autocomplete="off">
                <div class="modal-body">
                    <div class="visitor-name">
                        <label>Site</label>
                        {!! Form::select('site', (['' => 'Select Site'] + $site), null, array('class' => 'form-control', 'id' => 'site_id', 'data-bv-notempty-message'=>"Please Select Site")) !!}
                    </div>
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-success" id="siteAdd" value="Add">
                </div>
                <input type="hidden" class="form-control" id="employee_id" value="">
            </form>
        </div>
      </div>
    </div>

    <!-- Add as venue Admin message-->
    <div class="modal fade text-left" id="addadmin-form-submit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="addadminFormMessage"></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
        </div>
      </div>
    </div>

    <!-- Add as venue Admin message-->
    <div class="modal fade text-left" id="removeAdmin-form-submit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="removeAdminFormMessage"></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
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
                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0 siteName">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-success" id="removedSiteEmployee" value="Remove">
            </div>
            <input type="hidden" class="form-control" id="employee_id" value="">
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
                      <th>Actions</th>
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

<!-- Remove as venue Admin message-->
<div class="modal fade text-left" id="remove-employee-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <div class="removeMessage"></div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
    </div>
  </div>
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
            { data: 'id', name: 'actions'},
        ],
        aoColumnDefs: [
        {
            "aTargets": [ 6 ], // Column to target
            "mRender": function ( data, type, full ) {
                if(full.id)
                {
                    var edit_route = '{!! route("employee.edit", ":id") !!}';
                    edit_route = edit_route.replace(':id', full.id);

                    var delete_route = '{!! url("/employeeDelete") !!}' +'/'+ full.id;

                    var employee_detail_route = '{!! url("/employee") !!}' +'/'+ full.id;

                    if (full.addSiteAdmin) {
                        returnStr = '<a href="#" class="danger remove_employee_id" data-original-title="" title="Remove as Venue Admin" data-toggle="modal" data-target="#removeadmin" data-employeeid="'+full.id+'"><i class="ft-user-minus font-medium-3 success removedEmployee" data-employeeid="'+full.id+'" data-siteid="'+full.addSiteAdmin+'"></i> </a>';    
                    }else{
                        returnStr = '<a href="#" class="danger employee_id" data-original-title="" title="Add as Venue Admin" data-toggle="modal" data-target="#addadmin" data-employeeid="'+full.id+'"><i class="ft-user-plus font-medium-3 success addEmployee"></i> </a>';
                    }
                    returnStr += '<a href="'+employee_detail_route+'" class="danger" data-original-title="" title=""> <i class="ft-eye font-medium-3 success"></i> </a><a href="'+edit_route+'" class="danger" data-original-title="" title=""> <i class="ft-edit font-medium-3 success"></i> </a><a href="'+delete_route+'" class="danger" data-original-title="" title=""> <i class="ft-trash-2 font-medium-3 danger"></i> </a>';
                }
                else {
                    returnStr = '---';
                }

                return returnStr;
            }
        }
          ]
    });

    var CSRF_TOKEN   = '{{ csrf_token() }}';

    // Set Employee Id in Popup
    $(document).on("click", ".employee_id", function(event){
        var employee_id = $(this).data('employeeid'); //get employee id
        $('#employee_id').val(employee_id); //set employee id
    });

    jQuery('#siteAdd').click(function (event) {

		var site_id     = $('#site_id').val();
		var employee_id = $('#employee_id').val();

        if (site_id == "" || site_id == null)
        {
            alert("Please select site");
        }

        $('#site_id').val("");
        $.ajax({
            type: "POST",
            url: '{!! route('employee.addSiteEmployee') !!}',
            data: {
                _token : CSRF_TOKEN,
                site_id:site_id,
                employee_id:employee_id,
            },
            dataType : 'JSON',
            success: function( response ) {
                if(response.success == "1"){
                    $('#site_id').val("");
                    $('#addadmin').modal('hide');
                    $('.addadminFormMessage').html(response.msg);
                    $('#addadmin-form-submit-modal').modal('show');
                    //$(this).removeClass("ft-user-plus");
                    //$(this).addClass("ft-user-minus");
                    location.reload();
                }else{
                    $('#addadmin').modal('hide');
                    $('.addadminFormMessage').html(response.msg);
                    $('#addadmin-form-submit-modal').modal('show');
                }
            }
        });
    });

    // Set Employee Id in Popup
    $(document).on("click", ".remove_employee_id", function(event){
        var removed_employee_id = $(this).data('employeeid'); //get employee id
        $('#employee_id').val(removed_employee_id); //set employee id
        $.ajax({
            type: "POST",
            url: '{!! route('employee.getSiteName') !!}',
            data: {
                _token : CSRF_TOKEN,
                employee_id:removed_employee_id,
            },
            dataType : 'JSON',
            success: function( response ) {
                
                if(response.success == "1"){
                    $('.siteName').html(response.msg);
                }
            }
        });
    
        $('#removed_employee_id').val(removed_employee_id); //set employee id
    });

    jQuery('#removedSiteEmployee').click(function (event) {
        var employee_id = $('#employee_id').val();

        $.ajax({
            type: "POST",
            url: '{!! route('employee.removeSiteEmployee') !!}',
            data: {
                _token : CSRF_TOKEN,
                employee_id:employee_id,
            },
            dataType : 'JSON',
            success: function( response ) {
                
                if(response.success == "1"){
                    $('#removeadmin').modal('hide');
                    $('.removeAdminFormMessage').html(response.msg);
                    $('#removeAdmin-form-submit-modal').modal('show');
                    //$("i.removedEmployee").removeClass("ft-user-minus");
                    //$("i.removedEmployee").addClass("ft-user-plus");
                    location.reload();
                }else{
                    $('#removeadmin').modal('hide');
                    $('.removeAdminFormMessage').html(response.msg);
                    $('#removeAdmin-form-submit-modal').modal('show');
                }
            }
        });
    });

});
</script>
@endsection