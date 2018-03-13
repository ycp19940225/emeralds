<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/7
 * Time: 21:33
 */

namespace App\Repository\Eloquent\Admin;


use App\Models\Admin\Order;

class OrderRepository
{
    /**
     * 注入 Type model
     */
    protected $orderModel;

    /**
     * UserRepository constructor.
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        $this->orderModel = $order;
    }

    public function getAll()
    {
        return $this->orderModel->where('deleted_at',0)->with('goods')->with('agent')->with('user')->with('admin')->get();
    }

    public function getOne($id)
    {
        return $this->orderModel->where('deleted_at',0)->with('goods')->with('agent')->find($id);
    }

    public function save($data)
    {
        $model = $this->orderModel->create($data);
        $res = $model->goods()->attach($data['goods_id']);
        if($res == null && $model ){
            return $model;
        }
        return false;
    }

    public function update($data)
    {
        $res = $this->orderModel->find($data['id'])->update($data);
        $model = $this->orderModel->find($data['id'])->goods()->sync($data['goods_id']);
        if($res && $model ){
            return $res;
        }
        return false;
    }
    public function edit($data)
    {
        return $this->orderModel->where('id',$data['id'])->update($data);
    }

    public function delete($id)
    {
        $res = $this->orderModel->where('id',$id)->update(['deleted_at'=>1]);
        $model = $this->orderModel->find($id)->goods()->detach();
       if($res && $model ){
           return $res;
       }
        return false;
    }

    public function getByField($field, $val,$status=0)
    {
        return $this->orderModel->where($field,$val)->where('status',$status)->where('deleted_at',0)->with('goods')->get();
    }
}