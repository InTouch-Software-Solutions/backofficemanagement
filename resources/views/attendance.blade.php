@extends('indexnew')
@section('csscontent')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="col-12" style="text-align: center;">
  <h1 class="mt-3 mb-3">Attendance</h1>
</div>
@if(Session::has('errors'))
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
<br>
<div>
    <a href="{{ Route('employees') }}" class="btn btn-primary float-end">Back</a>
</div>
<br>
<form action="{{ Route('saveattendance') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <br><br>
    <table id="x" class="table table-hover mb-0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Fuel Allowance</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                <td>
                    <input class="form-check-input" type="checkbox" name="status[]" id="status1" value="present">
                    <label class="form-check-label" for="status1">
                        Present
                    </label>
                    <input class="form-check-input" type="checkbox" name="status[]" id="status2" value="absent">
                    <label class="form-check-label" for="status2">
                        Absent
                    </label>
                    <input class="form-check-input" type="checkbox" name="status[]" id="status3" value="halfday">
                    <label class="form-check-label" for="status3">
                        Half-Day
                    </label>
                </td>
                <td>
                    <input class="form-check-input" type="checkbox" name="fuel[]" id="fuel1" value="yes">
                    <label class="form-check-label" for="fuel1">
                        YES
                    </label>
                    <input class="form-check-input" type="checkbox" name="fuel[]" id="fuel2" value="no">
                    <label class="form-check-label" for="fuel2">
                        NO
                    </label>
                </td>
                <td><input type="hidden" value="{{ $employee->id }}" name="id[]" required>
                    <input type="hidden" value="{{ $employee->name }}" name="name[]" required>
                </td>
            </tr>
            @endforeach    
        </tbody>
    </table>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection
@section('jscontent')
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/dataTables.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script>
    $(document).ready(function () {
        $('#x')
        .dataTable({
            responsive: true,
        });
    });
</script>
@endsection

