FORMAT: 1A

# API_DOSC

# Group Admin
管理员

## 管理员登录 [POST /http://temp.cqquality.com/api/admin/login]


+ Parameters
    + adminname: (varchar, required) - 登录名
    + password: (varchar, required) - 密码
    + data: (varchar, optional) - 密钥

+ Request (application/json)
    + Body

            {
                "telphone": "18983663382",
                "password": "1994okyang"
            }

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": 200,
                "msg": "登录成功！",
                "data": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vd3d3LmVtZXJhbGQuY29tL2FwaS91c2Vycy9sb2dpbiIsImlhdCI6MTUxMzc3MDc0MiwiZXhwIjoxNTEzNzc0MzQyLCJuYmYiOjE1MTM3NzA3NDIsImp0aSI6InVYS1YyYkRXN1BiUHVuRWUiLCJzdWIiOjE1LCJwcnYiOiI3MjM0OWFmZmRhMDQ0ZGMyYWQ3MGEzOWVmMTUxNjNlYTY3YTczMzEzIn0.sWuDl5AGS0NDzJpaJ2UkeJT0QJwBg2Xs8KYTZRSnNe8"
            }

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "登录失败！",
                    "data": ""
                }
            }

## 管理员首页 [GET /http://temp.cqquality.com/api/admin/index?token={token}]


+ Parameters
    + token: (varchar, required) - 密钥

+ Request (application/json)
    + Body

            []

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": 200,
                "msg": "获取管理员信息成功！",
                "data": {
                    "id": 1,
                    "adminname": "ycp",
                    "logo": "",
                    "email": "",
                    "created_at": "1514057062",
                    "updated_at": "1514057062",
                    "input_id": 0,
                    "deleted_at": 0,
                    "role_id": 0,
                    "status": 1
                }
            }

+ Response 401 (application/json)
    + Body

            {
                "error": {
                    "message": "Token Signature could not be verified.",
                    "status_code": 401
                }
            }

## 刷新密钥 [GET /http://temp.cqquality.com/api/admin/refreshToken?token={token}]


+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": 200,
                "msg": "刷新成功！",
                "data": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vd3d3LmVtZXJhbGQuY29tL2FwaS91c2Vycy9yZWZyZXNoVG9rZW4iLCJpYXQiOjE1MTM4MzgwNDksImV4cCI6MTUxMzg0MjMxOSwibmJmIjoxNTEzODM4NzE5LCJqdGkiOiJSR0s3UDM5QU5vVEg1a2xHIiwic3ViIjoyMCwicHJ2IjoiNzIzNDlhZmZkYTA0NGRjMmFkNzBhMzllZjE1MTYzZWE2N2E3MzMxMyJ9.m6HkK9MbKi7g7oAvSHWAdY0TdYlpflIrdx-vihw59OQ"
            }

+ Request (application/json)
    + Body

            []

## 修改管理员头像 [POST /http://temp.cqquality.com/api/admin/logo?token={token}]


+ Parameters
    + logo: (file, required) - 头像
    + token: (varchar, required) - 秘钥

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "头像修改失败！",
                    "data": ""
                }
            }

+ Request (application/json)
    + Body

            {
                "logo": ""
            }

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": 200,
                "msg": "头像修改成功！",
                "data": "admin/2017-12-24/agOAeSGPNL96bj1dCmX14ayu6p9OggCCCKExIUAP.jpeg"
            }

# Group Users
用户资源

## 用户注册 [POST /http://temp.cqquality.com/api/users/register]
手机号唯一，不能重复注册

+ Parameters
    + telphone: (varchar, required) - 手机号
    + password: (varchar, required) - 密码

+ Request (application/json)
    + Body

            {
                "telphone": "18983663382",
                "password": "1994okyang"
            }

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": 200,
                "msg": "注册成功！",
                "data": {
                    "telphone": "18983663382",
                    "password": "447910ff7241c373129b8761cc312c78",
                    "updated_at": "1513758784",
                    "created_at": "1513758784",
                    "id": 7
                }
            }

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "手机号已被注册！",
                    "data": ""
                }
            }

## 用户登录 [POST /http://temp.cqquality.com/api/users/login]


+ Parameters
    + telphone: (varchar, required) - 手机号
    + password: (varchar, required) - 密码
    + : (varchar, optional) - tokne:密钥,ttl：秘钥过期时间，refresh_ttl：本次token可用于获取新的token的时间，过期需重新登录

+ Request (application/json)
    + Body

            {
                "telphone": "18983663382",
                "password": "1994okyang"
            }

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": 200,
                "msg": "登录成功！",
                "data": {
                    "ttl": 43200,
                    "refresh_ttl": 20160,
                    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vd3d3LmVtZXJhbGQuY29tL2FwaS91c2Vycy9sb2dpbiIsImlhdCI6MTUxNDQ1NTkzMSwiZXhwIjoxNTE3MDQ3OTMxLCJuYmYiOjE1MTQ0NTU5MzEsImp0aSI6IjhENjlMaE5uSU94Um53S04iLCJzdWIiOjE5LCJwcnYiOiI3MjM0OWFmZmRhMDQ0ZGMyYWQ3MGEzOWVmMTUxNjNlYTY3YTczMzEzIn0.r86fhFkmcZKayKrSomV0PrST4KLn7ok8Lg-3ljr9HtE"
                }
            }

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "登录失败！",
                    "data": ""
                }
            }

## 用户首页 [GET /http://temp.cqquality.com/api/users/index?token={token}]


+ Parameters
    + token: (varchar, required) - 密钥

+ Request (application/json)
    + Body

            []

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": 200,
                "msg": "获取用户信息成功！",
                "data": {
                    "id": 20,
                    "telphone": "18983663381",
                    "nickname": "",
                    "logo": "",
                    "email": "",
                    "created_at": "1513835481",
                    "updated_at": "1513835481",
                    "deleted_at": 0
                }
            }

+ Response 401 (application/json)
    + Body

            {
                "error": {
                    "message": "Token Signature could not be verified.",
                    "status_code": 401
                }
            }

## 刷新密钥 [GET /http://temp.cqquality.com/api/users/refreshToken?token={token}]


+ Parameters
    + : (varchar, optional) - tokne:密钥,ttl：秘钥过期时间，refresh_ttl：本次token可用于获取新的token的时间，过期需重新登录

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": 200,
                "msg": "刷新成功！",
                "data": {
                    "ttl": 43200,
                    "refresh_ttl": 20160,
                    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vd3d3LmVtZXJhbGQuY29tL2FwaS91c2Vycy9yZWZyZXNoVG9rZW4iLCJpYXQiOjE1MTQ0NTYzMzgsImV4cCI6MTUxNzA0ODUwNSwibmJmIjoxNTE0NDU2NTA1LCJqdGkiOiJ6eEtpdE5PYWhFQ2Y1aDQzIiwic3ViIjoxOSwicHJ2IjoiNzIzNDlhZmZkYTA0NGRjMmFkNzBhMzllZjE1MTYzZWE2N2E3MzMxMyJ9.s4Pei4VFF5tjnTyZh5SIjgAKJJMwv-HBc99LuPsVUBg"
                }
            }

+ Request (application/json)
    + Body

            []

## 完善用户信息 [POST /http://temp.cqquality.com/api/users/edit?token={token}]


+ Parameters
    + nickname: (varchar, required) - 别名
    + email: (varchar, required) - 邮箱
    + token: (varchar, required) - 秘钥

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "编辑失败！",
                    "data": ""
                }
            }

+ Request (application/json)
    + Body

            {
                "nickname": "杨春坪",
                "email": "820363773@qq.com"
            }

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": 200,
                "msg": "编辑成功！",
                "data": true
            }

## 修改用户头像 [POST /http://temp.cqquality.com/api/users/logo?token={token}]
手机号唯一，不能重复注册

+ Parameters
    + logo: (file, required) - 头像
    + token: (varchar, required) - 秘钥

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "头像修改失败！",
                    "data": ""
                }
            }

+ Request (application/json)
    + Body

            {
                "logo": ""
            }

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": 200,
                "msg": "头像修改成功！",
                "data": true
            }

## 上传供应商营业执照或者身份证 [POST /http://temp.cqquality.com/api/users/agent/upload?token={token}]


+ Parameters
    + logo: (file, required) - 头像
    + token: (varchar, required) - 秘钥

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "上传失败！",
                    "data": ""
                }
            }

+ Request (application/json)
    + Body

            {
                "pic": ""
            }

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": 200,
                "msg": "上传成功！",
                "data": "agent/2017-12-22/HyrVX1u1kqO5Lopx9gduGtB2913eAKY7D776tmqm.jpeg"
            }

## 申请成为供应商 [POST /http://temp.cqquality.com/api/users/agent/add?token={token}]


+ Parameters
    + agent_pic: (varchar, optional) - 营业执照或者身份证照片
    + agent_name: (varchar, required) - 姓名
    + telphone: (varchar, required) - 电话号码
    + booth_number: (varchar, required) - 摊位号
    + wx: (varchar, required) - 微信
    + pm: (varchar, optional) - 主营项目
    + bank_code: (varchar, optional) - 银行卡号
    + alipay_code: (varchar, optional) - 支付宝账号

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "申请失败！",
                    "data": ""
                }
            }

+ Request (application/json)
    + Body

            {
                "agent_name": "翡翠代理商测试",
                "telphone": "18983667722",
                "booth_number": "taiwei123456",
                "wx": "ycp18989999",
                "pm": "翡翠，珠宝",
                "bank_code": "34353435435345",
                "alipay_code": "ycpalipay2442",
                "agent_pic": "agent/2017-12-22/HyrVX1u1kqO5Lopx9gduGtB2913eAKY7D776tmqm.jpeg"
            }

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": 200,
                "msg": "申请成功,请等待审核！",
                "data": {
                    "agent_name": "翡翠代理商测试",
                    "telphone": "18983667722",
                    "booth_number": "taiwei123456",
                    "wx": "ycp18989999",
                    "pm": "翡翠，珠宝",
                    "bank_code": "34353435435345",
                    "alipay_code": "ycpalipay2442",
                    "user_id": 18,
                    "agent_code": "LYFC15139227896",
                    "updated_at": "1513922789",
                    "created_at": "1513922789",
                    "id": 5
                }
            }

# Group Goods
商品资源

## 获取所有商品 [GET /http://temp.cqquality.com/api/goods]


+ Request (application/json)
    + Body

            []

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": 200,
                "msg": "获取商品成功！",
                "data": []
            }

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "获取商品失败！",
                    "data": ""
                }
            }

## 获取单个商品 [GET /http://temp.cqquality.com/api/goods/id]


+ Parameters
    + id: (int, optional) - 商品ID

+ Request (application/json)
    + Body

            []

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": 200,
                "msg": "获取商品详情成功！",
                "data": []
            }

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "获取商品详情失败！",
                    "data": ""
                }
            }

## 上传商品封面 [POST /http://temp.cqquality.com/api/admin(agent)/goods/logo?token={token}]
[http://temp.cqquality.com/api/admin/goods/logo,为管理员上传路径]
[http://temp.cqquality.com/api/agent/goods/logo,为代理商上传路径]

+ Parameters
    + logo: (file, optional) - 图片

+ Request (application/json)
    + Body

            {
                "logo": ""
            }

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": 200,
                "msg": "上传成功！",
                "data": "goods_logo/2017-12-24/naxS3VYvCkPEcrCwsuua1IPTwmtFh80c3BIjCGPy.jpeg"
            }

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "参数错误或者上传失败！",
                    "data": ""
                }
            }

## 上传商品相册 [POST /http://temp.cqquality.com/api/admin(agent)/goods/logo?token={token}]
[http://temp.cqquality.com/api/admin/goods/pic,为管理员上传路径]
[http://temp.cqquality.com/api/agent/goods/pic,为代理商上传路径]

+ Parameters
    + pic: (file, optional) - 图片

+ Request (application/json)
    + Body

            {
                "pic": ""
            }

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": 200,
                "msg": "上传成功！",
                "data": "goods_pic/2017-12-24/naxS3VYvCkPEcrCwsuua1IPTwmtFh80c3BIjCGPy.jpeg"
            }

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "参数错误或者上传失败！",
                    "data": ""
                }
            }

## 上传商品视频 [POST /http://temp.cqquality.com/api/admin(agent)/goods/video?token={token}]
[http://temp.cqquality.com/api/admin/goods/pic,为管理员上传路径]
[http://temp.cqquality.com/api/agent/goods/pic,为代理商上传路径]

视频限制大小为8M

+ Parameters
    + video: (file, optional) - 视频

+ Request (application/json)
    + Body

            {
                "video": ""
            }

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": 200,
                "msg": "上传成功！",
                "data": "goods_video/2017-12-24/792190e9187897d3b67dc833f77f7da4.mp4"
            }

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "参数错误或者上传失败！",
                    "data": ""
                }
            }

## 上传商品 [POST /http://temp.cqquality.com/api/admin(agent)/goods/add?token={token}]
[http://temp.cqquality.com/api/admin/goods/add,为管理员上传路径]
[http://temp.cqquality.com/api/agent/goods/add,为管理员上传路径]

+ Parameters
    + logo: (varchar, optional) - 图片url
    + goods_name: (varchar, optional) - 翡翠名
    + pic: (varchar, optional) - 翡翠相册，每张图片以逗号隔开
    + video: (varchar, optional) - 视频地址
    + goods_detail: (varchar, optional) - 翡翠详情
    + price: (varchar, optional) - 翡翠价格
    + stock: (varchar, optional) - 库存
    + cat_id: (varchar, optional) - 品种
    + type: (varchar, optional) - 二级分类及三级明细，格式参考示例请求
    + input_type: (int, optional) - 录入者类型，1为代理商，2为管理员
    + input_id: (int, optional) - 录入者Id，结合input_type

+ Request (application/json)
    + Body

            {
                "goods_name": "测试翡翠",
                "logo": "goods_logo/2017-12-24/Y2rlFNKjVlv9xDTWjWG7FYsCoSe2SDDf5HHfrGFW.jpeg",
                "pic": "goods_pic/2017-12-24/Zz7G0UBLUISswZPggrQ86UteBOr096hNw5JYmtfZ.jpeg,goods_pic/2017-12-24/naxS3VYvCkPEcrCwsuua1IPTwmtFh80c3BIjCGPy.jpe",
                "video": "goods_video/2017-12-24/792190e9187897d3b67dc833f77f7da4.mp4",
                "goods_detail": "库存仅此一件【尺寸】高35.5mm，宽23.5mm，厚5.6mm【颜　　色】略飘花【透明度】二分之一透明【必要说明】可见细小石纹，但瑕不掩瑜",
                "price": "20000",
                "stock": "1",
                "cat_id": "114",
                "type": {
                    "136": {
                        "type_val": "玻璃种"
                    },
                    "135": {
                        "type_val": "观音"
                    },
                    "137": {
                        "type_val": "飘绿"
                    },
                    "138": {
                        "type_val": "1.5-3万"
                    }
                }
            }

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": "200",
                "msg": "添加成功！",
                "data": {
                    "goods_name": "测试翡翠",
                    "logo": "goods_logo/2017-12-24/Y2rlFNKjVlv9xDTWjWG7FYsCoSe2SDDf5HHfrGFW.jpeg",
                    "pic": "goods_pic/2017-12-24/Zz7G0UBLUISswZPggrQ86UteBOr096hNw5JYmtfZ.jpeg,goods_pic/2017-12-24/naxS3VYvCkPEcrCwsuua1IPTwmtFh80c3BIjCGPy.jpe",
                    "video": "goods_video/2017-12-24/792190e9187897d3b67dc833f77f7da4.mp4",
                    "goods_detail": "库存仅此一件【尺寸】高35.5mm，宽23.5mm，厚5.6mm【颜　　色】略飘花【透明度】二分之一透明【必要说明】可见细小石纹，但瑕不掩瑜",
                    "price": "20000",
                    "stock": "1",
                    "cat_id": "114",
                    "goods_code": "LYFC15141200105",
                    "updated_at": "1514120010",
                    "created_at": "1514120010",
                    "id": 39
                }
            }

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "添加失败！",
                    "data": ""
                }
            }

# Group Cats
翡翠品种

## 获取所有品种 [GET /http://temp.cqquality.com/api/cats]
[获取所有品种,以及二级分类，三级明细]

+ Parameters
    + data: (varchar, required) - 品种
    + type: (varchar, required) - 二级分类
    + type_val: (varchar, required) - 三级明细，每个值逗号隔开

+ Request (application/json)
    + Body

            []

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": "200",
                "msg": "获取品种成功！",
                "data": ""
            }

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "获取品种失败！",
                    "data": ""
                }
            }

# Group Articles
文章

## 获取所有文章 [GET /http://temp.cqquality.com/api/articles]


+ Parameters
    + cat: (json, optional) - 文章所属分类

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": "200",
                "msg": "获取所有文章成功！",
                "data": ""
            }

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "获取文章失败！",
                    "data": ""
                }
            }

## 获取所有文章分类 [GET /http://temp.cqquality.com/api/articles/cats]


+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": "200",
                "msg": "获取所有文章分类成功！",
                "data": ""
            }

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "获取文章分类失败！",
                    "data": ""
                }
            }

## 获取分类文章（通过分类ID） [GET /http://temp.cqquality.com/api/article/cat/id]


+ Parameters
    + id: (int, optional) - 分类ID

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": "200",
                "msg": "获取分类文章成功！",
                "data": {
                    "id": 2,
                    "cat_name": "企业动向",
                    "intro": "收集最新企业动向",
                    "created_at": "1513398620",
                    "updated_at": "1513398647",
                    "deleted_at": 0,
                    "article": ""
                }
            }

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "获取分类文章失败！",
                    "data": ""
                }
            }

## 获取文章详情（通过文章ID） [GET /http://temp.cqquality.com/api/article/id]


+ Parameters
    + id: (int, optional) - 文章ID

+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": "200",
                "msg": "获取文章成功！",
                "data": ""
            }

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "获取文章失败！",
                    "data": ""
                }
            }

# Group Slide
轮播图

## 获取所有轮播图 [GET /http://temp.cqquality.com/api/slides]


+ Response 200 (application/json)
    + Body

            {
                "status": "true",
                "code": "200",
                "msg": "获取成功！",
                "data": ""
            }

+ Response 500 (application/json)
    + Body

            {
                "error": {
                    "status": "false",
                    "code": 500,
                    "msg": "获取失败！",
                    "data": ""
                }
            }