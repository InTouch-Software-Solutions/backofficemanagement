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
$p = DB::table('users')->where('id',$contract->purchaser)->first();
$s = DB::table('users')->where('id',$contract->seller)->first();
?>
<div class="col-12" style="text-align: center;">
    <h1 class="mt-3 mb-3">Contract Note</h1>
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
                        <p>Brokers of Acid Oil, RB Oil, Fatty Acid, Lecithin, Sludge, Spent Earth Oil & Soap Stock. <br>33/3, Jethmal Building, Murai Mohalla, Chhawni, Indore (MP) - 452001. <br>2707390-91/ 4281122/ 4287390/ 9425059975/53243/ 9407328145 <br>bhayajibrokers@gmail.com <br>PAN: ABXPA1180D</p>
                    </div>
                    <div class="row">
                        <p>Date:{{ $contract->date }}<br>Order No: {{ $contract->orderno }}</p>
                    </div>
                    <div class="row" style="text-align: center;">
                        <h6 style="text-decoration: underline;">CONTRACT NOTE</h6>
                        <p>Today, as per your instructions the following contract has been logged into our books,<br>the specifics of which have been conveyed to you via a telephonic conversation.</p>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h5>Purchaser:</h5>
                        </div>
                        <div class="col-8">
                            <h6 style="text-decoration: underline">{{ $p->name }}</h6>
                            <p><strong>GST No: </strong>{{ $p->gst }}<br><strong>Billing Address:</strong>{{ $p->baddress }}<br><strong>Shipping Address: </strong>{{ $p->address }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h5>Seller:</h5>
                        </div>
                        <div class="col-8">
                            <h6 style="text-decoration: underline">{{ $s->name }}</h6>
                            <p><strong>GST No: </strong>{{ $s->gst }}<br><strong>Delivery Address: </strong>{{ $s->faddress }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h5>Commodity:</h5>
                        </div>
                        <div class="col-8">
                            <p>{{ $contract->commodity }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h5>Quantity:</h5>
                        </div>
                        <div class="col-8">
                            <p>{{ $contract->quantity }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h5>Rate (in Kgs):</h5>
                        </div>
                        <div class="col-8">
                            <p>Rs. {{ $contract->rate }}/-  + {{ $contract->gst }}% GST</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h5>Delivery Time:</h5>
                        </div>
                        <div class="col-8">
                            <p>{{ $contract->time }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h5>Other Condition:</h5>
                        </div>
                        <div class="col-8">
                            <p>{{ $contract->condition }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h5>Brokerage:</h5>
                        </div>
                        <div class="col-8">
                            <p>Rs. {{ $contract->charge }} PER METRIC TONN.</p>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <br>
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
        window.location.reload();

    });
</script>


@endsection
