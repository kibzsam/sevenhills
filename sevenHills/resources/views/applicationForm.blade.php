<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Application Form | Seven Hills</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <!-- Bootstrap 3.3.7 -->
    {{--<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">--}}
    {{--<link rel="stylesheet" type="text/css" href="public/css/opensans-font.css">--}}

    <link rel="stylesheet" type="text/css" href="{{asset('css/opensans-font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href=".{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
    <link type="text/css"  rel="stylesheet" href="{{asset('css/style_applicationForm.css')}}"/>

</head>
<body>
<div class="page-content">
    <div class="form-v1-content">
        <div class="wizard-form">
            {{--{{ $email->content }}--}}
            <form class="form-register" action="{{url('/applicationForm')}}" method="post" id="registrationForm">
                <div id="form-total">
                    <!-- SECTION 1 -->

                    <h2>
                        <p class="step-icon"><span>01</span></p>
                        <span class="step-text">Position Details</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="wizard-header">
                                <img src="{{ asset('img/logo.png') }}" alt="" width="273" height="72.8" /><br><br>
                                <h3 class="heading">Seven Hills Medical Solutions Application Form</h3>
                                <p>APPLICANT MUST COMPLETE </p>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <fieldset>
                                        <legend>Position Desired</legend>
                                        <input type="text" class="form-control" id="position-desired" name="position-desired" required>
                                    </fieldset>
                                </div>
                                <div class="form-holder">
                                    <fieldset>
                                        <legend>Date Available</legend>
                                        <input type="date" class="form-control pull-right" id="date-available" name="date-available" required>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="special-label">Type of Employment:</label>
                                    <select name="employment_type" id="employment_type" required>
                                        <option value="select" disabled selected>Select type of employment desired</option>
                                        <option value="fullTime">Full Time</option>
                                        <option value="partTime">Part Time</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- SECTION 2 -->

                    <h2>
                        <p class="step-icon"><span>02</span></p>
                        <span class="step-text">Personal Infomation</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="wizard-header">
                                <h3 class="heading">Personal Infomation</h3>
                                <p>Please complete all sections  </p>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <fieldset>
                                        <legend>First Name</legend>
                                        <input type="text" class="form-control" id="first-name" name="first-name" required>
                                    </fieldset>
                                </div>
                                <div class="form-holder">
                                    <fieldset>
                                        <legend>Last Name</legend>
                                        <input type="text" class="form-control" id="last-name" name="last-name" required>
                                    </fieldset>
                                </div>
                                <div class="form-holder">
                                    <fieldset>
                                        <legend>M.I.</legend>
                                        <input type="text" class="form-control" id="MI" name="MI" required>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <fieldset>
                                        <legend>Street Adress</legend>
                                        <input type="text" class="form-control" id="street-adress" name="street-adress" required>
                                    </fieldset>
                                </div>
                                <div class="form-holder">
                                    <fieldset>
                                        <legend>City</legend>
                                        <input type="text" class="form-control" id="city" name="city" required>
                                    </fieldset>
                                </div>
                                <div class="form-holder">
                                    <fieldset>
                                        <legend>State/ZIP</legend>
                                        <input type="text" class="form-control" id="state" name="state" required>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>Home Phone</legend>
                                        <input type="text" class="form-control" id="home-phone" name="home-phone" placeholder="+1 888-999-7777" required>
                                    </fieldset>
                                </div>
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>Alternative Number</legend>
                                        <input type="text" class="form-control" id="alt-phone" name="alt-phone" placeholder="+1 888-999-7777" required>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>Your Email</legend>
                                        <input type="email" name="your_email" id="your_email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com" required>
                                    </fieldset>
                                </div>
                            </div>
                            {{--Drivers license--}}
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="special-label">Do you have a Driver's License?</label>
                                    <select name="DL" id="DL" required>
                                        <option value="selectDL" disabled selected>Select here</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>If Yes, Specify Class</legend>
                                        <input type="text" name="DL-class" id="your_email" class="form-control" placeholder="Class">
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </section>

                    {{--Section 3--}}
                    <h2>
                        <p class="step-icon"><span>03</span></p>
                        <span class="step-text">More Details</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="wizard-header">
                                <h3 class="heading">Continuation</h3>
                                <p>Please complete all sections.</p>
                            </div>
                            {{--Millitary--}}
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="special-label">Have you ever served in the military?</label>
                                    <select name="military" id="military" required>
                                        <option value="selectMilitary" disabled selected>Select here</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            {{--Other language--}}
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="special-label">Do you speak any other language?</label>
                                    <select name="language" id="language" required>
                                        <option value="selectLanguage" disabled selected>Select here</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            {{--Legal right for employment--}}
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="special-label">Do you have the legal right to obtain
                                        employment in the United States?</label>
                                    <select name="employment-right" id="employment-right" required>
                                        <option value="selectLanguage" disabled selected>Select here</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            {{--competency, performing all duties--}}
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="special-label">Can you perform the essential functions and responsibilities of the
                                        position for which you are applying?</label>
                                    <select name="performance" id="performance">
                                        <option value="selectLanguage" disabled selected>Select here</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>If Not, Explain</legend>
                                        <input type="text" name="performance-explanation" id="performance-explanation" class="form-control" placeholder="Language">
                                    </fieldset>
                                </div>
                            </div>
                            {{--Special accomodation--}}
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="special-label">Do you require any special accommodation to perform required duties?</label>
                                    <select name="special-accomodation" id="special-accomodation" required>
                                        <option value="select" disabled selected>Select here</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>If Yes, Explain</legend>
                                        <input type="text" name="accommodation-explanation" id="accommodation-explanation" class="form-control" placeholder="Language" required>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </section>
                    {{--Section 4--}}
                    <h2>
                        <p class="step-icon"><span>04</span></p>
                        <span class="step-text">Further Details</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="wizard-header">
                                <h3 class="heading">Continuation</h3>
                                <p>Please complete all sections.</p>
                            </div>

                            {{--Previously worked with us--}}
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="special-label">Have you ever worked for Seven Hills Medical Solutions?</label>
                                    <select name="previous-worker" id="previous-worker" required>
                                        <option value="select" disabled selected>Select here</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <fieldset>
                                        <legend>Position Held</legend>
                                        <input type="text" class="form-control" id="position-held" name="position-held">
                                    </fieldset>
                                </div>
                                <div class="form-holder">
                                    <fieldset>
                                        <legend>Date of Employment</legend>
                                        <input type="date" class="form-control pull-right" id="employment-date" name="employment-date">
                                    </fieldset>
                                </div>
                            </div>
                            {{--relatives working--}}
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="special-label">Do any of your relatives work for Seven Hills?</label>
                                    <select name="relatives-working" id="relatives-working" required>
                                        <option value="select" disabled selected>Select here</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>If Yes, State their Name</legend>
                                        <input type="text" name="relative-name" id="relative-name" class="form-control" placeholder="Name">
                                    </fieldset>
                                </div>
                            </div>
                            {{--Certifcations--}}
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="special-label">List any current licenses, certifications, or
                                        registrations required for the position for which you are applying for.<br>
                                        Include date recieved.
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>Certifications</legend>
                                        <input type="text" name="certifications" id="certifications" class="form-control" placeholder="certifications" required>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="special-label">Have you ever been convicted of any criminal or driving offense(s)?</label>
                                    <select name="criminal-offense" id="criminal-offense" required>
                                        <option value="select" disabled selected>Select here</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="special-label">If yes, written documentation must be provided about criminal offenses from
                                        the clerk of court in the county which the conviction was made, and about any driving offenses
                                        other than minor traffic violations from the motor vehicles office
                                    </label>
                                </div>
                            </div>
                        </div>
                    </section>
                    {{--section 5--}}
                    <h2>
                        <p class="step-icon"><span>05</span></p>
                        <span class="step-text">References</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="wizard-header">
                                <h3 class="heading">References</h3>
                                <p>Please provide the following details.</p>
                            </div>

                            {{--reference persons--}}
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="special-label">You must provide atleast three current reference letters and/or the name of
                                    individuals with whom a reference interview can be conducted. Please give the full name. mailing address, and pgone
                                    number of three references who have knowledge of your background and qualifications in the field.</label>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- SECTION 6 -->
                    <h2>
                        <p class="step-icon"><span>06</span></p>
                        <span class="step-text">Education & Skills</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="wizard-header">
                                <h3 class="heading">Details on Education & Skills</h3>
                                <p>Please enter your academic information and proceed to the next.</p>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="special-label">Level of Education completed.</label>
                                    <select name="education-level" id="education-level" required>
                                        <option value="select" disabled selected>Select here</option>
                                        <option value="yes">High School</option>
                                        <option value="no">GED</option>
                                        <option value="yes">College 0-3yrs</option>
                                        <option value="no">Associate Degree</option>
                                        <option value="no">Bachelor's Degree</option>
                                        <option value="no">Master's Degree</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>If Degree, Specify Major:</legend>
                                            <input type="text" name="degree-major" id="degree-major" class="form-control" placeholder="Major">
                                        </fieldset>
                                    </div>
                                </div>
                        </div>
                    </section>
                    <!-- SECTION 7 -->
                    <h2>
                        <p class="step-icon"><span>07</span></p>
                        <span class="step-text">Experience</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="wizard-header">
                                <h3 class="heading">Experience</h3>
                                <p>List last 5 years of work experience.</p>
                            </div>
                            {{--Experince dates--}}
                            <div class="form-row">
                                <div class="form-holder">
                                    <fieldset>
                                        <legend>From:</legend>
                                        <input type="date" class="form-control pull-right" id="from-date" name="from-date">
                                    </fieldset>
                                </div>
                                <div class="form-holder">
                                    <fieldset>
                                        <legend>To:</legend>
                                        <input type="date" class="form-control pull-right" id="to-date" name="to-date">
                                    </fieldset>
                                </div>
                            </div>
                            {{--Salary range--}}
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>Beginning Salary $</legend>
                                        <input type="number" name="start-salary" id="start-salary" class="form-control" required>
                                    </fieldset>
                                </div>
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>Ending Salary $</legend>
                                        <input type="number" name="final-salary" id="final-salary" class="form-control" required>
                                    </fieldset>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <fieldset>
                                        <legend>Name of Employer</legend>
                                        <input type="text" class="form-control" id="employer-name" name="employer-name" required>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="special-label">May we contact the previous employer?</label>
                                        <select name="contact-permission" id="contact-permission" required>
                                            <option value="MM" disabled selected>Select here</option>
                                            <option value="fullTime">Full Time</option>
                                            <option value="partTime">Part Time</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <fieldset>
                                        <legend>Street Adress</legend>
                                        <input type="text" class="form-control" id="street-adress-employer" name="street-adress-employer" required>
                                    </fieldset>
                                </div>
                                <div class="form-holder">
                                    <fieldset>
                                        <legend>City</legend>
                                        <input type="text" class="form-control" id="city-employer" name="city-employer" required>
                                    </fieldset>
                                </div>
                                <div class="form-holder">
                                    <fieldset>
                                        <legend>State/ZIP</legend>
                                        <input type="text" class="form-control" id="state-employer" name="state-employer" required>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>Name of Employer</legend>
                                        <input type="text" class="form-control" id="name-employer" name="name-employer" required>
                                    </fieldset>
                                </div>
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>Phone Number</legend>
                                        <input type="text" class="form-control" id="home-phone-employer" name="home-phone-employer" placeholder="+1 888-999-7777" required>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>Titles & Duties Performed</legend>
                                        <input type="text" class="form-control" id="title-performed" name="title-performed" required>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>Reason for leaving</legend>
                                        <input type="text" class="form-control" id="reason-leaving" name="reason-leaving" required>
                                    </fieldset>
                                </div>
                            </div>

                        </div>
                    </section>
                    <!-- SECTION 8-->
                    <h2>
                        <p class="step-icon"><span>08</span></p>
                        <span class="step-text">Agreement</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="wizard-header">
                                <h3 class="heading">Agreement to the terms</h3>
                                <p>
                                </p>
                            </div>
                            <div class="form-row">
                                <label>
                                    I agree to carry out the designated responsibilities to the best of my ability. I have read the position description.
                                    I am aware there is a conditional period of 3 nmonths prior to permanent employment.<br><br>
                                    I certify that I have given true, accurate and complete information on this form to the best of my knowledge.
                                    I authorized investigations of statements made in this application and understand that false
                                    information may be grounds for denial of ny position and/or dismissal if I am employed.
                                </label>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label class="special-label">Do you have agree to the above?</label>
                                    <select name="agreement" id="agreement" required>
                                        <option value="select" disabled selected>Select here</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/jquery.steps.js')}}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>x
<script src="{{asset('js/main.js')}}"></script>
<script>
    var form = $("#registrationForm");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function (event, currentIndex, newIndex)
        {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function (event, currentIndex)
        {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex)
        {
            alert("Submitted!");
        }
    });
</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>