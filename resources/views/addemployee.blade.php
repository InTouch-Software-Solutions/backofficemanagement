@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
  <h1 class="mt-5">Add Employee</h1>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <form id="employeeform" action="{{ Route('saveemployee') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="phone">Contact No.</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter number">
                </div>
                <div class="form-group">
                  <label for="age">Age</label>
                  <input type="text" class="form-control" id="age" name="age" placeholder="Enter age">
                </div>
                <div class="form-group">
                  <label for="pan">PAN Card No.</label>
                  <input type="text" class="form-control" id="pan" name="pan" placeholder="Enter pan card no.">
                </div>
                <div class="form-group">
                  <label for="adhaar">Adhaar Card No.</label>
                  <input type="text" class="form-control" id="adhaar" name="adhaar" placeholder="Enter adhaar card no.">
                </div>
                <div class="form-group">
                  <label for="salary">Salary</label>
                  <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter salary">
                </div>
                <div class="form-group">
                  <label for="bank">Bank Account Details</label>
                  <input type="text" class="form-control" id="bank" name="bank" placeholder="Enter bank account details">
                </div>
                <div class="form-group">
                  <label for="joining">Date of Joining</label>
                  <input type="date" class="form-control" id="joining" name="joining" placeholder="Enter joining date">
                </div>
                <br>
                <div class="form-group">
                  <label for="members">No. of family Members</label>
                  <input type="text" class="form-control" id="members" name="members" placeholder="Enter no. of family members">
                  <button type="button" class="btn btn-primary" id="addMember">Add Family Member</button>
                </div>
                <div id="memberDetails"></div>
                <br>
                <button type="submit" style="display: none;" class="btn btn-primary">Submit</button>
            </form> 
        </div>    
    </div>    
</div>
@endsection
@section('jscontent')
<script>

  document.getElementById("addMember").addEventListener("click", function() {
      numMembers = parseInt(document.getElementById("members").value);
      generateMemberFormFields(numMembers);
  });

  function generateMemberFormFields(numMembers) {
      const memberDetailsContainer = document.getElementById("memberDetails");
      const submitButton = document.querySelector("form#employeeform button[type=submit]");
      if(numMembers > 0){
        memberDetailsContainer.innerHTML = "<h2>Family Members</h2>";
      }

      for (let i = 1; i <= numMembers; i++) {
          const memberDiv = document.createElement("div");
          memberDiv.innerHTML = `
          <div class="row">
            <h3>${i}</h3>
            <div class="col-6">
              <label for="fname[]">Name:</label>
              <input type="text" class="form-control"  name="fname[]" required>
            </div>
            <div class="col-6">
              <label for="fphone[]">Phone No:</label>
              <input type="text" class="form-control"  name="fphone[]" required>
            </div>
            <div class="col-6">
              <label for="fadhaar[]">Adhaar No:</label>
              <input type="text" class="form-control"  name="fadhaar[]" required>
            </div>
            <div class="col-6">
              <label for="fpan[]">Pan Card No:</label>
              <input type="text" class="form-control"  name="fpan[]" required>
            </div>
            <div class="col-6">
              <label for="relationship[]">Relationship:</label>
              <input type="text" class="form-control"  name="relationship[]" required>
            </div>
          </div>
          `;
          memberDetailsContainer.appendChild(memberDiv);
      }
      submitButton.style.display = "block";
  }
</script>
@endsection