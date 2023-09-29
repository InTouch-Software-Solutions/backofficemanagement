@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
  <h1 class="mt-3 mb-3">Edit Member</h1>
</div>
<br>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <form action="{{ Route('savemember') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $id }}">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="phone">Contact No.</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter number">
                </div>
                <div class="form-group">
                  <label for="pan">PAN Card No.</label>
                  <input type="text" class="form-control" id="pan" name="pan" placeholder="Enter pan card no.">
                </div>
                <div class="form-group">
                  <label for="adhaar">Adhaar Card No.</label>
                  <input type="text" class="form-control" id="adhaar" name="adhaar" placeholder="Enter adhaar card no.">
                </div>
                <div class="form-group">
                  <label for="relation">Relationship</label>
                  <input type="text" class="form-control" id="relation" name="relation" placeholder="Enter adhaar card no.">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> 
        </div>    
    </div>    
</div>
@endsection
