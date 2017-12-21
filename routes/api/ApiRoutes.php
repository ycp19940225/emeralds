<?php
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['namespace' => 'App\Http\Controllers\Api\Controller'], function ($api) {
        //需要认证
        $api->group(['middleware'=>'jwt.auth','providers' => 'jwt'], function ($api) {
            $api->get('users/index', 'UserController@index');
            $api->get('users/refreshToken', 'UserController@refreshToken');
        });
        //不需要认证
        $api->group(['middleware'=>['api']], function ($api) {
            //用户
            $api->post('users/register', 'UserController@register');
            $api->post('users/login', 'UserController@login');
            //商品
            $api->get('goods', 'GoodsController@all');
            //分类
            $api->get('cats', 'CatController@all');
        });

    });
});