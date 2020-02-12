@extends("layout.main")

@section("content")
        <div class="col-sm-8">
            <blockquote>
                <p><img src="/photo/1.jpg" alt="" class="img-rounded" style="border-radius: 500px; height: 40px;">{{$user->name}}</p>


                <footer>關注：{{$user->stars_count}} | 粉絲：{{$user->fans_count}} | 文章：{{$user->posts_count}}</footer>

                @include('user.badges.like',['target_user'=> $user])

            </blockquote>

            </div>

    <div class="col-sm-8 blog-main">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">文章</a></li>
                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">關注</a></li>
                <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">粉絲</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    @foreach($posts as $post)
                    <div class="clog-post" style="margin-top: 30px;">
                        <p class=""><a href="/user/{{$post->user->id}}">{{$post->user->name}}</a> {{$post->created_at->diffForHumans()}}</p>

                        <p class=""><a href="/posts/{{$post->id}}">{{$post->title}}</a></p>

                        <p>{!! Str::limit($post->content, 100,'...')!!}</p>
                    </div>
                        @endforeach
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    @foreach($susers as $user)
                        <div class="blog-post" style="margin-top: 30px">
                            <p class="">{{$user->name}}</p>
                            <p class="">關注：{{$user->stars_count}} | 粉絲：{{$user->fans_count}} | 文章：{{$user->posts_count}}</p>

                            @include('user.badges.like',['target_user'=> $user])
                    </div>
                        @endforeach
                </div>

                <!-- /.tab-pane-->
                <div class="tab-pane" id="tab_3">
                    @foreach($fusers as $user)
                        <div class="blog-post" style="margin-top: 30px">
                            <p class="">{{$user->name}}</p>
                            <p class="">關注：{{$user->stars_count}} | 粉絲：{{$user->fans_count}} | 文章：{{$user->posts_count}}</p>

                            @include('user.badges.like',['target_user'=> $user])
                        </div>
                    @endforeach
                </div>

                <!-- /.tab-pane-->
            </div>

            <!-- /.tab-content-->
        </div>

    </div><!-- /.blog-main-->

@endsection
