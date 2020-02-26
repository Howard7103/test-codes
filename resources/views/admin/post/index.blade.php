@extends('admin.layout.main')

@section('content')
        <!-- Main content-->
        <section class="content">
            <div class="row">
                <div class="col-lg-10 col-xs-6">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">文章列表</h3>
                        </div>
                        <!-- /.box.header-->
                        <div class="box-body">
                            <table class="table table-bordered">  <!-- table-bordered => 在表格和單元格的所有邊上添加邊框-->
                                <tbody>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>文章標題</th>
                                        <th>操作</th>
                                    </tr>
                                    @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-default post-audit" post-id="{{$post->id}}" post-action-status="1">通過</button>
                                            <button type="button" class="btn btn-block btn-default post-audit" post-id="{{$post->id}}" post-action-status="-1">拒絕</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$posts->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content-->
@endsection
