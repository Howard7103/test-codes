<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //個人設置頁面
    public function setting()
    {
        return view('user.setting');
    }

    //個人設置行為
    public function settingStore()
    {

    }
}
