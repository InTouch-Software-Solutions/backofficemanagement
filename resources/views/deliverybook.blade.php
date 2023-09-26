@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
    <h1 class="mt-5">Delivery Book</h1>
</div>
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="x" class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Order No.</th>
                            <th>Contract Date</th>
                            <th>Delivery Date</th>
                            <th>Purchaser</th>
                            <th>Seller</th>
                            <th>Commodity</th>
                            <th>Quantity</th>
                            <th>Rate (per Kgs)</th>
                            <th>Delivery Time:</th>
                            <th>Condition: </th>
                            <th>Charge: </th>
                            <th>Version: </th>
                            <th>Action: </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contracts as $contract)
                        <?php
                            $pname = DB::table('users')->where('id',$contract->purchaser)->pluck('name');
                            $sname = DB::table('users')->where('id',$contract->seller)->pluck('name');
                        ?>
                        <tr>
                            <td>{{ $contract->orderno }}</td>
                            <td>{{ $contract->date }}</td>
                            <td>{{ $contract->time }}</td>
                            <td>{{ $pname[0] }}</td>
                            <td>{{ $sname[0] }}</td>
                            <td>{{ $contract->commodity }}</td>
                            <td>{{ $contract->quantity }} TONNES</td>
                            <td>Rs. {{ $contract->rate }}/-&nbsp;&nbsp;+ {{ $contract->gst }}% GST</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $contract->time }}</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $contract->condition }}</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;Rs. {{ $contract->charge }} PER TONNE</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $contract->version }}&nbsp;&nbsp;&nbsp;&nbsp; 
                                @if ($contract->version > 1)
                                    <a href="{{ route('previousversions', ['orderno' => $contract->orderno]) }}" class="btn btn-primary">Check Previous Versions</a>
                                @endif
                            </td>                            
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="{{ Route('editcontract',['id'=>$contract->id]) }}"><i class="fa fa-pencil"></i>Edit</a>&nbsp;&nbsp;<a href="{{ Route('contractnote',['id'=>$contract->id]) }}" class="btn btn-primary">Contract Note</a></td>
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