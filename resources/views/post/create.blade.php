@extends("layout.main")

@section("content")
        <div class="col-sm-8 blog-main">
            <form action="/posts" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>標題</label>
                    <input name="title" type="text" class="form-control" placeholder="這裡是標題">
                </div>

                <div class="form-group">
                    <label>內容</label>
                    <textarea id="textarea" style="height:400px; max-height: 500px;" name="content" class="form-control" placeholder="這裡是內容"></textarea>

                </div>
               @include("layout.error")
                <button type="submit" class="btn btn-default">提交</button>
            </form>
            <br>
        </div><!-- /.blog.main-->
@endsection
