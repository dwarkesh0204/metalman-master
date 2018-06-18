@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="content-wrapper"> 
        <!-- Venue, Checked In Visitors, Checked In Members, Firelist -->
        <div class="row mb-3">
          	<div class="col-md-12">
            	<div class="content-header">Edit Site</div>
          	</div>
        </div>
        
        <section class="edit-site">
          	<div class="card">
            	<div class="card-body">
            		{!! Form::model($item, ['files' => 'true', 'method' => 'PATCH', 'route' => ['site.update', $item->id]]) !!}
            		@csrf
                	<div class="row">
                  		<div class="col-md-12">
                    		<fieldset class="form-group">
                      			<label>Site Name</label>
                      			<input type="text" class="form-control" id="sitename" name="name" value="{{ $item->name }}" placeholder="Enter Site Name">
                   			</fieldset>
                  		</div>
		                <div class="col-md-6">
		                    <fieldset class="form-group">
		                    	<label>Select State</label>
		                      	{!! Form::select('state', (['' => 'Select a State'] + $state), null, array('class' => 'form-control', 'id' => 'state', 'data-bv-notempty-message'=>"Please Select State")) !!}
		                    </fieldset>
		                  </div>
		                  <div class="col-md-6">
		                    <fieldset class="form-group">
		                    	<label>Select City</label>
			                     {!! Form::select('city', (['' => 'Select a City'] + $city), null, array('class' => 'form-control', 'id' => 'city', 'data-bv-notempty-message'=>"Please Select City")) !!}
		                    </fieldset>
		                  </div>
		                  <div class="col-md-12">
		                    <fieldset class="form-group">
		                      <label>Address</label>
		                      <textarea rows="3" class="form-control" name="address" placeholder="Address">{{ $item->address }}</textarea>
		                    </fieldset>
		                  </div>
		                  <div class="col-md-12">
		                    <fieldset class="form-group">
		                      <label class="mb-1">Site Admins</label>
		                      <div class="row site-admins">
		                        <div class="col-md-2">
		                            <ul>
		                              <li>Emmie Strklet<a href="#"><i class="ft-user-minus"></i></a></li>
		                              <li>Michael John<a href="#"><i class="ft-user-minus"></i></a></li>
		                            </ul>
		                        </div>
		                       
		                      </div>
		                    </fieldset>
		                  </div>
		                </div>
		                <div class="row">
		                  	<div class="col-md-12 btns">
		                    	<button type="submit" class="btn btn-primary">Edit Site</button>
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
@section('script')
<!-- <script type="text/javascript">
jQuery(document).ready(function ($) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>  -->
@endsection