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
  <h1 class="mt-3 mb-3">Dashboard</h1>
</div>
<div class="col-12">
  <div class="card mt-5">
    {{-- <div class="row">
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
    </div>  --}}
  </div>
</div>
<div class="row g-2 clearfix row-deck">
  <div class="col-xl-6 col-lg-6 col-md-6">
      <div class="card top_counter">
          <div class="list-group list-group-custom list-group-flush">
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
                      @if( $employee_count  == 0)
                          <h5 class="mb-0">Rs. 0</h5>
                      @else
                        <h5 class="mb-0">Rs. {{ $total_salary/$employee_count }}</h5>
                      @endif
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-xl-6 col-lg-6 col-md-6">
      <div class="card text-center">
          <div class="card-body">
                <h5>Expenses Analysis</h5>
              <canvas id="myChart" width="100" height="100"></canvas>
              {{-- <div id="sparkline-pie" class="mt-3 d-flex justify-content-center"></div>
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
              </div> --}}
          </div>
      </div>
  </div>
  {{-- <div class="col-xl-6 col-lg-12 col-md-12">
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
  </div> --}}
 
</div>
@endsection
@section('jscontent')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chroma-js/2.1.1/chroma.min.js"></script>
<script>
    var category = @json($category);
    var value = @json($value);
</script>
<script>
    
    var ctx = document.getElementById('myChart').getContext('2d');
    const keys = Object.values(category);
    const values = Object.values(value);
    const numberOfCategories = values.length;
    const colorScale = chroma.scale(['#fafa6e', '#2A4858']).mode('lch').colors(numberOfCategories);
    var chart = new Chart(ctx, {
        type: 'pie', // Change chart type to 'pie'
        data: {
            labels: keys,
            datasets: [{
                backgroundColor: colorScale,
            borderColor: colorScale,
            borderWidth: 1,
            data: values
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

@endsection