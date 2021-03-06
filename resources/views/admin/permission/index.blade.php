@extends('admin.layout.main')

@section('content')
        <!-- Main content-->
        <section class="content">
            <div class="row">
                <div class="col-lg-10 col-xs-6">
                    <div class="box">

                        <div class="box-header with-border">
                            <h3 class="box-title">權限列表</h3>
                        </div>

                        <a type="button" class="btn" href="/admin/permissions/create">增加權限</a>

                        <div class="box-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>權限名稱</th>
                                        <th>描述</th>
                                        <th>操作</th>
                                    </tr>
                                @foreach($permissions as $permission)
                                <tr>
                                    <td>{{$permission->id}}.</td>
                                    <td>{{$permission->name}}</td>
                                    <td>{{$permission->description}}</td>
                                    <td>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{$permissions->links()}}
                    </div>
                </div>
            </div>
        </section>
@endsection
