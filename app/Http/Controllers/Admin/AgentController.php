<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/22
 * Time: 18:28
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Repository\Eloquent\Admin\UserRepository;
use App\Services\Ifs\Admin\AgentServices;
use Illuminate\Http\Request;

class AgentController extends controller
{
    protected $agent;
    protected $user;

    public function __construct(AgentServices $agentServices,UserRepository $userRepository)
    {
        $this->agent=$agentServices;
        $this->user=$userRepository;
    }

    /**
     *  注册
     */
    public function register()
    {
        return view('admin.agent.register');
    }

    /**
     *  注册 操作
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function doRegister(Request $request)
    {
        $data=$request->input();
        $agent_code = 'LYFC' .time().rand(1,9);
        $data['agent_code']=$agent_code;
        $data['status']=0;
        if($this->agent->save($data)){
            $status = '信息已提交，请等待工作人员审核！';
        }
        else{
            $status = '提交失败！';
        }
        return redirect ('admin/login')->with('status',$status);
    }

    /**
     * @name 代理商列表
     * @desc
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = $this->agent->getAll();
        return view('admin.agent.index',['data'=>$data,'title'=>'代理商列表']);
    }

    /**
     * @name 代理商审核
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function editOperate(Request $request)
    {
        $data = $request->input();
        $data['status'] = 1;
        if($this->agent->update($data)){
            $user_id = $this->agent->getByField('id',$request->input('id'))->user_id;
            $user_data['id'] = $user_id;
            $user_data['type'] = 2;
            $this->user->update($user_data);
            return response()->json(msg('success','审核通过!'));
        }
        return response()->json(msg('error','审核失败！'));
    }

    /**
     * @name 代理商删除
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        if($this->agent->delete($request->input('id'))){
            return response()->json(msg('success','删除成功!'));
        } else
            return response()->json(msg('error','删除失败!'));
    }
}