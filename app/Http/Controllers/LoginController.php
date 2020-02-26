<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    //登入頁面
    public function index()
    {
        return view('login.index');
    }

    //登入行為
    public function login()
    {
        //驗證
        $this->validate(\request(),[
            'email' => 'required|email',
            'password' => 'required|min:5|max:10',
            'is_remember' => 'integer',
        ]);

        //邏輯
        $user = \request(['email','password']);
        $is_remember = boolval(\request('is_remember'));
        if(Auth::attempt($user,$is_remember)){
            return redirect('/posts ');
        }


        //渲染
        return Redirect::back()->withErrors("郵箱密碼不匹配");

    }

    //登出行為
    public function logout()
    {
        Auth::logout();
        return \redirect('/login');

    }
}
