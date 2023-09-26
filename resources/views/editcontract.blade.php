@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
    <h1 class="mt-5">Update Contract</h1>
</div>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ Route('updatecontract') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $contract->id }}">
                <div class="row g-3">
                    <div class="col-md-6 col-sm-12">
                        <label>Date:</label>
                        <input type="date" name="date" class="form-control" value="{{ $contract->date }}" placeholder="Enter Date">
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Purchaser:</label>
                        <select name="purchaser" id="purchaser" class="form-control">
                            <option value="">Select Purchaser</option>
                            @foreach ($clients as $client)
                                <option value="{{ $client->id  }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Seller:</label>
                        <select name="seller" id="seller" class="form-control">
                            <option value="">Select Seller</option>
                            @foreach ($clients as $client)
                                <option value="{{ $client->id  }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Commodity:</label>
                        <input type="text" name="commodity" value="{{ $contract->commodity }}" class="form-control" placeholder="Enter Commodity">
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Quantity (in TONNES):</label>
                        <input type="text" name="quantity" value="{{ $contract->quantity }}" class="form-control" placeholder="Enter Quanity in TONNES">
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Rate (per Kgs):</label>
                        <input type="text" name="rate" value="{{ $contract->rate }}" class="form-control" placeholder="Enter Rate per Kgs">
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>GST (in %):</label>
                        <input type="text" name="gst" value="{{ $contract->gst }}" class="form-control" placeholder="Enter GST percentage">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>Delivery Time:</label>
                        <input type="date" name="time" value="{{ $contract->time }}" class="form-control" >
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Other Conditions:</label>
                        <textarea name="condition" id="condition" class="form-control" placeholder="Enter Other Conditions" cols="30" rows="5">{{ $contract->condition }}</textarea>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Brokerage Charge (per metric tonne):</label>
                        <input type="text" name="charge" value="{{ $contract->charge }}" class="form-control" placeholder="Enter Brokerage Charge">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection