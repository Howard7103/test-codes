<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //註冊頁面
    public function index()
    {
        return view('register.index');
    }

    //註冊行為
    public function register()
    {
        //驗證
        $this->validate(\request(),[
            'name' => 'required|min:3|unique:users,name',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:5|max:10|confirmed'

        ]);

        //邏輯
        $name = \request('name');
        $email = \request('email');
        $password = bcrypt(\request('password'));
        $user = Users::create(compact('name','email','password'));

        //渲染
        return redirect('/login');
    }


}
