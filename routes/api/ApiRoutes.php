<?php
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    //不需要认证
    $api->group(['namespace' => 'App\Http\Controllers\Api\Controller'], function ($api) {
        //管理员
        $api->group(['middleware'=>['app.admin','api']], function ($api) {
            $api->post('admin/login', 'AdminController@login');
        });
        $api->group(['middleware'=>['api']], function ($api) {
            //用户
            $api->post('users/register', 'UserController@register');
            $api->post('users/login', 'UserController@login');
            //商品
            $api->get('goods', 'GoodsController@all');
            $api->get('goods/{id}', 'GoodsController@one')->where('id', '[0-9]+');
            //分类
            $api->get('cats', 'CatController@all');
            //文章
            $api->get('articles', 'ArticleController@all');
            $api->get('articles/cats', 'ArticleController@cats');
            $api->get('articles/cat/{id}', 'ArticleController@cat')->where('id', '[0-9]+');
            $api->get('article/{id}', 'ArticleController@article')->where('id', '[0-9]+');
            //轮播图
            $api->get('slides', 'SlideController@all');
        });

    });
    //需要认证
    //用户代理商
    $api->group(['namespace' => 'App\Http\Controllers\Api\Controller'], function ($api) {
        $api->group(['middleware'=>'jwt.auth','providers' => 'jwt'], function ($api) {
            $api->get('users/index', 'UserController@index');
            $api->get('users/refreshToken', 'UserController@refreshToken');
            $api->post('users/logo', 'UserController@logo');
            $api->post('users/edit', 'UserController@edit');
            $api->post('users/agent/upload','UserController@upload_agent_pic');
            $api->post('users/agent/add','UserController@user_to_agent');
        });
        //商品
        $api->group(['middleware'=>'jwt.auth','providers' => 'jwt'], function ($api) {
            $api->post('goods/logo', 'GoodsController@uploadLogo');
            $api->post('goods/pic', 'GoodsController@uploadpic');
            $api->post('goods/add', 'GoodsController@add');
        });
    });
    //管理员
    $api->group(['namespace' => 'App\Http\Controllers\Api\Controller'], function ($api) {
        $api->group(['middleware'=>['app.admin','jwt.auth'],'providers' => 'jwt'], function ($api) {
            $api->get('admin/index', 'AdminController@index');
            $api->get('admin/refreshToken', 'AdminController@refreshToken');
            $api->post('admin/logo', 'AdminController@logo');
            $api->post('admin/edit', 'AdminController@edit');
        });
        //商品
        $api->group(['middleware'=>['app.admin','jwt.auth'],'providers' => 'jwt'], function ($api) {
            $api->post('admin/goods/logo', 'GoodsController@uploadLogo');
            $api->post('admin/goods/pic', 'GoodsController@uploadpic');
            $api->post('admin/goods/add', 'GoodsController@add');
        });
    });

});