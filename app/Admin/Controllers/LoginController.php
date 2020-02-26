<?php

namespace  App\Admin\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    //登錄展示頁
    public function index()
    {
        return view('admin.login.index');
    }

    //登錄行為
    public function login()
    {
        //驗證
        $this->validate(\request(),[
            'name' => 'required|min:2',
            'password' => 'required|min:5|max:10',
        ]);

        //邏輯
        $user = \request(['name','password']);
        $is_remember = boolval(\request('is_remember'));
        if(Auth::guard('admin')->attempt($user)){       //使用guard來嘗試登入user,如果登入成功則導向/admin/home(管理者首頁)
            return redirect('/admin/home ');
        }


        //渲染
        return Redirect::back()->withErrors("用戶名密碼不匹配");

    }

    //登出行為
    public function logout()
    {
        \Auth::guard("admin")->logout();
        return \redirect("/admin/login");
    }
}
