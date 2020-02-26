<?php

namespace  App\Admin\Controllers;

use App\AdminPermission;
use App\AdminRole;
use App\AdminUser;

class RoleController extends Controller
{
    //角色列表頁面
    public function index()
    {
        $roles = AdminRole::paginate(10);
        return view('admin.role.index',compact('roles'));
    }


    //創建角色
    public function create()
    {
        return view('admin.role.add');
    }


    //創建角色行為
    public function store()
    {
        $this->validate(request(),[
           'name' => 'required|min:3',
            'description' => 'required',
        ]);

        AdminRole::create(request(['name','description']));

        return redirect('/admin/roles');
    }

    //角色權限關係頁面
    public function permission(\App\AdminRole $role)
    {
        //獲取全部權限
        $permissions = AdminPermission::all();
        //獲取當前角色的權限
        $myPermissions = $role->permissions;

        return view('admin.role.permission',compact('permissions','myPermissions','role'));
    }


    //儲存角色權限行為
    public function storePermission(\App\AdminRole $role)
    {
        $this->validate(request(),[
            'permissions' => 'required|array'
        ]);

        $permissions = AdminPermission::findMany(request('permissions'));
        $myPermissions = $role-> permissions;

        //對已經有的權限(新增操作)
        $addPermissions = $permissions->diff($myPermissions);   //獲取所有的權限($permissions)用 diff方法來跟我目前的權限($myPermissions)做差別比較
        foreach ($addPermissions as $permission)
        {
            $role->grantPermission($permission);     //比較出來後,調用AdminRole.php裡面的grantPermission方法做角色權限新增並儲存
        }

        //對已經有的權限（刪除操作）
        $deletePermissions = $myPermissions->diff($permissions);  //獲取目前角色的權限($myPermissions)用diff方法跟全部的權限($permissions)做差別比較
        foreach($deletePermissions as $permission)
        {
            $role->deletePermission($permission);    //比較出來後,調用AdminRole.php裡面的deletePermission方法做角色縣刪除並儲存
        }

        return redirect('/admin/roles');
    }

}
