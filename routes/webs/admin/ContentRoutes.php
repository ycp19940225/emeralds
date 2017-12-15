<?php
//轮播图
Route::any('/slide/add','SlideController@add');
Route::post('/slide/addOperate','SlideController@addOperate');
Route::get('/slide/index','SlideController@index');
Route::get('/slide/edit/{id}','SlideController@edit')->where('id', '[0-9]+');
Route::post('/slide/editOperate','SlideController@editOperate');
Route::post('/slide/delete','SlideController@delete');