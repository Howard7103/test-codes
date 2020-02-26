<?php

namespace App;

use App\Model;
class AdminRole extends Model
{
    //
    protected $table = "admin_roles";


    //獲取當前角色的所有權限 (多對多關係)
    public function permissions()
    {
       return $this->belongsToMany(\App\AdminPermission::class,'admin_permission_role','role_id','permission_id')->withPivot(['permission_id','role_id']);
    }

    //給角色賦予權限
    public function grantPermission($permission)
    {
        return $this->permissions()->save($permission);
    }

    //取消角色賦予的權限
    public function deletePermission($permission)
    {
        return $this->permissions()->detach($permission);
    }

    //判斷角色是某有權限
    public function hasPermission($permission)
    {
        //contains方法，用來判斷該對象是否存在於集合內
        return $this->permissions->contains($permission);
                        //[集合]
    }

}
