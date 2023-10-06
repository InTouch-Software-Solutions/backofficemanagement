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
                        <form action="{{ Route('cbfilter') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <label for="sdate">Start Date</label>
                            <input type="date" class="form-control mt-1" name="sdate" required>
                            <label for="edate">End Date</label>
                            <input type="date" class="form-control mt-1" name="edate" required>
                            <button type="submit" class="btn btn-primary mt-1"id='go'>Go</button>        
                        </form>
                    </div>
                </div>
                <br>
                @if(isset($data))
                <div style="text-align: center;">
                    <h3>Buying Ledger</h3>
                </div>
                <div class="row" id="print1">
                    <table class="excel-table">
                        <thead>
                            <tr>
                                <th colspan="9">PAN NO. ABXPA1180D</th>  
                            </tr>
                            <tr>
                                <td colspan="9" style="text-align: center;"><strong>Dalal Rameshchand Madanlal Bhaya</strong><br>33/3, Murai Mohalla, Jethmal Building, Chhawani, Indore (M.P.) 452001.<br>Mobile: 94250-59975, 94250-53243</td>  
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php 
                                    $pname = DB::table('users')->where('id', $id)->pluck('name');
                                    $address = DB::table('users')->where('id', $id)->pluck('address');
                                ?>
                                <td rowspan="2" colspan="5"><strong>{{ $pname[0] }}</strong><br>{{ $address[0] }}</td>  
                                <td>From:</td>
                                <td>{{ $data['sdate'] }}</td>
                                <td>To:</td>
                                <td>{{ $data['edate'] }}</td>
                            </tr>
                            <tr>
                                <td>Year:</td>
                                <td colspan="3"></td>
                            </tr>
                            <tr>
                                <td colspan="9" style="text-align: center;">Particulars of Contracts</td>
                            </tr>
                            <tr>
                                <th><strong>Contract Date</strong></th>
                                <th><strong>Party Inv. No</strong></th>
                                <th><strong>P.O. No.</strong></th>
                                <th><strong>Name of Party</strong></th>
                                <th><strong>Description of Goods<br>(with Tanker No.)</strong></th>
                                <th><strong>Quantity<br>(Tonnes)</strong></th>
                                <th><strong>Rate(Kg)</strong></th>
                                <th><strong>Comm. Rate</strong></th>
                                <th><strong>Amount</strong></th>
                            </tr>
                            <?php
                                $total = 0;
                            ?>
                            @foreach($bbills as $bill)
                            <?php
                                $s = $bill->seller;
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
                                <td>Total</td>
                                <td>Rs. {{ $total }}</td>
                            </tr>
                            <tr>
                                <td colspan="7">Amount (in words):</td>
                                <td rowspan="2" colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="7">Please pay the above amount through Rtgs/Neft in name of Dalal Rameshchand Madanlal Bhaya.<br>Bank Details: HDFC BANK, A/C No.: 00362560010633,  IFSC Code: HDFC0000036</td>
                            </tr>
                            
                            <!-- Add more rows as needed with varying colspan values -->
                        </tbody>
                    </table>
                </div>
                <div class="col-12 text-end">
                    <button class="btn btn-outline-secondary" id="printButton"><i class="fa fa-print"></i> Print</button>
                </div>
                <br><br><br>
                <div style="text-align: center;">
                    <h3>Selling Ledger</h3>
                </div>
                <div class="row" id="print2">
                    <table class="excel-table">
                        <thead>
                            <tr>
                                <th colspan="9">PAN NO. ABXPA1180D</th>  
                            </tr>
                            <tr>
                                <td colspan="9" style="text-align: center;"><strong>Dalal Rameshchand Madanlal Bhaya</strong><br>33/3, Murai Mohalla, Jethmal Building, Chhawani, Indore (M.P.) 452001.<br>Mobile: 94250-59975, 94250-53243</td>  
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php 
                                    $sname = DB::table('users')->where('id', $id)->pluck('name');
                                    $address = DB::table('users')->where('id', $id)->pluck('address');
                                ?>
                                <td rowspan="2" colspan="5"><strong>{{ $sname[0] }}</strong><br>{{ $address[0] }}</td>  
                                <td>From:</td>
                                <td>{{ $data['sdate'] }}</td>
                                <td>To:</td>
                                <td>{{ $data['edate'] }}</td>
                            </tr>
                            <tr>
                                <td>Year:</td>
                                <td colspan="3"></td>
                            </tr>
                            <tr>
                                <td colspan="9" style="text-align: center;">Particulars of Contracts</td>
                            </tr>
                            <tr>
                                <th><strong>Contract Date</strong></th>
                                <th><strong>Party Inv. No</strong></th>
                                <th><strong>P.O. No.</strong></th>
                                <th><strong>Name of Party</strong></th>
                                <th><strong>Description of Goods<br>(with Tanker No.)</strong></th>
                                <th><strong>Quantity<br>(Tonnes)</strong></th>
                                <th><strong>Rate(Kg)</strong></th>
                                <th><strong>Comm. Rate</strong></th>
                                <th><strong>Amount</strong></th>
                            </tr>
                            <?php
                                $total = 0;
                            ?>
                            @foreach($sbills as $bill)
                            <?php
                                $p = $bill->purchaser;
                                $pname = DB::table('users')->where('id', $p)->pluck('name');
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
                                <td>Total</td>
                                <td>Rs. {{ $total }}</td>
                            </tr>
                            <tr>
                                <td colspan="7">Amount (in words):</td>
                                <td rowspan="2" colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="7">Please pay the above amount through Rtgs/Neft in name of Dalal Rameshchand Madanlal Bhaya.<br>Bank Details: HDFC BANK, A/C No.: 00362560010633,  IFSC Code: HDFC0000036</td>
                            </tr>
                            
                            <!-- Add more rows as needed with varying colspan values -->
                        </tbody>
                    </table>
                </div>
                <div class="col-12 text-end">
                    <button class="btn btn-outline-secondary" id="printButton2"><i class="fa fa-print"></i> Print</button>
                </div>
                @endif
                
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
    document.getElementById('printButton2').addEventListener('click', function() {
        var printContents = document.getElementById('print2').innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
        window.location.reload();

    });
</script>
@endsection