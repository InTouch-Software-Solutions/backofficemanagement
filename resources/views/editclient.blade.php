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
    <h1 class="mt-3 mb-3">Edit Client</h1>
</div>
<br>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <a href="{{ Route('clientlist') }}" class="btn btn-primary float-end">Back</a>
        </div>
        <div class="card-body">
            <form id="extra" action="{{ Route('updateclient') }}" method="post">
                @csrf
                <input type="hidden" name="role" value="client">
                <input type="hidden" name="id" value="{{ $client->id }}">
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
                        <label>IEC No :</label>
                        <input type="text" name="iec" class="form-control" value="{{ $client->iec }}">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>Invoice No :</label>
                        <input type="text" name="invoiceno" class="form-control" value="{{ $client->invoiceno }}">
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
                    <div class="col-md-6 col-sm-12">
                        <label>Firm:</label>
                        <select name="firm" class="form-select">
                            <option value="">Select Firm</option> 
                            @foreach ($firms as $firm)
                                <option value="{{ $firm->id }}">{{ $firm->name }}</option>
                            @endforeach
                        </select>
                    </div>                     
                    <div class="col-md-6 col-sm-12">
                        <label>Comm. Rate:</label>
                        <input type="text" name="comm" class="form-control" value="{{ $client->comm }}" placeholder="Enter Comm. Rate">
                    </div> 
                    <div class="form-group">
                        <label for="extrafield">No. of extra field</label>
                        <input type="text" class="form-control" id="extrafield" name="extrafield" placeholder="Enter no. of extra fields">
                        <br>
                        <button type="button" class="btn btn-primary" id="addMember">Add Extra field</button>
                    </div>
                    <div id="details"></div>                  
                </div>
                <br>
                <button type="submit" style="display: none;" class="btn btn-primary">Update</button>
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
<script>

    document.getElementById("addMember").addEventListener("click", function() {
        numMembers = parseInt(document.getElementById("extrafield").value);
        generateMemberFormFields(numMembers);
    });
  
    function generateMemberFormFields(numMembers) {
        const memberDetailsContainer = document.getElementById("details");
        const submitButton = document.querySelector("form#extra button[type=submit]");
        if(numMembers > 0){
          memberDetailsContainer.innerHTML = "<h2>Extra Details</h2>";
        }else{
            memberDetailsContainer.innerHTML = "";
        }
  
        for (let i = 1; i <= numMembers; i++) {
            const memberDiv = document.createElement("div");
            memberDiv.innerHTML = `
            <div class="row">
              <h3>${i}</h3>
              <div class="col-6">
                <label for="title[]">Title:</label>
                <input type="text" class="form-control"  name="title[]" required>
              </div>
              <div class="col-6">
                <label for="details[]">Details:</label>
                <textarea cols="30" rows="5" class="form-control" id="xyz" name="details[]" required></textarea>
              </div>
            </div>
            `;
            memberDetailsContainer.appendChild(memberDiv);
        }
        submitButton.style.display = "block";
    }
</script>
@endsection