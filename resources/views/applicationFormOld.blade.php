<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Job Application | Aspy Medical Solutions</title>

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
    <!-- template skin -->
    <link id="t-colors" href="{{ asset('public/color/default.css') }}" rel="stylesheet">
    <style>
        /*form styles*/
        body{
            width:100%;
            height:100%;
            /*-webkit-align-items: center;*/
            /*background-image: -moz-linear-gradient( 136deg, rgb(116,235,213) 0%, rgb(63,43,150) 100%);*/
            background-image: -moz-linear-gradient( 136deg, rgb(239,16,140) 0%, rgb(24,189,198) 100%);
            background-image: -webkit-linear-gradient( 136deg, rgb(239,16,140) 0%, rgb(24,189,198) 100%);
            background-image: -ms-linear-gradient( 136deg, rgb(239,16,140) 0%, rgb(24,189,198) 100%);
        }
        #msform {
            width: 90%;
            height: 100%;
            margin: 50px auto;
            text-align: center;
            position: relative;
        }
        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 3px;
            box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
            padding: 20px 30px;
            box-sizing: border-box;
            width: 80%;
            margin: 0 10%;
            /*stacking fieldsets above each other*/
            position: absolute;
        }
        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
            display: none;
        }
        /*inputs*/
        #msform input, #msform textarea {
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 13px;
        }
        /*buttons*/
        #msform .action-button {
            width: 100px;
            background: #27AE60;
            /*background: #EBEBE4;*/
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 1px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }
        #msform .action-button:hover, #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
        }

        /*headings*/
        .fs-title {
            font-size: 15px;
            text-transform: uppercase;
            color: #2C3E50;
            margin-bottom: 10px;
        }
        .fs-subtitle {
            font-weight: normal;
            font-size: 13px;
            color: #666;
            margin-bottom: 20px;
        }
        /*progressbar*/
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            /*CSS counters to number the steps*/
            counter-reset: step;
        }
        #progressbar li {
            list-style-type: none;
            color: white;
            text-transform: uppercase;
            font-size: 9px;
            width: 12%;
            float: left;
            position: relative;
        }
        #progressbar li:before {
            content: counter(step);
            counter-increment: step;
            width: 20px;
            line-height: 20px;
            display: block;
            font-size: 10px;
            color: #333;
            background: white;
            border-radius: 3px;
            margin: 0 auto 5px auto;
        }
        /*progressbar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: white;
            position: absolute;
            left: -50%;
            top: 9px;
            z-index: -1; /*put it behind the numbers*/
        }
        #progressbar li:first-child:after {
            /*connector not needed before the first step*/
            content: none;
        }
        /*marking active/completed steps green*/
        /*The number of the step and the connector before it = green*/
        #progressbar li.active:before, #progressbar li.active:after {
            background: #27AE60;
            color: white;
        }
        .error_message{
            font-weight: normal;
            font-size: 13px;
            color: #FF0000;
            margin-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('public/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
</head>
<body style="width: 100%; height: 100%">
<div id="wrapper">
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
    </nav><br><br><br>
    <main class="py-4">
        @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <form id="msform" name="msform" class="main" method="post" action="{{url('applicationForm/send')}}">
            {{ csrf_field() }}
            <div>
                <ul id="progressbar">
                    <li class="active">Position <br>Details</li>
                    <li>Personal<br> Information</li>
                    <li>License /  <br>Certification</li>
                    <li>References</li>
                    <li>Education <br>& Skills</li>
                    <li>Experience</li>
                    <li>Experience 2</li>
                    <li>Agreement</li>
                </ul>
                <fieldset id="fieldset1">
                    <img src="{{ asset('public/img/logo.png') }}" alt="" width="273" height="72.8" /><br>
                    <h3 class="heading">Aspy Medical Solutions Job Application Form</h3>
                    <p>APPLICANT MUST COMPLETE </p>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <span class="error_message" id="position_error_message"></span>
                            <input type="text" class="form-control" id="position_desired" name="position_desired" placeholder="Position Desired">
                        </div>
                        <div class="col-sm-6">
                            <span class="error_message" id="date_available_error_message"></span>
                            <input type="date" class="form-control" id="date_available" name="date_available" placeholder="Date Available">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-offset-2 col-sm-4">
                            <label class="control-label" for="employment_type">Type of employment</label>
                        </div>
                        <div class="col-sm-6">
                            <span class="error_message" id="employment_type_error_message"></span>
                            <select class="form-control" name="employment_type" id="employment_type">
                                <option value="select" disabled selected>Select type of employment desired</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                                <option value="PRN">PRN</option>
                            </select>
                        </div>
                    </div>
                    <br><br>
                    <input type="button" name="next" class="next action-button" value="Next" id="next_button_1"/>
                </fieldset>
                <fieldset>
                    <h3 class="heading">Personal Infomation</h3>
                    <p>Please complete all sections  </p>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <span class="error_message" id="first_name_error_message"></span>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="MI" name="MI" placeholder="Mid Initial(Optional)">
                        </div>
                        <div class="col-sm-4">
                            <span class="error_message" id="last_name_error_message"></span>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <span class="error_message" id="street_address_error_message"></span>
                            <input type="text" class="form-control" id="street_address" name="street_address" placeholder="Street Address">
                        </div>
                        <div class="col-sm-4">
                            <span class="error_message" id="city_error_message"></span>
                            <input type="text" class="form-control" id="city" name="city" placeholder="City">
                        </div>
                        <div class="col-sm-4">
                            <span class="error_message" id="state_error_message"></span>
                            <input type="text" class="form-control" id="state" name="state" placeholder="State">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <span class="error_message" id="home_phone_error_message"></span>
                            <input type="text" class="form-control" id="home_phone" name="home_phone" placeholder="Home Phone: +1 888-999-7777">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="alt_phone" name="alt_phone" placeholder="Alternative Home: +1 888-999-7777">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <span class="error_message" id="email_error_message"></span>
                            <input type="email" class="form-control" name="your_email" id="your_email" placeholder="E-mail: example@email.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">

                            <label>Do you have a valid drivers license?</label>
                        </div>
                        <div class="col-sm-4">
                            <span class="error_message" id="DL_error_message"></span>
                            <select class="form-control" name="DL" id="DL">
                                <option value="selectDL" disabled selected>Select here</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="specify" id="label_dl_class">Specify class</label>
                        </div>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="1" name="DL_class" id="DL_class" placeholder="Class"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <label>Have you ever served in the military?</label>
                        </div>
                        <div class="col-sm-4">
                            <span class="error_message" id="military_error_message"></span>
                            <select class="form-control" name="military" id="military">
                                <option value="selectMilitary" disabled selected>Select here</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-8">
                            <label>Do you have the legal right to obtain employment in the United States?</label>
                        </div>
                        <div class="col-sm-4">
                            <span class="error_message" id="employment_right_error_message"></span>
                            <select class="form-control" name="employment_right" id="employment_right">
                                <option value="selectLanguage" disabled selected>Select here</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-8">
                            <label>Can you perform the essential functions and responsibilities of the position for which you are applying?</label>
                        </div>
                        <div class="col-sm-4">
                            <span class="error_message" id="performance_error_message"></span>
                            <select class="form-control" name="performance" id="performance">
                                <option value="selectLanguage" disabled selected>Select here</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="explain" id="label_dl_performance">Explain:</label>
                        </div>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="1" name="performance_explanation" id="performance_explanation"></textarea>
                        </div>
                    </div>
                    <br>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" id="next_button_2" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">License/Certification</h2>
                    <h3 class="fs-subtitle">Please complete all sections.</h3>
                    <div class="row">
                        <div class="col-sm-8">
                            <label>Do you require any special accommodation to perform required duties?</label>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control" name="special_accommodation" id="special_accommodation">
                                <option value="select" disabled selected>Select here</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="explain" id="label_accommodation_explanation">Explain:</label>
                        </div>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="1" name="accommodation_explanation" id="accommodation_explanation"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <label>Have you ever worked for Aspy Medical Solutions?</label>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control" name="previous_worker" id="previous_worker">
                                <option value="select" disabled selected>Select here</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-offset-3 col-sm-5">
                            <input type="text" class="form-control" id="position_held" name="position_held" placeholder="Position held">
                        </div>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="employment_date" name="employment_date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <label>Do any of your relatives work for Aspy?</label>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control" name="relative_working" id="relative_working">
                                <option value="select" disabled selected>Select here</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-offset-3 col-sm-5">
                            <label for="explain" id="label_relative_name">If Yes, State their Name</label>
                        </div>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="1" name="relative_name" id="relative_name" placeholder="Name of relative"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="explain" id="label_certifications">List any current licenses, certifications, or registrations required for the
                                position for which you are applying.
                                Include date first received.</label>
                        </div>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="2" name="certifications" id="certifications"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <label>Have you ever been convicted of any criminal offense(s)?</label>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control" name="criminal_offense" id="criminal_offense">
                                <option value="select" disabled selected>Select here</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="explain" id="label_conviction">Written documentation must be provided about criminal
                                offenses from the clerk of court in the county which the conviction was made, and about
                                any driving offenses other than minor traffic violations from the motor vehicles office</label>
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset>
                    <h2 class="fs-title">References</h2>
                    <h3 class="fs-subtitle">Please provide the following details.</h3>
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
                            <input type="text" class="form-control" id="reference_name" name="reference_name" placeholder="Name">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="reference_phone_number" name="reference_phone_number" placeholder="Phone: +1 888-999-7777">
                        </div>
                        <div class="col-sm-4">
                            <textarea type="text" cols="2" class="form-control" id="reference_mail_address" name="reference_mail_address" placeholder="Mailing address"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <label>Reference 2</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="reference_name_2" name="reference_name_2" placeholder="Name">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="reference_phone_number_2" name="reference_phone_number_2" placeholder="Phone: +1 888-999-7777">
                        </div>
                        <div class="col-sm-4">
                            <textarea type="text" cols="2" class="form-control" id="reference_mail_address_2" name="reference_mail_address_2" placeholder="Mailing address"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <label>Reference 3</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="reference_name_3" name="reference_name_3" placeholder="Name">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="reference_phone_number_3" name="reference_phone_number_3" placeholder="Phone: +1 888-999-7777">
                        </div>
                        <div class="col-sm-4">
                            <textarea type="text" class="form-control" id="reference_mail_address_3" name="reference_mail_address_3" placeholder="Mailing address"></textarea>
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Education & Skills</h2>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Level of Education completed.</label>
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control" name="education_level" id="education_level">
                                <option value="select" disabled selected>Select here</option>
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
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label id="label_degree_major">If Degree, Specify Major:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" name="degree_major" id="degree_major" class="form-control" placeholder="Major">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>What skills or special training do you have for the position you're applying for?</label>
                        </div>
                        <div class="col-sm-8">
                            <textarea type="text" cols="3" name="skills" id="skills"></textarea>
                        </div>
                    </div><br>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Experience</h2>
                    <h3 class="fs-subtitle">List last 5 years of work experience.</h3>
                    <div class="row">
                        <div class="col-sm-2">
                            <label>From:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="date" class="form-control pull-right" id="from_date" name="from_date">
                        </div>
                        <div class="col-sm-2">
                            <label>To:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="date" class="form-control pull-right" id="to_date" name="to_date">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-2">
                            <label>Beginning pay:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="number" name="start_salary" id="start_salary" class="form-control">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Name of Employer:</label>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="employer_name" name="employer_name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>May we contact the previous employer?</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control" name="contact_permission" id="contact_permission">
                                <option value="select" disabled selected>Select here</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="street_adress_employer" name="street_adress_employer" placeholder="Street address">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="city_employer" name="city_employer" placeholder="City">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="state_employer" name="state_employer" placeholder="State">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="home_phone_employer" name="home_phone_employer" placeholder="Phone: +1 888-999-7777">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <textarea type="text" cols="3" class="form-control" id="title_performed" name="title_performed" placeholder="Titles & duties performed"></textarea>
                        </div>
                        <div class="col-sm-6">
                            <textarea type="text" cols="3" class="form-control" id="reason_leaving" name="reason_leaving" placeholder="Reason for leaving"></textarea>
                        </div>
                    </div>

                    <br>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Experience</h2>
                    <br>
                    <div class="row">
                        <div class="col-sm-2">
                            <label>From:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="date" class="form-control pull-right" id="from_date_experience2" name="from_date_experience2">
                        </div>
                        <div class="col-sm-2">
                            <label>To:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="date" class="form-control pull-right" id="to_date_experience2" name="to_date_experience2">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-2">
                            <label>Beginning pay:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="number" name="start_salary_experience2" id="start_salary_experience2" class="form-control">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Name of Employer:</label>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="employer_name_experience2" name="employer_name_experience2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>May we contact the previous employer?</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control" name="contact_permission_experience2" id="contact_permission_experience2">
                                <option value="select" disabled selected>Select here</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="street_adress_employer2" name="street_adress_employer_experience2" placeholder="Street address">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="city_employer_experience2" name="city_employer2" placeholder="City">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="state_employer_experience2" name="state_employer_experience2" placeholder="State">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="home_phone_employer_experience2" name="home_phone_employer_experience2" placeholder="Phone: +1 888-999-7777">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <textarea type="text" cols="3" class="form-control" id="title_performed_experience2" name="title_performed_experience2" placeholder="Titles & duties performed"></textarea>
                        </div>
                        <div class="col-sm-6">
                            <textarea type="text" cols="3" class="form-control" id="reason_leaving_experience2" name="reason_leaving_experience2" placeholder="Reason for leaving"></textarea>
                        </div>
                    </div>

                    <br>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Agreement</h2>
                    <h3 class="fs-subtitle">Agreement to the terms.</h3>
                    <div class="row">
                        <p>
                            I certify that I have given true, accurate and complete information on this form to the best of my knowledge.
                            I authorize investigation of statements made in this application and understand that
                            false information may be grounds for denial of my position and/or dismissal if I am employed.
                        </p>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-1">
                            <input type="radio" name="agree" id="agree">
                        </div>
                        <div class="col-sm-1">
                            <label>I agree</label>
                        </div>
                    </div>
                    <br>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="submit" name="submit" id="submit_button" class="submit action-button" value="Finish">
                </fieldset>
            </div>

        </form>
    </main>
</div>

<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Core JavaScript Files -->
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


//     $(function () {
//         //buttons disabled
//         $("#next_button_1").attr("disabled",true);
//         $("#next_button_2").attr("disabled",true);

//         //hide error messages _section1
//         $('#position_error_message').hide();
//         $('#date_available_error_message').hide();
//         $('#employment_type_error_message').hide();
//         //validate
//         $('#position_desired').keypress(function () {
// //            check_details_section1();
//             toggle_error_position_desired();
//         });

//         $('#date_available').click(function () {
// //            check_details_section1();
//             check_position_desired();
//         });

//         $('#employment_type').click(function () {
//             check_fields_section_1();
//         });
//         $("#next_button_1").click(function (){
//             check_details_section1();
//         });

//         function check_position_desired(){
//             var position = $('#position_desired').val();
//             var date_available= $('#date_available').val();
//             var employment_type= $('#employment_type option:selected').val();
//             if (position == ''){
//                 $('#position_error_message').html("Please enter position desired");
//                 $('#position_error_message').show();
//                 $("#next_button_1").attr("disabled",true);
//                 $("#next_button_1").css("background","#EBEBE4");
//                 //$('#position_desired').;
//             }
//             else{
//                 $('#position_error_message').hide();
//                 $("#next_button_1").attr("disabled",false);
//                 $("#next_button_1").css("background","#27AE60");
//             }
//         }

//         function toggle_error_position_desired(){
//             var position = $('#position_desired').val();
//             if (position == ''){
//                 $('#position_error_message').html("Please enter position desired");
//                 $('#position_error_message').show();
//                 $("#next_button_1").attr("disabled",true);
//                 $("#next_button_1").css("background","#EBEBE4");
//             }
//             else{
//                 $('#position_error_message').hide();
//                 $("#next_button_1").attr("disabled",false);
//                 $("#next_button_1").css("background","#27AE60");
//             }
//         }

//         function check_fields_section_1(){
//             var position = $('#position_desired').val();
//             var date_available= $('#date_available').val();
//             var employment_type= $('#employment_type option:selected').val();
//             if (position == ''){
//                 $('#position_error_message').html("Please enter position desired");
//                 $('#position_error_message').show();
//                 //$('#position_desired').;
//             }
//             else{
//                 $('#position_error_message').hide();
//             }
//             if(date_available == ''){
//                 $('#date_available_error_message').html("Please enter a valid date");
//                 $('#date_available_error_message').show();
//             }
//             else{
//                 $('#date_available_error_message').hide();
//             }
//         }
//         function check_details_section1() {
//             var position = $('#position_desired').val();
//             var date_available= $('#date_available').val();
//             var employment_type= $('#employment_type option:selected').val();
//             if (position == ''){
//                 $('#position_error_message').html("Please enter position desired");
//                 $('#position_error_message').show();
//                 $("#next_button_1").attr("disabled",true);
//                 $("#next_button_1").css("background","#EBEBE4");
//                 //$('#position_desired').;
//             }
//             else{
//                 $('#position_error_message').hide();
//                 $("#next_button_1").attr("disabled",false);
//                 $("#next_button_1").css("background","#27AE60");
//             }
//             if(date_available == ''){
//                 $('#date_available_error_message').html("Please enter a valid date");
//                 $('#date_available_error_message').show();
//                 $("#next_button_1").attr("disabled",true);
//                 $("#next_button_1").css("background","#EBEBE4");
//             }
//             else{
//                 $('#date_available_error_message').hide();
//                 $("#next_button_1").attr("disabled",false);
//                 $("#next_button_1").css("background","#27AE60");
//             }

//             if(employment_type == 'select'){
//                 $('#employment_type_error_message').html("Please enter employment type");
//                 $('#employment_type_error_message').show();
//                 $("#next_button_1").attr("disabled",true);
//                 $("#next_button_1").css("background","#EBEBE4");
//             }
//             else{
//                 $('#employment_type_error_message').hide();
//                 $("#next_button_1").attr("disabled",false);
//                 $("#next_button_1").css("background","#27AE60");
//             }
//         }

//         //hide error messages __section2
//         $('#first_name_error_message').hide();
//         $('#last_name_error_message').hide();
//         $('#street_address_error_message').hide();
//         $('#city_error_message').hide();
//         $('#state_error_message').hide();
//         $('#home_phone_error_message').hide();
//         $('#email_error_message').hide();
//         $('#DL_error_message').hide();
//         $('#military_error_message').hide();
//         $('#employment_right_error_message').hide();
//         $('#performance_error_message').hide();
//         //validate
//         $('#first_name').keyup(function () {
//             check_details_section2();
//         });
//         $('#last_name').keyup(function () {
//             check_details_section2();
//         });
//         $('#street_address').keyup(function () {
//             check_details_section2();
//         });
//         $('#city').keyup(function () {
//             check_details_section2();
//         });
//         $('#state').keyup(function () {
//             check_details_section2();
//         });
//         $('#your_email').keyup(function () {
//             check_details_section2();
//         });
//         $('#home_phone').keyup(function () {
//             check_details_section2();
//         });
//         $('#DL').click(function () {
//             check_details_section2();
//         });
//         $('#military').click(function () {
//             check_details_section2();
//         });
//         $('#employment_right').click(function () {
//             check_details_section2();
//         });
//         $('#performance').click(function () {
//             check_details_section2();
//         });

//     });

//     function check_details_section1() {
//         var position = $('#position_desired').val();
//         var date_available= $('#date_available').val();
//         var employment_type= $('#employment_type option:selected').val();
//         if (position == ''){
//             $('#position_error_message').html("Please enter position desired");
//             $('#position_error_message').show();
//             $("#next_button_1").attr("disabled",true);
//             $("#next_button_1").css("background","#EBEBE4");
//             //$('#position_desired').;
//         }
//         else{
//             $('#position_error_message').hide();
//             $("#next_button_1").attr("disabled",false);
//             $("#next_button_1").css("background","#27AE60");
//         }
//         if(date_available == ''){
//             $('#date_available_error_message').html("Please enter a valid date");
//             $('#date_available_error_message').show();
//             $("#next_button_1").attr("disabled",true);
//             $("#next_button_1").css("background","#EBEBE4");
//         }
//         else{
//             $('#date_available_error_message').hide();
//             $("#next_button_1").attr("disabled",false);
//             $("#next_button_1").css("background","#27AE60");
//         }

//         if(employment_type == 'select'){
//             $('#employment_type_error_message').html("Please enter employment type");
//             $('#employment_type_error_message').show();
//             $("#next_button_1").attr("disabled",true);
//             $("#next_button_1").css("background","#EBEBE4");
//         }
//         else{
//             $('#employment_type_error_message').hide();
//             $("#next_button_1").attr("disabled",false);
//             $("#next_button_1").css("background","#27AE60");
//         }
//     }
//     function check_details_section2() {
//         var first_name = $('#first_name').val();
//         var last_name= $('#last_name').val();
//         var street= $('#street_address').val();
//         var city = $('#city').val();
//         var state = $('#state').val();
//         var phone = $('#home_phone').val();
//         var email=$('#your_email').val();
//         var DL = $('#DL option:selected').val();
//         var military = $('#military option:selected').val();
//         var employment_right = $('#employment_right option:selected').val();
//         var performance = $('#performance option:selected').val();
//         if (first_name == ''){
//             $('#first_name_error_message').html("Please enter your first name");
//             $('#first_name_error_message').show();
//             $("#next_button_2").attr("disabled",true);
//             $("#next_button_2").css("background","#EBEBE4");
//             //$('#position_desired').;
//         }
//         else{
//             $('#first_name_error_message').hide();
//             $("#next_button_2").attr("disabled",false);
//             $("#next_button_2").css("background","#27AE60");
//         }
//         if(last_name == ''){
//             $('#last_name_error_message').html("Please enter your last name");
//             $('#last_name_error_message').show();
//             $("#next_button_2").attr("disabled",true);
//             $("#next_button_2").css("background","#EBEBE4");
//         }
//         else{
//             $('#last_name_error_message').hide();
//             $("#next_button_2").attr("disabled",false);
//             $("#next_button_2").css("background","#27AE60");
//         }
//         if (street == ''){
//             $('#street_address_error_message').html("Please enter the name of your street");
//             $('#street_address_error_message').show();
//             $("#next_button_2").attr("disabled",true);
//             $("#next_button_2").css("background","#EBEBE4");
//             //$('#position_desired').;
//         }
//         else{
//             $('#street_address_error_message').hide();
//             $("#next_button_2").attr("disabled",false);
//             $("#next_button_2").css("background","#27AE60");
//         }
//         if (city == ''){
//             $('#city_error_message').html("Please enter the name of your city");
//             $('#city_error_message').show();
//             $("#next_button_2").attr("disabled",true);
//             $("#next_button_2").css("background","#EBEBE4");
//             //$('#position_desired').;
//         }
//         else{
//             $('#city_error_message').hide();
//             $("#next_button_2").attr("disabled",false);
//             $("#next_button_2").css("background","#27AE60");
//         }
//         if (state == ''){
//             $('#state_error_message').html("Please enter the name of your state");
//             $('#state_error_message').show();
//             $("#next_button_2").attr("disabled",true);
//             $("#next_button_2").css("background","#EBEBE4");
//             //$('#position_desired').;
//         }
//         else{
//             $('#state_error_message').hide();
//             $("#next_button_2").attr("disabled",false);
//             $("#next_button_2").css("background","#27AE60");
//         }
//         if (phone == ''){
//             $('#home_phone_error_message').html("Please enter the name of your phone number");
//             $('#home_phone_error_message').show();
//             $("#next_button_2").attr("disabled",true);
//             $("#next_button_2").css("background","#EBEBE4");
//             //$('#position_desired').;
//         }
//         else{
//             $('#home_phone_error_message').hide();
//             $("#next_button_2").attr("disabled",false);
//             $("#next_button_2").css("background","#27AE60");
//         }
//         if (email == ''){
//             $('#email_error_message').html("Please enter an email");
//             $('#email_error_message').show();
//             $("#next_button_2").attr("disabled",true);
//             $("#next_button_2").css("background","#EBEBE4");
//             //$('#position_desired').;
//         }
//         else{
//             $('#email_error_message').hide();
//             $("#next_button_2").attr("disabled",false);
//             $("#next_button_2").css("background","#27AE60");
//         }
//         if(DL == 'select'){
//             $('#DL_error_message').html("Please select an option");
//             $('#DL_type_error_message').show();
//             $("#next_button_2").attr("disabled",true);
//             $("#next_button_2").css("background","#EBEBE4");
//         }
//         else{
//             $('#DL_type_error_message').hide();
//             $("#next_button_1").attr("disabled",false);
//             $("#next_button_1").css("background","#27AE60");
//         }
//         if(military == 'select'){
//             $('#military_error_message').html("Please select an option");
//             $('#military_error_message').show();
//             $("#next_button_2").attr("disabled",true);
//             $("#next_button_2").css("background","#EBEBE4");
//         }
//         else{
//             $('#military_type_error_message').hide();
//             $("#next_button_1").attr("disabled",false);
//             $("#next_button_1").css("background","#27AE60");
//         }
//         if(employment_right == 'select'){
//             $('#employment_right_error_message').html("Please select an option");
//             $('#employment_right_error_message').show();
//             $("#next_button_2").attr("disabled",true);
//             $("#next_button_2").css("background","#EBEBE4");
//         }
//         else{
//             $('#employment_right_error_message').hide();
//             $("#next_button_2").attr("disabled",false);
//             $("#next_button_2").css("background","#27AE60");
//         }
//         if(performance == 'select'){
//             $('#performance_error_message').html("Please select an option");
//             $('#performance_error_message').show();
//             $("#next_button_2").attr("disabled",true);
//             $("#next_button_2").css("background","#EBEBE4");
//         }
//         else{
//             $('#performance_error_message').hide();
//             $("#next_button_2").attr("disabled",false);
//             $("#next_button_2").css("background","#27AE60");
//         }
//     }

//    $("#next_button_1").click(function () {
//        check_position();
//    });

    $(function() {

//jQuery time
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $(".next").click(function(){

            if(animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

//activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
            next_fs.show();
//hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now, mx) {
//as the opacity of current_fs reduces to 0 - stored in "now"
//1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
//2. bring next_fs from the right(50%)
                    left = (now * 50)+"%";
//3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({'transform': 'scale('+scale+')'});
                    next_fs.css({'left': left, 'opacity': opacity});
                },
                duration: 800,
                complete: function(){
                    current_fs.hide();
                    animating = false;
                },
//this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".previous").click(function(){
            if(animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

//de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
            previous_fs.show();
//hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now, mx) {
//as the opacity of current_fs reduces to 0 - stored in "now"
//1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
//2. take current_fs to the right(50%) - from 0%
                    left = ((1-now) * 50)+"%";
//3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({'left': left});
                    previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
                },
                duration: 800,
                complete: function(){
                    current_fs.hide();
                    animating = false;
                },
//this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });



        // $(".submit").click(function(){
        //     alert('Submitted');
        //     return false;
        // })

    });
</script>
</body>
</html>
