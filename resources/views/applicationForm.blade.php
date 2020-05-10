<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Job Application | Seven Hills Medical Solutions</title>

    <!-- css -->
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link href="{{ asset('public/css/nivo-lightbox.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/css/nivo-lightbox-theme/default/default.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/css/owl.carousel.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ asset('public/css/owl.theme.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ asset('public/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    <link id="bodybg" href="{{ asset('public/bodybg/bg1.css') }}" rel="stylesheet" type="text/css" />

    <style>

        body {
            margin-top: 40px;
            /* background-image: -moz-linear-gradient( 136deg, rgb(239,16,140) 0%, rgb(24,189,198) 100%);
            background-image: -webkit-linear-gradient( 136deg, rgb(239,16,140) 0%, rgb(24,189,198) 100%);
            background-image: -ms-linear-gradient( 136deg, rgb(239,16,140) 0%, rgb(24,189,198) 100%); */
            background: rgb(27,188,192);
            background: linear-gradient(90deg, rgba(27,188,192,1) 0%, rgba(237,33,137,1) 100%);
        }
        label{
            font-size: 15px;
            color: #000000;
        }

        .stepwizard-step p {
            margin-top: 10px;
        }

        .stepwizard-row {
            display: table-row;
        }

        .stepwizard {
            display: table;
            width: 100%;
            position: relative;
        }

        .stepwizard-step button[disabled] {
            opacity: 1 !important;
            filter: alpha(opacity=100) !important;
        }

        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-order: 0;
        }

        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }

        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            /* width: 50%; */
        }


    </style>

</head>

<body>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container navigation">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('public/img/logo.png') }}" alt="" width="195" height="52" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li class="active"><a href="{{route('applicationForm')}}">Apply Here</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <br><br><br>
    <div class="container">
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled">8</a>
                </div>
            </div>
            <br>
        </div>
        <form role="form" id="msform" name="msform" class="main" method="post" action="{{url('applicationForm/send')}}">
        {{ csrf_field() }}

            <fieldset>
                <div class="row setup-content" id="step-1">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">SEVEN HILLS MEDICAL SOLUTIONS APPLICATION FORM</div>
                                <div class="panel-body">
                                    <img src="{{ asset('public/img/logo.png') }}" alt="" width="273" height="72.8" class="center" class="center" />
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="position_desired" name="position_desired" placeholder="Position Desired" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="date" class="form-control" id="date_available" name="date_available" placeholder="Date Available" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-3 col-sm-3">
                                            <label class="control-label" for="employment_type">Type of employment</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select type="select" class="form-control" name="employment_type" id="employment_type">
                                                    <option value="Full Time">Full Time</option>
                                                    <option value="Part Time">Part Time</option>
                                                    <option value="PRN">PRN</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-success nextBtn btn-lg pull-right" type="button">Next</button>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                        <div class="panel panel-default">
                                <div class="panel-heading">PERSONAL INFORMATION</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="MI" name="MI" placeholder="Mid Initial(Optional)">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="street_address" name="street_address" placeholder="Street Address" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="state" name="state" placeholder="State" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                            <input type="text" class="form-control" id="home_phone" name="home_phone" placeholder="Home Phone: +1 888-999-7777" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                            <input type="text" class="form-control" id="alt_phone" name="alt_phone" placeholder="Alternative Home: +1 888-999-7777" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="your_email" id="your_email" placeholder="E-mail: example@email.com" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-2 col-sm-6">
                                            <label>Do you have a valid drivers license?</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <select class="form-control" name="DL" id="DL">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-2 col-sm-6">
                                            <label for="specify" id="label_dl_class">Specify class</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <textarea type="text" class="form-control" rows="1" name="DL_class" id="DL_class" placeholder="Class"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-2 col-sm-6">
                                            <label>Have you served in the millitary?</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <select class="form-control" name="military" id="military">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-2 col-sm-6">
                                            <label>Do you have a legal right to obtain employment in th U.S?</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <select class="form-control" name="employment_right" id="employment_right">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-2 col-sm-6">
                                            <label>Can you perform the essential functions and responsibilities of the position for which you are applying?</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <select class="form-control" name="performance" id="performance">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <button class="btn btn-success nextBtn btn-lg pull-right" type="button">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="row setup-content" id="step-3">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                        <div class="panel panel-default">
                                <div class="panel-heading">LICENSE / CERTIFCATION</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-offset-2 col-sm-6">
                                            <label>Do you require any special accommodation to perform required duties?</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <select class="form-control" name="special_accommodation" id="special_accommodation">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>  
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-2 col-sm-6">
                                            <label for="explain" id="label_accommodation_explanation">Explain:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <textarea type="text" class="form-control" rows="1" name="accommodation_explanation" id="accommodation_explanation"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-2 col-sm-6">
                                            <label>Have you ever worked for Seven Hills Medical Solutions?</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <select class="form-control" name="previous_worker" id="previous_worker">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>     
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-2 col-sm-6">
                                            <div>
                                                <input type="text" class="form-control" id="position_held" name="position_held" placeholder="Position held" />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="date" class="form-control" id="employment_date" name="employment_date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-2 col-sm-6">
                                            <label>Do any of your relatives work for Seven Hills?</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <select class="form-control" name="relative_working" id="relative_working">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-2 col-sm-6">
                                            <div class="form-group">
                                                <label for="explain" id="label_relative_name">If Yes, State their Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <textarea type="text" class="form-control" rows="1" name="relative_name" id="relative_name" placeholder="Name of relative"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-2 col-sm-6">
                                            <label for="explain" id="label_certifications">List any current licenses, certifications, or registrations required for the
                                                    position for which you are applying.
                                                    Include date first received.
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <textarea type="text" class="form-control" rows="2" name="certifications" id="certifications" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-2 col-sm-6">
                                            <label>Have you ever been convicted of any criminal offense(s)?</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <select class="form-control" name="criminal_offense" id="criminal_offense">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label for="explain" id="label_conviction">Written documentation must be provided about criminal
                                                offenses from the clerk of court in the county which the conviction was made, and about
                                                any driving offenses other than minor traffic violations from the motor vehicles office</label>
                                        </div>
                                    </div>
                                    <button class="btn btn-success nextBtn btn-lg pull-right" type="button">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="row setup-content" id="step-4">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                        <div class="panel panel-default">
                                <div class="panel-heading">REFERENCES</div>
                                <div class="panel-body">
                                    <div class="row">
                                                <p>
                                                    You must provide atleast three current reference letters and/or the name of individuals
                                                    with whom a reference interview can be conducted. Please give the full name, mailing address
                                                    and phone number of three references
                                                    who have knowledge of your background and qualifications in the field.
                                                </p>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>Reference 1</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="reference_name" name="reference_name" placeholder="Name" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="reference_phone_number" name="reference_phone_number" placeholder="Phone: +1 888-999-7777" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <textarea type="text" cols="2" class="form-control" id="reference_mail_address" name="reference_mail_address" placeholder="Mailing address" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>Reference 2</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="reference_name_2" name="reference_name_2" placeholder="Name" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="reference_phone_number_2" name="reference_phone_number_2" placeholder="Phone: +1 888-999-7777" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <textarea type="text" cols="2" class="form-control" id="reference_mail_address_2" name="reference_mail_address_2" placeholder="Mailing address" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>Reference 3</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="reference_name_3" name="reference_name_3" placeholder="Name" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="reference_phone_number_3" name="reference_phone_number_3" placeholder="Phone: +1 888-999-7777" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <textarea type="text" class="form-control" id="reference_mail_address_3" name="reference_mail_address_3" placeholder="Mailing address" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-success nextBtn btn-lg pull-right" type="button">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="row setup-content" id="step-5">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">EDUCATION & SKILLS</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-offset-3 col-sm-3">
                                            <label for="">Level of Education completed.</label> 
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select class="form-control" name="education_level" id="education_level">
                                                    <option value="High school">High School</option>
                                                    <option value="GED">GED</option>
                                                    <option value="College">College 0-3yrs</option>
                                                    <option value="Associate Degree">Associate Degree</option>
                                                    <option value="Bachelor's Degree">Bachelor's Degree</option>
                                                    <option value="Master's Degree">Master's Degree</option>
                                                    <option value="PhD">PhD</option>
                                                    <option value="Doctorate">Doctorate</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-3 col-sm-3">
                                            <label id="label_degree_major">If Degree, Specify Major:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="degree_major" id="degree_major" class="form-control" placeholder="Major">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-2 col-sm-4">
                                            <label>What skills or special training do you have for the position you're applying for?</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <textarea type="text" class="form-control" cols="3" name="skills" id="skills" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-success nextBtn btn-lg pull-right" type="button">Next</button>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="row setup-content" id="step-6">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                        <div class="panel panel-default">
                                <div class="panel-heading">EXPERIENCE: PART 1</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>From:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="date" class="form-control" id="from_date" name="from_date" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-offset-1 col-sm-1">
                                            <label>To:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="date" class="form-control" id="to_date" name="to_date" required />
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>Beginning pay:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="number" name="start_salary" id="start_salary" class="form-control" required />
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-sm-offset-3 col-sm-3">
                                            <label>Name of Employer:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="employer_name" name="employer_name" required />
                                            </div>                                        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-2 col-sm-4">
                                            <label>May we contact the previous employer?</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select class="form-control" name="contact_permission" id="contact_permission">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="street_adress_employer" name="street_adress_employer" placeholder="Street address" required />
                                            </div> 
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="city_employer" name="city_employer" placeholder="City" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="state_employer" name="state_employer" placeholder="State" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="home_phone_employer" name="home_phone_employer" placeholder="Phone: +1 888-999-7777" required />
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <textarea type="text" cols="3" class="form-control" id="title_performed" name="title_performed" placeholder="Titles & duties performed" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <textarea type="text" cols="3" class="form-control" id="reason_leaving" name="reason_leaving" placeholder="Reason for leaving" required></textarea>
                                        </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-success nextBtn btn-lg pull-right" type="button">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="row setup-content" id="step-7">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                        <div class="panel panel-default">
                                <div class="panel-heading">EXPERIENCE: PART 2</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>From:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="date" class="form-control" id="from_date_experience2" name="from_date_experience2" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-offset-1 col-sm-1">
                                            <label>To:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="date" class="form-control" id="to_date_experience2" name="to_date_experience2" required />
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>Beginning pay:</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="number" name="start_salary_experience2" id="start_salary_experience2" class="form-control" required />
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-sm-offset-3 col-sm-3">
                                            <label>Name of Employer:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="employer_name_experience2" name="employer_name_experience2" required />
                                            </div>                                        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-offset-2 col-sm-4">
                                            <label>May we contact the previous employer?</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select class="form-control" name="contact_permission_experience2" id="contact_permission_experience2">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="street_adress_employer2" name="street_adress_employer_experience2" placeholder="Street address" required />
                                            </div> 
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="city_employer_experience2" name="city_employer2" placeholder="City" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="state_employer_experience2" name="state_employer_experience2" placeholder="State" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="home_phone_employer_experience2" name="home_phone_employer_experience2" placeholder="Phone: +1 888-999-7777" required />
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <textarea type="text" cols="3" class="form-control" id="title_performed_experience2" name="title_performed_experience2" placeholder="Titles & duties performed" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <textarea type="text" cols="3" class="form-control" id="reason_leaving_experience2" name="reason_leaving_experience2" placeholder="Reason for leaving" required></textarea>
                                        </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-success nextBtn btn-lg pull-right" type="button">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="row setup-content" id="step-8">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">AGREEMENT</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <p>
                                            I certify that I have given true, accurate and complete information on this form to the best of my knowledge.
                                            I authorize investigation of statements made in this application and understand that
                                            false information may be grounds for denial of my position and/or dismissal if I am employed.
                                        </p>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <input type="radio" name="agree" id="agree" required />
                                            </div> 
                                        </div>
                                        <div class="col-sm-1">
                                            <label>I agree</label>
                                        </div>
                                    </div>
                                    <button class="btn btn-success finishBtn btn-lg pull-right" type="submit">Finish</button>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </fieldset>  
        </form>
    </div>

</body>

<script src="{{ asset('public/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('public/js/wow.min.js') }}"></script>
<script src="{{ asset('public/js/jquery.scrollTo.js') }}"></script>
<script src="{{ asset('public/js/jquery.appear.js') }}"></script>
<script src="{{ asset('public/js/stellar.js') }}"></script>
<script src="{{ asset('public/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
<script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/js/nivo-lightbox.min.js') }}"></script>
<script src="{{ asset('public/js/custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" type="text/javascript"></script>
<!-- {{--<script src="{{asset('public/js/jquery.steps.js')}}"></script>--}}

{{--<script src="{{asset('public/js/main.js')}}"></script>--}} -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

<script>

    /*jQuery.validator.setDefaults({
        debug: false,
        success: "valid"
    });

    $("#msform").validate({

        rules: {
            field: {
                required: true,
            }
        }
    });*/

    $(document).ready(function() {

        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');
            submitBtn = $('.finishBtn');

        allWells.hide();

        navListItems.click(function(e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-success');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function() {
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url'],input[type='date'],input[type='email'],textarea[type='text'],input[type='number'],input[type='radio']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        submitBtn.click(function(){
                alert("Your details were succesfully submitted!");
                // document.location.href="/sevenHills";
        });

        $('div.setup-panel div a.btn-primary').trigger('click');

            $("#DL").change(function() {
            if ($(this).val() == "Yes") {
                $('#DL_class').show();
                $('#label_dl_class').show();
                $('#DL_class').attr('required', '');
                $('#DL_class').attr('data-error', 'This field is required.');
            } else {
                $('#DL_class').hide();
                $('#label_dl_class').hide();
                $('#DL_class').removeAttr('required');
                $('#DL_class').removeAttr('data-error');
            }
            });
            $("#DL").trigger("change");

            $("#performance").change(function() {
                if ($(this).val() == "No") {
                    $('#performance_explanation').show();
                    $('#label_dl_performance').show();
                    $('#performance_explanation').attr('required', '');
                    $('#performance_explanation').attr('data-error', 'This field is required.');
                } else {
                    $('#performance_explanation').hide();
                    $('#label_dl_performance').hide();
                    $('#performance_explanation').removeAttr('required');
                    $('#performance_explanation').removeAttr('data-error');
                }
            });
            $("#performance").trigger("change");

            $("#special_accommodation").change(function() {
                if ($(this).val() == "Yes") {
                    $('#accommodation_explanation').show();
                    $('#label_accommodation_explanation').show();
                    $('#accommodation_explanation').attr('required', '');
                    $('#accommodation_explanation').attr('data-error', 'This field is required.');
                } else {
                    $('#accommodation_explanation').hide();
                    $('#label_accommodation_explanation').hide();
                    $('#accommodation_explanation').removeAttr('required');
                    $('#accommodation_explanationn').removeAttr('data-error');
                }
            });
            $("#special_accommodation").trigger("change");

            // //    Previous worker
            $("#previous_worker").change(function() {
                if ($(this).val() == "Yes") {
                    $('#position_held').show();
                    $('#employment_date').show();
                    $('#employment_date').attr('required', '');
                    $('#employment_date').attr('data-error', 'This field is required.');
                    $('#position_held').attr('required', '');
                    $('#position_held').attr('data-error', 'This field is required.');
                } else {
                    $('#position_held').hide();
                    $('#employment_date').hide();
                    $('#employment_date').removeAttr('required', '');
                    $('#employment_date').removeAttr('data-error', 'This field is required.');
                    $('#position_held').removeAttr('required', '');
                    $('#position_held').removeAttr('data-error', 'This field is required.');
                }
            });
            $("#previous_worker").trigger("change");
                // //   End Previous worker

                // //    Relative working

            $("#relative_working").change(function() {
                if ($(this).val() == "Yes") {
                    $('#relative_name').show();
                    $('#label_relative_name').show();
                    $('#relative_name').attr('required', '');
                    $('#relative_name').attr('data-error', 'This field is required.');
                } else {
                    $('#relative_name').hide();
                    $('#label_relative_name').hide();
                    $('#relative_name').removeAttr('required', '');
                    $('#relative_name').removeAttr('data-error', 'This field is required.');
                }
            });
            $("#relative_working").trigger("change");

                // //   End Relative working

                // //    certification
            $("#criminal_offense").change(function() {
                if ($(this).val() == "Yes") {
                    $('#label_conviction').show();
                } else {
                    $('#label_conviction').hide();
                }
            });
            $("#criminal_offense").trigger("change");
                //|| "Bachelor's Degree" || "Master's Degree"
                // Specify Major Degree
            $("#education_level").change(function() {
                if ($(this).val() == "Associate Degree") {
                    $('#degree_major').show();
                    $('#label_degree_major').show();
                    $('#degree_major').attr('required', '');
                    $('#degree_major').attr('data-error', 'This field is required.');
                }
                else if ($(this).val() == "Bachelor's Degree") {
                    $('#degree_major').show();
                    $('#label_degree_major').show();
                    $('#degree_major').attr('required', '');
                    $('#degree_major').attr('data-error', 'This field is required.');
                }
                else if ($(this).val() == "Master's Degree") {
                    $('#degree_major').show();
                    $('#label_degree_major').show();
                    $('#degree_major').attr('required', '');
                    $('#degree_major').attr('data-error', 'This field is required.');
                }
                else {
                    $('#label_degree_major').hide();
                    $('#degree_major').hide();
                    $('#degree_major').removeAttr('required');
                    $('#degree_major').removeAttr('data-error');
                }
            });
            $("#education_level").trigger("change");
    });



</script>

</html>