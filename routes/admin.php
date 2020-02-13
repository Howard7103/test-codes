<?php

//管理後台
Route::group(['prefix' => 'admin'],function(){

    //登錄展示頁面
    Route::get('/login','\App\Admin\Controllers\LoginController@index');

    //登錄行為
    Route::get('/login','\App\Admin\Controllers\LoginController@login');

    //登出行為
    Route::get('/logout','\App\Admin\Controllers\LoginController@logout');

    //首頁
    Route::get('/home','\App\Admin\Controllers\HomeController@index');
});

