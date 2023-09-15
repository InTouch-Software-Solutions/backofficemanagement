@extends('index_main')
@section('csscontent')
  <style>
    .card-body{
      border: 1px solid #ccc;
      border-radius: 10px;
    }
  </style>
@endsection
@section('content')
<div class="col-12" style="text-align: center;">
  <h1 class="mt-5">Modules</h1>
</div>
<div class="col-12">
  <div class="card mt-5">
    <div class="row">
      <div class="col-3">
        <div class="card-body">
          <h5 class="card-title">MODULE 1</h5>
          <p class="card-text">Contract Note <br> Brokerage Bill <br> Delivery Book</p>
          <a href="#" class="btn btn-primary">lessssGo</a>
        </div>
      </div>
      <div class="col-3">
        <div class="card-body">
          <h5 class="card-title">Inventory Control</h5>
          <p class="card-text">........................................!<br>........................................!<br>........................................!</p>
          <a href="#" class="btn btn-primary">lessssGo</a>
        </div>
      </div>
      <div class="col-3">
        <div class="card-body">
          <h5 class="card-title">Pay Roll Staff</h5>
          <p class="card-text">........................................!<br>........................................!<br>........................................!</p>
          <a href="#" class="btn btn-primary">lessssGo</a>
        </div>
      </div>
      <div class="col-3">
        <div class="card-body">
          <h5 class="card-title">Petty Cash Book</h5>
          <p class="card-text">........................................!<br>........................................!<br>........................................!</p>
          <a href="#" class="btn btn-primary">lessssGo</a>
        </div>
      </div>
    </div> 
  </div>
</div>
@endsection