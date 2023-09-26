@extends('indexnew')
@section('csscontent')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="col-12" style="text-align: center;">
  <h1 class="mt-5">Share Client Details</h1>
</div>
@if(Session::has('errors'))
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form action="{{ Route('sharable') }}" method="post">
    @csrf
    <br>
    <br>
    <table id="x" class="table table-hover mb-0">
        <thead>
            <tr>
                <th>Content</th>
                <th>Permission</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Name</td>
                <td>
                    <input class="form-check-input" type="radio" name="name" id="name1" value="yes">
                    <label class="form-check-label" for="name">
                        YES
                    </label>
                    <input class="form-check-input" type="radio" name="name" id="name2" value="no">
                    <label class="form-check-label" for="name">
                        NO
                    </label>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input class="form-check-input" type="radio" name="email" id="email1" value="yes">
                    <label class="form-check-label" for="email">
                        YES
                    </label>
                    <input class="form-check-input" type="radio" name="email" id="email2" value="no">
                    <label class="form-check-label" for="email">
                        NO
                    </label>
                </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>
                    <input class="form-check-input" type="radio" name="phone" id="phone1" value="yes">
                    <label class="form-check-label" for="phone">
                        YES
                    </label>
                    <input class="form-check-input" type="radio" name="phone" id="phone2" value="no">
                    <label class="form-check-label" for="phone">
                        NO
                    </label>
                </td>
            </tr>
            <tr>
                <td>PAN No</td>
                <td>
                    <input class="form-check-input" type="radio" name="pan" id="pan1" value="yes">
                    <label class="form-check-label" for="pan">
                        YES
                    </label>
                    <input class="form-check-input" type="radio" name="pan" id="pan2" value="no">
                    <label class="form-check-label" for="pan">
                        NO
                    </label>
                </td>
            </tr>
            <tr>
                <td>GST No</td>
                <td>
                    <input class="form-check-input" type="radio" name="gst" id="gst1" value="yes">
                    <label class="form-check-label" for="gst">
                        YES
                    </label>
                    <input class="form-check-input" type="radio" name="gst" id="gst2" value="no">
                    <label class="form-check-label" for="gst">
                        NO
                    </label>
                </td>
            </tr>
            <tr>
                <td>FSSAI No</td>
                <td>
                    <input class="form-check-input" type="radio" name="fassi" id="fassi1" value="yes">
                    <label class="form-check-label" for="fassi">
                        YES
                    </label>
                    <input class="form-check-input" type="radio" name="fassi" id="fassi2" value="no">
                    <label class="form-check-label" for="fassi">
                        NO
                    </label>
                </td>
            </tr>
            <tr>
                <td>IEC No</td>
                <td>
                    <input class="form-check-input" type="radio" name="iec" id="iec1" value="yes">
                    <label class="form-check-label" for="iec">
                        YES
                    </label>
                    <input class="form-check-input" type="radio" name="iec" id="iec2" value="no">
                    <label class="form-check-label" for="iec">
                        NO
                    </label>
                </td>
            </tr>
            <tr>
                <td>TAN No</td>
                <td>
                    <input class="form-check-input" type="radio" name="tanno" id="tanno1" value="yes">
                    <label class="form-check-label" for="tanno">
                        YES
                    </label>
                    <input class="form-check-input" type="radio" name="tanno" id="tanno2" value="no">
                    <label class="form-check-label" for="tanno">
                        NO
                    </label>
                </td>
            </tr>
            <tr>
                <td>Bank Details</td>
                <td>
                    <input class="form-check-input" type="radio" name="bank" id="bank1" value="yes">
                    <label class="form-check-label" for="bank">
                        YES
                    </label>
                    <input class="form-check-input" type="radio" name="bank" id="bank2" value="no">
                    <label class="form-check-label" for="bank">
                        NO
                    </label>
                </td>
            </tr>
            <tr>
                <td>Shipping Address</td>
                <td>
                    <input class="form-check-input" type="radio" name="address" id="address1" value="yes">
                    <label class="form-check-label" for="address">
                        YES
                    </label>
                    <input class="form-check-input" type="radio" name="address" id="address2" value="no">
                    <label class="form-check-label" for="address">
                        NO
                    </label>
                </td>
            </tr>
            <tr>
                <td>Factory/Delivery Address</td>
                <td>
                    <input class="form-check-input" type="radio" name="faddress" id="faddress" value="yes">
                    <label class="form-check-label" for="faddress">
                        YES
                    </label>
                    <input class="form-check-input" type="radio" name="faddress" id="faddress" value="no">
                    <label class="form-check-label" for="faddress">
                        NO
                    </label>
                </td>
            </tr>
            <tr>
                <td>Billing Address</td>
                <td>
                    <input class="form-check-input" type="radio" name="baddress" id="baddress1" value="yes">
                    <label class="form-check-label" for="baddress">
                        YES
                    </label>
                    <input class="form-check-input" type="radio" name="baddress" id="baddress2" value="no">
                    <label class="form-check-label" for="baddress">
                        NO
                    </label>
                </td>
            </tr>
            <tr>
                <td>Contact Person Name</td>
                <td>
                    <input class="form-check-input" type="radio" name="cperson" id="cperson1" value="yes">
                    <label class="form-check-label" for="cperson">
                        YES
                    </label>
                    <input class="form-check-input" type="radio" name="cperson" id="cperson2" value="no">
                    <label class="form-check-label" for="cperson">
                        NO
                    </label>
                </td>
            </tr>
            <tr>
                <td>Contact Person Number</td>
                <td>
                    <input class="form-check-input" type="radio" name="cnumber" id="cnumber1" value="yes">
                    <label class="form-check-label" for="cnumber">
                        YES
                    </label>
                    <input class="form-check-input" type="radio" name="cnumber" id="cnumber2" value="no">
                    <label class="form-check-label" for="cnumber">
                        NO
                    </label>
                </td>
           <input type="hidden" value="{{ $id }}" name="id" required>
        </tbody>
    </table>
    <br><br>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
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

