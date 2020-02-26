<?php

namespace App;

use App\Model;

class Comment extends Model
{
    //評論所屬文章
    public function post()
    {
        return $this -> belongsTo('App\Post');
    }

    //評論所屬用戶
    public function user()
    {
        return $this -> belongsTo('App\User');
    }




}
