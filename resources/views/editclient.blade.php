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
    <h1 class="mt-5">Edit Client</h1>
</div>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ Route('updateclient') }}" method="post">
                @csrf
                <input type="hidden" name="role" value="client">
                <div class="row g-3">
                    <div class="col-md-6 col-sm-12">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control" value="{{ $client->name }}">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control" value="{{ $client->email }}">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>Mobile No:</label>
                        <input type="text" name="phone" class="form-control" value="{{ $client->phone }}">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>PAN No:</label>
                        <input type="text" name="pan" class="form-control" value="{{ $client->pan }}">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>Contact Person Name:</label>
                        <input type="text" name="cperson" class="form-control" value="{{ $client->cperson }}">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>Contact Person Number:</label>
                        <input type="text" name="cnumber" class="form-control" value="{{ $client->cnumber }}">
                    </div>             
                    <div class="col-md-6 col-sm-12">
                        <label>TAN No:</label>
                        <input type="text" name="tanno" class="form-control" value="{{ $client->tanno }}">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>GST No:</label>
                        <input type="text" name="gst" class="form-control" value="{{ $client->gst }}">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>FSSAI No:</label>
                        <input type="text" name="fassi" class="form-control" value="{{ $client->fassi }}">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>IEC No (optional):</label>
                        <input type="text" name="iec" class="form-control" value="{{ $client->iec }}">
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Shipping Address:</label>
                        <textarea name="address" id="address" cols="30" rows="5" class="form-control" >{{ $client->address }}</textarea>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Factory/Delivery Address:</label>
                        <textarea name="faddress" id="faddress" cols="30" rows="5" class="form-control" >{{ $client->faddress }}</textarea>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Billing Address:</label>
                        <textarea name="baddress" id="baddress" cols="30" rows="5" class="form-control" >{{ $client->baddress }}</textarea>
                    </div>              
                    <div class="col-md-12 col-sm-12">
                        <label>Bank Details:</label>
                        <textarea name="bank" id="bank" cols="30" rows="5" class="form-control">{{ $client->bank }}</textarea>
                    </div>                     
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection
@section('jscontent')
<script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create(document.querySelector('#bank')).catch
    (error => {
            console.error(error);
        }
    );
</script>
@endsection