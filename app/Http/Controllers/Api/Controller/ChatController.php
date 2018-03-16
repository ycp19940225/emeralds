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
use Dingo\Api\Http\Request;

class ChatController extends BaseController
{
    protected $admin;

    public function __construct(AdminRepository $adminRepository)
    {
        $this->admin=$adminRepository;
    }

    public function getAdmin()
    {
        $data = $this->admin->getAll();
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
        $fr=M('friends_im')->add($dara);  //添加到数据库

        if($fr){
            $result['response'] = 1;
        }else{
            $result['response'] = 2;
        }
        $this->ajaxReturn($result);   //返回数据
    }
}