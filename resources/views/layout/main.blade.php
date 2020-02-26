<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">                   <!--X-UA-Compatible設置IE兼容模式 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{csrf_token()}}">


    <title>laravel for blog</title>

    <!-- Bootstrap core CSS -->

    <link href="{{asset('https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">

    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- [if It IE 9] -->
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>

    <script src="/ckeditor/ckeditor.js"></script>

    <!--[endif]-->
</head>
<body>

@include("layout.nav")
<div class="container">

    <div class="blog-header">
    </div>

    <div class="row">
        @yield("content")

        <script>
            CKEDITOR.replace('textarea');
        </script>


        @include("layout.sidebar")
    </div>     </div> <!-- -/.row -->
</div><!-- /.container-->

@include("layout.footer")
<!-- Bootstrap core JavaScript
============================================ -->
<!-- Placed at the end of the document so the pages load faster-->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/js/ylaravel.js"></script>


</body>
</html>

