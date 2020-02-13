<?php

namespace App\Http\Controllers;

use App\PostTopic;
use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    //專題詳情頁
    public  function show(Topic $topic)
    {
        //帶文章數的專題
        $topic = Topic::withCount('postTopics')->find($topic->id);

        //專題的文章列表,按照創建時間倒敘排列,前10個
        $posts = $topic->posts()->orderBy('created_at','desc')->take(10)->get();

        //屬於我的文章,但是未投稿
        $myposts = \App\Post::authorBy(\Auth::id())->topicNotBy($topic->id)->get();

        return view('topic.show',compact('topic','posts','myposts'));
    }


    //投稿
    public function submit(Topic $topic)
    {
        //驗證
        $this->validate(request(),[
           'post_ids' => 'required|array',
        ]);

        //邏輯
        $post_ids = request('post_ids');    //獲取post_ids
        $topic_id = $topic->id;                 //獲取topic_id
        foreach ($post_ids as $post_id){        //利用foreach迴圈來循環查找有無topic_id,post_id有的話獲取出來,沒有的話則創建
            PostTopic::firstOrCreate(compact('topic_id','post_id'));
        }

        //渲染
        return back();
    }
}
