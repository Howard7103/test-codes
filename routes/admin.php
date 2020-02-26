<?php

//管理後台
Route::group(['prefix' => 'admin'],function(){

    //登錄展示頁面
    Route::get('/login','\App\Admin\Controllers\LoginController@index');

    //登錄行為
    Route::post('/login','\App\Admin\Controllers\LoginController@login')->name('login');

    //登出行為
    Route::get('/logout','\App\Admin\Controllers\LoginController@logout');

    Route::group(['middleware' => 'auth:admin'],function(){
        //首頁
        Route::get('/home','\App\Admin\Controllers\HomeController@index');

        Route::group(['middleware' => 'can:system'],function(){

            //管理人員模塊
            Route::get('/users','\App\Admin\Controllers\UserController@index');
            Route::get('/users/create','\App\Admin\Controllers\UserController@create');
            Route::post('/users/store','\App\Admin\Controllers\UserController@store');
            Route::get('/users/{user}/role','\App\Admin\Controllers\UserController@role');  //查詢某用戶的角色
            Route::post('/users/{user}/role','\App\Admin\Controllers\UserController@storeRole');
            //角色
            Route::get('/roles','\App\Admin\Controllers\RoleController@index');  //角色列表頁
            Route::get('/roles/create','\App\Admin\Controllers\RoleController@create'); //角色創建頁
            Route::post('/roles/store','\App\Admin\Controllers\RoleController@store');
            Route::get('/roles/{role}/permission','\App\Admin\Controllers\RoleController@permission');  //角色和權限操作列表頁
            Route::post('/roles/{role}/permission','\App\Admin\Controllers\RoleController@storePermission');
            //權限
            Route::get('/permissions','\App\Admin\Controllers\PermissionController@index');  //權限列表頁
            Route::get('/permissions/create','\App\Admin\Controllers\PermissionController@create'); //權限創建頁
            Route::post('/permissions/store','\App\Admin\Controllers\PermissionController@store');

        });

        //文章管理權限 僅限超級root (system)及 文章管理者(post)使用
        Route::group(['middleware' => 'can:post'],function() {
            //審核文章頁面
            Route::get('/posts','\App\Admin\Controllers\PostController@index');
            Route::post('/posts/{post}/status','\App\Admin\Controllers\PostController@status');
        });

        //專題管理權限 僅限超級root (system)及 專題管理者(topic)使用
        Route::group(['middleware' => 'can:topic'],function() {
            Route::resource('topics', '\App\Admin\Controllers\TopicController', ['only' => ['index', 'create', 'store', 'destroy']]);
            });

        //通知管理權限 僅限超級root (system)及 通知管理者(notice)使用
        Route::group(['middleware' => 'can:notice'],function() {
            Route::resource('notices', '\App\Admin\Controllers\NoticeController', ['only' => ['index', 'create', 'store']]);
        });

        });

});

