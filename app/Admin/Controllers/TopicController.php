<?php

namespace  App\Admin\Controllers;

use App\Topic;

class TopicController extends Controller
{
    //首頁
    public function index()
    {
        $topics = Topic::all();
        return view('admin.topic.index',compact('topics'));
    }

    //新增頁面
    public function create()
    {
        return view('admin.topic.create');
    }

    //新增儲存行為
    public function store()
    {
        $this->validate(request(),[
            'name' => 'required|string'
        ]);

        Topic::create(['name' => request('name')]);

        return redirect('/admin/topics');
    }

    //刪除操作
    public function destroy(\App\Topic $topic) //在resource method裡, Delete方法是由destroy進行操作,url => /photos/{photo}為模型綁定,故此地方寫法也要為模型綁定
    {
        $topic->delete();

        return [
            'error'=> 0,
            'msg' => ''
        ];
    }
}
