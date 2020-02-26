<?php

namespace App;

use App\Model;

class AdminPermission extends Model
{
    //
    protected $table = "admin_permissions";

    //權限屬於哪個角色
    public function roles()
    {
        return $this->belongsToMany(\App\AdminRole::class,'admin_permission_role','permission_id','role_id')->withPivot(['role_id','permission_id']);
    }
}
