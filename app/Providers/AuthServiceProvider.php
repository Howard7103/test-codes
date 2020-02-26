<?php

namespace App\Providers;

use App\AdminPermission;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\Post' => 'App\Policies\PostPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        $permissions = AdminPermission::all();      //獲取所有權限
        foreach($permissions as $permission)
        {
            Gate::define($permission->name,function($user) use($permission){         //Gate方法：當某使用者擁有管理者權限時,則顯示左側管理者功能欄位
                return $user->hasPermission($permission);
            });
        }
    }
}
