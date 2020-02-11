@extends("layout.main")

@section("content")
        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <div style="display:inline-flex">
                    <h2 class="blog-post-title">{{$post->title}}</h2>
                    @can('update',$post)      <!-- 登入的ID如果不等於Po文者的ID 則在標題旁不會顯示編輯跟刪除按鈕-->
                    <a style="margin:auto" href="/posts/{{$post->id}}/edit">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                    @endcan
                    @can('update',$post)      <!-- 登入的ID如果不等於Po文者的ID 則在標題旁不會顯示編輯跟刪除按鈕-->
                    <a style="margin:auto" href="/posts/{{$post->id}}/delete">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </a>
                    @endcan
                </div>

                <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by <a href="#">{{$post->user->name}}</a></p>


             {!! $post->content !!}     <!--  {}包驚嘆號 => 代表將html原生不動的輸出至頁面上  -->
            <div>

                @if($post->zan(\Illuminate\Support\Facades\Auth::id())->exists())
                    <a href="/posts/{{$post->id}}/unzan" type="button" class="btn btn-default btn-lg" style="margin-bottom: 5%">取消讚</a>
                @else
                <a href="/posts/{{$post->id}}/zan" type="button" class="btn btn-primary btn-lg" style="margin-bottom: 5%">讚</a>
               @endif

            </div>
            </div>

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">評論</div>

                <!-- List group -->
                <ul class="list-group">

                    @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <h5>{{$comment -> created_at}} by {{$comment -> user -> name}}</h5>
                        <div>
                            {{$comment->content}}
                        </div>
                    </li>
                        @endforeach
                </ul>

            </div>

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel panel-heading">發表評論</div>

                <!-- List group -->
                <ul class="list-group">

                    <form action="/posts/{{$post->id}}/comment" method="POST">
                        {{csrf_field()}}
                        <li class="list-group-item">
                            <textarea name="content" class="form-control" rows="10"></textarea>
                            @include("layout.error")

                            <button class="btn btn-default" type="submit">提交</button>
                        </li>
                    </form>
                </ul>
            </div>

        </div><!-- /.blog-main -->
@endsection

