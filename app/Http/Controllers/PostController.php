<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Zan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //列表頁面
    public function index()
    {


        $posts = Post::orderBy('created_at','desc')->withCount(["comments","zans"])->paginate(6);
        return view("post/index",compact('posts'));
    }

    //詳情頁面
    public function show(Post $post)
    {
        $post -> load('comments');
        return view("post/show",compact('post'));
    }

    //創建頁面
    public function create()
    {
        return view("post/create");
    }

    //創建邏輯
    public function store(Post $post)
    {
        //驗證
        $this->validate(\request(),[
           'title' => 'required|string|max:100|min:5',
            'content' => 'required|string|min:10',
        ]);

       $post = new Post();
       $post -> user_id = Auth::id();
       $post -> title = \request('title');
       $post -> content = \request('content');
       $post -> save();

       return redirect("/posts");
    }

    //編輯頁面
    public function edit(POst $post)
    {
        return view("post/edit",compact('post'));
    }

    //編輯邏輯
    public function update(Post $post)
    {
        //驗證
        $this->validate(\request(),[
            'title' => 'required|string|max:100|min:5',
            'content' => 'required|string|min:10',
        ]);

        $this->authorize('update',$post);          //用戶修改文章授權檢查 （如使用者3要修改使用者1的文章,則會拋出錯誤）

        //邏輯
        $post ->title = \request('title');
        $post -> content = \request('content');
        $post -> save();

        //渲染
        return redirect("/posts/{$post->id}");

    }

    //刪除邏輯
    public function delete(Post $post)
    {
        //TODO:用戶權限驗證
        $this->authorize('delete',$post);          //用戶修改文章授權檢查 （如使用者3要修改使用者1的文章,則會拋出錯誤）
        //第一個參數為動作,ex:CRUD   第二個參數：變數 ex:$post

        $post->delete();

        return redirect("/posts");
    }

    //提交評論
    public function comment(Post $post)
    {
        //驗證
        $this->validate(\request(),[
            'content'=> 'required|min:3',
        ]);

        //邏輯
        $comment = new Comment();
        $comment->user_id = Auth::id();
        $comment->content = \request('content');
        $post->comments()->save($comment);

        //渲染
        return back();
    }

    public function zan(Post $post)
    {
        $param = [
            'user_id' => Auth::id(),
            'post_id' => $post->id,
        ];

        Zan::firstOrCreate($param);            //firstOrCreate方法：先查找資料表中是否有資料,如果有則查找出來,沒有則創建一筆

        return back();
    }

    public function unzan(Post $post)
    {
        $post->zan(Auth::id())->delete();

        return back();
    }




    public function personal()
    {
        return view('personal');
    }


    public function question()
    {
        return view('question');
    }

}
