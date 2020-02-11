@extends("layout.main")

@section("content")
    <div class="container">

        <div class="blog-header">
        </div>

        <div class="row">

        <div class="col-sm-8">
            <blockquote>
                <p>旅遊</p>
                <footer>文章：4</footer>
                <button class="btn btn-defalut topic-submit" data-toggle="#topic_submit_midal" topic_id="1" _token="MESUY3topeHgvFqsy9EcM916UWQq6khiGHM91wHy" type="button">投稿</button>
            </blockquote>
        </div>

            <div class="modal fade" id="topic_submit_modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span></span></button>
                            <h4 class="modal-title" id="myModalLabel">我的文章</h4>
                        </div>

                        <div class="modal-body">
                            <form action="/topic/1/submit">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="post_ids[]" value="56">
                                        sdasfasffa
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="post_ids[]" value="57">
                                        xzcdfdsf
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="post_ids[]" value="58">
                                        反對反對反對反對反對
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="post_ids[]" value="59">
                                        贊成贊成贊成
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="post_ids[]" value="60">
                                        中壢中壢中壢
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="post_ids[]" value="61">
                                        沒意見沒意見
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="post_ids[]" value="62">
                                        你好你好
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-default">投稿</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-8  blog-main">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="$tab_1" data-toggle="tab" aria-expanded="true">文章</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tabs-panel active" id="tab_1">
                            <div class="blog-post" style="margin-top: 30px;">
                                <p class=""><a href="/user/5">Howard</a>1個月前</p>
                                <p class=""><a href="/posts/55">123456789</a>233333</p>
                                <p>23333333333333333333333333333333333333333333333</p>
                            </div>

                            <div class="blog-post" style="margin-top: 30px;">
                                <p class=""><a href="/user/5">Howard</a>1個月前</p>
                                <p class=""><a href="/posts/54">123456789</a>djkasdh</p>
                                <p>ksldhsadwquidhqwdwqdoiwqdhsajjkvgdhgvfifgiqudaj</p>
                            </div>

                            <div class="blog-post" style="margin-top:30px">
                                <p class=""><a href="/user/51">Joseph</a>1個月前</p>
                                <p class=""><a href="/posts/1">Joseph Love Shi Juan</a></p>

                                <p>Consequatur quam at amet omnis sit explicabo eos. Molestiae temporibus libero quasi rem qui. Optio s...</p>
                            </div>

                            <div class="blog-post" style="margin-top: 30px">
                                <p class=""><a href="/user/52">Joseph</a>1個月前</p>
                                <p class=""><a href="/posts/2">sdasdwqeq</a></p>

                                <p>Consequatur quam at amet omnis sit explicabo eos. Molestiae temporibus libero quasi rem qui. Optio s...</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.tab-content-->
                </div>
            </div><!-- /.blog-main-->
    
@endsection
