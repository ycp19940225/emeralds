<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/21
 * Time: 17:03
 */

namespace App\Http\Controllers\Api\Controller;
use App\Http\Controllers\Api\BaseController;
use App\Repository\Eloquent\Admin\ArticleCatRepository;
use App\Repository\Eloquent\Admin\ArticleRepository;
use App\Repository\Eloquent\Admin\FamousRepository;
use App\Services\Admin\GoodsServicesImpl;
use DB;
use Dingo\Api\Contract\Http\Request;

/**
 * 名家
 *
 * @Resource("Group 名家")
 */
class FamousController extends BaseController
{
    protected $famous;
    protected $goods;

    public function __construct(FamousRepository $famousRepository,GoodsServicesImpl $goodsServicesImpl)
    {
        $this->famous=$famousRepository;
        $this->goods=$goodsServicesImpl;
    }
    /**
     * 获取所有名家
     *
     *
     * @Get("http://temp.cqquality.com/api/famous")
     * @Parameters({
     * })
     *@Transaction({
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "获取所有文章成功！",
    "data": ""
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "获取文章失败！",
    "data": ""

     *     }})
     * })
     */
    public function all()
    {
        $famous_data = $this->famous->getAll();
        if($famous_data){
            return API_MSG($famous_data,'获取所有名家成功！');
        }
        return API_MSG('','获取所有名家失败！','false',500);
    }
    /**
     * 获取名家详情（通过名家ID）
     *
     * @Get("http://temp.cqquality.com/api/famous/id")
     * @Parameters({
     *     @Parameter("id", type="int",description="文章ID"),
     * })
     *@Transaction({
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "获取文章成功！",
     "data":""
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "获取文章失败！",
    "data": ""
     *     }})
     * })
     */
    public function famous($id)
    {
        $data = $this->famous->getOne($id);
        $data['goods'] = $this->famous->getOne($id)->goods;
        if($data){
            return API_MSG($data,'获取名家成功！');
        }
        return API_MSG('','获取名家失败！','false',500);
    }
    /**
     * 发布到名家（通过名家ID）
     *
     * @Get("http://temp.cqquality.com/api/famous/release")
     * @Parameters({
     *     @Parameter("goods_id", type="int",description="商品ID"),
     *     @Parameter("famous_id", type="int",description="名家ID"),
     * })
     *@Transaction({
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "发布成功！",
    "data":""
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "发布失败！",
    "data": ""
     *     }})
     * })
     */
    public function addGoodsFamous(Request $request)
    {
        $goods_id = $request->only('goods_id');
        $famous_id = $request->only('famous_id');
        $res = DB::table("emerald_goods")->where('id',$goods_id['goods_id'])->update($famous_id);
        if($res){
            return API_MSG($res,'发布成功！');
        }
        return API_MSG('','发布失败！','false',500);
    }
}