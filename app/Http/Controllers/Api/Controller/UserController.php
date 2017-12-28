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
use App\Services\Common\UploadServicesImpl;
use App\Services\Ifs\Admin\AgentServices;
use Dingo\Api\Http\Request;
use JWTAuth;
use Validator;

/**
 * 用户资源
 *
 * @Resource("Group Users")
 */
class UserController extends BaseController
{
    protected $user;
    protected $agent;

    public function __construct(UserRepository $userRepository,AgentServices $agentServices)
    {
        $this->user=$userRepository;
        $this->agent=$agentServices;
    }

    /**
     * 用户注册
     *
     * 手机号唯一，不能重复注册
     *
     * @Post("http://temp.cqquality.com/api/users/register")
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
            return API_MSG('','手机号已被注册！','false',500);
        }
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = $this->user->save($data);
        return API_MSG($user,'注册成功！','true',200);

    }

    /**
     * 用户登录
     *
     *
     *
     * @Post("http://temp.cqquality.com/api/users/login")
     * @Parameters({
     *      @Parameter("telphone", type="varchar", required=true, description="手机号"),
     *      @Parameter("password", type="varchar", required=true, description="密码"),
     *      @Parameter("data", type="varchar",description="token:密钥,ttl：秘钥过期时间，refresh_ttl：本次token可用于获取新的token的时间，过期需重新登录,单位为秒")
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
    "data": {
    "ttl": 2592000,
    "refresh_ttl": 1209600,
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vd3d3LmVtZXJhbGQuY29tL2FwaS91c2Vycy9sb2dpbiIsImlhdCI6MTUxNDQ1NTkzMSwiZXhwIjoxNTE3MDQ3OTMxLCJuYmYiOjE1MTQ0NTU5MzEsImp0aSI6IjhENjlMaE5uSU94Um53S04iLCJzdWIiOjE5LCJwcnYiOiI3MjM0OWFmZmRhMDQ0ZGMyYWQ3MGEzOWVmMTUxNjNlYTY3YTczMzEzIn0.r86fhFkmcZKayKrSomV0PrST4KLn7ok8Lg-3ljr9HtE"
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
        $ttl = config('jwt.ttl');
        $refresh_ttl = config('jwt.refresh_ttl');
        $input = $request->only('telphone','password');
        $token = JWTAuth::attempt($input);
        $data['ttl'] = $ttl*60;
        $data['refresh_ttl'] = $refresh_ttl*60;
        $data['token'] = $token;
        if ($token){
            return API_MSG($data,'登录成功！','true',200);
        } else {
            return API_MSG('','登录失败！','false',500);
        }
    }

    /**
     * 用户首页
     *
     *
     * @get("http://temp.cqquality.com/api/users/index?token={token}")
     * @Parameters({
     *      @Parameter("token", type="varchar", required=true, description="密钥")
     * })
     *@Transaction({
     *      @Request({

    }),
     *      @Response(200, body={
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
    }),
     *      @Response(401, body={"error": {
    "message": "Token Signature could not be verified.",
    "status_code": 401
     *     }})
     * })
     */
    public function index()
    {
        $user_data = $this->auth()->user();
        return API_MSG($user_data,'获取用户信息成功！','true',200);
    }

     /**
     * 刷新密钥
     *
     *
     * @get("http://temp.cqquality.com/api/users/refreshToken?token={token}")
     * @Parameters({
      *      @Parameter("data", type="varchar",description="tokne:密钥,ttl：秘钥过期时间，refresh_ttl：本次token可用于获取新的token的时间，过期需重新登录，单位为秒")
      * })
     *@Transaction({
     *      @Request({

    }),
     * })
      *  @Response(200, body={
     "status": "true",
     "code": 200,
     "msg": "刷新成功！",
     "data": {
     "ttl": 43200,
     "refresh_ttl": 20160,
     "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vd3d3LmVtZXJhbGQuY29tL2FwaS91c2Vycy9yZWZyZXNoVG9rZW4iLCJpYXQiOjE1MTQ0NTYzMzgsImV4cCI6MTUxNzA0ODUwNSwibmJmIjoxNTE0NDU2NTA1LCJqdGkiOiJ6eEtpdE5PYWhFQ2Y1aDQzIiwic3ViIjoxOSwicHJ2IjoiNzIzNDlhZmZkYTA0NGRjMmFkNzBhMzllZjE1MTYzZWE2N2E3MzMxMyJ9.s4Pei4VFF5tjnTyZh5SIjgAKJJMwv-HBc99LuPsVUBg"
     }
     }),
      *@Response(401, body={
     "message": "The token has been blacklisted",
     "status_code": 401
     }),
      *
     */
    public function refreshToken()
    {
        $ttl = config('jwt.ttl');
        $refresh_ttl = config('jwt.refresh_ttl');
        $token = JWTAuth::refresh();
        $data['ttl'] = $ttl*60;
        $data['refresh_ttl'] = $refresh_ttl*60;
        $data['token'] = $token;
        return API_MSG($data,'刷新成功！','true',200);
    }


    /**
     * 完善用户信息
     *
     *
     * @Post("http://temp.cqquality.com/api/users/edit?token={token}")
     * @Parameters({
     *      @Parameter("nickname", type="varchar", required=true, description="别名"),
     *      @Parameter("email", type="varchar", required=true, description="邮箱"),
     *      @Parameter("token", type="varchar", required=true, description="秘钥")
     * })
     *@Transaction({
     *      @Request({
     *     	"nickname":"杨春坪",
      "email":"820363773@qq.com"
      }),
     *      @Response(200, body={
     * "status": "true",
     *"code": 200,
     *"msg": "编辑成功！",
     *"data": true
     *})
     *}),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "编辑失败！",
    "data": ""
     *     }})
     * })
     */
    public function edit(Request $request)
    {
        $user_id = $this->auth()->user()->id;
        $data = $request->all();
        $data['id'] = $user_id;
        $res = $this->user->update($data);
        if ($res){
            return API_MSG($res,'编辑成功！','true',200);
        } else {
            return API_MSG('','编辑失败！','false',500);
        }
    }
    /**
     * 修改用户头像
     *
     * 手机号唯一，不能重复注册
     *
     * @Post("http://temp.cqquality.com/api/users/logo?token={token}")
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
    "data": true
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
        $res = $this->user->update(['logo'=>$urls,'id'=>$user_data->id]);
        if ($res){
            return API_MSG($res,'头像修改成功！','true',200);
        } else {
            return API_MSG('','头像修改失败！','false',500);
        }
    }
    /**
     * 上传供应商营业执照或者身份证
     *
     *
     * @Post("http://temp.cqquality.com/api/users/agent/upload?token={token}")
     * @Parameters({
     *      @Parameter("logo", type="file", required=true, description="头像"),
     *      @Parameter("token", type="varchar", required=true, description="秘钥")
     * })
     *@Transaction({
     *      @Request({
    "pic":"",
    }),
     *      @Response(200, body={
    "status": "true",
    "code": 200,
    "msg": "上传成功！",
    "data": "agent/2017-12-22/HyrVX1u1kqO5Lopx9gduGtB2913eAKY7D776tmqm.jpeg"
    })
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "上传失败！",
    "data": ""
     *     }})
     * })
     */
    public function upload_agent_pic(Request $request,UploadServicesImpl $uploadServicesImpl)
    {
        $files = $request->file('pic');
        $urls = $uploadServicesImpl->uploadImg('agent',$files);
        if ($urls){
            return API_MSG($urls,'上传成功！','true',200);
        } else {
            return API_MSG('','上传失败！','false',500);
        }
    }
    /**
     * 申请成为供应商
     *
     *
     * @Post("http://temp.cqquality.com/api/users/agent/add?token={token}")
     * @Parameters({
     *      @Parameter("agent_pic", type="varchar", description="营业执照或者身份证照片"),
     *      @Parameter("agent_name", type="varchar", required=true, description="姓名"),
     *      @Parameter("telphone", type="varchar", required=true, description="电话号码"),
     *      @Parameter("booth_number", type="varchar", required=true, description="摊位号"),
     *      @Parameter("wx", type="varchar",required=true, description="微信"),
     *      @Parameter("pm", type="varchar",description="主营项目"),
     *      @Parameter("bank_code", type="varchar",description="银行卡号"),
     *      @Parameter("alipay_code", type="varchar",description="支付宝账号")
     * })
     *@Transaction({
     *      @Request({
    "agent_name":"翡翠代理商测试",
    "telphone":"18983667722",
    "booth_number":"taiwei123456",
    "wx":"ycp18989999",
    "pm":"翡翠，珠宝",
    "bank_code":"34353435435345",
    "alipay_code":"ycpalipay2442",
    "agent_pic":"agent/2017-12-22/HyrVX1u1kqO5Lopx9gduGtB2913eAKY7D776tmqm.jpeg"
    }),
     *      @Response(200, body={
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
    })
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "申请失败！",
    "data": ""
     *     }})
     * })
     */
    public function user_to_agent(Request $request)
    {
       $data = $request->all();
       $data['user_id'] = $this->auth()->user()->id;
       $data['agent_code'] = generate_code('LYFC');
       $res = $this->agent->save($data);
        if ($res){
            return API_MSG($res,'申请成功,请等待审核！','true',200);
        } else {
            return API_MSG('','申请失败！','false',500);
        }
    }

}