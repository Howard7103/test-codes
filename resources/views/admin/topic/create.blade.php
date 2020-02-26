@extends('admin.layout.main')

@section('content')
    <!-- Main content-->
    <section class="content">
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">增加專題</h3>
                        </div>

                        <form role="form" action="/admin/topics" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">專題名</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>

                            <div>
                                <button class="btn btn-primary" type="submit">提交</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
