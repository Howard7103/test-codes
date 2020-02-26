<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">                   <!--X-UA-Compatible設置IE兼容模式 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>註冊</title>

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

<div class="container">

    <form class="form-signin" method="POST" action="/register">
        {{csrf_field()}}
        <h2 class="form-signin-heading">請註冊</h2>
        <label for="name" class="sr-only">名字</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="名字" required autofocus>
        <label for="inputEmail" class="sr-only">郵箱</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="郵箱" required autofocus>
        <label for="inputPassword" class="sr-only">密碼</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="密碼" required autofocus>
        <label class="sr-only">重複密碼</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="重複輸入密碼" required autofocus>

        @include('layout.error')

        <button class="btn btn-lg btn-primary btn-block" type="submit">註冊</button>
    </form>

</div> <!-- /container-->
</body>
</html>
