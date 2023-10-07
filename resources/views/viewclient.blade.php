@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
  <h1 class="mt-3 mb-3">Client Details</h1>
</div>
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div>
                    <h3>{{ $client->name }}</h3>
                    <p>{{ $client->address }}</p>
                </div>
                <?php
                    $f = DB::table('firms')->where('id', $client->firm)->pluck('name');
                ?>
                <div>
                    <p>Mobile No. : {{ $client->phone }}</p>
                    <p>Email : {{ $client->email }}</p>
                    <p>PAN Card No. : {{ $client->pan }}</p>
                    <p>GST No. : {{ $client->gst }}</p>
                    <p>FSSAI No. : {{ $client->fassi }}</p>
                    <p>IEC No. : {{ $client->iec }}</p>
                    <p>TAN No. : {{ $client->tanno }}</p>
                    <p>Firm : {{ $f[0] }}</p>
                    <p>Comm. Rate : {{ $client->comm }}</p>
                    <p>Factory Address : {{ $client->faddress }}</p>
                    <p>Billing Address : {{ $client->baddress }}</p>
                    <p>Contact Person : {{ $client->cperson }}</p>
                    <p>Contact Person Number : {{ $client->cnumber }}</p>
                </div>
                <div>
                    <p>Bank Details : {!! $client->bank !!}</p>
                    <?php
                        $extras = DB::table('extra_fields')->where('sign', 'client')->where('fid', $client->id)->get();
                    ?>
                    @if($extras)
                        @foreach($extras as $extra)
                            <p>{{ $extra->title }} : {{ $extra->details }}</p>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection