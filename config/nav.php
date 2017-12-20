<?php

return [
    'NAV'=>[
        [
            'name'=>'管理员',
            'icon'=>'user',
            'access'=>[
                [
                    'name'=>'管理员列表',
                    'access'=>'admin/admin/index',
                    'icon'=>''
                ],
                [
                    'name'=>'角色列表',
                    'access'=>'admin/role/index',
                    'icon'=>''
                ],
            ]
        ],
        [
            'name'=>'供应商',
            'icon'=>'street-view',
            'access'=>[
                [
                    'name'=>'供应商列表',
                    'access'=>'admin/agent/index',
                    'icon'=>''
                ]

            ]
        ],
        [
            'name'=>'翡翠管理',
            'icon'=>'ticket',
            'access'=>[
                [
                    'name'=>'翡翠列表',
                    'access'=>'admin/goods/index',
                    'icon'=>''
                ],
                [
                    'name'=>'一级品类',
                    'access'=>'admin/cat/index',
                    'icon'=>''
                ],
                [
                    'name'=>'二级分类',
                    'access'=>'admin/type/index',
                    'icon'=>''
                ],


            ]
        ],
        [
            'name'=>'内容管理',
            'icon'=>'cog',
            'access'=>[
                [
                    'name'=>'文章分类管理',
                    'access'=>'admin/articlecat/index',
                    'icon'=>''
                ],
                [
                    'name'=>'文章管理',
                    'access'=>'admin/article/index',
                    'icon'=>''
                ],
                [
                    'name'=>'轮播图',
                    'access'=>'admin/slide/index',
                    'icon'=>''
                ],
                [
                    'name'=>'欢迎页管理',
                    'access'=>'admin/goods/index',
                    'icon'=>''
                ],
                [
                    'name'=>'客服管理',
                    'access'=>'admin/goods/index',
                    'icon'=>''
                ],
                [
                    'name'=>'消息推送',
                    'access'=>'admin/goods/index',
                    'icon'=>''
                ],
            ]
        ],
        [
            'name'=>'用户管理',
            'icon'=>'users',
            'access'=>[
                [
                    'name'=>'用户列表',
                    'access'=>'admin/goods/index',
                    'icon'=>''
                ],
            ]
        ],
        [
            'name'=>'订单管理',
            'icon'=>'truck',
            'access'=>[
                [
                    'name'=>'订单列表',
                    'access'=>'admin/goods/index',
                    'icon'=>''
                ],
            ]
        ],
    ],

];
