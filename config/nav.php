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
            'name'=>'代理商',
            'icon'=>'street-view',
            'access'=>[
                [
                    'name'=>'代理商列表',
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
                    'name'=>'分类列表',
                    'access'=>'admin/cat/index',
                    'icon'=>''
                ],
                [
                    'name'=>'属性列表',
                    'access'=>'admin/attr/index',
                    'icon'=>''
                ],


            ]
        ],
    ],

];
