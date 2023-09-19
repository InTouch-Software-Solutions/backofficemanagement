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
    <h1 class="mt-5">Add Client</h1>
</div>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ Route('saveclient') }}" method="post">
                @csrf
                <input type="hidden" name="role" value="client">
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
                        <label>Username:</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Username ">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>Password:</label>
                        <input type="text" name="password" class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>Confirm Password:</label>
                        <input type="text" name="cpassword" class="form-control" placeholder="Confirm Password">
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label>Mobile No:</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter Mobile No">
                    </div>
                </div>
            </form>
            <br>
            <button type="button" class="btn btn-primary">Add</button>
        </div>
    </div>
</div>

@endsection