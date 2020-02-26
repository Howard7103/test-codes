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
                        <span class="hidden-xs">{{\Illuminate\Support\Facades\Auth::guard("admin")->user()->name}}</span>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <duv class="pull-right">
                                <a href="/admin/logout" class="btn btn-default btn-flat">登出</a>
                            </duv>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
