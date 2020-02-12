<?php

namespace App\Http\Controllers;

use App\User;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function show(User $user)
    {

        //個人訊息, //包含關注/粉絲/文章數
        $user = User::withCount(['stars','fans','posts'])->find($user->id);


        //個人文章列表,取創建時間最新的前十條
        $posts = $user->posts()->orderby('created_at','desc')->take(10)->get();
        //從$user拿到posts資料,利用created_at做倒向排序,利用take方法取10筆資料,最後get資料


        //個人關注的用戶,包含關注用戶的關注/粉絲/文章數
        $stars = $user->stars;//獲取此用戶的所有粉絲
        $susers = User::whereIn('id',$stars->pluck('star_id'))->withCount(['stars','fans','posts'])->get();
        //從User模型利用whereIn方法驗證id是否存在,再用pluck將fan_id變成數組印出來


        //關注自我的粉絲用戶,包含粉絲用戶的關注/粉絲/文章數
        $fans = $user->fans;//獲取此用戶的所有粉絲
        $fusers = User::whereIn('id',$fans->pluck('fan_id'))->withCount(['stars','fans','posts'])->get();
        //從User模型利用whereIn方法驗證id是否存在,再用pluck將fan_id變成數組印出來



        return view('user.show',compact('user','posts','susers','fusers','user_all'));
    }

    //關注用戶
    public function fan(User $user)
    {
        $me = Auth::user();      //Auth全域變數,獲取當前用戶
        $me->dofan($user->id);   //傳遞此使用者的ID去給User.php的dofan方法做關注某人的動作

        return [
            'error' => 0,       //error = 0代表關注用戶成功
            'msg' => '',
        ];

    }

    public function unfan(User $user)
    {
        $me = Auth::user();     //Auth全域變數,獲取當前用戶
        $me -> doUnfan($user->id);     //傳遞此使用者的ID去給User.php的doUnfan方法做取消關注的動作

        return [
            'error' => 0,
            'msg' => ''
        ];

    }
}
