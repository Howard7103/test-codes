<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="RPPMc0lhvtynKELDZljXlz9UZI9uNc55ip1P8GCM">
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

    <header class="main-header">

        <!-- Logo-->
        <a href="/adminlte/index.html" class="logo">
            <span class="logo-mini"></span>

            <span class="logo-lg">後台</span>
        </a>

        <nav class="navbar navbar-static-top">

            <a href="/adminlte/#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li class="dropdown user user-menu">
                        <a href="/adminlte/#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/photo/1.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">test1</span>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="user-footer">
                                <duv class="pull-right">
                                    <a href="/admin/logout" class="btn btn-default btn-flat">Sign out</a>
                                </duv>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <aside class="main-sidebar">

        <sectin class="sidebar">

            <ul class="sidebar-menu">
                <li class="treeview active">
                    <a href="#">
                                <!--  <i>斜體效果</i>  -->
                        <i class="fa fa-dashboard"></i><span>系統管理</span>
                        <span class="pull-right-container"></span>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="/admin/permissions"><i class="fa fa-circle-o"></i>權限管理</a></li>
                        <li><a href="/admin/users"><i class="fa fa-circle-o"></i>用戶管理</a></li>
                        <li><a href="/admin/roles"><i class="fa fa-circle-o"></i>角色管理</a></li>
                    </ul>
                </li>

                <li class="active treeview">
                    <a href="/admin/posts">
                        <i class="fa fa-dashboard"></i><span>文章管理</span>
                    </a>
                </li>

                <li class="active treeview">
                    <a href="/admin/topics">
                        <i class="fa fa-dashboard"></i><span>專題管理</span>
                    </a>
                </li>

                <li class="active treeview">
                    <a href="/admin/notices">
                        <i class="fa fa-dashboard"></i><span>通知管理</span>
                    </a>
                </li>
            </ul>
        </sectin>
        <!-- /.sidebar-->
    </aside>
    <!-- Content Wrapper.Contains page content-->
    <div class="content-wrapper">

        <!-- Main content-->
        <section class="content">
            <!-- small box (Stat box)-->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box-->
                    歡迎
                </div>
            </div>
        </section>
            <!-- /.content -->
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
