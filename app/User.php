<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    //用戶的文章列表
    public  function posts()
    {
        return $this->hasMany(\App\Post::class,'user_id','id');
    }

    //關注我的Fan模型
    public  function fans()
    {
        return $this->hasMany(\App\Fan::class,'star_id','id');
    }

    //我關注的Fan模型
    public  function  stars()
    {
        return $this->hasMany(\App\Fan::class,'fan_id','id');
    }

    //我關注某人
    public function doFan($uid)
    {
        $fan = new Fan();
        $fan->star_id = $uid;
        $this->stars()->save($fan);
    }

    //取消關注某人
    public function doUnfan($uid)
    {
        $fan = new Fan();
        $fan->star_id = $uid;
        $this->stars()->delete($fan);
    }

    //當前用戶是否被uid關注
    public function hsafan($uid)
    {
        return $this->fans()->where('fan_id',$uid)->count();
    }

    //當前用戶是否關注uid
    public function hasStar($uid)
    {
        return $this->stars()->where('star_id',$uid)->count();
    }

    //用戶收到的通知
    public function notices()
    {
        return $this->belongsToMany(\App\Notice::class,'user_notice','user_id','notice_id')->withPivot(['user_id','notice_id']);
    }

    //給用戶增加通知
    public function addNotice($notice)
    {
        return $this->notices()->save($notice);
    }




    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
