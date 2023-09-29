@extends('indexnew')
@section('csscontent')
<style>
    table{
        background-color: #f2f2f2;
    }
    table.excel-table {
        border-collapse: collapse;
        width: 100%;
        color: black;
    }
    table.excel-table th {
        text-align: left;
        padding: 8px;
        border: 1px solid #ddd;
        color: black;
    }
    table.excel-table td {
        text-align: left;
        padding: 8px;
        border: 1px solid #ddd;
        color: black;
    }
    table.excel-table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    table.excel-table tbody tr:hover {
        background-color: #ddd;
    }
</style>
@endsection
@section('content')
<div class="col-12" style="text-align: center;">
    <h1 class="mt-3 mb-3">Brokerage Bill</h1>
</div>
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div style="text-align: center;">
                            <h5>For Particular Month</h5>
                        </div>
                        <form action="{{ Route('bfilter') }}" method="post">
                            @csrf
                            <label for="year">Select a Year:</label>
                            <select class="form-select mt-1" id="year" name="year"></select>
                            <label for="month">Select a Month:</label>
                            <select class="form-select mt-1" name="month" id="month">
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
                            <button type="submit" class="btn btn-primary mt-1"id='go'>Go</button>        
                        </form>
                    </div>
                    <div class="col-6">
                        <div style="text-align: center;">
                            <h5>For Particular Period of Time</h5>
                        </div>
                        <form action="{{ Route('bfilter2') }}" method="post">
                            @csrf
                            <label for="sdate">Start Date</label>
                            <input type="date" class="form-control mt-1" name="sdate" required>
                            <label for="edate">Select a Month:</label>
                            <input type="date" class="form-control mt-1" name="edate" required>
                            <button type="submit" class="btn btn-primary mt-1"id='go'>Go</button>        
                        </form>
                    </div>
                </div>
                <br>
                @if(isset($data1))
                <div class="row" id="print1">
                    <table class="excel-table">
                        <thead>
                            <tr>
                                <th colspan="10">PAN NO. ABXPA1180D</th>  
                            </tr>
                            <tr>
                                <td colspan="10" style="text-align: center;"><strong>Dalal Rameshchand Madanlal Bhaya</strong><br>33/3, Murai Mohalla, Jethmal Building, Chhawani, Indore (M.P.) 452001.<br>Mobile: 94250-59975, 94250-53243</td>  
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="10">Year: {{ $data1['year'] }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Month: {{ $data1['month'] }}</td>
                            </tr>
                            <tr>
                                <td colspan="10" style="text-align: center;">Particulars of Contracts</td>
                            </tr>
                            <tr>
                                <th><strong>Contract Date</strong></th>
                                <th><strong>Party Inv. No</strong></th>
                                <th><strong>P.O. No.</strong></th>
                                <th><strong>Purchaser</strong></th>
                                <th><strong>Seller</strong></th>
                                <th><strong>Description of Goods<br>(with Tanker No.)</strong></th>
                                <th><strong>Quantity<br>(Tonnes)</strong></th>
                                <th><strong>Rate(Kg)</strong></th>
                                <th><strong>Comm. Rate</strong></th>
                                <th><strong>Amount</strong></th>
                            </tr>
                            <?php
                                $total = 0;
                            ?>
                            @foreach($bills as $bill)
                            <?php
                                $p = DB::table('contract_notes')->where('id', $bill->contractno)->pluck('purchaser');
                                $pname = DB::table('users')->where('id', $p)->pluck('name');
                                $s = DB::table('contract_notes')->where('id', $bill->contractno)->pluck('seller');
                                $sname = DB::table('users')->where('id', $s)->pluck('name');
                                $commodity = DB::table('contract_notes')->where('id', $bill->contractno)->pluck('commodity');
                                $rate = DB::table('contract_notes')->where('id', $bill->contractno)->pluck('rate');
                                $amount = (float)$bill->comm * (float)$bill->weight;
                                $total += $amount;
                            ?>
                            <tr>
                                <td>{{ $bill->contractdate }}</td>
                                <td>{{ $bill->invoice }}</td>
                                <td>{{ $bill->pono }}</td>
                                <td>{{ $pname[0] }}</td>
                                <td>{{ $sname[0] }}</td>
                                <td>{{ $commodity[0] }} ({{ $bill->tanker }})</td>
                                <td>{{ $bill->weight }}</td>
                                <td>{{ $rate[0] }}</td>
                                <td>{{ $bill->comm }}</td>
                                <td>{{ $amount }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Total</strong></td>
                                <td>Rs. {{ $total }}</td>
                            </tr>
                            <tr>
                                <td colspan="7">Amount (in words):</td>
                                <td rowspan="2" colspan="3"></td>
                            </tr>
                            <tr>
                                <td colspan="8">Please pay the above amount through Rtgs/Neft in name of Dalal Rameshchand Madanlal Bhaya.<br>Bank Details: HDFC BANK, A/C No.: 00362560010633,  IFSC Code: HDFC0000036</td>
                            </tr>
                            
                            <!-- Add more rows as needed with varying colspan values -->
                        </tbody>
                    </table>
                </div>
                @endif

                @if(isset($data2))
                <div class="row" id="print2">
                    <table class="excel-table">
                        <thead>
                            <tr>
                                <th colspan="10">PAN NO. ABXPA1180D</th>  
                            </tr>
                            <tr>
                                <td colspan="10" style="text-align: center;"><strong>Dalal Rameshchand Madanlal Bhaya</strong><br>33/3, Murai Mohalla, Jethmal Building, Chhawani, Indore (M.P.) 452001.<br>Mobile: 94250-59975, 94250-53243</td>  
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="10">From: {{ $data2['sdate'] }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: {{ $data2['edate'] }}</td>
                            </tr>
                            <tr>
                                <td colspan="10" style="text-align: center;">Particulars of Contracts</td>
                            </tr>
                            <tr>
                                <th><strong>Contract Date</strong></th>
                                <th><strong>Party Inv. No</strong></th>
                                <th><strong>P.O. No.</strong></th>
                                <th><strong>Purchaser</strong></th>
                                <th><strong>Seller</strong></th>
                                <th><strong>Description of Goods<br>(with Tanker No.)</strong></th>
                                <th><strong>Quantity<br>(Tonnes)</strong></th>
                                <th><strong>Rate(Kg)</strong></th>
                                <th><strong>Comm. Rate</strong></th>
                                <th><strong>Amount</strong></th>
                            </tr>
                            <?php
                                $total = 0;
                            ?>
                            @foreach($bills as $bill)
                            <?php
                                $p = DB::table('contract_notes')->where('id', $bill->contractno)->pluck('purchaser');
                                $pname = DB::table('users')->where('id', $p)->pluck('name');
                                $s = DB::table('contract_notes')->where('id', $bill->contractno)->pluck('seller');
                                $sname = DB::table('users')->where('id', $s)->pluck('name');
                                $commodity = DB::table('contract_notes')->where('id', $bill->contractno)->pluck('commodity');
                                $rate = DB::table('contract_notes')->where('id', $bill->contractno)->pluck('rate');
                                $amount = (float)$bill->comm * (float)$bill->weight;
                                $total += $amount;
                            ?>
                            <tr>
                                <td>{{ $bill->contractdate }}</td>
                                <td>{{ $bill->invoice }}</td>
                                <td>{{ $bill->pono }}</td>
                                <td>{{ $pname[0] }}</td>
                                <td>{{ $sname[0] }}</td>
                                <td>{{ $commodity[0] }} ({{ $bill->tanker }})</td>
                                <td>{{ $bill->weight }}</td>
                                <td>{{ $rate[0] }}</td>
                                <td>{{ $bill->comm }}</td>
                                <td>{{ $amount }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Total</strong></td>
                                <td>Rs. {{ $total }}</td>
                            </tr>
                            <tr>
                                <td colspan="7">Amount (in words):</td>
                                <td rowspan="2" colspan="3"></td>
                            </tr>
                            <tr>
                                <td colspan="7">Please pay the above amount through Rtgs/Neft in name of Dalal Rameshchand Madanlal Bhaya.<br>Bank Details: HDFC BANK, A/C No.: 00362560010633,  IFSC Code: HDFC0000036</td>
                            </tr>
                            
                            <!-- Add more rows as needed with varying colspan values -->
                        </tbody>
                    </table>
                </div>
                @endif
                <div class="col-12 text-end">
                    <button class="btn btn-outline-secondary" id="printButton"><i class="fa fa-print"></i> Print</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script>
    const yearSelect = document.getElementById('year');
    const currentYear = new Date().getFullYear();
    const startYear = 2023; 
    const endYear = 2099;
    
    for (let year = startYear; year <= endYear; year++) {
        const option = document.createElement('option');
        option.value = year;
        option.textContent = year;
        yearSelect.appendChild(option);
    }
</script>
<script>
    document.getElementById('printButton').addEventListener('click', function() {
        var printContents = document.getElementById('print1').innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
        window.location.reload();

    });
</script>
<script>
    document.getElementById('printButton').addEventListener('click', function() {
        var printContents = document.getElementById('print2').innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
        window.location.reload();

    });
</script>
@endsection