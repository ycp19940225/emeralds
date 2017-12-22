<?php
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    //需要认证
    $api->group(['namespace' => 'App\Http\Controllers\Api\Controller'], function ($api) {
        $api->group(['middleware'=>'jwt.auth','providers' => 'jwt'], function ($api) {
            $api->get('users/index', 'UserController@index');
            $api->get('users/refreshToken', 'UserController@refreshToken');
            $api->post('users/logo', 'UserController@logo');
            $api->post('users/edit', 'UserController@edit');
            $api->post('users/agent/upload','UserController@upload_agent_pic');
            $api->post('users/agent/add','UserController@user_to_agent');
        });
    });
    //不需要认证
    $api->group(['namespace' => 'App\Http\Controllers\Api\Controller'], function ($api) {
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
});