@extends('layouts.app')

@section('content')

<div class="main-content">
  <div class="content-wrapper">
    <!-- Venue, Checked In Visitors, Checked In Members, Firelist -->
    <div class="basic-information">
      <div class="row">
        <!-- Select Venues -->
        <div class="col-md-3">
          <div class="select-site">
            <div class="card">
              <div class="card-body">
                <div class="card-block">
                  <form action="" class="form">
                    <div class="form-body">
                      <fieldset class="form-group">
                        <select class="form-control" id="basicSelect">
                            <option>Select Sites</option>
                            @if(count($siteData) > 0)
                                @foreach($siteData as $site)
                                    <option value="{{ $site['id'] }}">{{ $site['name'] }}</option>
                                @endforeach
                            @endif
                        </select>
                      </fieldset>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
          <!-- Total Checked In -->
        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <div class="card-title mb-0">Total Visits <span class="badge badge-pill badge-danger float-right mr-1 mt-1">3</span></div>
            </div>
          </div>
        </div>
        <!-- Overstayed In -->
        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <div class="card-title mb-0">Total Checked In<span class="badge badge-pill badge-danger float-right mr-1 mt-1">7</span></div>
            </div>
          </div>
        </div>
        <!-- Overstayed Out -->
        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <div class="card-title mb-0">Total Checked Out<span class="badge badge-pill badge-danger float-right mr-1 mt-1">5</span></div>
            </div>
          </div>
        </div>

      </div>
    <!-- -->
     <div class="list-layout">
    <div class="row">
      <!-- Just Checked In -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title mb-0">Current Visitors</h4>
          </div>
          <div class="card-body">
            <div class="card-block"> 
                <!--one -->
                 <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-3.png" alt="Generic placeholder image"> <i></i> </span>
                  <div class="media-body">
                    <h6 class="list-group-item-heading">Elizabeth Elliott <span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
                  </div>
                  </span> 
                  </div> 
                  <!-- Two -->
                   <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-4.png" alt="Generic placeholder image"> <i></i> </span>
                  <div class="media-body">
                    <h6 class="list-group-item-heading">Kristopher Candy <span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
                  </div>
                  </span> 
                  </div>
                  <!-- Three -->
                   <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-1.png" alt="Generic placeholder image"> <i></i> </span>
                  <div class="media-body">
                    <h6 class="list-group-item-heading">Sarah Woods<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
                  </div>
                  </span> 
                  </div>
                   <!-- Four -->
                   <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-5.png" alt="Generic placeholder image"> <i></i> </span>
                  <div class="media-body">
                    <h6 class="list-group-item-heading">Heather Howell<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
                  </div>
                  </span> 
                  </div>
                  <!-- Five -->
                  <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-5.png" alt="Generic placeholder image"> <i></i> </span>
                  <div class="media-body">
                    <h6 class="list-group-item-heading">Clark Gomez<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
                  </div>
                  </span> 
                  </div>
                  <!-- Six -->
                  <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-5.png" alt="Generic placeholder image"> <i></i> </span>
                  <div class="media-body">
                    <h6 class="list-group-item-heading">Clark Gomez<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
                    <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
                  </div>
                  </span> 
                  </div>
                </div>
          </div>
        </div>
      </div>
      <!-- Just Checked Out -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title mb-0">Upcoming Visitors</h4>
          </div>
          <div class="card-body">
            <div class="card-block">
            <!--one -->
             <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-2.png" alt="Generic placeholder image"> <i></i> </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Elizabeth Elliott <span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
                <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
              </div>
              </span>
              </div>
              <!-- Two -->
               <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-7.png" alt="Generic placeholder image"> <i></i> </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Kristopher Candy <span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
                <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
              </div>
              </span>
              </div>
              <!-- Three -->
               <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-8.png" alt="Generic placeholder image"> <i></i> </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Sarah Woods<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
                <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
              </div>
              </span>
              </div>
               <!-- Four -->
               <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-10.png" alt="Generic placeholder image"> <i></i> </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Heather Howell<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
                <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
              </div>
              </span>
              </div>
              <!-- Five -->
              <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-9.png" alt="Generic placeholder image"> <i></i> </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Johnson Wayne<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
                <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
              </div>
              </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title mb-0">History</h4>
          </div>
          <div class="card-body">
            <div class="card-block">
            <!--one -->
             <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-2.png" alt="Generic placeholder image"> <i></i> </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Elizabeth Elliott <span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
                <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
              </div>
              </span>
              </div>
              <!-- Two -->
               <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-7.png" alt="Generic placeholder image"> <i></i> </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Kristopher Candy <span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
                <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
              </div>
              </span>
              </div>
              <!-- Three -->
               <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-8.png" alt="Generic placeholder image"> <i></i> </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Sarah Woods<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
                <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
              </div>
              </span>
              </div>
               <!-- Four -->
               <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-10.png" alt="Generic placeholder image"> <i></i> </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Heather Howell<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
                <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
              </div>
              </span>
              </div>
              <!-- Five -->
              <div class="list-group-item bg-lighten-5"> <span class="media"> <span class="avatar avatar-md avatar-online"> <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-9.png" alt="Generic placeholder image"> <i></i> </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Johnson Wayne<span class="font-small-3 float-right dark-blue">4:14 AM</span> </h6>
                <p class="list-group-item-text text-muted">7774043310<span class="float-right dark-blue">26/05/2018</span> </p>
              </div>
              </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
      </div>
    </div>
    <!-- Information List Layout -->
</div>
 @endsection
