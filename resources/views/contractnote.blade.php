@extends('indexnew')
@section('csscontent')
<style>
    table {
        border-collapse: separate;
        border-spacing: 0px;
      }
</style>
@endsection
@section('content')
<?php
$pname = DB::table('users')->where('id',$contract->purchaser)->pluck('name');
$sname = DB::table('users')->where('id',$contract->seller)->pluck('name');
?>
<div class="col-12" style="text-align: center;">
    <h1 class="mt-5">Contract Note</h1>
</div>
<br>
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" id="printableArea">
                    <div class="row">
                        <div class="col-2">
                            <img src="{{ asset('assets/images/ganeshji.png') }}" style="width:70px; height:70px;" alt="">
                        </div>
                        <div class="col-2"></div>
                        <div class="col-4" style="display: flex; justify-content: center; align-items: center;">
                            <img src="{{ asset('assets/images/namah.png') }}" style="width:200px; height:30px;" alt="">
                        </div>
                        <div class="col-2"></div>
                        <div class="col-2">
                            <img src="{{ asset('assets/images/logo.png') }}" style="width:70px; height:70px;" alt="">
                        </div>
                    </div>
                    <div class="row" style="text-align: center;">
                        <h3 style="text-decoration: underline;">DALAL RAMESHCHAND MADANLAL BHAYA</h3>
                        <p>Brokers of Acid Oil, RB Oil, Fatty Acid, Lecithin, Sludge, Spent Earth Oil & Soap Stock. <br>33/3, Jethmal Building, Murai Mohalla, Chhawni, Indore (MP) - 452001. <br>2707390-91/ 4281122/ 4287390/ 9425059975/53242/ 9407328145 <br>bhayajibrokers@gmail.com <br>PAN: ABXPA1180D</p>
                    </div>
                    <div class="row">
                        <p>Date:{{ $contract->date }}<br>Order No: {{ $contract->id }}</p>
                    </div>
                    <div class="row" style="text-align: center;">
                        <h6 style="text-decoration: underline;">CONTRACT NOTE</h6>
                        <p>Today, as per your instructions the following contract has been logged into our books,<br>the specifics of which have been conveyed to you via a telephonic conversation.</p>
                    </div>
                    <div class="row" style="margin-left: auto;">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Purchaser</th>
                                    <td>{{ $pname[0] }}</td>
                                </tr>
                                <tr>
                                    <th>Seller</th>
                                    <td>{{ $sname[0] }}</td>
                                </tr>
                                <tr>
                                    <th>Commodity</th>
                                    <td>{{ $contract->commodity }}</td>
                                </tr>
                                <tr>
                                    <th>Quantity</th>
                                    <td>{{ $contract->quantity }}</td>
                                </tr>
                                <tr>
                                    <th>Rate(in kgs)</th>
                                    <td>Rs. {{ $contract->rate }}/-  + {{ $contract->gst }}% GST</td>
                                </tr>
                                <tr>
                                    <th>Delivery Time</th>
                                    <td>{{ $contract->time }}</td>
                                </tr>
                                <tr>
                                    <th>Other Conditions</th>
                                    <td>{{ $contract->condition }}</td>
                                </tr>
                                <tr>
                                    <th>Brokerage</th>
                                    <td>Rs. {{ $contract->charge }} PER METRIC TONN.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p><span style="text-decoration: underline;">Related Firms:</span><br>Manojkumar Rameshchandra Agrawal (Bhaya)<br>PAN Card: ABPPA9801R<br>Manishkumar Rameshchandra Agrawal (Bhaya)<br>PAN Card: ABPPA9802N</p>
                        </div>
                        <div class="col-6" style="text-align: center;">
                            <p>For Dalal Rameshchand Madanlal Bhaya</p>
                            <h1>MANOJ</h1>
                            <p>( Proprietor/ Authorized Signatory )</p>
                        </div>
                    </div>
                </div>
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
    document.getElementById('printButton').addEventListener('click', function() {
        var printContents = document.getElementById('printableArea').innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    });
</script>


@endsection
