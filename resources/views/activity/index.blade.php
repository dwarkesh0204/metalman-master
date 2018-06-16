@extends('layouts.app')

@section('content')
<div class="main-panel">
    <div class="main-content">
      <div class="content-wrapper"> 
        <!-- Activity Logs Table -->
        <div class="row">
          <div class="col-md-4">
             <h4 class="content-header">Activity &amp; Report</h4>
          </div>
          <div class="col-md-8">
            <div class="button-filter">
                    <div class="form-group float-right"> 
                      <!-- basic buttons -->
                      <button type="button" class="btn btn-raised btn-success btn-min-width mr-1 mb-1">Export To PDF</button>
                      <button type="button" class="btn btn-raised btn-primary btn-min-width mr-1 mb-1" data-toggle="modal" data-target="#export-to-excel">Export To Excel</button>
                      <button type="button" class="btn btn-raised btn-primary btn-min-width mr-1 mb-1" data-toggle="modal" data-target="#inlineForm">Filters</button>
                    </div>
                  </div>
          </div>
        </div>
        <section class="table-structure">
          <div class="row">
               <div class="col-sm-12">  
               <!-- Export Excel Modal -->
               
                <!-- Filters Modal -->
                
                 <div class="card">
                 <div class="card-header">
                <div class="filters">
                  <div class="col-md-3 show-entries"> <span>Show</span>
                    <form action="" class="form entries">
                      <div class="form-body">
                        <fieldset class="form-group">
                          <select class="form-control">
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
                </div>
                <div class="card-body">
                  <div class="card-block">
                    <table class="table table-responsive table-responsive-md text-center">
                      <thead>
                        <tr>
                          <th>Photograph</th>
                          <th>Site Name</th>
                          <th>Visitor Name</th>
                          <th>Host Name</th>
                          <th>Contact Number</th>
                          <th>Address</th>
                          <th>Check In Time</th>
                          <th>Check Out Time</th>
                          <th>Stay Duration</th>
                          <th>Overstayed Hours</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><img class="media-object round-media" src="app-assets/img/portrait/small/avatar-s-1.png" alt="Generic placeholder image"></td>
                          <td>Metalman Auto - Head Office</td>
                          <td>Elizabeth Elliott</td>
                          <td>Elizabeth</td>
                          <td>+91 9409123451</td>
                          <td>40  Royal Indl Estate, A Naigaum Cross Road, Wadala</td>
                          <td>26/04/2018, 10:09</td>
                          <td>27/04/2018, 01:09</td>
                          <td>3 Hours</td>
                          <td>2 Hours</td>
                          <td><a class="danger" data-original-title="" title=""> <i class="ft-eye font-medium-3 success"></i> </a><a class="danger" data-original-title="" title=""> <i class="ft-log-out font-medium-3 red"></i> </a></td>
                        </tr>
                        <tr>
                          <td><img class="media-object round-media" src="app-assets/img/portrait/small/avatar-s-2.png" alt="Generic placeholder image"></td>
                          <td>Metalman Auto - Head Office</td>
                          <td>Jessica Rice</td>
                          <td>Jessica</td>
                          <td>+91 7014258987</td>
                          <td>40  Royal Indl Estate, A Naigaum Cross Road, Wadala</td>
                          <td>26/04/2018, 04:09</td>
                          <td>28/04/2018, 12:09</td>
                          <td>8 Hours</td>
                           <td>1 Hour</td>
                          <td><a class="danger" data-original-title="" title=""> <i class="ft-eye font-medium-3 success"></i> </a><a class="danger" data-original-title="" title=""> <i class="ft-log-out font-medium-3 red"></i> </a></td>
                        </tr>
                        <tr>
                          <td><img class="media-object round-media" src="app-assets/img/portrait/small/avatar-s-3.png" alt="Generic placeholder image"></td>
                          <td>Metalman Auto - Head Office</td>
                          <td>Russell Delgado</td>
                          <td>Russell</td>
                          <td>+91 8054698745</td>
                          <td>40  Royal Indl Estate, A Naigaum Cross Road, Wadala</td>
                          <td>26/04/2018, 03:09</td>
                          <td>27/04/2018, 07:09</td>
                          <td>4 Hours</td>
                           <td>5 Hours</td>
                          <td><a class="danger" data-original-title="" title=""> <i class="ft-eye font-medium-3 success"></i> </a><a class="danger" data-original-title="" title=""> <i class="ft-log-out font-medium-3 red"></i> </a></td>
                        </tr>
                        <tr>
                          <td><img class="media-object round-media" src="app-assets/img/portrait/small/avatar-s-4.png" alt="Generic placeholder image"></td>
                          <td>Metalman Auto - Head Office</td>
                          <td>Sara McDonald</td>
                          <td>Sara</td>
                          <td>+91 7465478941</td>
                          <td>40  Royal Indl Estate, A Naigaum Cross Road, Wadala</td>
                          <td>26/04/2018, 12:09</td>
                          <td>27/04/2018, 03:09</td>
                          <td>3 Hours</td>
                          <td>2 Hours</td>
                          <td><a class="danger" data-original-title="" title=""> <i class="ft-eye font-medium-3 success"></i> </a><a class="danger" data-original-title="" title=""> <i class="ft-log-out font-medium-3 red"></i> </a></td>
                        </tr>
                        <tr>
                          <td><img class="media-object round-media" src="app-assets/img/portrait/small/avatar-s-5.png" alt="Generic placeholder image"></td>
                          <td>Metalman Auto - Head Office</td>
                          <td>Jono Wayne</td>
                          <td>Jono</td>
                          <td>+91 7489612347</td>
                          <td>40  Royal Indl Estate, A Naigaum Cross Road, Wadala</td>
                          <td>26/04/2018, 10:09</td>
                          <td>27/04/2018, 12:09</td>
                          <td>2 Hours</td>
                          <td>1 Hour</td>
                          <td><a class="danger" data-original-title="" title=""> <i class="ft-eye font-medium-3 success"></i> </a><a class="danger" data-original-title="" title=""> <i class="ft-log-out font-medium-3 red"></i> </a></td>
                        </tr>
                      </tbody>
                    </table>
                    <nav aria-label="Page navigation mb-3" class="pagination-right">
                      <ul class="pagination justify-content-center">
                        <li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">Prev</span> <span class="sr-only">Previous</span> </a> </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">Next</span> <span class="sr-only">Next</span> </a> </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
              </div>
      </section>
      </div>
    </div>
  </div>
@endsection