<?php
//轮播图
Route::any('/slide/add','SlideController@add');
Route::post('/slide/addOperate','SlideController@addOperate');
Route::get('/slide/index','SlideController@index');
Route::get('/slide/edit/{id}','SlideController@edit')->where('id', '[0-9]+');
Route::post('/slide/editOperate','SlideController@editOperate');
Route::post('/slide/delete','SlideController@delete');
//文章分类
Route::any('/articlecat/add','ArticleCatController@add');
Route::post('/articlecat/addOperate','ArticleCatController@addOperate');
Route::get('/articlecat/index','ArticleCatController@index');
Route::get('/articlecat/edit/{id}','ArticleCatController@edit')->where('id', '[0-9]+');
Route::post('/articlecat/editOperate','ArticleCatController@editOperate');
Route::post('/articlecat/delete','ArticleCatController@delete');
//文章
Route::any('/article/add','ArticleController@add');
Route::post('/article/addOperate','ArticleController@addOperate');
Route::get('/article/index','ArticleController@index');
Route::get('/article/edit/{id}','ArticleController@edit')->where('id', '[0-9]+');
Route::post('/article/editOperate','ArticleController@editOperate');
Route::post('/article/delete','ArticleController@delete');