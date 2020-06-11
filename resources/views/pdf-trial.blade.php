<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PDF</title>

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet"> --}}

    <style>
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
            margin: 10px 200px;
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
            background: #FFFAFA;
            margin-top: 15px;
            height: 70px;
            width: 70px;
        }

        .signature-img {
            padding: 5px;
            height: 60px;
            width: 60px
        }
    </style>
</head>

<body>
    <div class="container">

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
                                                                class="underline">Brian Ireri</span></h6>
                                                    </div>

                                                    <div class="column-3 col-md-4">
                                                        <h6 class="table-heading-span">Employee ID: <span
                                                                class="underline">2344444</span></h6>
                                                    </div>

                                                    <div class="column-3 col-md-4">
                                                        <h6 class="table-heading-span">Week Ending: <span
                                                                class="underline">Thur 4th June 2020</span></h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-10 mx-auto" style="margin-top:38px">
                                                <div class="custom-row row mt-5">
                                                    <div class="column-2 col-md-6">
                                                        <h6 class="table-heading-span">Name Of Faculty: <span
                                                                class="underline">Business Administration</span></h6>
                                                    </div>

                                                    <div class="column-2 col-md-6">
                                                        <h6 class="table-heading-span">Faculty Location: <span
                                                                class="underline">Nairobi</span></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th scope="col">Day</th>
                                        <th scope="col">In Time</th>
                                        <th scope="col">Out Time</th>
                                        <th scope="col">Daily Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach($data as $dt) --}}
                                    <tr>
                                        {{-- <th scope="row">{{ $dt->created_at->format('d/m/Y') }}</th> --}}
                                        <th scope="row">Thursday 4th June 2020</th>
                                        <td>10:00 am</td>
                                        <td>04: 00pm</td>
                                        <td>8 hours</td>
                                    </tr>
                                    {{-- @endforeach --}}


                                </tbody>

                                <tbody>
                                    <tr>
                                        <th colspan="5">

                                            <div class="col-md-10 mx-auto" style="margin-top:40px">
                                                <div class="custom-row row mt-4">
                                                    <div class="column-2 col-md-6">
                                                        <h6 class="table-heading-span">Total Hours Worked: <span
                                                                class="underline">8 Hours</span></h6>
                                                    </div>

                                                    <div class="column-2 col-md-6">
                                                        <h6 class="table-heading-span">Employee's Signature: <span
                                                                class="underline">
                                                                <div class="signature-box">
                                                                    {{-- <img class="signature-img" src="{{public_path().'/images/signature/'.$signature }}"/>
                                                                    --}}
                                                                </div>
                                                            </span>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <h6 class="signature-sign-span text-center mt-5"><i>(I certify that the
                                                    above hours are correct.)</i></h6>

                                            <hr class="mt-5 mb-5" style="margin-top:60px; margin-bottom:60px">

                                            <div class="col-md-10 mx-auto">
                                                <div class="custom-row row mt-4">
                                                    <div class="column-2 col-md-6">
                                                        <h6 class="table-heading-span">Supervisor Signature:
                                                            _________________________</h6>
                                                    </div>

                                                    <div class="column-2 col-md-6">
                                                        <h6 class="table-heading-span">Date: <span
                                                                class="underline">Thursday 4th June 2020</span></h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-10 mx-auto mt-5" style="margin-top: 80px">
                                                <span class="span-list">
                                                    <h6 class="mb-4"><b>Important: </b>Return card to agency of the
                                                        following week.</h6>
                                                    <li>Your employee ID # must be on your time card. *Print your full
                                                        name.</li>
                                                    <li>The week ending date would be the same Friday that you receive a
                                                        paycheck for the prior work weeks.</li>
                                                    <li>Total your daily hours, then grand total at the bottom.</li>
                                                    <li>Sign the bottom of the card to authorize that the times that are
                                                        entered are times that you did work.</li>
                                                    <li>Your supervisor at the placement company MUST sign at the bottom
                                                        of the card to authorize the payment for you.</li>
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