<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PDF</title>

  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}

  <style>
    .span-list > li {
      font-weight: 500;
      font-style: normal;
      text-align: left;
    }
  </style>
</head>

<body>
    <div class="container">

      <div class="pdf-section">
        <div class="col-md-12 mt-5">
          <div class="row">

            <div class="col-md-12 text-center">
              <h3>SEVEN HILLS</h3>
              <h6>Medical Solution</h6>
            </div>
            <div class="col-md-10 mx-auto">

              <div class="mt-5">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th colspan="5" class="text-center">
                        <h5>TIME SHEET</h5>
                      </th>
                    </tr>
                    <tr>
                      <th colspan="5">
                        <h6 class="text-center">Weekly Work Report</h6>

                        <div class="col-md-10 mx-auto">
                          <div class="row mt-5">
                            <div class="col-md-4">
                              <h6>Name: ______{{ $user->employeeName }}_________________</h6>
                            </div>

                            <div class="col-md-4">
                              <h6>Employee ID: _____{{ $user->employeeID }}___________</h6>
                            </div>

                            <div class="col-md-4">
                              <h6>Week Ending: _____{{ $to_date }}___________</h6>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-10 mx-auto">
                          <div class="row mt-5">
                            <div class="col-md-6">
                              <h6>Name Of Faculty: ________{{ $user->faculty }}_____________________</h6>
                            </div>

                            <div class="col-md-6">
                              <h6>Faculty Location: _______{{ $user->flocation }}_______________________</h6>
                              <img src="{{public_path().'/images/signature/'.$signature }}"/>
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
                 @foreach($data as $dt)
                    <tr>
                      {{-- <th scope="row">{{ $dt->created_at->format('d/m/Y') }}</th> --}}
                      <th scope="row">{{ \Carbon\Carbon::parse($dt->created_at)->format('D jS M Y') }}</th>
                      <td>{{ $dt->timein }}</td>
                      <td>{{ $dt->timeout }}</td>
                      <td>{{ $dt->hours }}</td>
                    </tr>
                    @endforeach


                  </tbody>

                  <tbody>
                    <tr>
                      <th colspan="5">

                        <div class="col-md-10 mx-auto">
                          <div class="row mt-4">
                            <div class="col-md-6">
                              <h6>Total Hours Worked: ______{{ $totalhours }}____________________</h6>
                            </div>

                            <div class="col-md-6">
                              <h6>Employee's Signature: _____________{{ $signature }}___________</h6>
                            </div>
                          </div>
                        </div>

                        <h6 class="text-center mt-5"><i>(I certify that the above hours are correct.)</i></h6>

                        <hr class="mt-5 mb-5">

                        <div class="col-md-10 mx-auto">
                          <div class="row mt-4">
                            <div class="col-md-6">
                              <h6>Supervisor Signature: _________________________</h6>
                            </div>

                            <div class="col-md-6">
                              <h6>Date: ________________________{{ $today }}_________</h6>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-10 mx-auto mt-5">
                            <span class="span-list">
                              <h6 class="mb-4"><b>Important: </b>Return card to agency of the following week.</h6>
                              <li>Your employee ID # must be on your time card. *Print your full name.</li>
                              <li>The week ending date would be the same Friday that you receive a paycheck for the prior work weeks.</li>
                              <li>Total your daily hours, then grand total at the bottom.</li>
                              <li>Sign the bottom of the card to authorize that the times that are entered are times that you did work.</li>
                              <li>Your supervisor at the placement company MUST sign at the bottom of the card to authorize the payment for you.</li>
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
