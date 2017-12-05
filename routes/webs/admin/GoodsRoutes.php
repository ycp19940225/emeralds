<?php
//分类
Route::any('/cat/add','CatController@add');
Route::post('/cat/addOperate','CatController@addOperate');
Route::get('/cat/index','CatController@index');
Route::get('/cat/edit/{id}','CatController@edit')->where('id', '[0-9]+');
Route::post('/cat/editOperate','CatController@editOperate');
Route::post('/cat/delete','CatController@delete');
Route::post('/cat/getChild','CatController@getChild');
Route::post('/cat/getAttr','CatController@getAttr');
//属性
Route::get('/attr/edit/{id}','AttrController@edit')->where('id', '[0-9]+');
Route::post('/attr/editOperate','AttrController@editOperate');

//商品
Route::any('/goods/add','GoodsController@add');
Route::post('/goods/addOperate','GoodsController@addOperate');
Route::get('/goods/index','GoodsController@index');
Route::get('/goods/edit/{id}','GoodsController@edit')->where('id', '[0-9]+');
Route::post('/goods/editOperate','GoodsController@editOperate');
Route::post('/goods/delete','GoodsController@delete');
Route::post('/goods/uploadImg','GoodsController@uploadImg');
