@extends("layout.main")

@section("content")
        <div class="col-sm-8 blog-main">
        <div>
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
        <!-- Indicators 指標 -->
        <ol class="carousel-indicators">   <!-- Carousel 輪播-->
            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example" data-slide-to="1"></li>
            <li data-target="#carousel-example" data-slide-to="2"></li>
        </ol>
        <!--Wrapper for slides 幻燈片包裝器-->
        <div class="carousel-inner" >
            <div class="item active">
                <img src="photo/44287191gw1excbq6tb3rj21400migrz.jpg" alt="..." />
                <div class="carousel-caption">...</div>
            </div>
            <div class="item">
                <img src="photo/44287191gw1excbq5iwm6j21400min3o.jpg" alt="..." />
                <div class="carousel-caption">...</div>
            </div>
            <div class="item">
                <img src="photo/44287191gw1excbq4kx57j21400migs4.jpg" alt="..." />
                <div class="carousel-caption">...</div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span></a><!-- glyphicon glyphicon-chevron-left為Bootstrap向左輪播箭頭 -->
        <a class="right carousel-control" href="#carousel-example" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span></a><!-- glyphicon glyphicon-chevron-left為Bootstrap向右輪播箭頭 -->
    </div>
            </div>  <div style="height: 20px;">
        </div>
            <div>
                @foreach($posts as $post)
                <div class="blog-post">
                    <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>

                    <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by <a href="/user/5">{{$post->user-> name}}</a></p>

                    {!! Str::limit($post->content, 100, '...') !!}       <!-- Str::limit => 限制文章在畫面上出現多少字,此處為限制100字,超過100字則以...代替 -->
                    <p class="blog-post-meta">讚 {{$post->zans_count}} | 評論 {{$post->comments_count}} </p>

                </div>
                @endforeach

                {{$posts->links()}}         <!-- Laravel分頁邏輯 -->

            </div>    <!-- /.blog-main -->
        </div>
@endsection
