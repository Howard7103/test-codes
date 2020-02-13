<?php

namespace App;

use App\Model;
use Illuminate\Database\Eloquent\Builder;


class Post extends Model
{

    //關聯用戶
    public function user()
    {
        return $this -> belongsTo('App\User','user_id');
    }

    //評論模型
    public function comments()
    {
        return $this -> hasMany('App\Comment')->orderBy('created_at','desc');
    }

    //和用戶進行關聯
    public function  zan($user_id)
    {
        return $this->hasOne(Zan::class)->where('user_id',$user_id);
    }

    //文章的所有讚
    public function zans()
    {
        return $this->hasMany(Zan::class);
    }

    //屬於某個作者的文章
    public function scopeAuthorBy(Builder $query,$user_id)
    {
        return $query->where('user_id',$user_id);
    }

    public function postTopics()
    {
        return $this->hasMany(\App\PostTopic::class,'post_id','id');
    }

    //不屬於某個專題的文章
    public function scopeTopicNotBy(Builder $query,$topic_id)
    {
        return $query->doesntHave('postTopics','and',function ($q) use ($topic_id)
        {
            $q->where('topic_id',$topic_id);
        });
    }

}
