<?php

namespace  App\Admin\Controllers;

class HomeController extends Controller
{
    //首頁
    public function index()
    {
        return view('admin.home.index');
    }

    //登錄行為
    public function login()
    {

    }

    //登出行為
    public function logout()
    {

    }
}
