@extends('indexnew')
@section('csscontent')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="col-12" style="text-align: center;">
  <h1 class="mt-5">Attendance</h1>
</div>
@if(Session::has('errors'))
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form action="{{ Route('saveattendance') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <br><br>
    @foreach ($employees as $employee)
    <input type="hidden" value="{{ $employee->id }}" name="id[]" required>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name[]" value="{{ $employee->name }}" required>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" name="status[]">
            <option value="null">Select Status</option>
            <option value="present">Present</option>
            <option value="absent">Absent</option>
            <option value="halfday">Half-Day</option>
          </select>
    </div>
    <br>
    @endforeach
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection

