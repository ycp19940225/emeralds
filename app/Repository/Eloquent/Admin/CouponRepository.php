<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/7
 * Time: 21:33
 */

namespace App\Repository\Eloquent\Admin;


use App\Models\Admin\Coupon;

class CouponRepository
{
    /**
     * 注入 Type model
     */
    protected $couponModel;

    /**
     * UserRepository constructor.
     * @param Coupon $coupon
     */
    public function __construct(Coupon $coupon)
    {
        $this->couponModel = $coupon;
    }

    public function getAll()
    {
        return $this->couponModel->where('deleted_at',0)->get();
    }

    public function getOne($id)
    {
        return $this->couponModel->where('deleted_at',0)->find($id);
    }

    public function save($data)
    {
        return $this->couponModel->create($data);
    }

    public function update($data)
    {
        return $this->couponModel->find($data['id'])->update($data);
    }

    public function delete($id)
    {
        return $this->couponModel->where('id',$id)->update(['deleted_at'=>1]);
    }
}