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
use DB;
use Dingo\Api\Http\Request;

class ChatController extends BaseController
{
    protected $admin;
    protected $chat;

    public function __construct(AdminRepository $adminRepository,ChatRepository $chatRepository)
    {
        $this->admin=$adminRepository;
        $this->chat=$chatRepository;
    }

    public function getAdmin()
    {
        $data = $this->admin->getAll();
        if($data){
            return AP$request->input_MSG($data,'获取成功！');
        }
        return AP$request->input_MSG('','获取失败！','false',500);
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
        $this->ajaxReturn($result);   //返回数据
    }

    public function getdata(Request $request){
        $page = $request->input('page',1);   //默认分页  第一页
        $data['uid'] = $request->input('touid'); ////当前用户id
        $data['touid'] = $request->input('shopid');  //接收方id
        $touid= $request->input('touid');
        $shopid = $request->input('shopid');
        $request->input('lasttime')?$time=$request->input('lasttime'):$time=time();
        $User = DB::table('friends_im'); // 实例化User对象
        $scont=9;  //这个是要查询几条    9条是我们这边已经设定好了的，以方便用户体验，只能比9大。不能比9小哈
        $list = $User
            ->where('(uid='.$shopid.' and touid='.$touid.' and add_time <'.$time.')or(uid='.$touid.' and touid='.$shopid.' and add_time <'.$time.')')
            ->orderBy('add_time desc')->page($page,$scont)->select();

        /*
         * 根据 双方id 查询对应数据 条件为添加时间小于当前时间
         * 以添加时间倒叙查询顺带分页
         */

        $sa['state']=2;
        $User->where($data)->save($sa);  //更新为一查看状态 条件为当前用户 uid 和touid


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
        $this->ajaxReturn($result);
    }

    public function getdatadow(Request $request){
        $page = $request->input('page',1);  //获取当前页码 默认第一页
        $data['uid'] = $request->input('touid');   //当前用户id
        $data['touid'] = $request->input('shopid');  //当前客服id 或者商户id  也就是被聊天者id

        $touid= $request->input('touid');
        $shopid = $request->input('shopid');
        $request->input('lasttime')?$time=$request->input('lasttime'):$time=time();   //前段传回来的用户最后刷新时间
        $User = M('friends_im'); // 实例化User对象
        $scont=9;
        $list = $User->where('(uid='.$shopid.' and touid='.$touid.' and add_time <'.$time.')or(uid='.$touid.' and touid='.$shopid.' and add_time <'.$time.')')->order('add_time desc')->page($page,$scont)->select();
        $sa['state']=2;
        $User->where($data)->save($sa);
        $is_myimg['user_id']=$request->input('shopid');
        $result['myimg'] = M('users')->where($is_myimg)->getField('head_pic');
        $result['count'] = count($list);
        //var_dump($Page->totalPages);
        //var_dump($list);

        //exit;

        foreach($list as $k=>$v){
            $where['user_id']=$v['uid'];
            $list[$k]['hear_imgu']=M('users')->where($where)->getField('head_pic');
            unset($where);
        }

        // $lists=array_reverse($list,true);
        //$arr = array_values($lists);
        if($list){
            $result['data'] = $list;
            $result['scont'] = $scont;

            $result['page'] = $page+1;
            $result['lasttime'] = time();

            $result['response'] = 1;
        }else{
            $result['page'] = $page+1;
            $result['response'] = 2;
        }
        $this->ajaxReturn($result);
    }
    public function newest(Request $request){
        $touid= $request->input('touid');
        $shopid = $request->input('shopid');
        $request->input('lasttime')?$time=$request->input('lasttime'):$time=time();
        $User = M('friends_im'); // 实例化User对象
        $list = $User->where('uid='.$touid.' and touid='.$shopid.' and state=1 and add_time >'.$time)->order('add_time desc')->select();
        $sa['state']=2;
        $data['uid'] = $request->input('touid');
        $data['touid'] = $request->input('shopid');
        $User->where($data)->save($sa);
        $is_myimg['user_id']=$request->input('shopid');
        $result['myimg'] = M('users')->where($is_myimg)->getField('head_pic');
        $result['count'] = count($list);

        foreach($list as $k=>$v){
            $where['user_id']=$v['uid'];
            $list[$k]['hear_imgu']=M('users')->where($where)->getField('head_pic');
            unset($where);
        }

        $lists=array_reverse($list,true);
        $arr = array_values($lists);
        if($list){
            $result['data'] = $arr;
            $result['scont'] = $scont;

            $result['page'] = $page+1;
            $result['lasttime'] = time();

            $result['response'] = 1;
        }else{
            $result['page'] = $page+1;
            $result['response'] = 2;
        }
        $this->ajaxReturn($result);
    }
}