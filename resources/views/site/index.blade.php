@extends('layouts.app')

@section('content')    
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
			           		<select name="state" id="state" class="form-control">
        						<option value="">Select a State</option>
        						@foreach($state as $value)
        							<option value="{{$value['id']}}">{{$value['name']}}</option>
        						@endforeach
        					</select>
			          	</div>
			          	<div class="host-name city-data">
			            	<label>City</label>
			            	<select name="city" id="city" class="form-control">
            				</select>
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
            { data: 'city', name: 'city' },
            { data: 'state', name: 'state' },
            { data: 'id', name: 'actions'},
        ],
        aoColumnDefs: [
        {
            "aTargets": [ 5 ], // Column to target
            "mRender": function ( data, type, full ) {
                if(full.id)
                {
                    var edit_route = '{!! route("site.edit", ":id") !!}';
                    edit_route = edit_route.replace(':id', full.id);

                    var delete_route = '{!! url("/siteDelete") !!}' +'/'+ full.id;

                    var site_detail_route = '{!! url("/site") !!}' +'/'+ full.id;
                    returnStr = '<a href="'+site_detail_route+'" class="danger" data-original-title="" title=""> <i class="ft-eye font-medium-3 success"></i> </a><a href="'+edit_route+'" class="danger" data-original-title="" title=""> <i class="ft-edit font-medium-3 success"></i> </a><a href="'+delete_route+'" class="danger" data-original-title="" title=""> <i class="ft-trash-2 font-medium-3 danger"></i> </a>';
                }
                else {
                    returnStr = '---';
                }

                return returnStr;
            }
        }
    ]
    });

    $("#city").append('<option value="">Select City</option>');
    $('#state').on('change',function(){
	    var stateID = $(this).val();

	    if(stateID){
	        $.ajax({
	           type:"GET",
	           url:"{{url('getCityList')}}?state_id="+stateID,
	           success:function(res){               
	            if(res){
	                $("#city").empty();
	                $("#city").append('<option value="">Select City</option>');
	                $.each(res,function(key,value){
	                    $("#city").append('<option value="'+key+'">'+value+'</option>');
	                });
	            }else{
	               $("#city").empty();
	        	}
	        }
	        });
	    }else{
	        $("#city").empty();
	    }        
   	});
});
</script> 
@endsection