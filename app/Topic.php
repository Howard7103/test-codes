<?php

namespace App;

use App\Model;

class Topic extends Model
{
    //屬於這個專題的所有文章
    public function posts()     //運用belongsToMany 多對多的關係,一篇文章有多個專題,一個專題有多個文章
    {
        //第一個參數：模型的class方法,輸出 = \App\Post, 第二個參數：post跟topic關聯的資料表, 第三個參數:topic的主鍵, 第四個參數: 跟post關聯的id
        return $this->belongsToMany(\App\Post::class,'post_topics','topic_id','post_id');
    }

    //專題的文章數,用於withCount
    public function postTopics()
    {
        return $this->hasMany(\App\PostTopic::class,'topic_id');
    }
}
