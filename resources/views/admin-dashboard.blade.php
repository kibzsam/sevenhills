@extends('layouts.dashboard')

@section('stylesheets')
<style>
    .container {
        padding: 80px 15px;
    }

    .card {
        background: #ffffff;
        padding: 30px 15px;
    }

    .dataTables_wrapper {
        padding-bottom: 40px !important;
    }

    .pr-2 {
        padding-right: 5px;
    }

    .date-filter {
        /* margin: 15px 0;
        padding: 10px 0; */
    }
</style>
@endsection()

@section('content')
        <div class="container">

        <div class="card">
            <h3><i class="fa fa-user pr-2"></i> Admin</h3>

            <div class="date-filter">
                <div class="col-md-12 mx-auto text-center" style="margin-bottom: 25px">
                    <div class="input-row">
                        <form action="{{ route('filter-attendance-date') }}" method="POST">
                            @csrf

                            <div class="col-md-3 mt-2">
                                <input type="date" class="form-control" name="start_date">
                            </div>
                            <div class="col-md-3 mt-2" id="#mobile-mt-2">
                                <input type="date" class="form-control" name="end_date">
                            </div>
                            <div class="col-md-1">
                                <button id="filter-web" type="submit" class="btn btn-sm btn-primary mt-2"><i class="fa fa-filter"></i></button>
                                <button id="filter-mobile" type="submit" class="btn btn-primary btn-sm mt-2">Apply Filter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <table class="table table-hover nowrap" id="datatable" width="100%">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Employee ID</th>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Hospital</th>
                    <th scope="col">Total Hours Worked</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach($records as $index => $record)

                  <tr>
                    <td data-label="#" scope="row">{{$index+1}}</td>
                    <td data-label="Employee ID">{{$record->user->employeeID}}</td>
                    <td data-label="Employee">{{$record->user->employeeName}}</td>
                    <td data-label="Hospital">{{$record->hospital->name}}</td>
                    <td data-label="Hours Worked">{{ number_format($record->hours, 2) }} Hrs</td>
                  </tr>

                  @endforeach()

                </tbody>
            </table>
        </div>
    </div>
@endsection()

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable({
            // responsive: true
        });
    });
</script>
@endsection()
        