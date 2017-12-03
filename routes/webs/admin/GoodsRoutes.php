<?php
//分类
Route::any('/cat/add','CatController@add');
Route::post('/cat/addOperate','CatController@addOperate');
Route::get('/cat/index','CatController@index');
Route::get('/cat/edit/{id}','CatController@edit')->where('id', '[0-9]+');
Route::post('/cat/editOperate','CatController@editOperate');
Route::post('/cat/delete','CatController@delete');
