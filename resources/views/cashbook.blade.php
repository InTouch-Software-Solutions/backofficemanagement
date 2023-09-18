@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
  <h1 class="mt-5">Add Expenses</h1>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <form action="{{ Route('saveexpenses') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="date">Date</label>
                  <input type="date" class="form-control" id="date" name="date" placeholder="Enter date">
                </div>
                <div class="form-group mt-2">
                  <label for="reason">Reason of Expense</label>
                  <input type="text" class="form-control" id="reason" name="reason" placeholder="Enter reason">
                </div>
                <div class="form-group mt-2">
                  <label for="amount">Amount</label>
                  <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter amount">
                </div>
                <div class="form-group mt-2">
                  <label for="paid">Paid By</label>
                  <input type="text" class="form-control" id="paid" name="paid" placeholder="Enter name">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> 
        </div>    
    </div>    
</div>
@endsection