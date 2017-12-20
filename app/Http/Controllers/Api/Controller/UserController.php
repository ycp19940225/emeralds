<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/21
 * Time: 0:01
 */

namespace App\Http\Controllers\Api\Controller;

use App\Http\Controllers\Api\BaseController;
use App\Repository\Eloquent\Admin\UserRepository;
use Auth;
use Dingo\Api\Http\Request;
use Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

/**
 * 用户资源
 *
 * @Resource("Users")
 */
class UserController extends BaseController
{
    protected $user;

    public function __construct(UserRepository $userRepository)
    {
        $this->user=$userRepository;
    }

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
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'telphone' => 'required|unique:emerald_user|max:255',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return API_MSG('false',500,'手机号已被注册！');
        }
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $user = $this->user->save($data);
        return API_MSG('true',200,'注册成功！',$user);
    }

    /**
     * 用户登录
     *
     *
     *
     * @Post("/api/users/login")
     * @Parameters({
     *      @Parameter("telphone", type="varchar", required=true, description="手机号"),
     *      @Parameter("password", type="varchar", required=true, description="密码"),
     *      @Parameter("data", type="varchar",description="密钥"),
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
        $input = $request->all();
        $token = JWTAuth::attempt($input);
        if ($token){
            return API_MSG('true',200,'登录成功！',$token);
        } else {
            return API_MSG('false',500,'登录失败！');
        }
    }

    /**
     * 用户首页
     *
     *
     * @get("/api/users")
     * @Parameters({
     *      @Parameter("token", type="varchar", required=true, description="密钥"),
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
    public function index()
    {
        return ["content" => "This notice can be seen only after Auth"];
    }

     /**
     * 刷新密钥
     *
     *
     * @get("/api/users/refreshToken")
     *@Transaction({
     *      @Request({

    }),
     * })
     */
    public function refreshToken()
    {
        $token = JWTAuth::refresh();
        return API_MSG('true',200,'刷新成功！',$token);
    }



}