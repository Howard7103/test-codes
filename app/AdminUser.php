<?php

namespace App;

use App\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use function foo\func;

class AdminUser extends Authenticatable
{
    //
    protected  $rememberTokenName = '';

    protected $guarded = []; //[]代表所有術組皆可注入

    //用戶有哪一些角色
    public function roles()
    {
        //用戶跟角色屬於多對多關係 用belongsToMany                                                                                               withPivot獲取關係表中的字段
        return $this->belongsToMany(\App\AdminRole::class, 'admin_role_user','user_id','role_id')->withPivot(['user_id','role_id']);
    }

    //判斷是否有某個角色,某些角色
    public function isInRole($roles)
    {
                     //intersect把兩個collection做集合對比
        return !!$roles->intersect($this->roles)->count();
              //兩個驚嘆號代表bool類型,判斷一個用戶是否有某個角色
    }

    //給用戶分配角色
    public function assignRole($role)
    {
        return $this->roles()->save($role);
    }

    //取消用戶分配的角色
    public function deleteRole($role)
    {
        //刪除多對多的關係 => detach方法
        return $this->roles()->detach($role);
    }

    //用戶是否有權限
    public  function  hasPermission($permission)
    {
        //查看這個擁有權限的roles是否跟isInRole裡面的角色相同
        return $this->isInRole($permission->roles);
    }


}
