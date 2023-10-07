@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
    <h1 class="mt-3 mb-3">Firms List</h1>
</div>
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ Route('addfirm') }}" class="btn btn-primary float-end">Add Firm</a>
            </div>
            <div class="card-body">
                <table id="x" class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>PAN No</th>
                            <th>GST No</th>
                            <th>FSSAI No</th>
                            <th>TAN No:</th>
                            <th>Address:</th>
                            <th>IEC No:</th>
                            <th><strong>Bank Details:</strong></th>
                            <th>Action:</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($firms as $firm)
                        <tr>
                            <td>{{ $firm->id }}</td>
                            <td>{{ $firm->name }}</td>
                            <td>{{ $firm->email }}</td>
                            <td>{{ $firm->phone }}</td>
                            <td>{{ $firm->pan }}</td>
                            <td>{{ $firm->gst }}</td>
                            <td>{{ $firm->fassi }}</td>
                            <td>{{ $firm->tanno }}</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $firm->address }}</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $firm->iec }}</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;{!! $firm->bank !!}</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ Route('editfirm',['id' => $firm->id]) }}" class="btn btn-primary">Edit</a></td>
                        </tr>
                        @endforeach    
                    </tbody>
                </table>
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