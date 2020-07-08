@extends('layouts.dashboard')

@section('stylesheets')
<style>
    .container {
        padding: 80px 40px;
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
        margin: 15px 0;
        padding: 10px 0;
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

                            <div class="col-md-3">
                                <input type="date" class="form-control" name="start_date">
                            </div>
                            <div class="col-md-3">
                                <input type="date" class="form-control" name="end_date">
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-filter"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <table class="table-card table table-hover nowrap" id="datatable" width="100%">
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
                    <th scope="row">{{$index+1}}</th>
                    <td>{{$record->user->employeeID}}</td>
                    <td>{{$record->user->employeeName}}</td>
                    <td>{{$record->hospital->name}}</td>
                    <td>{{ number_format($record->hours, 2) }} Hrs</td>
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
        $('#datatable').DataTable();
    });
</script>
@endsection()
        