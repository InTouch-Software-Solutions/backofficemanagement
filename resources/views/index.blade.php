@extends('indexnew')
@section('csscontent')
  <style>
    .card-body{
      border: 1px solid #ccc;
      border-radius: 10px;
    }
  </style>
@endsection
@section('content')
<div class="col-12" style="text-align: center;">
  <h1 class="mt-3 mb-3">Modules</h1>
</div>
<div class="col-12">
  <div class="card mt-5">
    <div class="row">
      <div class="col-3">
        <div class="card-body">
          <h5 class="card-title">MODULE 1</h5>
          <p class="card-text">Contract Note <br> Brokerage Bill <br> Delivery Book</p>
          <a href="#" class="btn btn-primary">lessssGo</a>
        </div>
      </div>
      <div class="col-3">
        <div class="card-body">
          <h5 class="card-title">Inventory Control</h5>
          <p class="card-text">........................................!<br>........................................!<br>........................................!</p>
          <a href="#" class="btn btn-primary">lessssGo</a>
        </div>
      </div>
      <div class="col-3">
        <div class="card-body">
          <h5 class="card-title">Pay Roll Staff</h5>
          <p class="card-text">........................................!<br>........................................!<br>........................................!</p>
          <a href="#" class="btn btn-primary">lessssGo</a>
        </div>
      </div>
      <div class="col-3">
        <div class="card-body">
          <h5 class="card-title">Petty Cash Book</h5>
          <p class="card-text">........................................!<br>........................................!<br>........................................!</p>
          <a href="#" class="btn btn-primary">lessssGo</a>
        </div>
      </div>
    </div> 
  </div>
</div>
<div class="row g-2 clearfix row-deck">
  <div class="col-xl-3 col-lg-6 col-md-6">
      <div class="card top_counter">
          <div class="list-group list-group-custom list-group-flush">
              {{-- <div class="list-group-item d-flex align-items-center py-3">
                  <div class="icon text-center me-3"><i class="fa fa-user"></i> </div>
                  <div class="content">
                      <div>New Employee</div>
                      <h5 class="mb-0">22</h5>
                  </div>
              </div> --}}
              <div class="list-group-item d-flex align-items-center py-3">
                  <div class="icon text-center me-3"><i class="fa fa-users"></i> </div>
                  <div class="content">
                      <div>Total Employee</div>
                      <h5 class="mb-0">{{ $employee_count }}</h5>
                  </div>
              </div>
              <div class="list-group-item d-flex align-items-center py-3">
                  <div class="icon text-center me-3"><i class="fa fa-university"></i> </div>
                  <div class="content">
                      <div>Total Salary</div>
                      <h5 class="mb-0">Rs. {{ $total_salary }}</h5>
                  </div>
              </div>
              <div class="list-group-item d-flex align-items-center py-3">
                  <div class="icon text-center me-3"><i class="fa fa-university"></i> </div>
                  <div class="content">
                      <div>Avg. Salary</div>
                      <h5 class="mb-0">Rs. {{ $total_salary/$employee_count }}</h5>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-md-6">
      <div class="card text-center">
          <div class="card-body">
              <h5>Income Analysis</h5>
              <span class="text-muted">8% High then last month</span>
              <div id="sparkline-pie" class="mt-3 d-flex justify-content-center"></div>
              <div class="stats-report">
                  <div class="stat-item d-inline-block px-2 mt-4">
                      <h5 class="mb-0 fw-normal fs-6">Design</h5>
                      <strong>84.60%</strong>
                  </div>
                  <div class="stat-item d-inline-block px-2 mt-4">
                      <h5 class="mb-0 fw-normal fs-6">Dev</h5>
                      <strong>15.40%</strong>
                  </div>
                  <div class="stat-item d-inline-block px-2 mt-4">
                      <h5 class="mb-0 fw-normal fs-6">SEO</h5>
                      <strong>5.10%</strong>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-xl-6 col-lg-12 col-md-12">
      <div class="card">
          <div class="card-header border-0">
              <h6 class="card-title">Salary Statistics</h6>
              <ul class="header-dropdown list-unstyled">
                  <li><a class="tab_btn" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Weekly">W</a></li>
                  <li><a class="tab_btn" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Monthly">M</a></li>
                  <li><a class="tab_btn active" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Yearly">Y</a>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                      <ul class="dropdown-menu dropdown-menu-end dropstart list-unstyled">
                          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">Another Action</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">Something else</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
          <div class="card-body">
              <div id="Salary_Statistics"></div>
          </div>
      </div>
  </div>
  <div class="col-xl-8 col-lg-12 col-md-12">
      <div class="card">
          <div class="card-header">
              <h6 class="card-title">Total Salary by Unit</h6>
              <ul class="header-dropdown list-unstyled">
                  <li><a class="tab_btn" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Weekly">W</a></li>
                  <li><a class="tab_btn" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Monthly">M</a></li>
                  <li><a class="tab_btn active" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Yearly">Y</a>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end dropstart list-unstyled">
                          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">Another Action</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">Something else</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
          <div class="card-body">
              <div id="total_Salary" class="ct-chart"></div>
          </div>
      </div>
  </div>
  <div class="col-xl-4 col-lg-12 col-md-12">
      <div class="card">
          <div class="card-header">
              <h6 class="card-title">ToDo List</h6>
          </div>
          <div class="card-body todo_list">
              <div class="d-flex justify-content-between mb-3">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="Makers">
                      <label class="form-check-label" for="Makers">
                          <strong>New Employee intro</strong>
                      </label>
                      <span class="text-muted d-flex small">SCHEDULED FOR 3:00 P.M. ON JUN 2021</span>
                  </div>
              </div>
              <div class="d-flex justify-content-between mb-3">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="Makers1"
                          checked>
                      <label class="form-check-label" for="Makers1">
                          <strong>Send email to CEO</strong>
                      </label>
                      <span class="text-muted d-flex small">SCHEDULED FOR 4:30 P.M. ON JUN 2021</span>
                  </div>
              </div>
              <div class="d-flex justify-content-between mb-3">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="Makers2">
                      <label class="form-check-label" for="Makers2">
                          <strong>New Joing Employee Welcome kit</strong>
                      </label>
                      <span class="text-muted d-flex small">
                          <small><a href="#">John Smith</a> Designer</small><br>
                      </span>
                      <span class="text-muted d-flex small">
                          <small><a href="#">Hossein Shams</a> Developer</small><br>
                      </span>
                      <span class="text-muted d-flex small">
                          <small><a href="#">Maryam Amiri</a> SEO</small><br>
                      </span>
                      <span class="text-muted d-flex small">
                          <small><a href="#">Mike Litorus</a> iOS Developer</small>
                      </span>
                  </div>
              </div>
              <div class="d-flex justify-content-between mb-3">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="Makers3">
                      <label class="form-check-label" for="Makers3">
                          <strong>Birthday Wish</strong>
                      </label>
                      <span class="text-muted d-flex small">SCHEDULED FOR 4:30 P.M. ON JUN 2021</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-xl-8 col-lg-7 col-md-12">
      <div class="card">
          <div class="card-header">
              <h6 class="card-title">Employee Performance</h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-hover align-middle">
                      <thead>
                          <tr>
                              <th>Avatar</th>
                              <th>Name</th>
                              <th>Designation</th>
                              <th>Performance</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td><img src="assets/images/xs/avatar1.jpg" class="avatar rounded-circle" alt=""></td>
                              <td>Marshall Nichols</td>
                              <td><span>UI UX Designer</span></td>
                              <td><span class="badge bg-success">Good</span></td>
                              <td><span id="sparkbar_uideveloper"></span></td>
                          </tr>
                          <tr>
                              <td><img src="assets/images/xs/avatar2.jpg" class="avatar rounded-circle" alt=""></td>
                              <td>Susie Willis</td>
                              <td><span>Designer</span></td>
                              <td><span class="badge bg-warning">Average</span></td>
                              <td><span id="sparkbar_designer1"></span></td>
                          </tr>
                          <tr>
                              <td><img src="assets/images/xs/avatar3.jpg" class="avatar rounded-circle" alt=""></td>
                              <td>Francisco Vasquez</td>
                              <td><span>Team Leader</span></td>
                              <td><span class="badge bg-primary">Excellent</span></td>
                              <td><span id="sparkbar_leader"></span></td>
                          </tr>
                          <tr>
                              <td><img src="assets/images/xs/avatar4.jpg" class="avatar rounded-circle" alt=""></td>
                              <td>Erin Gonzales</td>
                              <td><span>Android Developer</span></td>
                              <td><span class="badge bg-danger">Weak</span></td>
                              <td><span id="sparkbar_developer"></span></td>
                          </tr>
                          <tr>
                              <td><img src="assets/images/xs/avatar5.jpg" class="avatar rounded-circle" alt=""></td>
                              <td>Ava Alexander</td>
                              <td><span>UI UX Designer</span></td>
                              <td><span class="badge bg-success">Good</span></td>
                              <td><span id="sparkbar_designer"></span></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
  <div class="col-xl-4 col-lg-5 col-md-12">
      <div class="card">
          <div class="card-header">
              <h6 class="card-title">Employee Structure</h6>
          </div>
          <div class="card-body text-center">
              <div id="apex-TotalStudent"></div>
              <div class="mb-3 mt-4">
                  <span class="text-muted small">Male</span>
                  <h4 class="mb-0">73%</h4>
              </div>
              <div>
                  <span class="text-muted small">Female</span>
                  <h4 class="mb-0">27%</h4>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection