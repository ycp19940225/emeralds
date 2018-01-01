<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/25
 * Time: 16:57
 */
//用户
Route::any('/users/add','UserController@add');
Route::post('/users/addOperate','UserController@addOperate');
Route::get('/users/index','UserController@index');
Route::get('/users/edit/{id}','UserController@edit')->where('id', '[0-9]+');
Route::post('/users/editOperate','UserController@editOperate');
Route::post('/users/delete','UserController@delete');
Route::post('/users/editScore','UserController@editScore');