<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//用戶模塊路由
Route::get('/register', 'RegisterController@index');
//註冊行為
Route::post('/register','RegisterController@register');
//登錄頁面
Route::get('/login','LoginController@index');
//登入行為
Route::post('/login','LoginController@login');
//登出行為
Route::get('logout','LoginController@logout');
//個人設置頁面
Route::get('/user/me/setting','UserController@setting');
//個人設置操作
Route::post('/user/me/setting','UserController@settingStore');



//文章列表頁
Route::get('/posts','PostController@index');
//創建文章
Route::get('/posts/create','PostController@create');     //新增文章頁面導向
Route::post('/posts','PostController@store');            //文章新增至資料庫
//文章詳情頁
Route::get('/posts/{post}','PostController@show');
//編輯文章
Route::get('/posts/{post}/edit','PostController@edit');  //文章編輯頁面導向
Route::put('/posts/{post}','PostController@update');     //文章編輯更改至資料庫


//刪除文章
Route::get('/posts/{post}/delete','PostController@delete');

//評論提交
Route::post('/posts/{post}/comment','PostController@comment');

//讚
Route::get('/posts/{post}/zan','PostController@zan');
//取消讚
Route::get('/posts/{post}/unzan','PostController@unzan');

//個人中心
Route::get('/user/{user}','UserController@show');
Route::post('/user/{user}/fan','UserController@fan');
Route::post('/user/{user}/unfan','UserController@unfan');

//專題頁面
Route::get('/topic/{user}','PostController@question');

//通知頁面
Route::get('/posts/me/notice','PostController@notice');

//搜索頁面
Route::get('/posts/me/search','PostController@search');
