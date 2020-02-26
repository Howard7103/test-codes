<?php

namespace  App\Admin\Controllers;

use App\Post;

class PostController extends Controller
{
    //首頁
    public function index()
    {
        $posts = Post::withoutGlobalScope('avaiable')->where('status',0)->orderBy('created_at','desc')->paginate(10);
                        //where條件取出status = 0 的文章,orderBy做排序,paginate限制一個頁面出現幾筆資料

        return view('admin.post.index',compact('posts'));  //compact('posts')  =   'posts' => $post
    }

    //審核狀態
    public function status(Post $post)
    {
        //驗證
        $this->validate(request(),[
           'status' => 'required|in:-1,1',
        ]);

        //保存
        $post->status = request('status');
        $post->save();


        return [
          'error' => 0,
          'msg' => '',
        ];
    }

}
