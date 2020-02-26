<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>AdminLTE 2 | Dashboard</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="/adminlte/dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="/adminlte/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="/adminlte/plugins/iCheck/flat/blue.css">

    <link rel="stylesheet" href="/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">

    <link rel="stylesheet" href="/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css">

    <link rel="stylesheet" href="/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include("admin.layout.header")

    @include("admin.layout.sidebar")
    <div class="content-wrapper">

        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <!-- /.control-sidebar -->

    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper-->

<!-- jQuery 2.2.3 -->
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4-->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<script>
    $.widget.bridge('uibutton',$.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Sparking -->
<script src="/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap-->
<script src="/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart-->
<script src="/adminlte/bower_components/jquery-knob/js/jquery.knob.js"></script>
<!-- daterangepicker-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker-->
<script src="/adminlte/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll-->
<script src="/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick-->
<script src="/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<script src="/js/admin.js"></script>

</body>

</html>
