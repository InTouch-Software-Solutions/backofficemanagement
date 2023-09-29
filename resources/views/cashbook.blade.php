@extends('indexnew')
@section('csscontent')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
@section('content')
<div class="col-12" style="text-align: center;">
  <h1 class="mt-3 mb-3">Add Expenses</h1>
</div>
<br>
<div class="col-12">
<button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Expense Category</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ Route('savecategory') }}" method="post">
        @csrf
        <div class="modal-body">
          <label for="cat">Category</label>
          <input type="text" id="cat" name="cat" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>
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
                  <select class="form-control" name="reason" id="reason">
                    <option value="">Select Reason</option>
                    @foreach ($reasons as $reason)
                      <option value="{{ $reason->id }}">{{ $reason->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group mt-2">
                  <label for="amount">Amount</label>
                  <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter amount">
                </div>
                <div class="form-group mt-2">
                  <label for="paid">Paid By</label>
                  <input type="text" class="form-control" id="paid" name="paid" placeholder="Enter name">
                </div>
                <div class="form-group mt-2">
                  <label for="paidto">Paid To</label>
                  <input type="text" class="form-control" id="paidto" name="paidto" placeholder="Enter name">
                </div>
                <div class="form-group mt-2">
                  <label for="note">Note</label>
                  <textarea type="text" class="form-control" id="note" name="note" placeholder="Enter note if any" cols="30" rows="5"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> 
        </div>    
    </div>    
</div>
@endsection