<?php

namespace  App\Admin\Controllers;


use App\AdminRole;
use App\AdminUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //管理員列表頁面
    public function index()
    {
        $users = AdminUser::paginate(10);
        return view("admin.user.index",compact('users'));
    }

   //管理員創建頁面
    public function create()
    {
        return view("admin.user.add");
    }

    //管理員資料存入DB
    public function store()
    {
        //驗證
        $this->validate(request(),[
            'name' => 'required|min:3',
            'password' => 'required',
        ]);

        //邏輯
        $name = request('name');
        $password = bcrypt(request('password'));
        AdminUser::create(compact('name','password'));

        //渲染
        return redirect('/admin/users');

    }


    //用戶角色頁面
    public function role(\App\AdminUser $user)
    {
        $roles = AdminRole::all();
        $myRoles = $user->roles;
        return view('admin.user.role',compact('roles','myRoles','user'));
    }


    //儲存用戶角色
    public function storeRole(\App\AdminUser $user)
    {
        $this->validate(request(),[
            'roles' => 'required|array'
        ]);

        $roles = AdminRole::findMany(request('roles'));
        $myRoles = $user->roles;

        //要增加的
        $addRoles = $roles->diff($myRoles);    //由roles傳上來的角色跟myRoles(自身所有的角色)做比較
        foreach ($addRoles as $role)
        {
            $user->assignRole($role);
        }


        //要刪除的
        $deleteRole = $myRoles -> diff($roles);
        foreach($deleteRole as $role)
        {
            $user->deleteRole($role);
        }

        return back();
    }


}
