<?php

namespace  App\Http\Controllers;

use App\Notice;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{
    public function index()
    {
        //獲取當前用戶
        $user = Auth::user();

        $notices = $user->notices;

        return view('notice.index',compact('notices'));
    }
}
