<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="google-site-verification" content="9PG9f7SbwOBXo9i6JWsfR9g8MstPMHBW2XnKDrDjmKo" />

    <title>Home | Seven Hills Medical Solutions</title>

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
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


    <div id="wrapper">
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <p class="bold text-left">Monday - Friday, 8am to 5pm </p>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <p class="bold text-right">Call/Text 702-807-3199</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container navigation">

                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('public/img/logo.png') }}" alt="" width="195" height="52" />
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#intro">Home</a></li>
                        <li><a href="#boxes">About Us</a></li>
                        <li><a href="#service">Our Services</a></li>
                        <li><a href="#partner">Our Clients</a> </li>
                        <li><a href="https://calendar.sevenhillsmed.com">Login</a></li>
                        <li><a href="{{route('applicationForm')}}">Apply Here</a></li>
                        <li><a href="{{route('loginPage')}}">Attendance</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <main class="py-4">
            @yield('index')
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

</body>

</html>