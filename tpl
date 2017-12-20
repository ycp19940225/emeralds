   /**
      * 用户注册
      *
      * 手机号唯一，不能重复注册
      *
      * @Post("/api/users/register")
      * @Parameters({
      *      @Parameter("telphone", type="varchar", required=true, description="手机号"),
      *      @Parameter("password", type="varchar", required=true, description="密码")
      * })
      *@Transaction({
      *      @Request({
                 "telphone":"18983663382",
                 "password":"1994okyang"
                 }),
      *      @Response(200, body={
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
                 }),
      *      @Response(500, body={"error": {
                     "status": "false",
                     "code": 500,
                     "msg": "手机号已被注册！",
                     "data": ""
      *     }})
      * })
      */
php artisan api:docs --name "API_DOSC"  --use-version v1 --output-file "D:\phpStudy\WWW\emeralds\dosc\api.md"


aglio -i "D:\phpStudy\WWW\emeralds\Doc\api.apib" -o "D:\phpStudy\WWW\emeralds\Doc\api.html"