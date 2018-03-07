<?php
//分类
Route::any('/cat/add','CatController@add');
Route::post('/cat/addOperate','CatController@addOperate');
Route::get('/cat/index','CatController@index');
Route::get('/cat/edit/{id}','CatController@edit')->where('id', '[0-9]+');
Route::post('/cat/editOperate','CatController@editOperate');
Route::post('/cat/delete','CatController@delete');
Route::post('/cat/getType','CatController@getType');
//类型
Route::any('/type/add','TypeController@add');
Route::post('/type/addOperate','TypeController@addOperate');
Route::get('/type/index','TypeController@index');
Route::get('/type/edit/{id}','TypeController@edit')->where('id', '[0-9]+');
Route::post('/type/editOperate','TypeController@editOperate');
Route::get('/type/addBatch','TypeController@addBatch');
Route::post('/type/addBatchOperate','TypeController@addBatchOperate');
Route::post('/type/delete','TypeController@delete');

//商品
Route::any('/goods/add','GoodsController@add');
Route::post('/goods/addOperate','GoodsController@addOperate');
Route::get('/goods/index','GoodsController@index');
Route::get('/goods/edit/{id}','GoodsController@edit')->where('id', '[0-9]+');
Route::post('/goods/editOperate','GoodsController@editOperate');
Route::post('/goods/delete','GoodsController@delete');
Route::post('/goods/uploadImg','GoodsController@uploadImg');
Route::post('/goods/check','GoodsController@check');

//订单
Route::any('/order/add','OrderController@add');
Route::post('/order/addOperate','OrderController@addOperate');
Route::get('/order/index','OrderController@index');
Route::get('/order/edit/{id}','OrderController@edit')->where('id', '[0-9]+');
Route::post('/order/editOperate','OrderController@editOperate');
Route::post('/order/delete','OrderController@delete');
Route::post('/order/check','OrderController@check');