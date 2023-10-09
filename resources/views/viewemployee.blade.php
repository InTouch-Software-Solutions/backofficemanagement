@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
  <h1 class="mt-3 mb-3">Employee Details</h1>
</div>
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ Route('employees') }}" class="btn btn-primary float-end">Back</a>
            </div>
            <div class="card-body">
                <div>
                    <h3>{{ $employee->name }}</h3>
                    <p>{{ $employee->age }} year old</p>
                    <p>{{ $employee->address }}</p>
                </div>
                <div>
                    <p>Mobile No. : {{ $employee->phone }}</p>
                    <p>PAN Card No. : {{ $employee->pan }}</p>
                    <p>Adhaar No. : {{ $employee->adhaar }}</p>
                    <p>Basic Salary : {{ $employee->salary }}</p>
                </div>
                <div>
                    <p>Bank Details : {!! $employee->bank !!}</p>
                    <?php
                        $extras = DB::table('extra_fields')->where('sign', 'employee')->where('fid', $employee->id)->get();
                    ?>
                    @if($extras)
                        @foreach($extras as $extra)
                            <p>{{ $extra->title }} : {{ $extra->details }}</p>
                        @endforeach
                    @endif
                </div>
                <div>
                    <h5>Family Details</h5>
                    <div class="row">
                        @foreach ($members as $member)
                        <div class="col-4">
                            <div class="card">
                                <p>Name : {{ $member->name }}</p>
                                <p>Phone No : {{ $member->phone }}</p>
                                <p>PAN Card No : {{ $member->pan }}</p>
                                <p>Adhaar Card No : {{ $member->adhaar }}</p>
                                <p>Relation : {{ $member->relation }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection