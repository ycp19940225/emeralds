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
     *      @Parameter("token", type="varchar",description="密钥"),
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
    "status": "true",
    "code": 200,
    "msg": "登录成功！",
    "data": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vd3d3LmVtZXJhbGQuY29tL2FwaS91c2Vycy9sb2dpbiIsImlhdCI6MTUxMzc2ODY1MSwiZXhwIjoxNTEzNzcyMjUxLCJuYmYiOjE1MTM3Njg2NTEsImp0aSI6InNzRWFqUUppS1d5a0dnVjUiLCJzdWIiOjE1LCJwcnYiOiI3MjM0OWFmZmRhMDQ0ZGMyYWQ3MGEzOWVmMTUxNjNlYTY3YTczMzEzIn0.ykYGmnZ1RCeZvI5MEz5dLevmU0wDunywjeiFkmFcvr8"
    }
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
        $data['token'] = $token;
        if ($data) {
            return API_MSG('true',200,'登录成功！',$data);
        } else {
            return API_MSG('false',500,'登录失败！');
        }
    }

}