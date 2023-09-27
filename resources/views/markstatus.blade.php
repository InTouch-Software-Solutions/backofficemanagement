@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
    <h1 class="mt-5">Mark Status</h1>
</div>
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ Route('createbrokeragebill') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $id }}" name='id'>
                    <label>Net Weight(in TONNES)</label>
                    <input type="text" class="form-control mt-1" name="weight" placeholder="Enter Net Weight" required>
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
                    <input type="text" class="form-control mt-1" name="comm" placeholder="Enter Comm. Rate" required>
                    <label>Status</label>
                    <select name="status" class="form-select mt-1">
                        <option value="">Select Status</option>
                        <option value="pending">Pending</option>
                        <option value="delivered">Delivered</option>
                    </select>
                    <button type="submit" class="btn btn-primary mt-1">Generate Brokerage Bill</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection