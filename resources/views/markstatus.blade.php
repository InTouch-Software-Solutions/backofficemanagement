@extends('indexnew')
@section('csscontent')
    <style>
        .hidden {
    display: none;
}
    </style>
@endsection
@section('content')
<div class="col-12" style="text-align: center;">
    <h1 class="mt-3 mb-3">Mark Status</h1>
</div>
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ Route('deliverybook') }}" class="btn btn-primary float-end">Back</a>
            </div>
            <div class="card-body">
                <?php
                    $d = DB::table('contract_notes')->where('id',$id)->pluck('date');    
                    $q = DB::table('contract_notes')->where('id',$id)->pluck('remaining');    
                    $p = DB::table('contract_notes')->where('id',$id)->pluck('purchaser');    
                    $s = DB::table('contract_notes')->where('id',$id)->pluck('seller');    
                    $firm = DB::table('users')->where('id', $p)->pluck('firm');
                    $commr = DB::table('firms')->where('id', $firm[0])->pluck('comm');
                    $date = $d[0];
                    $purchaser= $p[0];
                    $seller = $s[0];
                ?>
                <form action="{{ Route('createbrokeragebill') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $id }}" name='id'>
                    <input type="hidden" value="{{ $date }}" name="contractdate">
                    <input type="hidden" value="{{ $purchaser }}" name="purchaser">
                    <input type="hidden" value="{{ $seller }}" name="seller">
                    <label>Net Weight(in TONNES)</label>
                    <input type="text" class="form-control mt-1" name="weight" placeholder="Enter Net Weight out of {{ $q[0] }}" required>
                    <label>Tanker No.</label>
                    <input type="text" class="form-control mt-1" name="tanker" placeholder="Enter Tanker No." required>
                    <label>Transporter</label>
                    <input type="text" class="form-control mt-1" name="transporter" placeholder="Enter Transporter Name" required>
                    <label>Agent Name</label>
                    <input type="text" class="form-control mt-1" name="agent" placeholder="Enter Agent Name" required>
                    <label>Invoice No.</label>
                    <input type="text" class="form-control mt-1" name="invoice" placeholder="Enter Invoice No." required>
                    <label>P.O. No.</label>
                    <input type="text" class="form-control mt-1" name="pono" placeholder="Enter P.O. No." required>
                    <label>Comm. Rate</label>
                    <input type="text" class="form-control mt-1" name="comm" value="{{ $commr[0] }}">
                    <label>Status</label>
                    <select id="options" name="status" class="form-select mt-1">
                        <option value="">Select Status</option>
                        <option value="pending">Continuous</option>
                        <option value="delivered">Delivered</option>
                    </select>
                     <div id="dateInput" class="hidden mt-1">
                        <label for="date">Select a Future Delivery date:</label>
                        <input type="date" class="form-control" name="fdate" id="date">
                    </div>
                    <button type="submit" class="btn btn-primary mt-1">Generate Brokerage Bill</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script>
    document.getElementById("options").addEventListener("change", function () {
    var selectedOption = this.value;
    var dateInput = document.getElementById("dateInput");

    if (selectedOption === "pending") {
        dateInput.classList.remove("hidden");
    } else {
        dateInput.classList.add("hidden");
    }
});
</script>

@endsection