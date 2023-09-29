@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
    <h1 class="mt-3 mb-3">Employee Salary</h1>
</div>
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="x" class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Basic Salary</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ $employee->salary }} per month</td>
                            <td><a href="{{ Route('payslip',['id'=>$employee->id]) }}" class="btn btn-primary">Payslip</a></td>
                        </tr>
                        @endforeach    
                    </tbody>
                </table>
                {{-- <h2>{{ $employee->name }}</h2>
                <h6>{{ $employee->phone }}</h6>
                <h6>Basic Salary: {{ $employee->salary }} per month</h6>
                <a href="{{ Route('payslip',['id'=>$employee->id]) }}" class="btn btn-primary">Payslip</a> --}}
            </div>
        </div>
    </div>
</div>
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