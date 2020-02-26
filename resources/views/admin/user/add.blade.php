@extends("admin.layout.main")

@section("content")
        <!-- Main content-->
        <section class="content">
            <!-- Small boxes (Stat box)-->
            <div class="row">
                <div class="col-lg-10 col-xs-6">     <!-- col-lg => "較大的桌面(網格寬度)"   col-xs => "手機(網格寬度)"-->
                    <div class="box">

                        <!-- /.box.header-->
                        <div class="box box-primary">
                            <div class="box-header with-border"></div>
                            <h3 class="box-title">增加用戶</h3>
                        </div>
                        <!-- /.box.header-->
                        <!-- form start-->
                        <form role="form" action="/admin/users/store" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">用戶名</label>
                                    <input type="text" class="form-control" name="name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">密碼</label>
                                    <input type="text" class="form-control" placeholder="Password" name="password">
                                </div>
                            </div>
                                <!-- /.box.body-->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">提交</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection
