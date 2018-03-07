<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/22
 * Time: 18:28
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Repository\Eloquent\Admin\OrderRepository;
use App\Repository\Eloquent\Admin\UserRepository;
use App\Services\Admin\AgentServicesImpl;
use App\Services\Admin\GoodsServicesImpl;
use App\Services\Common\UploadServicesImpl;
use App\Services\Ifs\Admin\CatServices;
use App\Services\Ifs\Admin\GoodsServices;
use App\Services\Ifs\Common\UploadServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrderController extends controller
{
    protected $order;
    protected $agent;
    protected $user;
    protected $goods;

    public function __construct(OrderRepository $orderRepository,
                                AgentServicesImpl $agentServicesImpl,
                                UserRepository $userRepository,GoodsServicesImpl $goodsServicesImpl)
    {
        $this->order=$orderRepository;
        $this->agent=$agentServicesImpl;
        $this->user=$userRepository;
        $this->goods=$goodsServicesImpl;
    }

    /**
     * @name 订单列表
     * @desc
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data=$this->order->getAll();
        return view('admin.order.index',['data'=>$data,'title'=>'订单列表']);
    }

    /**
     * @name 添加订单页面
     * @desc 添加订单
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        $agent_data = $this->agent->getAll();
        $user_data = $this->user->getAll();
        $goods_data = $this->goods->getAll();
        return view('admin.order.edit',['agent_data'=>$agent_data,
            'user_data'=>$user_data,
            'goods_data'=>$goods_data,
            'title'=>'添加订单']);
    }

    /**
     * @name 添加操作
     * @desc
     * @author ycp
     * @param Request $request
     */
    public function addOperate(Request $request)
    {
        $data = $request->input();
        $data['admin_id'] = get_user()->id;
        if($this->order->save($data)){
            $data=$data=$this->order->getAll();
            return view('admin.order.index',['data'=>$data,'title'=>'订单列表','info'=>'添加成功！']);
        }
        return back()->withInput()->with('error','添加失败！');
    }

    /**
     * @name 修改页面
     * @desc 修改页面
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @internal param Request $request
     */
    public function edit($id)
    {
        $data = $this->order->getOne($id);
        $agent_data = $this->agent->getAll();
        $user_data = $this->user->getAll();
        $goods_data = $this->goods->getAll();
        return view('admin.order.edit',['data'=>$data,
            'agent_data'=>$agent_data,
            'user_data'=>$user_data,
            'goods_data'=>$goods_data,
            'title'=>'添加分类']);
    }

    /**
     * @name 修改操作
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function editOperate(Request $request)
    {
        $data = $request->input();
        if($this->order->update($data)){
            $data=$data=$this->order->getAll();
            return view('admin.order.index',['data'=>$data,'title'=>'分类列表','info'=>'编辑成功！']);
        }
        return back()->withInput()->with('error','修改失败！');
    }

    /**
     * @name 订单删除
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        if($this->order->delete($request->input('id'))){
            return response()->json(msg('success','删除成功!'));
        } else
            return response()->json(msg('error','删除失败!'));
    }

    /**
     * @name 订单状态变更
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function check(Request $request)
    {
        if($this->order->edit($request->only('id','status'))){
            return response()->json(msg('success','操作成功!'));
        } else
            return response()->json(msg('error','操作失败!'));
    }
}