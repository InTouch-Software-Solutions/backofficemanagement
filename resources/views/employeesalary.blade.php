@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
    <h1 class="mt-5">Employee Salary</h1>
</div>
<br>
<div class="row">
    @foreach ($employees as $employee)
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h2>{{ $employee->name }}</h2>
                <h6>{{ $employee->phone }}</h6>
                <h6>Basic Salary: {{ $employee->salary }} per month</h6>
                <a href="{{ Route('payslip',['id'=>$employee->id]) }}" class="btn btn-primary">Payslip</a>
            </div>
        </div>
    </div>
    @endforeach    
</div>
@endsection