@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
  <h1 class="mt-5">Edit Member</h1>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <form action="{{ Route('updatemember') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $member->id }}">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ $member->name }}" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="phone">Contact No.</label>
                  <input type="text" class="form-control" id="phone" name="phone" value="{{ $member->phone }}" placeholder="Enter number">
                </div>
                <div class="form-group">
                  <label for="pan">PAN Card No.</label>
                  <input type="text" class="form-control" id="pan" name="pan" value="{{ $member->pan }}" placeholder="Enter pan card no.">
                </div>
                <div class="form-group">
                  <label for="adhaar">Adhaar Card No.</label>
                  <input type="text" class="form-control" id="adhaar" name="adhaar" value="{{ $member->adhaar }}" placeholder="Enter adhaar card no.">
                </div>
                <div class="form-group">
                  <label for="relation">Relationship</label>
                  <input type="text" class="form-control" id="relation" name="relation" value="{{ $member->relation }}" placeholder="Enter adhaar card no.">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Update</button>
            </form> 
        </div>    
    </div>    
</div>
@endsection
