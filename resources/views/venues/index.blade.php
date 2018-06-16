@extends('layouts.app')

@section('content')
<div class="main-panel">
    <div class="main-content">
      <div class="content-wrapper"> 
        <!-- Venue, Checked In Visitors, Checked In Members, Firelist -->
        <div class="row">
          <div class="col-md-4">
            <div class="content-header">Venues</div>
          </div>
          <div class="col-md-8 text-right">
            <div class="buttons-group">
              <form action="#">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addvenue"><i class="fa fa-plus"></i>Add Venue</button>
              </form>
            </div>
          </div>
        </div>
        <!-- Add Site Form -->
        
        <!-- Assign Supervisor -->
        <!--<div class="modal fade text-left" id="viewsite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <label class="modal-title text-text-bold-600">Edit Site</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
              </div>
              <form action="#">
                <div class="modal-body">
                  <div class="select-site">
                   <fieldset class="form-group">
                    <label>Site Name</label>
                    <select class="form-control">
                      <option>Select Site</option>
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                      <option>Option 4</option>
                      <option>Option 5</option>
                    </select>
                    </fieldset>
                  </div>
                  <div class="address">
                    <fieldset class="form-group">
                      <label for="placeTextarea">Address</label>
                      <textarea class="form-control" id="placeTextarea" rows="3" placeholder=""></textarea>
                    </fieldset>
                  </div>
                  <div class="select-state">
                   <fieldset class="form-group">
                    <label>Select State</label>
                    <select class="form-control">
                      <option>Select State</option>
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                      <option>Option 4</option>
                      <option>Option 5</option>
                    </select>
                    </fieldset>
                  </div>
                  <div class="select-city">
                   <fieldset class="form-group">
                    <label>Select City</label>
                    <select class="form-control">
                      <option>Select City</option>
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                      <option>Option 4</option>
                      <option>Option 5</option>
                    </select>
                    </fieldset>
                  </div>
                  <div class="assign-supervisor">
                   <fieldset class="form-group">
                    <label>Assign Supervisor</label>
                    <div class="row">
                    <div class="col-md-8">
                    <select class="form-control">
                      <option>Select Supervisor</option>
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                      <option>Option 4</option>
                      <option>Option 5</option>
                    </select>
                    </div>
                    <div class="col-md-4">
                      <a href="#"><i class="fa fa-plus-square large"></i>Add New Supervisor</a>
                    </div>
                    </div>
                    </fieldset>
                  </div>
                </div>
                <div class="modal-footer">
                  <input type="submit" class="btn btn-success" value="Assign">
                </div>
              </form>
            </div>
          </div>
        </div>-->
        <section class="table-structure">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header"></div>
                <div class="filters">
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
                </div>
                <div class="card-body">
                  <div class="card-block">
                    <table class="table table-responsive-md text-center">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Venue Name</th>
                          <th>Venue Description</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>B-30/31,M.I.D.C.Waluj Aurangabad</td>
                          <td>26-April-2018</td>
                          <td><a href="terminals.html" title="Terminal"><i class="ft ft-tablet font-medium-3"></i></a><a href="#"><i class="ft-edit font-medium-3"></i></a><a href="#" class="danger"><i class="ft-trash-2 font-medium-3"></i></a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>MAPL 44/5 JMK Tower, New Delhi</td>
                          <td>27-April-2018</td>
                          <td><a href="terminals.html" title="Terminal"><i class="ft ft-tablet font-medium-3"></i></a><a href="#"><i class="ft-edit font-medium-3"></i></a><a href="#" class="danger"><i class="ft-trash-2 font-medium-3"></i></a></td>
                        </tr>
                        <tr>
                         <td>3</td>
                          <td>B-30/31,M.I.D.C.Waluj Aurangabad</td>
                          <td>28-April-2018</td>
                          <td><a href="terminals.html" title="Terminal"><i class="ft ft-tablet font-medium-3"></i></a><a href="#"><i class="ft-edit font-medium-3"></i></a><a href="#" class="danger"><i class="ft-trash-2 font-medium-3"></i></a></td>
                        </tr>
                        <tr>
                         <td>4</td>
                          <td>MAPL 44/5 JMK Tower, New Delhi</td>
                          <td>29-April-2018</td>
                          <td><a href="terminals.html" title="Terminal"><i class="ft ft-tablet font-medium-3"></i></a><a href="#"><i class="ft-edit font-medium-3"></i></a><a href="#" class="danger"><i class="ft-trash-2 font-medium-3"></i></a></td>
                        </tr>
                        <tr>
                         <td>5</td>
                          <td>B-30/31,M.I.D.C.Waluj Aurangabad</td>
                          <td>30-April-2018</td>
                          <td><a href="terminals.html" title="Terminal"><i class="ft ft-tablet font-medium-3"></i></a><a href="#"><i class="ft-edit font-medium-3"></i></a><a href="#" class="danger"><i class="ft-trash-2 font-medium-3"></i></a></td>
                        </tr>
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
  </div>
@endsection