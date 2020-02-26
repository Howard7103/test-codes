<?php

namespace  App\Admin\Controllers;

use App\Notice;

class NoticeController extends Controller
{
    //首頁
    public function index()
    {
        $notices = Notice::all();
        return view('admin.notice.index',compact('notices'));
    }

    //新增頁面
    public function create()
    {
        return view('admin.notice.create');
    }

    //新增儲存行為
    public function store()
    {
        $this->validate(request(),[
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $notice = \App\Notice::create(request(['title','content']));                        //後台創建管理系統通知時,創建$notice,藉由$notice注入給 Jobs\SendMessage任務內,之後分發給隊列
        dispatch(new \App\Jobs\SendMessage($notice));  //dispatch => 創建邏輯發送

        return redirect('/admin/notices');
    }

}
