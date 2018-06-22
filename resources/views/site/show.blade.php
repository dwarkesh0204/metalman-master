@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="content-wrapper"> 
        <!-- Venue, Checked In Visitors, Checked In Members, Firelist -->
        <div class="row mb-3">
          	<div class="col-md-12">
            	<div class="content-header">Site Detail</div>
          	</div>
        </div>
        
        <section class="edit-site">
          	<div class="card">
            	<div class="card-body">
                	<div class="row">
                  		<div class="col-md-12">
                    		<fieldset class="form-group">
                      			<strong>Site Name:</strong>
                      			{{ $site->name }}
                   			</fieldset>
                  		</div>
		                <div class="col-md-12">
		                    <fieldset class="form-group">
		                    	<strong>State:</strong>
		                    	{{ $site->state }}
		                    </fieldset>
		                  </div>
		                  <div class="col-md-12">
		                    <fieldset class="form-group">
		                    	<strong>City:</strong>
		                    	{{ $site->city }}
		                    </fieldset>
		                  </div>
		                  <div class="col-md-12">
		                    <fieldset class="form-group">
		                      <strong>Address:</strong>
		                      {{ $site->address }}
		                    </fieldset>
		                  </div>
		                  <div class="col-md-12">
		                    <fieldset class="form-group">
		                      <strong>Site Admins:</strong>
		                      <div class="row site-admins">
		                        <div class="col-md-2">
		                            <ul>
		                            	@if(count($siteEmployeeData['siteEmployees']) > 0)
			                            	@foreach($siteEmployeeData['siteEmployees'] as $siteEmployee)
				                              	<li id="employee_id" value="{{$siteEmployee['employeeDetail']['id']}}">{{$siteEmployee['employeeDetail']['employee_name']}}<a href="#"></i></a></li>
			                            	@endforeach
			                            @else
			                            	<li>------</li>
			                            @endif
		                            </ul>
		                        </div>
		                       
		                      </div>
		                    </fieldset>
		                  </div>
		                </div>
		                <div class="row">
		                  	<div class="col-md-12 btns">
		                    	<a class="btn btn-grey" href="{{ url('site') }}"> Cancel</a>
		                  	</div>
		                </div>
              		{!! Form::close() !!}
           		</div>
          	</div>
        </section>
    </div>      
</div>
@endsection
