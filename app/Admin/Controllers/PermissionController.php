<?php

namespace  App\Admin\Controllers;

use App\AdminPermission;
use App\AdminUser;

class PermissionController extends Controller
{
    //權限列表頁面
    public function index()
    {
        $permissions = AdminPermission::paginate(10);
        return view('admin.permission.index',compact('permissions'));
    }


    //權限創建頁面
    public function create()
    {
        return view('admin.permission.add');
    }


    //權限創建行為
    public function store()
    {
        $this->validate(request(),[
            'name' => 'required|min:3',
            'description' => 'required',
        ]);

        AdminPermission::create(request(['name','description']));

        return redirect('/admin/permissions');
    }

}
