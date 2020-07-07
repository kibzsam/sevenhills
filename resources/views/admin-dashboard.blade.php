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
</style>
@endsection()

@section('content')
        <div class="container">

        <div class="card">
            <h3><i class="fa fa-user pr-2"></i> Admin</h3>

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
                    <td>--Hours--</td>
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
        