<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">                   <!--X-UA-Compatible設置IE兼容模式 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>登錄</title>

    <!-- Bootstrap core CSS-->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for surface/desktop Window 8 bug-->
    <link href="http://v3.bootcss.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="http://v3.bootcss.com/examples/signin/signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- [if It IE 9] -->
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>

    <!--[endif]-->
</head>

<body>

        <form class="form-signin" method="POST" action="/login">
            {{csrf_field()}}
            <h2 class="firm-signin-heading">請登錄</h2>
            <label for="inputEmail" class="sr-only">郵箱</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">密碼</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="1" name="is_remember"> 記住我
                </label>
            </div>
            @include('layout.error')

            <button class="btn btn-lg btn-primary btn-block" type="submit" >登錄</button>
            <a href="/register" class="btn btn-lg btn-primary btn-block">去註冊</a>
        </form>

</div> <!-- /container-->

</body>
</html>
