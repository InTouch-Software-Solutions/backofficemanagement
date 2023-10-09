@extends('indexnew')
@section('csscontent')
    
@endsection
@section('content')
<div class="col-12" style="text-align: center;">
    <h1 class="mt-3 mb-3">Payslip</h1>
</div>
<br>
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ Route('employeesalary') }}" class="btn btn-primary float-end">Back</a>
                </div>
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <form action="{{ Route('filter2') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $employee->id }}">
                                <select class="form-select mt-1" name="year" id="year">
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
                                <select class="form-select mt-1" name="month" id="month">
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
                        </div>
                        <div class="col-6">
                                <label>Paid leaves</label>
                                <input type="text" class="form-control" name="paid" placeholder="No. of Paid Leaves">
                                <button type="submit" class="btn btn-primary mt-1"id='go'>Go</button>        
                            </form>
                        </div>
                    </div>
                </div>
                @if(isset($data))
                <div class="row clearfix" >
                    <div class="col-12">
                        <div class="card invoice1">
                            <div class="card-body" id="printableArea">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <div class="logo me-4">
                                            <img src="{{ asset('assets/images/logo.png') }}" style="width:70px; height:70px;"alt="user" class="img-fluid">
                                        </div>
                                        <div class="info">
                                            <h6>DALAL RAMESHCHAND MADANLAL BHAYA</h6>
                                            <p>33/3, Jethmal Building, Murai Mohalla,<br>Chhawni, Indore(MP)-452001.</p>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <p>Salary Month: {{ $data['month'] }}, {{ $data['year'] }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex">
                                    <div class="clientlogo me-3">
                                        <img src="{{ asset('assets/images/employee.jpg') }}" alt="user" width="70" class="rounded-circle img-fluid">
                                    </div>
                                    <div class="info">
                                        <h6>{{ $employee->name }}</h6>
                                        <p>{{ $employee->phone }}</p>
                                    </div>
                                </div>
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
                                                        <td>Basic Salary</td>
                                                        <td>{{ $employee->salary }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Working Days</td>
                                                        <td>{{ $data['working'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Presents</td>
                                                        <td>{{ $data['present'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Absents</td>
                                                        <td>{{ $data['absent'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Halfdays</td>
                                                        <td>{{ $data['halfday'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td><strong>Final Salary</strong></td>
                                                        <td><strong>{{ $data['salary'] }}</strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
                                                        <td>Fuel Allowance<br>(no. of days)</td>
                                                        <td>{{ $data['fuel'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>No. of Paid leaves</td>
                                                        <td>{{ $data['paid'] }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>
                                        <div>
                                            <h6 style="text-decoration: underline;">Bank Details:</h6>
                                            {!! $employee->bank !!}
                                            <?php
                                                $details = DB::table('extra_fields')->where('sign', 'employee')->where('fid', $employee->id)->where('title', 'Bank Details')->get();
                                            ?>
                                            @foreach($details as $detail)
                                                {{ $detail->details }}
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <h5 class="mb-0">Net Salary Rs.{{ $data['salary'] }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <button class="btn btn-outline-secondary" id="printButton"><i class="fa fa-print"></i> Print</button>
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
        window.location.reload();
    });
</script>
@endsection
