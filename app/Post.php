<?php

namespace App;

use App\Model;

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

}
