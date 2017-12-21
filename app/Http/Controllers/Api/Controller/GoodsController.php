<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/21
 * Time: 0:01
 */

namespace App\Http\Controllers\Api\Controller;

use App\Http\Controllers\Api\BaseController;
use App\Repository\Eloquent\Admin\UserRepository;
use App\Services\Ifs\Admin\GoodsServices;
use Dingo\Api\Http\Request;
use JWTAuth;
use Validator;

/**
 * 商品资源
 *
 * @Resource("Goods")
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


}