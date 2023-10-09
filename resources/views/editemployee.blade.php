@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
  <h1 class="mt-3 mb-3">Edit Employee</h1>
</div>
<br>
<div class="container mt-5">
  <div class="card-header">
    <a href="{{ Route('employees') }}" class="btn btn-primary float-end">Back</a>
</div>
  <div class="row">
        <div class="col-12">
            <form id="extra" action="{{ Route('updateemployee') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $employee->id }}">
                <input type="hidden" name="sign" id="sign" value="employee">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="phone">Contact No.</label>
                  <input type="text" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}" placeholder="Enter number">
                </div>
                <div class="form-group">
                  <label for="age">Age</label>
                  <input type="text" class="form-control" id="age" name="age" value="{{ $employee->age }}" placeholder="Enter age">
                </div>
                <div class="form-group">
                  <label for="pan">PAN Card No.</label>
                  <input type="text" class="form-control" id="pan" name="pan" value="{{ $employee->pan }}" placeholder="Enter pan card no.">
                </div>
                <div class="form-group">
                  <label for="adhaar">Adhaar Card No.</label>
                  <input type="text" class="form-control" id="adhaar" name="adhaar" value="{{ $employee->adhaar }}" placeholder="Enter adhaar card no.">
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <textarea name="address" class="form-control" id="address" cols="30" rows="5">{{ $employee->address }}</textarea>
                </div>
                <div class="form-group">
                  <label for="bank">Bank Account Details</label>
                  <textarea name="bank" class="form-control" id="bank" cols="30" rows="5">{{ $employee->bank }}</textarea>
                </div>
                <div class="form-group">
                  <label for="salary">Salary</label>
                  <input type="text" class="form-control" id="salary" name="salary"  value="{{ $employee->salary }}" placeholder="Enter salary">
                </div>
                <div class="form-group">
                  <label for="joining">Date of Joining</label>
                  <input type="date" class="form-control" id="joining" name="joining" value="{{ $employee->joining }}" placeholder="Enter joining date">
                </div>
                <div class="form-group">
                  <label for="extrafield">No. of extra field</label>
                  <input type="text" class="form-control" id="extrafield" name="extrafield" placeholder="Enter no. of extra fields">
                  <br>
                  <button type="button" class="btn btn-primary" id="addMember">Add Extra field</button>
                </div>
                <div id="details"></div>
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
      numMembers = parseInt(document.getElementById("extrafield").value);
      generateMemberFormFields(numMembers);
  });

  function generateMemberFormFields(numMembers) {
      const memberDetailsContainer = document.getElementById("details");
      const submitButton = document.querySelector("form#extra button[type=submit]");
      if(numMembers > 0){
        memberDetailsContainer.innerHTML = "<h2>Extra Details</h2>";
      }

      for (let i = 1; i <= numMembers; i++) {
          const memberDiv = document.createElement("div");
          memberDiv.innerHTML = `
          <div class="row">
            <h3>${i}</h3>
            <div class="col-6">
              <label for="title[]">Title:</label>
              <input type="text" class="form-control"  name="title[]" required>
            </div>
            <div class="col-6">
              <label for="details[]">Details:</label>
              <textarea cols="30" rows="5" class="form-control" id="xyz" name="details[]" required></textarea>
            </div>
          </div>
          `;
          memberDetailsContainer.appendChild(memberDiv);
      }
      submitButton.style.display = "block";
  }
</script>
<script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create(document.querySelector('#bank')).catch
    (error => {
            console.error(error);
        }
    );
    ClassicEditor.create(document.querySelector('#xyz')).catch
    (error => {
            console.error(error);
        }
    );
</script>
@endsection