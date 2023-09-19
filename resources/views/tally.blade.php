@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
    <h1 class="mt-5">Expenses Tally</h1>
</div>
<br>
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                        </div>
                        <div class="col-6">
                            <form action="{{ Route('filter3') }}" method="post">
                                @csrf
                                <select name="year" id="year">
                                    <option value="" selected>Select Year</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                </select>
                                <select name="month" id="month">
                                    <option value="" selected>Select Month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <button type="submit" class="btn btn-success"id='go'>Go</button>        
                            </form>
                        </div>
                    </div>
                </div>
                @if(isset($expenses))
                <canvas id="myChart" width="100" height="50"></canvas>
                @endif
                @if(isset($data))
                <div class="row clearfix" >
                    <div class="col-12">
                        <div class="card invoice1">
                            <div class="card-body" id="printableArea">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <div class="logo me-4">
                                            <img src="{{ asset('assets/images/logo.jpeg') }}" style="width:70px; height:70px;" alt="user" class="img-fluid">
                                        </div>
                                        <div class="info">
                                            <h6>DALAL RAMESHCHAND MADANLAL BHAYA</h6>
                                            <p>33/3, Jethmal Building, Murai Mohalla,<br>Chhawni, Indore(MP)-452001.</p>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <p>Expenditure Month: {{ $data['month'] }}, {{ $data['year'] }}</p>
                                    </div>
                                </div>
                                <hr>
                                
                                <div class="row g-3">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Parameter</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Total Expenditure</td>
                                                        <td>Rs. {{ $data['total'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Number of times</td>
                                                        <td>{{ $data['count'] }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <h5 class="mb-0">Total Expenditure: Rs.{{ $data['total'] }}</h5>
                                    </div>
                                    <div class="col-12 text-end">
                                        <button class="btn btn-outline-secondary" id="printButton"><i class="fa fa-print"></i> Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
@section('jscontent')
<script>
    document.getElementById('printButton').addEventListener('click', function() {
        var printContents = document.getElementById('printableArea').innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    });
</script>
@if(isset($expenses))
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var expenses = @json($expenses);
</script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    const keys = Object.keys(expenses);
    const values = Object.values(expenses);
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: keys,
            datasets: [{
                label: 'Monthly Expenses',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
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
@endif



@endsection
