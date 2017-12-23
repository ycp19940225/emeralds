<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/23
 * Time: 17:23
 */

namespace App\Http\Controllers\Api\Controller;


use App\Http\Controllers\Api\BaseController;
use App\Repository\Eloquent\Admin\AdminRepository;
use App\Services\Common\UploadServicesImpl;
use Dingo\Api\Http\Request;
use JWTAuth;
use Validator;

/**
 * 管理员
 *
 * @Resource("Group Admin")
 */
class AdminController extends BaseController
{
    protected $admin;

    public function __construct(AdminRepository $adminRepository)
    {
        $this->admin=$adminRepository;
    }

    /**
     * 管理员登录
     *
     *
     *
     * @Post("/api/admin/login")
     * @Parameters({
     *      @Parameter("adminname", type="varchar", required=true, description="登录名"),
     *      @Parameter("password", type="varchar", required=true, description="密码"),
     *      @Parameter("data", type="varchar",description="密钥")
     * })
     *@Transaction({
     *      @Request({
    "telphone":"18983663382",
    "password":"1994okyang"
    }),
     *      @Response(200, body={
    "status": "true",
    "code": 200,
    "msg": "登录成功！",
    "data": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vd3d3LmVtZXJhbGQuY29tL2FwaS91c2Vycy9sb2dpbiIsImlhdCI6MTUxMzc3MDc0MiwiZXhwIjoxNTEzNzc0MzQyLCJuYmYiOjE1MTM3NzA3NDIsImp0aSI6InVYS1YyYkRXN1BiUHVuRWUiLCJzdWIiOjE1LCJwcnYiOiI3MjM0OWFmZmRhMDQ0ZGMyYWQ3MGEzOWVmMTUxNjNlYTY3YTczMzEzIn0.sWuDl5AGS0NDzJpaJ2UkeJT0QJwBg2Xs8KYTZRSnNe8"
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "登录失败！",
    "data": ""
     *     }})
     * })
     */
    public function login(Request $request)
    {
        $input = $request->only('adminname','password');
        $token = JWTAuth::attempt($input);
        if ($token){
            return API_MSG($token,'登录成功！','true',200);
        } else {
            return API_MSG('','登录失败！','false',500);
        }
    }

    /**
     * 管理员首页
     *
     *
     * @get("/api/admin/index?token={token}")
     * @Parameters({
     *      @Parameter("token", type="varchar", required=true, description="密钥")
     * })
     *@Transaction({
     *      @Request({

    }),
     *      @Response(200, body={
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
    }),
     *      @Response(401, body={"error": {
    "message": "Token Signature could not be verified.",
    "status_code": 401
     *     }})
     * })
     */
    public function index()
    {
        $admin_data = $this->auth()->user();
        return API_MSG($admin_data,'获取管理员信息成功！','true',200);
    }

    /**
     * 刷新密钥
     *
     *
     * @get("/api/users/refreshToken?token={token}")
     *@Transaction({
     *      @Request({

    }),
     * })
     *  @Response(200, body={
    "status": "true",
    "code": 200,
    "msg": "刷新成功！",
    "data": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vd3d3LmVtZXJhbGQuY29tL2FwaS91c2Vycy9yZWZyZXNoVG9rZW4iLCJpYXQiOjE1MTM4MzgwNDksImV4cCI6MTUxMzg0MjMxOSwibmJmIjoxNTEzODM4NzE5LCJqdGkiOiJSR0s3UDM5QU5vVEg1a2xHIiwic3ViIjoyMCwicHJ2IjoiNzIzNDlhZmZkYTA0NGRjMmFkNzBhMzllZjE1MTYzZWE2N2E3MzMxMyJ9.m6HkK9MbKi7g7oAvSHWAdY0TdYlpflIrdx-vihw59OQ"
    }),
     */
    public function refreshToken()
    {
        $token = JWTAuth::refresh();
        return API_MSG($token,'刷新成功！','true',200);
    }


    /**
     * 修改管理员头像
     *
     *
     * @Post("/api/admin/logo?token={token}")
     * @Parameters({
     *      @Parameter("logo", type="file", required=true, description="头像"),
     *      @Parameter("token", type="varchar", required=true, description="秘钥")
     * })
     *@Transaction({
     *      @Request({
    "logo":"",
    }),
     *      @Response(200, body={
    "status": "true",
    "code": 200,
    "msg": "头像修改成功！",
    "data": "admin/2017-12-24/agOAeSGPNL96bj1dCmX14ayu6p9OggCCCKExIUAP.jpeg"
    })
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "头像修改失败！",
    "data": ""
     *     }})
     * })
     */
    public function logo(Request $request,UploadServicesImpl $uploadServicesImpl)
    {
        $files = $request->file('logo');
        $urls = $uploadServicesImpl->uploadImg('admin',$files);
        $user_data = $this->auth()->user();
        $res = $this->admin->update(['logo'=>$urls,'id'=>$user_data->id]);
        if ($res){
            return API_MSG($urls,'头像修改成功！','true',200);
        } else {
            return API_MSG('','头像修改失败！','false',500);
        }
    }
}