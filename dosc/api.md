FORMAT: 1A

# API_DOSC

# Users
用户资源

## 用户注册 [POST /api/users/register]
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

## 用户登录 [POST /api/users/login]


+ Parameters
    + telphone: (varchar, required) - 手机号
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

## 用户首页 [GET /api/users/index?token={token}]


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

## 刷新密钥 [GET /api/users/refreshToken?token={token}]


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

# Goods
商品资源

## 获取所有商品 [GET /api/goods]


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

# Goods
分类资源

## 获取所有品种 [GET /api/cats]
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
                "data": {
                    "s": 1
                }
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