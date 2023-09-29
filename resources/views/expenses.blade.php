@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
    <h1 class="mt-3 mb-3">Expenses</h1>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <table id="acc_exp" class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Reason</th>
                            <th>Amount</th>
                            <th>Paid By</th>
                            <th>Paid To</th>
                            <th>Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($expenses as $expense)
                        <?php
                            $reason = DB::table('expenses_categories')->where('id',$expense->reason)->pluck('name');
                        ?>
                        <tr>
                            <td>{{ $expense->id }}</td>
                            <td>{{ $expense->date }}</td>
                            <td>{{ $reason[0] }}</td>
                            <td>{{ $expense->amount }}</td>
                            <td>{{ $expense->paid_by }}</td>
                            <td>{{ $expense->paid_to }}</td>
                            <td>{{ $expense->note }}</td>
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
        $('#acc_exp')
        .dataTable({
            responsive: true,
        });
    });
</script>
@endsection
