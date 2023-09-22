@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
  <h1 class="mt-5">Employees</h1>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ Route('attendance') }}" class="btn btn-primary ">Mark Attendance</a>  &nbsp;&nbsp;
                    <a href="{{ Route('attendancerecord') }}" class="btn btn-primary ">Attendance Record</a>&nbsp;&nbsp;
                    <a href="{{ Route('addemployee') }}" class="btn btn-primary ">Add Employee</a>
                </div>    
                <div class="card-body">
                    <table id="x" class="table table-hover mb-0">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Joining Date</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>{{ $employee->joining }}</td>
                                <td><a href="{{ Route('editemployee',['id'=>$employee->id]) }}"><i class="fa fa-pencil"></i></a> &nbsp;&nbsp;<a href="javascript:void(0);" id="{{ $employee->id }}" class="delete"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>    
        </div> 
    </div>    
</div>
@endsection

@section('jscontent')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
        $(document).on('click', '.delete', function() {
            var row_id = $(this).attr('id');
            var table_row = $(this).closest('tr');
            var url = "{{ route('delete_employee',':id') }}";
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'get',
                        url: url.replace(':id', row_id),
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: row_id,
                        },
                        success: function(data) {
                            Swal.fire({
                                title: 'Deleted!',
                                text: 'Your file has been deleted.',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                table_row.remove();
                            });
                        }
                    });
                }
            })
        });
    </script>
@endsection