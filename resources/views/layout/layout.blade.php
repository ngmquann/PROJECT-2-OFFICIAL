<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        {{-- <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">--}}
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
        <!-- Theme s2 style -->
        <link rel="stylesheet" href="{{ asset('css/editbackend.css') }}">
        <!-- css backend category -->
        <!-- <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}" > -->
        <link href="{{asset('backend/css/style.css')}}" rel='stylesheet' type='text/css' />
        <link href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet"/>
        <link rel="stylesheet" href="{{asset('backend/css/font.css')}}" type="text/css"/>
        <link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet"> 
        <!-- Google Font: Roboto -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            @include('layout.navbar')
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            @include('layout.main-sidebar')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            @include('layout.footer')
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- DataTables -->
        <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
        <!-- AdminLTE App -->
        <!--<script src="{{ asset('js/adminlte.min.js') }}"></script>-->
        <script src="{{ asset('js/adminlte.js') }}"></script>
        <!--javascrip-->
        <script src="{{ asset('js/javascrip.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <!-- <script src="{{ asset('dist/js/demo.js') }}"></script> -->
        <!-- page script -->
        <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
        <script>
            CKEDITOR.replace('ckeditor');
        </script>
        <script src="{{asset('backend/js/bootstrap.js')}}"></script>
        <script src="{{asset('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
        <script src="{{asset('backend/js/scripts.js')}}"></script>
        <script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('backend/js/jquery2.0.3.min.js')}}"></script>
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
        <script src="{{asset('backend/js/jquery.scrollTo.js')}}"></script>
        @yield('script-section')
    </body>
</html>