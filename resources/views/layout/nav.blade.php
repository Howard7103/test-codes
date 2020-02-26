<div class="blog-masthead">
    <div class="container">
        <ul class="nav navbar-nav navbar-left">
            <li>
                <a class="blog-nav-item"  href="/posts">首頁</a>
            </li>
            <li>
                <a class="blog-nav-item" href="/posts/create">寫文章</a>
            </li>
            <li>
                <a class="blog-nav-item" href="/notices">通知</a>
            </li>
            <li>
                <input name="query" type="text" value="" class="form-control" style="margin-top: 10px" placeholder="搜索詞">
            </li>
            <li>
                <button class="btn btn-default" style="margin-top: 10px" type="submit">Go!</button>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <div>
                    <img src="/photo/1.jpg" alt="" class="img-rounded" style="border-radius:500px; height:30px">
                    <!-- aria-haspopup="true"表示點擊的時候會出現菜單或浮動元素   aria-expanded="false"表示元素不是展開的狀態 -->
                    <a href="#" class="blog-nav-item dropdown-toggle" data-toggle="dropdown" role="button"  aria-haspopup="true" aria-expanded="false">{{\Auth::user()->name}}<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/user/{{\Auth::id()}}">我的主頁</a></li>
                        <li><a href="/user/5/setting">個人設置</a></li>
                        <li><a href="/logout">登出</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
