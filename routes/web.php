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
Route::group(['prefix'=>'admin','middleware'=>'web', 'namespace'=>'Admin'], function(){
    require (__DIR__ . '/webs/admin/AdminRoutes.php');
});
