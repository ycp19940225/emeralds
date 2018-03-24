<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/21
 * Time: 20:35
 */

namespace App\Http\Controllers\Api\Controller;


use App\Http\Controllers\Api\BaseController;
use App\Repository\Eloquent\Admin\ArticleRepository;
use App\Repository\Eloquent\Admin\CouponRepository;
use App\Repository\Eloquent\Admin\PageRepository;
use App\Repository\Eloquent\Admin\SlideRepository;

/**
 * 优惠券
 *
 * @Resource("Group 优惠券")
 */
class CouponController extends BaseController
{
    protected $coupon;

    public function __construct(CouponRepository $couponRepository)
    {
        $this->coupon=$couponRepository;
    }
    /**
     * 获取所有优惠券
     *
     *
     * @Get("http://temp.cqquality.com/api/coupons")
     * @Parameters({
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
    public function all()
    {
        $data = $this->coupon->getAll();
        $data = [
            'status' => 200,
            'code'   => true,
            'msg'   => '获取成功！',
            'data'   => $data,
        ];
        if($data){
            return $data;
        }
        return API_MSG('','获取失败！','false',500);
    }

}