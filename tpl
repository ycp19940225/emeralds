/**
     * 用户注册
     *
     * 手机号唯一，不能重复注册
     *
     * @Post("/api/user/register")
     * @Parameters({
     *      @Parameter("telphone", type="varchar", required=true, description="手机号")
     *      @Parameter("password", type="varchar", required=true, description="密码")
     * })
     *@Transaction({
     *      @Request({
                "telphone":18983663382,
                "password":"1994okyang"
                })
     *      @Response(200, body={
                "telphone": 18983663382,
                "password": "447910ff7241c373129b8761cc312c78",
                "updated_at": "1513705933",
                "created_at": "1513705933",
                "id": 4
             }),
     *      @Response(500, body={"error": { "message": "手机号已被注册！",
                    "status_code": 500,
     *     }})
     * })
     */
php artisan api:docs --name API-DOCS --use-version v1 --output-file "D:\phpStudy\PHPTutorial\WWW\emeralds\Doc\api.apib"

aglio -i "D:\phpStudy\PHPTutorial\WWW\emeralds\Doc\api.apib" -o "D:\phpStudy\PHPTutorial\WWW\emeralds\Doc\api.html"