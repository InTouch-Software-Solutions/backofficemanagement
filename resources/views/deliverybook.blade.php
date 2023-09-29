@extends('indexnew')
@section('csscontent')
    <style>
        #x td{
           color: red !important; 
        }
        #y td{
            color: orange !important;
        }
        #z td{
            color: green !important;
        }
    </style>
@endsection
@section('content')
<div class="col-12" style="text-align: center;">
    <h1 class="mt-3 mb-3">Delivery Book</h1>
</div>
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2 style="text-align: center;">Pending Deliveries</h2>
                <table id="x" class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Order No.</th>
                            <th>Delivery Date</th>
                            <th>Contract Date</th>
                            <th>Purchaser</th>
                            <th>Seller</th>
                            <th>Commodity</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action: </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pcontracts as $pcontract)
                        <?php
                            $pname = DB::table('users')->where('id',$pcontract->purchaser)->pluck('name');
                            $sname = DB::table('users')->where('id',$pcontract->seller)->pluck('name');
                        ?>
                        <tr>
                            <td>{{ $pcontract->orderno }}</td>
                            <td><h5>{{ $pcontract->fdate }}</h5></td>
                            <td>{{ $pcontract->date }}</td>
                            <td>{{ $pname[0] }}</td>
                            <td>{{ $sname[0] }}</td>
                            <td>{{ $pcontract->commodity }}</td>
                            <td>{{ $pcontract->quantity }} TONNES</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $pcontract->status }}</td>                            
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="{{ Route('markstatus',['id' => $pcontract->id]) }}"><i class="fa fa-check"></i>Mark Status</a></td>
                        </tr>
                        @endforeach     
                    </tbody>
                </table>
                <hr>
                <br>
                <br>
                <h2 style="text-align: center;">Today's Delivery</h2>
                <table id="y" class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Order No.</th>
                            <th>Delivery Date</th>
                            <th>Contract Date</th>
                            <th>Purchaser</th>
                            <th>Seller</th>
                            <th>Commodity</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action: </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tcontracts as $tcontract)
                        <?php
                            $pname = DB::table('users')->where('id',$tcontract->purchaser)->pluck('name');
                            $sname = DB::table('users')->where('id',$tcontract->seller)->pluck('name');
                        ?>
                        <tr>
                            <td>{{ $tcontract->orderno }}</td>
                            <td><h5>{{ $tcontract->fdate }}</h5></td>
                            <td>{{ $tcontract->date }}</td>
                            <td>{{ $pname[0] }}</td>
                            <td>{{ $sname[0] }}</td>
                            <td>{{ $tcontract->commodity }}</td>
                            <td>{{ $tcontract->quantity }} TONNES</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $tcontract->status }}</td>                            
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="{{ Route('markstatus',['id'=>$tcontract->id]) }}"><i class="fa fa-check"></i>Mark Status</a></td>
                        </tr>
                        @endforeach    
                    </tbody>
                </table>
                <hr>
                <br>
                <br>
                <h2 style="text-align: center;">Future Deliveries</h2>
                <table id="z" class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Order No.</th>
                            <th>Delivery Date</th>
                            <th>Contract Date</th>
                            <th>Purchaser</th>
                            <th>Seller</th>
                            <th>Commodity</th>
                            <th>Quantity</th>
                            <th>Status</th>
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
                            <td><h5>{{ $contract->fdate }}</h5></td>
                            <td>{{ $contract->date }}</td>
                            <td>{{ $pname[0] }}</td>
                            <td>{{ $sname[0] }}</td>
                            <td>{{ $contract->commodity }}</td>
                            <td>{{ $contract->quantity }} TONNES</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;{{ $contract->status }}</td>                            
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="{{ Route('markstatus',['id'=>$contract->id]) }}"><i class="fa fa-check"></i>Mark Status</a></td>
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
        $('#y')
        .dataTable({
            responsive: true,
        });
        $('#z')
        .dataTable({
            responsive: true,
        });
    });
</script>
@endsection