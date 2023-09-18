@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
    <h1 class="mt-5">Payslip</h1>
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
                            <form action="{{ Route('filter2') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $employee->id }}">
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
                @if(isset($data))
                <div class="row clearfix">
                    <div class="col-12">
                        <div class="card invoice1">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <div class="logo me-4">
                                            <img src="assets/images/logo-blak.svg" width="70" alt="user" class="img-fluid">
                                        </div>
                                        <div class="info">
                                            <h6>DALAL RAMESHCHAND MADANLAL BHAYA</h6>
                                            <p>33/3, Jethmal Building, Murai Mohalla,<br>Chhawni, Indore(MP)-452001.</p>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <h4>Invoice</h4>
                                        <p>Salary Month: {{ $data['month'] }}, {{ $data['year'] }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex">
                                    <div class="clientlogo me-3">
                                        <img src="assets/images/sm/avatar2.jpg" alt="user" width="70" class="rounded-circle img-fluid">
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
                                                        <th>Deductions</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Tax Deducted at Source (T.D.S.)</td>
                                                        <td>$10</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>ESI</td>
                                                        <td>$0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Provident Fund</td>
                                                        <td>$150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>C/Bank Loan</td>
                                                        <td>$120</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Other Deductions</td>
                                                        <td>$8</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td><strong>Total Deductions</strong></td>
                                                        <td><strong>$288</strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Note</h5>
                                        <p>Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.</p>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <p class="mb-0"><strong> Total Earnings:</strong> $1,860</p>
                                        <p class="mb-0"><strong> Total Deductions:</strong> $288</p>
                                        <h5 class="mb-0">Net Salary Rs.{{ $data['salary'] }}</h5>
                                    </div>
                                    <div class="col-12 text-end">
                                        <button class="btn btn-outline-secondary"><i class="fa fa-print"></i></button>
                                        <button class="btn btn-primary">Submit</button>
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
