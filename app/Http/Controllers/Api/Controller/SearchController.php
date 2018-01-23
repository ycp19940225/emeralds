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
           ->get();
        return API_MSG($res,'获取该分类商品成功！');
    }
}