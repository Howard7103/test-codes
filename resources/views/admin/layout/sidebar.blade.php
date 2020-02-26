<aside class="main-sidebar">

    <sectin class="sidebar">

        <ul class="sidebar-menu">
            @can("system")
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
            @endcan
            @can("post")
            <li class="active treeview">
                <a href="/admin/posts">
                    <i class="fa fa-dashboard"></i><span>文章管理</span>
                </a>
            </li>
            @endcan
                @can("topic")
            <li class="active treeview">
                <a href="/admin/topics">
                    <i class="fa fa-dashboard"></i><span>專題管理</span>
                </a>
            </li>
            @endcan
                @can("notice")
            <li class="active treeview">
                <a href="/admin/notices">
                    <i class="fa fa-dashboard"></i><span>通知管理</span>
                </a>
            </li>
                    @endcan
        </ul>
    </sectin>
    <!-- /.sidebar-->
</aside>
