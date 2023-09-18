@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
  <h1 class="mt-5">Add Employee</h1>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <form action="{{ Route('saveemployee') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="phone">Contact No.</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter number">
                </div>
                <div class="form-group">
                  <label for="age">Age</label>
                  <input type="text" class="form-control" id="age" name="age" placeholder="Enter age">
                </div>
                <div class="form-group">
                  <label for="salary">Salary</label>
                  <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter salary">
                </div>
                <div class="form-group">
                  <label for="joining">Date of Joining</label>
                  <input type="date" class="form-control" id="joining" name="joining" placeholder="Enter joining date">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> 
        </div>    
    </div>    
</div>
@endsection