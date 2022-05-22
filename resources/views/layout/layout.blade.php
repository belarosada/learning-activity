<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/logo.png')}}">
    <title>Learning Acitivity</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{url('assets/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('assets/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{url('assets/dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{url('assets/bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{url('assets/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- File Input -->
    <link rel="stylesheet" href="{{url('assets/bower_components/fileinput/css/fileinput.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{url('assets/bower_components/select2/dist/css/select2.min.css')}}">
    <!-- Datatables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <!-- SweetAlert -->
    <link href="{{ asset('assets/bower_components/sweetalert/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/bower_components/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/bower_components/sweetalert/sweetalert.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style media="screen">
        .center-navbar {
            display: block;
            text-align: center;
            color: white;
            padding: 11px;
            /* adjust based on your layout */
            margin-left: 180px;
            margin-right: 200px;
        }

        .green {
            background-color: #015687;
        }
    </style>

</head>

<body class="hold-transition skin-red sidebar-mini fixed">
    <div class="wrapper">
        @include('sweetalert::alert')
        <header class="main-header">
            <!-- Logo -->
            <a href="{{ route('index') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-lg"><img src="{{asset('assets/images/logo_cp.png')}}" /></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-mini"><img src="{{asset('assets/images/logo_mini.png')}}" /></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                    </ul>
                </div>
                <div class="center-navbar" style="font-size:19px"></div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="{{ route('index') }}">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="active">
                        {{-- <a href="{{ route('network') }}">
                            <i class="fa fa-list-alt"></i> <span>List Network</span>
                        </a> --}}
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2022 </strong> All rights
            reserved.
        </footer>

    </div>

    <!-- jQuery 3 -->
    <script src="{{url('assets/bower_components/jquery/dist/jquery.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{url('assets/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Morris.js charts -->
    <script src="{{url('assets/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{url('assets/bower_components/morris.js/morris.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>

    <!-- daterangepicker -->
    <script src="{{url('assets/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- sweetalert -->
    <script src="{{url('assets/bower_components/sweet_alert/sweetalert.min.js')}}"></script>

    <!-- Slimscroll -->
    <script src="{{url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{url('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('assets/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{url('assets/dist/js/demo.js')}}"></script>

    <!-- File Input -->
    <script src="{{url('assets/bower_components/fileinput/js/fileinput.js')}}"></script>
    <!-- Select2 -->
    <script src="{{url('assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    @stack('scripts')
    <!-- Sweetalert -->
    <script src="{{asset('assets/bower_components/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/bower_components/sweetalert2/sweetalert2.all.min.js')}}"></script>
    <!-- ChartJS -->
    {{-- <script src="{{asset('assets/bower_components/chartjs/Chart.min.js')}}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>


</body>

</html>
