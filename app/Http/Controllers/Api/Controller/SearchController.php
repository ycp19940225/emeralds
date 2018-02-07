<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2018/1/24
 * Time: 0:41
 */

namespace App\Http\Controllers\Api\Controller;


use App\Http\Controllers\Api\BaseController;
use DB;
use Dingo\Api\Http\Request;

/**
 * 搜索
 *
 * @Resource("Group 搜索")
 */
class SearchController extends BaseController
{
    /**
     * 通过一级分类获取商品
     *
     *
     * @Post("http://temp.cqquality.com/api/goods/search/cat")
     * @Parameters({
     *     @Parameter("cat_name", type="varchar", required=true, description="分类名"),
     * })
     *@Transaction({
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "获取该分类商品成功！"

    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "获取失败！",
    "data": ""
     *     }})
     * })
     */
    public function getGoodsByCatName(Request $request)
    {
       $cat = $request->input('cat_name');
       $res = DB::table('emerald_cat as a')
           ->leftJoin('emerald_goods as b','a.id','=','b.cat_id')
           ->where('a.cat_name',$cat)
           ->where('b.deleted_at',0)
           ->where('b.status',1)
           ->where('b.checked',1)
           ->simplePaginate(1);
        return API_MSG($res,'获取该分类商品成功！');
    }

    /**
     * 通过分类获取商品
     *
     *
     * @Post("http://temp.cqquality.com/api/goods/search/type")
     * @Parameters({
     *     @Parameter("cat_id", type="varchar", required=true, description="一级品种ID"),
     *     @Parameter("type_id", type="varchar", required=true, description="二级分类ID"),
     *     @Parameter("type_value", type="varchar", required=true, description="三级级明细")
     * }),
     * @Transaction({
     *      @Request({
    "cat_id":"114",
    "type":"数组",
    })}),
     *@Transaction({
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "获取该分类商品成功！"

    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "获取失败！",
    "data": ""
     *     }})
     * })
     */
    public function getGoodsByCat(Request $request)
    {
        $cat_id = $request->input('cat_id');
        $type = $request->input('type');
        $type_id = [];
        $type_val= [];
        foreach ($type as $v){
            $type_id[]= $v['type_id'];
            $type_val[] = $v['type_value'];
        }
        $count = count($type);
        $condition = 'count(b.goods_id) = '.$count;
        $res = DB::table('emerald_goods as a')
            ->leftJoin('emerald_goods_type as b','a.id','=','b.goods_id')
            ->where('a.cat_id',$cat_id)
            ->where('a.deleted_at',0)
            ->where('a.status',1)
            ->where('a.checked',1)
            ->whereIn('b.type_id',$type_id)
            ->whereIn('b.type_val',$type_val)
            ->groupBy('b.goods_id')
            ->havingRaw($condition)
            ->get();
        return API_MSG($res,'获取详细分类商品成功！');
    }
    /**
     * 通过筛选获取商品
     *
     *
     * @Post("http://temp.cqquality.com/api/goods/search/type")
     * @Parameters({
     *     @Parameter("cat_id", type="varchar", required=true, description="一级品种ID"),
     *     @Parameter("type_id", type="varchar", required=true, description="二级分类ID"),
     *     @Parameter("type_value", type="varchar", required=true, description="三级级明细")
     * }),
     * @Transaction({
     *      @Request({
    "cat_id":"114",
    "type_id":"137",
    "type_value":"飘绿"
    })}),
     *@Transaction({
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "获取该分类商品成功！"

    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "获取失败！",
    "data": ""
     *     }})
     * })
     */
    public function getGoodsByFields()
    {
        
    }
}