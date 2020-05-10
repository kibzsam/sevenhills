<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Seven Hills</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('public/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('public/bower_components/Ionicons/css/ionicons.min.css') }}">
    {{--Full Calendar--}}
    <link rel="stylesheet" href="{{ asset('public/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" media="print">
    <link rel="stylesheet" href="{{ asset('public/bower_components/fullcalendar/dist/fullcalendar.print.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->


    <link rel="stylesheet" href="{{ asset('public/dist/css/skins/_all-skins.min.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('public/bower_components/morris.js/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('public/bower_components/jvectormap/jquery-jvectormap.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('public/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">


    <link rel="stylesheet" href="{{ asset('public/dist/css/skins/_all-skins.min.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="{{ route('admin') }}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>S</b>H</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Seven</b> Hills</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <!-- <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">0</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 0 messages</li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li> -->
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="notifications-menu">
                    <a href="{{route('logout')}}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                           {{__('LOGOUT')}}
                        </a>
                    <form id="logout-form" action="{{route('logout')}}" method="POST">
                         @csrf
                        </form>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    {{-- <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">0</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 0 tasks</li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>  --}}
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
                            <span class="hidden-xs">Loyed</span>
                        </a> -->
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">

                                <p>
                                    {{$user->employeeName}}
                                    <small>Seven Hills</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="public/dist/img/avatar5.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                  
                    <p>{{$user->employeeName}}</p>
                   
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <!-- <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form> -->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <!-- <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="{{ route('admin') }}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('users')}}">
                        <i class="fa fa-th"></i> <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('calendar') }}">
                        <i class="fa fa-calendar"></i> <span>Calendar</span>
                    </a>
                </li> -->
                <li>
                    <a href="#">
                        <i class="fa fa-pie-chart"></i> <span>Employee Attendance</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @yield('content')

        <div class="container">
            <div class="row justify-content-center" style="margin:40px">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('') }}</div>
        
                        <div class="card-body">
                            <form method="POST" action="#">
                                @csrf
        
                                <div class="form-group row">
                                    <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>
        
                                        @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="day" class="col-md-4 col-form-label text-md-right">{{ __('Day') }}</label>
                                    <div class="col-md-6">
                                        <input id="day" type="date" class="form-control @error('day') is-invalid @enderror" name="day" value="{{ old('day') }}" required autocomplete="day">
        
                                        @error('day')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="timeIn" class="col-md-4 col-form-label text-md-right">{{ __('Time In') }}</label>
                                    <div class="col-md-6">
                                        <input id="timeIn" type="text" class="form-control @error('timeIn') is-invalid @enderror" name="timeIn" value="{{ old('timeIn') }}" required autocomplete="timeIn">
        
                                        @error('timeIn')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="lunchTimeOut" class="col-md-4 col-form-label text-md-right">{{ __('Time Out for Lunch') }}</label>
                                    <div class="col-md-6">
                                        <input id="lunchTimeOut" type="text" class="form-control @error('lunchTimeOut') is-invalid @enderror" name="lunchTimeOut" value="{{ old('lunchTimeOut') }}" required autocomplete="lunchTimeOut">
        
                                        @error('lunchTimeOut')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="afterLunchTime" class="col-md-4 col-form-label text-md-right">{{ __('After Lunch Time In') }}</label>
                                    <div class="col-md-6">
                                        <input id="afterLunchTime" type="text" class="form-control @error('afterLunchTime') is-invalid @enderror" name="afterLunchTime" value="{{ old('afterLunchTime') }}" required autocomplete="afterLunchTime">
        
                                        @error('afterLunchTime')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="timeOut" class="col-md-4 col-form-label text-md-right">{{ __('Time Out') }}</label>
                                    <div class="col-md-6">
                                        <input id="timeOut" type="text" class="form-control @error('timeOut') is-invalid @enderror" name="timeOut" value="{{ old('timeOut') }}" required autocomplete="timeOut">
        
                                        @error('timeOut')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Submit') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            Powered by<b> Alpha Tech</b>
        </div>
        <strong>Copyright &copy; 2019 <a href="sevenhillsmed.com">Seven Hills</a>.</strong> All rights
        reserved.
    </footer>
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('public/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('public/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
{{--Morros charts--}}
<script src="{{ asset('public/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{asset('public/bower_components/morris.js/morris.min.js')}}"></script>

<!-- Sparkline -->
<script src="{{ asset('public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{asset('public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('public/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('public/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->

<script src="{{ asset('public/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('public/dist/js/demo.js') }}"></script>

<!-- fullCalendar -->
<script src="{{ asset('public/bower_components/moment/moment.js') }}"></script>
<script src="{{ asset('public/bower_components/fullcalendar/dist/fullcalendar.min.js ') }}"></script>


</body>
</html>
