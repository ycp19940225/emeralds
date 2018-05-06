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
//欢迎页
Route::any('/page/add','PageController@add');
Route::post('/page/addOperate','PageController@addOperate');
Route::get('/page/index','PageController@index');
Route::get('/page/edit/{id}','PageController@edit')->where('id', '[0-9]+');
Route::post('/page/editOperate','PageController@editOperate');
Route::post('/page/delete','PageController@delete');
//名家
Route::any('/famous/add','FamousController@add');
Route::post('/famous/addOperate','FamousController@addOperate');
Route::get('/famous/index','FamousController@index');
Route::get('/famous/edit/{id}','FamousController@edit')->where('id', '[0-9]+');
Route::post('/famous/editOperate','FamousController@editOperate');
Route::post('/famous/delete','FamousController@delete');
//名家商品
Route::get('/famous/famousGoods','FamousController@famousGoods');
Route::post('/famous/goodsToFamous','FamousController@goodsToFamous');
Route::post('/famous/getFamousGoods','FamousController@getFamousGoods');
Route::post('/famous/deleteFamousGoods','FamousController@deleteFamousGoods');

//优惠券
Route::any('/coupon/add','CouponController@add');
Route::post('/coupon/addOperate','CouponController@addOperate');
Route::get('/coupon/index','CouponController@index');
Route::get('/coupon/edit/{id}','CouponController@edit')->where('id', '[0-9]+');
Route::post('/coupon/editOperate','CouponController@editOperate');
Route::post('/coupon/delete','CouponController@delete');

//视频
Route::any('/video/add','VideoController@add');
Route::post('/video/addOperate','VideoController@addOperate');
Route::get('/video/index','VideoController@index');
Route::get('/video/edit/{id}','VideoController@edit')->where('id', '[0-9]+');
Route::post('/video/editOperate','VideoController@editOperate');
Route::post('/video/delete','VideoController@delete');