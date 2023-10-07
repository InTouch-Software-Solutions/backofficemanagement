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
    <h1 class="mt-3 mb-3">Edit Firm</h1>
</div>
<br>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ Route('updatefirm') }}" method="post">
                @csrf
                <div class="row g-3">
                    <input type="hidden" name="id" value={{ $firm->id }}>
                    <div class="col-md-6 col-sm-12">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control" value="{{ $firm->name }}" placeholder="Enter Name">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control" value="{{ $firm->email }}" placeholder="Enter Email ID ">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>Mobile No:</label>
                        <input type="text" name="phone" class="form-control" value="{{ $firm->phone }}" placeholder="Enter Mobile No">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>PAN No:</label>
                        <input type="text" name="pan" class="form-control" value="{{ $firm->pan }}" placeholder="Enter Pan No ">
                    </div>           
                    <div class="col-md-6 col-sm-12">
                        <label>TAN No:</label>
                        <input type="text" name="tanno" class="form-control" value="{{ $firm->tanno }}" placeholder="Enter TAN No">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>GST No:</label>
                        <input type="text" name="gst" class="form-control" value="{{ $firm->gst }}" placeholder="Enter GST No">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>FSSAI No:</label>
                        <input type="text" name="fassi" class="form-control" value="{{ $firm->fssai }}" placeholder="Enter Fssai No">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>IEC No (optional):</label>
                        <input type="text" name="iec" class="form-control" value="{{ $firm->iec }}" placeholder="Enter IEC No">
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Address:</label>
                        <textarea name="address" id="address" cols="30" rows="5" class="form-control" placeholder="Enter Address ">{{ $firm->address }}</textarea>
                    </div>            
                    <div class="col-md-12 col-sm-12">
                        <label>Bank Details:</label>
                        <textarea name="bank" id="bank" cols="30" rows="5" class="form-control">{{ $firm->bank }}</textarea>
                    </div>                     
                    <div class="col-md-6 col-sm-12">
                        <label>Comm. Rate:</label>
                        <input type="text" name="comm" class="form-control" value="{{ $firm->comm }}" placeholder="Enter Comm. Rate">
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