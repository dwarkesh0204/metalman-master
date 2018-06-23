@extends('layouts.app')

@section('content')

<div class="main-panel">
    <div class="main-content">
      	<div class="content-wrapper"> 
        <!-- Venue, Checked In Visitors, Checked In Members, Firelist -->
        	<div class="row mb-3">
          		<div class="col-md-12">
            		<div class="content-header">Profile</div>
          		</div>
        	</div>
	        <section class="profile">
		        <div class="row">
		         <div class="col-md-7">
		          <div class="card">
		            <div class="card-body">
		             <form action="">
		              <div class="row">
		               	<div class="col-md-12">
		               		<fieldset class="form-group text-center change-photo">
		               			<img src="app-assets/img/photos/profile-pic.png" alt="" class="rounded-circle">
		               			<label for="change-photo">Change Photo</label>
		               			<input type="file" id="change-photo" accept="image/jpeg" required="">
		               		</fieldset>
		               	</div>
		                <div class="col-md-12">
		                  <fieldset class="form-group">
		                    <label>Company Address</label>
		                    <textarea rows="3" class="form-control">1st Floor, JMK Tower, 44/5 NH8,, Near City Park Hotel, New Delhi, India</textarea>
		                  </fieldset>
		                </div>
		               <div class="col-md-8">
		              	 	 <fieldset class="form-group">
								<label>Add Admins</label>
								<input type="text" class="form-control" placeholder="Enter Name">
		                    </fieldset>
		               </div>
		               <div class="col-md-4">
		               	<div class="add-admins">
		               		<a href="#"><i class="fa fa-plus-circle large"></i>Add New Admin</a>
		               	</div>
		               </div>
						<div class="col-md-8">
		              	 	 <fieldset class="form-group">
								<label>Primary Email ID</label>
								<input type="email" class="form-control" value="pjain@metalmanauto.com">
		                    </fieldset>
		               </div>
		                <div class="col-md-4">
		               	<div class="add-admins">
		               		<a href="#"><i class="fa fa-plus-circle large"></i>Add New Email ID</a>
		               	</div>
		               </div>
		               </div>
		              <div class="row">
		              	<div class="col-md-12 btns">
							<button type="submit" class="btn btn-primary">Save Changes</button>
							<a href="{{url('/home')}}" class="btn btn-grey text-black">Cancel</a>
		              	</div>
		              </div>
		              </form>
		               </div>
		          </div>
		          </div>
		          <div class="col-md-5">
		          <div class="card">
		              <div class="card-header">
		                <h4 class="card-title">Change Password</h4>
		              </div>
		              <div class="card-body">
		              	<form action="">
		              		<div class="row">
		              			<div class="col-md-6">
		              				<fieldset class="form-group">
								<label>Old Password</label>
								<input type="email" class="form-control" placeholder="Enter Old Password">
		                    </fieldset>
		              			</div>
		              			<div class="col-md-6">
		              				<fieldset class="form-group">
								<label>New Password</label>
								<input type="email" class="form-control" placeholder="Enter New Password">
		                    </fieldset>
		              			</div>
		              			</div>
		              			<div class="row">
		              			<div class="col-md-6">
		              				<fieldset class="form-group">
								<label>Confirm Password</label>
								<input type="email" class="form-control" placeholder="Confirm Password">
		                    </fieldset>
		              			</div>
		              			</div>
		              		 <div class="row">
		              	<div class="col-md-12 btns">
							<button type="submit" class="btn btn-success">Change Password</button>
							<button type="reset" class="btn btn-primary">Reset</button>
		              	</div>
		              </div>
		              		
		              	</form>
		              </div>
				  </div>   
		      	  <div class="card">
		              <div class="card-header">
		                <h4 class="card-title">Notification Settings</h4>
		                <p class="m-0">Use this setting to enable or disable daily summary mail.</p>
		              </div>
		              <div class="card-body">
		              	<form action="">
		              		<div class="row">
		              			<div class="col-md-12">
		              			<div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
		                              <input id="notifications1" type="checkbox" class="custom-control-input cz-bg-image-display">
		                              <label for="notifications1" class="custom-control-label">Receive Daily Summary in Email</label>
		                        </div>
		                        </div>
		              		</div>
		              	</form>
		              </div>
				  </div>
		       	</div> 
	       	</div>
	       </section>
      </div>
      
      <!-- Information List Layout --> 
      
    </div>
</div>

@endsection
