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

Route::get('/', function () {
    return view('welcome');
});

/*******************************backend*********************************/
Route::group(['prefix'=>'admin','middleware'=>'admin', 'namespace'=>'Admin'], function(){
    require (__DIR__ . '/webs/admin/AdminRoutes.php');
    require (__DIR__ . '/webs/admin/GoodsRoutes.php');
});

//不做权限,登录
Route::group(['prefix'=>'admin','middleware'=>'web', 'namespace'=>'Admin'], function(){
    //后台登陆
    Route::get('/login','LoginController@login');
    Route::post('/doLogin','LoginController@doLogin');
    Route::get('/logout','LoginController@logout');
});
//不做权限，注册
Route::group(['prefix'=>'','middleware'=>'web', 'namespace'=>'Admin'], function(){
    //代理商注册
    Route::get('/agent/register','AgentController@register');
    Route::post('/agent/doRegister','AgentController@doRegister');
});
