<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2018/2/11
 * Time: 15:44
 */

namespace App\Http\Controllers\Api\Controller;


use App\Http\Controllers\Api\BaseController;
use App\Repository\Eloquent\Admin\OrderRepository;
use DB;
use Dingo\Api\Http\Request;

/**
 * 订单
 *
 * @Resource("Group 订单")
 */
class OrderController extends BaseController
{
    protected $order;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->order=$orderRepository;
    }
    /**
     * 管理员添加订单
     *
     *
     * 【商品ID,形式[{"goods_id":41},{"goods_id":43}]】
     *
     * @Post("http://temp.cqquality.com/api/admin/order/add?token={token}")
     * @Parameters({
     *      @Parameter("express_name", type="varchar",description="快递公司名称"),
     *      @Parameter("express_code", type="varchar",description="快递单号"),
     *      @Parameter("goods_id", type="varchar",description=""),
     *      @Parameter("agent_id", type="varchar",description="代理商ID"),
     *      @Parameter("user_id", type="varchar",description="用户ID"),
     *      @Parameter("status", type="int",description="状态，0为在路上，1已结缘，2已退回")
     * })
     *@Transaction({
     *      @Request({
     *
    "express_name":"圆通速递",
    "express_code":"8908908809898",
    "goods_id":"",
    "agent_id":7,
    "status":0
    }),
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "添加成功！",
    "data": {
    "express_name": "圆通速递",
    "express_code": "8908908809898",
    "goods_id": "41",
    "agent_id": 7,
    "admin_id": 1,
    "status": 0,
    "updated_at": "1518337266",
    "created_at": "1518337266",
    "id": 1
    }
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "添加失败！",
    "data": ""
     *     }})
     * })
     */
    public function add(Request $request)
    {
        $data = $request->input();
        $data['admin_id'] = $this->auth()->user()->id;
        $res = $this->order->save($data);
        if($res){
            return API_MSG($res,'添加成功！');
        }
        return API_MSG('','添加失败！','false',500);
    }
    /**
     * 管理员修改订单
     *
     *
     *  【商品ID,形式[{"goods_id":41},{"goods_id":43}]】
     *
     * @Post("http://temp.cqquality.com/api/admin/order/edit?token={token}")
     * @Parameters({
     *      @Parameter("id", type="varchar",description="订单ID"),
     *      @Parameter("express_name", type="varchar",description="快递公司名称"),
     *      @Parameter("express_code", type="varchar",description="快递单号"),
     *      @Parameter("goods_id", type="varchar",description="商品ID"),
     *      @Parameter("agent_id", type="varchar",description="代理商ID"),
     *      @Parameter("user_id", type="varchar",description="用户ID"),
     *      @Parameter("status", type="int",description="状态，0为在路上，1已结缘，2已退回"),
     * })
     *@Transaction({
     *      @Request({
     *
    "id":"29",
    "express_name":"圆通速递",
    "express_code":"8908908809898",
    "goods_id":"",
    "agent_id":7,
    "status":0
    }),
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "修改成功！",
    "data":""
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "修改失败！",
    "data": ""
     *     }})
     * })
     */
    public function edit(Request $request)
    {
        $data = $request->input();
        $res = $this->order->update($data);
        if($res){
            return API_MSG($res,'修改成功！');
        }
        return API_MSG('','修改失败！','false',500);
    }

    /**
     * 管理员删除订单
     *
     * @Get("http://temp.cqquality.com/api/admin/order/delete/{id}?token=={token}")
     * @Parameters({
     * })
     *@Transaction({
     *      @Request({
     *
    }),
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "删除成功！",
    "data": 1
    }),
     *      @Response(500, body={"error": {
    "status": "true",
    "code": "200",
    "msg": "删除失败！",
    "data": false
     *     }})
     * })
     */
    public function delete($id)
    {
        $res = $this->order->delete($id);
        if($res){
            return API_MSG($res,'删除成功！');
        }
        return API_MSG('','删除失败！','false',500);
    }


    /**
     * 订单获取
     *
     *[http://temp.cqquality.com/api/admin/order/all,为管理员路径]
     *[http://temp.cqquality.com/api/agent/order/all,为代理商或者用户获取路径]
     *
     *
     *
     *
     * @Get("http://temp.cqquality.com/api/admin（agent）/order/all?token=={token}")
     * @Parameters({
     * })
     *@Transaction({
     *      @Request({
     *
    }),
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "获取成功！",
    "data": 1
    }),
     *      @Response(500, body={"error": {
    "status": "true",
    "code": "200",
    "msg": "获取失败！",
    "data": false
     *     }})
     * })
     */
    public function getOrders(Request $request)
    {
        if($this->auth()->user()->getTable() == 'emerald_admin'){
            $admin_id = $this->auth()->user()->id;
        }else{
            $user_id = $this->auth()->user()->id;
        }
        if(isset($admin_id)){
            $res = $this->order->getByField('admin_id',$admin_id);
            return API_MSG($res,'获取成功！');
        }
        if(isset($user_id)){
            //判断是否为代理商
            $type = $request->input('type');
            $status = $request->input('status');
            $agent=DB::table("emerald_agent")->where('user_id',$user_id)->first();
            if($type == 2){
                if($status ==3){
                    $res = $this->order->getByField('agent_id',$agent->id);
                    return API_MSG($res,'获取成功！');
                }
                $res = $this->order->getByFields('agent_id',$agent->id,$status);
                return API_MSG($res,'获取成功！');
            }elseif($type == 1){
                if($status ==3){
                    $res = $this->order->getByField('agent_id',$agent->id);
                    return API_MSG($res,'获取成功！');
                }
                $res = $this->order->getByFields('user_id',$user_id,$status);
                return API_MSG($res,'获取成功！');
            }
        }
        return API_MSG('','获取失败！','false',500);
    }

    /**
     * 管理员修改订单状态
     *
     * @Get("http://temp.cqquality.com/api/admin/order/status?token=={token}")
     * @Parameters({
     *      @Parameter("id", type="int",description="订单ID"),
     *      @Parameter("status", type="int",description="状态，0为在路上，1已结缘，2已退回"),
     * })
     *@Transaction({
     *      @Request({
     *
    }),
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "操作成功！",
    "data": 1
    }),
     *      @Response(500, body={"error": {
    "status": "true",
    "code": "200",
    "msg": "修改失败！",
    "data": false
     *     }})
     * })
     */
    public function status(Request $request)
    {
        $data = $request->only('id','status');
        $res = $this->order->update($data);
        if($res){
            return API_MSG($res,'操作成功！');
        }
        return API_MSG('','操作失败！','false',500);
    }
    /**
     * 单个订单获取
     *
     *[http://temp.cqquality.com/api/admin/order/{id},为管理员路径]
     *[http://temp.cqquality.com/api/agent/order/{id},为代理商或者用户获取路径]
     *
     *
     * @Get("http://temp.cqquality.com/api/admin（agent）/order/{id}?token=={token}")
     * @Parameters({
     *      @Parameter("goods", type="array",description="商品信息"),
     *      @Parameter("agent", type="array",description="代理商信息"),
     * })
     *@Transaction({
     *      @Request({
     *
    }),
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "获取成功！",
    "data": 1
    }),
     *      @Response(500, body={"error": {
    "status": "true",
    "code": "200",
    "msg": "获取失败！",
    "data": false
     *     }})
     * })
     */
    public function getOne($id)
    {
        $res = $this->order->getOne($id);
        if($res){
            return API_MSG($res,'操作成功！');
        }
        return API_MSG('','操作失败！','false',500);
    }

}