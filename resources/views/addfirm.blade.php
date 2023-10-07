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
    <h1 class="mt-3 mb-3">Add Firm</h1>
</div>
<br>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ Route('savefirm') }}" method="post">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6 col-sm-12">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Email ID ">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>Mobile No:</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter Mobile No">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>PAN No:</label>
                        <input type="text" name="pan" class="form-control" placeholder="Enter Pan No ">
                    </div>           
                    <div class="col-md-6 col-sm-12">
                        <label>TAN No:</label>
                        <input type="text" name="tanno" class="form-control" placeholder="Enter TAN No">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>GST No:</label>
                        <input type="text" name="gst" class="form-control" placeholder="Enter GST No">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>FSSAI No:</label>
                        <input type="text" name="fassi" class="form-control" placeholder="Enter Fssai No">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>IEC No (optional):</label>
                        <input type="text" name="iec" class="form-control" placeholder="Enter IEC No">
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Address:</label>
                        <textarea name="address" id="address" cols="30" rows="5" class="form-control" placeholder="Enter Address "></textarea>
                    </div>            
                    <div class="col-md-12 col-sm-12">
                        <label>Bank Details:</label>
                        <textarea name="bank" id="bank" cols="30" rows="5" class="form-control">Account Name:<br>Account No:<br>IFSC Code:<br>Bank Name:<br>Branch Name:<br>Any Other Remarks:<br></textarea>
                    </div>                     
                    <div class="col-md-6 col-sm-12">
                        <label>Comm. Rate:</label>
                        <input type="text" name="comm" class="form-control" placeholder="Enter Comm. Rate">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Add</button>
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