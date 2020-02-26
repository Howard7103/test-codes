@extends("layout.main")

@section("content")

        <div class="col-sm-8 blog-main">
            <form class="form-horizontal" action="/user/{{$user->id}}/setting" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">用戶名</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name"  value="{{$user->name}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">頭像</label>
                    <div class="col-sm-2">
                        <input type="file" class="file-loading preview_input" value="用戶名" style="width:72px" name="avatar">
                        <img class="preview_img" src="/photo/1.jpg" alt="" class="img-rounded" style="border-radius: 500px;">
                    </div>
                </div>
                <button type="submit" class="btn btn-default">修改</button>
            </form>
            <br>

        </div>


        @endsection
