<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>PDF</title>

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet"> --}}

    <style type="text/css" media="all">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,300&display=swap');

        body {
            font-weight: 500 !important;
            font-family: 'Poppins', sans-serif !important;
        }

        .seven-hills-title {
            font-size: 34px;
            text-align: center;
            font-weight: bold;
            margin-bottom: 0px !important;
            padding-bottom: 0px !important;
        }

        .medical-solution-subtitle {
            font-size: 20px;
            text-align: center;
            margin-top: 0px !important;
            padding-top: 5px !important;
            font-weight: 400 !important;
        }

        .pdf-table-container {
            margin: 10px 10px;
        }

        .time-sheet-title {
            font-size: 24px;
            text-align: center;
            margin: 8px 0;
            padding: 2px 0;
            font-weight: 400;
        }

        .week-report-tag {
            text-align: center;
            font-size: 18px;
            margin: 2px 0 40px 0;
            padding: 2px 0;
            font-weight: 550;
        }

        .table-heading-span {
            text-align: center;
            font-size: 16px;
            margin: 2px 0;
            padding: 2px 0;
            font-weight: 550;
        }

        .signature-sign-span {
            text-align: center;
            font-size: 16px;
            margin: 2px 0;
            padding: 2px 0;
            font-weight: 550;
        }

        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        tr {
            display: table-row;
        }

        thead:before,
        thead:after {
            display: none;
        }

        tbody:before,
        tbody:after {
            display: none;
        }

        th,
        td {
            padding: 15px;
        }

        .column-3 {
            float: left;
            width: 33.33%;
        }

        .column-2 {
            float: left;
            width: 50%;
        }

        .custom-row:after {
            content: "";
            display: table;
            clear: both;
        }

        .span-list,
        .span-list>h6 {
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
            padding-left: 20px;
        }

        .span-list>li {
            font-weight: 500;
            font-style: normal;
            text-align: left;
            padding-left: 20px;
        }

        .underline {
            text-decoration: underline !important;
        }

        .signature-box {
            /* background: #FFFAFA;
            margin-top: 15px;
            height: 70px;
            width: 70px; */
        }

        .signature-img {
            font-weight: bold;
            padding: 5px;
            height: 70px;
            width: 140px;
        }

    </style>
</head>

<body>
    <div class="container-custom">

        <div class="pdf-section">
            <div class="col-md-12 mt-5">
                <div class="row">

                    <div class="col-md-12 text-center">
                        <h3 class="seven-hills-title">SEVEN HILLS</h3>
                        <h6 class="medical-solution-subtitle">Medical Solution</h6>
                    </div>

                    <div class="pdf-table-container col-md-10 mx-auto">

                        <div class="mt-5">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="5" class="text-center">
                                            <h5 class="time-sheet-title">TIME SHEET</h5>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="5">
                                            <h6 class="text-center week-report-tag">Weekly Work Report</h6>

                                            <div class="col-md-10 mx-auto">
                                                <div class="custom-row row mt-5">
                                                    <div class="column-3 col-md-4">
                                                        <h6 class="table-heading-span">Name: <span
                                                                class="underline">{{ $user->employeeName }}</span></h6>
                                                    </div>

                                                    <div class="column-3 col-md-4">
                                                        <h6 class="table-heading-span">Employee ID: <span
                                                                class="underline">{{ $user->employeeID }}</span></h6>
                                                    </div>

                                                    <div class="column-3 col-md-4">
                                                        <h6 class="table-heading-span">Week Ending: 
                                                            {{-- <span class="underline">{{ \Carbon\Carbon::parse($to_date)->format('D jS M Y') }}</span> --}}
                                                            <span class="underline">{{ \Carbon\Carbon::parse($today)->format('D jS M Y') }}</span>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th scope="col">Day</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">In Time</th>
                                        <th scope="col">Out Time</th>
                                        <th scope="col">Daily Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($data as $dt)
                                    <tr>
                                        {{-- <th scope="row">{{ $dt->created_at->format('d/m/Y') }}</th> --}}
                                        <th scope="row">{{ \Carbon\Carbon::parse($dt->created_at)->format('D jS M Y') }}
                                        </th>
                                        <td>{{$dt->title}}</td>
                                        <td>{{ date('h:i A', strtotime($dt->timein)) }}</td>
                                        <td>{{ date('h:i A', strtotime($dt->timeout)) }}</td>
                                        <td>{{ number_format($dt->hours, 0) }} hours</td>
                                    </tr>
                                    @endforeach

                                </tbody>

                                <tbody>
                                    <tr>
                                        <th colspan="5">

                                            <div class="col-md-10 mx-auto" style="margin-top:40px">
                                                <div class="custom-row row mt-4">
                                                    <div class="column-2 col-md-6">
                                                        <h6 class="table-heading-span">Total Hours Worked: <span
                                                                class="underline">{{ number_format($totalhours, 0) }} Hours</span></h6>
                                                    </div>

                                                    <div class="column-2 col-md-6">
                                                        <h6 class="table-heading-span">Employee's Signature: <span
                                                                class="underline">
                                                                <div class="signature-box">
                                                                    <img class="signature-img" src="data:image/jpeg;base64,
                                                                {{ base64_encode(@file_get_contents(public_path().'/images/signature/'.$signature)) }}"/>
                                                                </div>
                                                            </span>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="mt-5 mb-5" style="margin-top:40px; margin-bottom:40px">

                                            <div class="col-md-10 mx-auto">
                                                <div class="custom-row row mt-4">
                                                    <div class="column-2 col-md-6">
                                                        <h6 class="table-heading-span">Supervisor Signature: <span class="underline">
                                                            <div class="signature-box">
                                                                <img class="signature-img" src="data:image/jpeg;base64,
                                                                    {{ base64_encode(@file_get_contents(public_path().'/images/signature/'.$signature1)) }}"/>
                                                            </div>
                                                        </span>
                                                        </h6>
                                                    </div>

                                                    <div class="column-2 col-md-6">
                                                        <h6 class="table-heading-span">Date: <span
                                                                class="underline">{{ \Carbon\Carbon::parse($today)->format('D jS M Y') }}</span></h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <h6 class="signature-sign-span text-center mt-5" style="margin-top:60px;"><i>(I certify that the
                                                above hours are correct.)</i></h6>

                                            <div class="col-md-10 mx-auto mt-4" style="margin-top: 20px">
                                                <span class="span-list">
                                                    <h6 class="mb-2"><b>Important: </b></h6>
                                                    <li>Please print your Full Name, Title and Employee ID number.</li>
                                                    <li>Sign the bottom of the card to authorize that the times that are
                                                        entered are times that you did work.</li>
                                                    <li>Your supervisor MUST sign to authorize that time entered is correct.</li>
                                                </span>
                                            </div>

                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
