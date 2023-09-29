@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
  <h1 class="mt-3 mb-3">Edit Employee</h1>
</div>
<br>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <form action="{{ Route('updateemployee') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $employee->id }}">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="phone">Contact No.</label>
                  <input type="text" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}" placeholder="Enter number">
                </div>
                <div class="form-group">
                  <label for="age">Age</label>
                  <input type="text" class="form-control" id="age" name="age" value="{{ $employee->age }}" placeholder="Enter age">
                </div>
                <div class="form-group">
                  <label for="pan">PAN Card No.</label>
                  <input type="text" class="form-control" id="pan" name="pan" value="{{ $employee->pan }}" placeholder="Enter pan card no.">
                </div>
                <div class="form-group">
                  <label for="adhaar">Adhaar Card No.</label>
                  <input type="text" class="form-control" id="adhaar" name="adhaar" value="{{ $employee->adhaar }}" placeholder="Enter adhaar card no.">
                </div>
                <div class="form-group">
                  <label for="bank">Bank Account Details</label>
                  <textarea name="bank" class="form-control" id="bank" cols="30" rows="5">{{ $employee->bank }}</textarea>
                </div>
                <div class="form-group">
                  <label for="salary">Salary</label>
                  <input type="text" class="form-control" id="salary" name="salary"  value="{{ $employee->salary }}" placeholder="Enter salary">
                </div>
                <div class="form-group">
                  <label for="joining">Date of Joining</label>
                  <input type="date" class="form-control" id="joining" name="joining" value="{{ $employee->joining }}" placeholder="Enter joining date">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
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