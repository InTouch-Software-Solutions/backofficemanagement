@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
    <h1 class="mt-3 mb-3">Clients List</h1>
</div>
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
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
                            <th>TAN No</th>
                            <th>Address:</th>
                            <th>IEC No:</th>
                            <th>Factory Address:</th>
                            <th>Billing Address:</th>
                            <th>Contact Person:</th>
                            <th>Contact Person Number:</th>
                            <th><strong>Bank Details:</strong></th>
                            <th>Action:</th>
                            <th>Share Details:</th>
                            <th>Ledger:</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->id }}</td>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->phone }}</td>
                            <td>{{ $client->pan }}</td>
                            <td>{{ $client->gst }}</td>
                            <td>{{ $client->fassi }}</td>
                            <td>{{ $client->tanno }}</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $client->address }}</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $client->iec }}</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $client->faddress }}</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $client->baddress }}</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $client->cperson }}</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $client->cnumber }}</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;{!! $client->bank !!}</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ Route('share',['id'=>$client->id]) }}" class="btn btn-primary">Share</a></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ Route('editclient',['id'=>$client->id]) }}" class="btn btn-primary">Edit</a></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ Route('ledger',['id'=>$client->id]) }}" class="btn btn-primary">View Ledger</a></td>
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