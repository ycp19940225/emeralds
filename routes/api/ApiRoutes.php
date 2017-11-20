<?php
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['namespace' => 'App\Http\Controllers\Api\Controller'], function ($api) {
        $api->group(['middleware'=>['auth:api']], function ($api) {

            //namespace声明路由组的命名空间，因为上面设置了"prefix"=>"api",所以以下路由都要加一个api前缀，比如请求/api/users_list才能访问到用户列表接口

            $api->get('users', 'UserController@show');


        });

    });
});