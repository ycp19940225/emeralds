<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2018/3/16
 * Time: 15:10
 */

namespace App\Http\Controllers\Api\Controller;


use App\Http\Controllers\Api\BaseController;
use App\Repository\Eloquent\Admin\AdminRepository;
use App\Repository\Eloquent\Admin\ChatRepository;
use App\Repository\Eloquent\Admin\UserRepository;
use DB;
use Dingo\Api\Http\Request;
/**
 * 客服
 *
 * @Resource("Group 客服")
 */
class ChatController extends BaseController
{
    protected $user;
    protected $chat;

    public function __construct(UserRepository $userRepository,ChatRepository $chatRepository)
    {
        $this->user=$userRepository;
        $this->chat=$chatRepository;
    }

    /**
     * 获取客服列表
     *
     *
     * @Get("http://temp.cqquality.com/api/chat/admin?token={token}")
     * @Parameters({
     *     @Parameter("token", type="varchar", required=true, description="密钥")
     * })
     *@Transaction({
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "获取成功！",
    "data": ""
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "获取失败！",
    "data": ""
     *     }})
     * })
     */
    public function getAdmin()
    {
        $data = $this->user->getByFields('type',1);
        if($data){
            return API_MSG($data,'获取成功！');
        }
        return API_MSG('','获取失败！','false',500);
    }

    public function toyou(Request $request)
    {
        $type = $request->input('type');
        if($type==2){  // 根据类型判断是图片还是文字
            $dara['img']  = $request->input('content');
        }elseif($type==3){
            $dara['content']  = $request->input('content');
        }
        $dara['uid'] = $request->input('shopid');   //当前用户id
        $dara['touid'] = $request->input('touid');  //接收方id
        $dara['add_time'] = time();  //添加时间
        //state 为查看状态。 数据库默认为未查看 1   一查看2
        $fr = $this->chat->save($dara);  //添加到数据库

        if($fr){
            $result['response'] = 1;
        }else{
            $result['response'] = 2;
        }
        return $result;   //返回数据
    }

    public function getdata(Request $request){
        $page = $request->input('page',1);   //默认分页  第一页
        $data['uid'] = $request->input('touid'); ////当前用户id
        $data['touid'] = $request->input('shopid');  //接收方id
        $touid= $request->input('touid');
        $shopid = $request->input('shopid');
        $request->input('lasttime')?$time=$request->input('lasttime'):$time=time();
        $User = DB::table('emerald_chat'); // 实例化User对象
        $scont=9;  //这个是要查询几条    9条是我们这边已经设定好了的，以方便用户体验，只能比9大。不能比9小哈
        $list = $User
            ->whereRaw('(uid='.$shopid.' and touid='.$touid.' and created_at <'.$time.')or(uid='.$touid.' and touid='.$shopid.' and created_at <'.$time.')')
            ->orderBy('created_at','desc')->paginate($scont);

        /*
         * 根据 双方id 查询对应数据 条件为添加时间小于当前时间
         * 以添加时间倒叙查询顺带分页
         */

        $sa['state']=2;
        $User->where($data)->update($sa);  //更新为一查看状态 条件为当前用户 uid 和touid

        $list = $list->toArray()['data'];
        $lists=array_reverse($list,true);  //反向排序
        $arr = array_values($lists);  //返回数组中所有的值
        if($list){
            $result['data'] = $arr;
            $result['scont'] = $scont;
            $result['page'] = $page+1;
            $result['lasttime'] = time();  // 刷新时间，或者获取数据的时间
            $result['response'] = 1;
        }else{
            $result['page'] = $page+1;
            $result['response'] = 2;
        }
        return $result;
    }

    public function getdatadow(Request $request){
        $data['uid'] = $request->input('touid');   //当前用户id
        $data['touid'] = $request->input('shopid');  //当前客服id 或者商户id  也就是被聊天者id

        $touid= $request->input('touid');
        $shopid = $request->input('shopid');
        $request->input('lasttime')?$time=$request->input('lasttime'):$time=time();   //前段传回来的用户最后刷新时间
        $User = DB::table('emerald_chat'); // 实例化User对象
        $scont=9;
        $list = $User->whereRaw('(uid='.$shopid.' and touid='.$touid.' and created_at <'.$time.')or(uid='.$touid.' and touid='.$shopid.' and created_at <'.$time.')')->orderBy('created_at','desc')->get();
        $sa['state']=2;
        $User->where($data)->update($sa);
        $is_myimg['id']=$request->input('shopid');
        $result['myimg'] = DB::table('emerald_user')->select('logo')->where($is_myimg)->first();
        $list = $list->toArray()['data'];
        $result['count'] = count($list);
        //var_dump($Page->totalPages);
        //var_dump($list);

        //exit;
        $res=[];
        foreach($list as $k=>$v){
            $res[$k]= $v;
            $res[$k]->hear_imgu= $result['myimg'];
            unset($where);
        }
        // $lists=array_reverse($list,true);
        //$arr = array_values($lists);
        if($list){
            $result['data'] = $res;
            $result['scont'] = $scont;

            $result['lasttime'] = time();

            $result['response'] = 1;
        }else{
            $result['response'] = 2;
        }
        return $result;
    }
    public function newest(Request $request){
        $scont =9;
        $page = $request->input('page',1);  //获取当前页码 默认第一页
        $touid= $request->input('touid');
        $shopid = $request->input('shopid');
        $request->input('lasttime')?$time=$request->input('lasttime'):$time=time();
        $User = DB::table('emerald_chat'); // 实例化User对象
        $list = $User->whereRaw('(uid='.$shopid.' and touid='.$touid.' and created_at <'.$time.')or(uid='.$touid.' and touid='.$shopid.' and created_at <'.$time.')')->orderBy('created_at','desc')->paginate($scont);
        $sa['state']=2;
        $data['uid'] = $request->input('touid');
        $data['touid'] = $request->input('shopid');
        $User->where($data)->update($sa);
        $is_myimg['id']=$request->input('shopid');
        $result['myimg'] = DB::table('emerald_user')->where($is_myimg)->where('logo')->first();
        $list = $list->toArray()['data'];
        $result['count'] = count($list);

        $res=[];
        foreach($list as $k=>$v){
            $res[$k]= $v;
            $res[$k]->hear_imgu= $result['myimg'];
            unset($where);
        }

        $lists=array_reverse($res,true);
        $arr = array_values($res);
        if($list){
            $result['data'] = $res;
            $result['scont'] = $scont;

            $result['page'] = $page+1;
            $result['lasttime'] = time();

            $result['response'] = 1;
        }else{
            $result['page'] = $page+1;
            $result['response'] = 2;
        }
        return $result;
    }
}