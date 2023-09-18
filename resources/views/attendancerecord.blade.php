@extends('indexnew')
@section('content')
<div class="col-12" style="text-align: center;">
    <h1 class="mt-5">Attendance Record</h1>
</div>
<br>
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                        </div>
                        <div class="col-6">
                            <form action="{{ Route('filter') }}" method="post">
                                @csrf
                                <select name="year" id="year">
                                    <option value="" selected>Select Year</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                </select>
                                <select name="month" id="month">
                                    <option value="" selected>Select Month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <button type="submit" class="btn btn-success"id='go'>Go</button>        
                            </form>
                        </div>
                    </div>
                </div>
                @if(isset($date))
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                                    <tr>
                                        <th>Employee</th>
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                        <th>6</th>
                                        <th>7</th>
                                        <th>8</th>
                                        <th>9</th>
                                        <th>10</th>
                                        <th>11</th>
                                        <th>12</th>
                                        <th>13</th>
                                        <th>14</th>
                                        <th>15</th>
                                        <th>16</th>
                                        <th>17</th>
                                        <th>18</th>
                                        <th>19</th>
                                        <th>20</th>
                                        <th>21</th>
                                        <th>22</th>
                                        <th>23</th>
                                        <th>24</th>
                                        <th>25</th>
                                        <th>26</th>
                                        <th>27</th>
                                        <th>28</th>
                                        <th>29</th>
                                        <th>30</th>
                                        <th>31</th>
                                    </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->name }}</td>
                                    @for ($i=1; $i<=31; $i++)
                                        @php
                                            $day = ($i < 10) ? '0' . $i : $i;
                                            $x = $date.$day;
                                            $attendance = DB::table('attendance_records')->where('employee_id',$employee->id)->where('date', $x)->first();
                                        @endphp
                                        @if($attendance)
                                            @if($attendance->status == 'present')
                                                <td><i class="fa fa-check text-success"></i></td>
                                            @elseif ($attendance->status == 'absent')
                                                <td><i class="fa fa-close text-danger"></i></td>
                                            @elseif ($attendance->status == 'halfday')
                                                <td><i class="fa fa-minus text-secondary"></i></td>
                                            @endif
                                        @else
                                            <td></td>
                                        @endif
                                    @endfor
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
