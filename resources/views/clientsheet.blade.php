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
<div class="col-12" style="text-align: center;">
    <h1 class="mt-5">Client Details</h1>
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
                    {{-- <div class="row">
                        <p>Date:{{ $contract->date }}<br>Order No: {{ $contract->id }}</p>
                    </div> --}}
                    <div class="row" style="text-align: center;">
                        <h6 style="text-decoration: underline;">CLIENT DETAILS</h6>
                        <p>As per your instructions the following client has been logged into our books,<br>the specifics of which have been conveyed to you via a telephonic conversation.</p>
                    </div>
                    <hr>
                    @if($data['name'])
                    <div class="row">
                        <div class="col-4">
                            <h5>Name:</h5>
                        </div>
                        <div class="col-8">
                            <p>{{ $data['name'] }}</p>
                        </div>
                    </div>
                    @endif
                    @if($data['cnumber'])
                    <div class="row">
                        <div class="col-4">
                            <h5>Email:</h5>
                        </div>
                        <div class="col-8">
                            <p>{{ $data['email'] }}</p>
                        </div>
                    </div>
                    @endif
                    @if($data['phone'])
                    <div class="row">
                        <div class="col-4">
                            <h5>Phone:</h5>
                        </div>
                        <div class="col-8">
                            <p>{{ $data['phone'] }}</p>
                        </div>
                    </div>
                    @endif
                    @if($data['pan'])
                    <div class="row">
                        <div class="col-4">
                            <h5>PAN NO:</h5>
                        </div>
                        <div class="col-8">
                            <p>{{ $data['pan'] }}</p>
                        </div>
                    </div>
                    @endif
                    @if($data['gst'])
                    <div class="row">
                        <div class="col-4">
                            <h5>GST NO:</h5>
                        </div>
                        <div class="col-8">
                            <p>{{ $data['gst'] }}</p>
                        </div>
                    </div>
                    @endif
                    @if($data['fassi'])
                    <div class="row">
                        <div class="col-4">
                            <h5>FSSAI NO:</h5>
                        </div>
                        <div class="col-8">
                            <p>{{ $data['fassi'] }}</p>
                        </div>
                    </div>
                    @endif
                    @if($data['iec'])
                    <div class="row">
                        <div class="col-4">
                            <h5>IEC NO:</h5>
                        </div>
                        <div class="col-8">
                            <p>{{ $data['iec'] }}</p>
                        </div>
                    </div>
                    @endif
                    @if($data['tanno'])
                    <div class="row">
                        <div class="col-4">
                            <h5>TAN NO:</h5>
                        </div>
                        <div class="col-8">
                            <p>{{ $data['tanno'] }}</p>
                        </div>
                    </div>
                    @endif
                    @if($data['bank'])
                    <div class="row">
                        <div class="col-4">
                            <h5>Bank Details:</h5>
                        </div>
                        <div class="col-8">
                            <p>{!! $data['bank'] !!}</p>
                        </div>
                    </div>
                    @endif
                    @if($data['address'])
                    <div class="row">
                        <div class="col-4">
                            <h5>Shipping Address:</h5>
                        </div>
                        <div class="col-8">
                            <p>{{ $data['address'] }}</p>
                        </div>
                    </div>
                    @endif
                    @if($data['baddress'])
                    <div class="row">
                        <div class="col-4">
                            <h5>Billing Address:</h5>
                        </div>
                        <div class="col-8">
                            <p>{{ $data['baddress'] }}</p>
                        </div>
                    </div>
                    @endif
                    @if($data['cperson'])
                    <div class="row">
                        <div class="col-4">
                            <h5>Contact Person:</h5>
                        </div>
                        <div class="col-8">
                            <p>{{ $data['cperson'] }}</p>
                        </div>
                    </div>
                    @endif
                    @if($data['cnumber'])
                    <div class="row">
                        <div class="col-4">
                            <h5>Contact Person Number:</h5>
                        </div>
                        <div class="col-8">
                            <p>{{ $data['cnumber'] }}</p>
                        </div>
                    </div>
                    @endif
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
