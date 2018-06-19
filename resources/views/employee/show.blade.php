@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="content-wrapper"> 
        <!-- Venue, Checked In Visitors, Checked In Members, Firelist -->
        <div class="row mb-3">
          	<div class="col-md-12">
            	<div class="content-header">Employee Detail</div>
          	</div>
        </div>
        
        <section class="edit-site">
          	<div class="card">
            	<div class="card-body">
                	<div class="row">
                  		<div class="col-md-12">
                    		<fieldset class="form-group">
                      			<strong>Employee Name:</strong>
                      			{{ $employee->employee_name }}
                   			</fieldset>
                  		</div>
		                
		                <div class="col-md-12">
		                    <fieldset class="form-group">
		                    	<strong>Phone Number:</strong>
		                    	{{ $employee->phone_number }}
		                    </fieldset>
		                </div>
		                
		                <div class="col-md-12">
		                    <fieldset class="form-group">
		                    	<strong>Email ID:</strong>
		                    	{{ $employee->email }}
		                    </fieldset>
		                </div>
		                
		                <div class="col-md-12">
		                    <fieldset class="form-group">
		                      <strong>Designation:</strong>
		                      {{ $employee->designation }}
		                    </fieldset>
		                  </div>
		                </div>

		                <div class="col-md-12">
		                    <fieldset class="form-group">
		                      <strong>Location:</strong>
		                      {{ $employee->location }}
		                    </fieldset>
		                  </div>
		                </div>

		                <div class="row">
		                  	<div class="col-md-12 btns">
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
