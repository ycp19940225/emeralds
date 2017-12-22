<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/21
 * Time: 0:01
 */

namespace App\Http\Controllers\Api\Controller;

use App\Http\Controllers\Api\BaseController;
use App\Services\Ifs\Admin\GoodsServices;
use Dingo\Api\Http\Request;

/**
 * 商品资源
 *
 * @Resource("Group Goods")
 */
class GoodsController extends BaseController
{
    protected $goods;

    public function __construct(GoodsServices $goodsServices)
    {
        $this->goods=$goodsServices;
    }

    /**
     * 获取所有商品
     *
     *
     * @Get("/api/goods")
     * @Parameters({
     * })
     *@Transaction({
     *      @Request({

    }),
     *      @Response(200, body={
    "status": "true",
    "code": 200,
    "msg": "获取商品成功！",
    "data": {

    }
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "获取商品失败！",
    "data": ""
     *     }})
     * })
     */
    public function all()
    {
       $goods_data = $this->goods->getAll();
       if($goods_data){
           return API_MSG($goods_data,'获取商品成功！');
       }
        return API_MSG('','获取商品失败！','false',500);
    }

    /**
     * 获取单个商品
     *
     *
     * @Get("/api/goods/id")
     * @Parameters({
     *      @Parameter("id", type="int",description="商品ID")
     * })
     *@Transaction({
     *      @Request({

    }),
     *      @Response(200, body={
    "status": "true",
    "code": 200,
    "msg": "获取商品详情成功！",
    "data": {

    }
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "获取商品详情失败！",
    "data": ""
     *     }})
     * })
     */
    public function one($id)
    {
        $goods_data = $this->goods->getOne($id);
        if($goods_data){
            return API_MSG($goods_data,'获取商品详情成功！');
        }
        return API_MSG('','获取商品详情失败！','false',500);
    }

    public function add(Request $request)
    {
       
    }


}