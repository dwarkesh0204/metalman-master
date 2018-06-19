@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="content-wrapper"> 
        <!-- Venue, Checked In Visitors, Checked In Members, Firelist -->
        <div class="row mb-3">
          	<div class="col-md-12">
            	<div class="content-header">Edit Employee</div>
          	</div>
        </div>
        
        <section class="edit-site">
          	<div class="card">
            	<div class="card-body">
            		{!! Form::model($employee, ['files' => 'true', 'method' => 'PATCH', 'route' => ['employee.update', $employee->id]]) !!}
            		@csrf
                	<div class="row">
                  		<div class="col-md-12">
                    		<fieldset class="form-group">
                      			<label for="sitename">Employee Name</label>
			                  	<input type="text" class="form-control" name="employee_name" value="{{ $employee->employee_name }}" id="sitename" placeholder="Enter Employee Name">
                   			</fieldset>
                  		</div>

                  		<div class="col-md-12">
                    		<fieldset class="form-group">
                      			<label for="phoneno">Phone Number</label>
			                  	<input type="number" class="form-control" id="phoneno" name="phone_number" value="{{$employee->phone_number}}" placeholder="Enter Phone Number">
                   			</fieldset>
                  		</div>

                  		<div class="col-md-12">
                    		<fieldset class="form-group">
                      			<label for="email">Email ID</label>
			                <input type="email" class="form-control" name="email" value="{{$employee->email}}" placeholder="Enter Email ID">
                   			</fieldset>
                  		</div>		

		                <div class="col-md-12">
		                    <fieldset class="form-group">
		                    	<label>Select Designation</label>
			                	{!! Form::select('designation', (['' => 'Select Designation'] + $designation), null, array('class' => 'form-control', 'id' => 'designation', 'data-bv-notempty-message'=>"Please Select Designation")) !!}
		                    </fieldset>
		                  </div>
		                 
		                <div class="col-md-12">
		                    <fieldset class="form-group">
		                    	<label>Select Location</label>
			                	{!! Form::select('location', (['' => 'Select Location'] + $location), null, array('class' => 'form-control', 'id' => 'location', 'data-bv-notempty-message'=>"Please Select Location")) !!}
		                    </fieldset>
		                 </div>
		                  
		                <div class="row">
		                  	<div class="col-md-12 btns">
		                    	<button type="submit" class="btn btn-primary">Edit Employee</button>
		                    	<a class="btn btn-grey" href="{{ url('employee') }}"> Cancel</a>
		                  	</div>
		                </div>
              		{!! Form::close() !!}
           		</div>
          	</div>
        </section>
    </div>      
</div>
@endsection
