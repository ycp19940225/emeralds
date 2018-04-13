<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/28
 * Time: 21:28
 */

namespace App\Http\Controllers\Api\Controller;


use App\Http\Controllers\Api\BaseController;
use App\Repository\Eloquent\Admin\HistoryRepository;
use Dingo\Api\Http\Request;

/**
 * 足迹
 *
 * @Resource("Group 足迹")
 */
class HistoryController extends BaseController
{
    protected $history;

    public function __construct(HistoryRepository $historyRepository)
    {
        $this->history=$historyRepository;
    }
    /**
     * 获取用户足迹
     *
     *[获取数据为数组，goods为浏览的商品信息，articles为浏览的文章信息。如果goods为null,这条足迹应该归档于文章]
     *
     * @Get("http://temp.cqquality.com/api/users/history?token={token}")
     * @Parameters({
     *     @Parameter("token", type="varchar", required=true, description="密钥")
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
    public function all(Request $request)
    {
        $user_id = $this->auth()->user()->id;
        $data = $this->history->getAll($user_id);
        if($data){
            return API_MSG($data,'获取成功！');
        }
        return API_MSG('','获取失败！','false',500);
    }

    /**
     * 记录浏览历史
     *
     *
     * @Get("http://temp.cqquality.com/api/users/history/add?token={token}")
     * @Parameters({
     *     @Parameter("token", type="varchar", required=true, description="密钥"),
     *     @Parameter("goods_id", type="int", required=true, description="商品ID"),
     *     @Parameter("article_id", type="int", required=true, description="文章ID"),
     * })
     *@Transaction({
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "操作成功！",
    "data": {
    "goods_id": "41",
    "user_id": 18,
    "updated_at": "1514470122",
    "created_at": "1514470122",
    "id": 2
    }
    }),
     * @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "操作成功！",
    "data": {
    "article_id": "1",
    "user_id": 18,
    "updated_at": "1514470122",
    "created_at": "1514470122",
    "id": 2
    }
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "操作失败！",
    "data": ""
     *     }})
     * })
     */
    public function add(Request $request)
    {
        $data =[];
        $user_id = $this->auth()->user()->id;
        if($request->has('goods_id')){
             $data['goods_id'] = $request->input('goods_id');
        }
        if($request->has('article_id')){
            $data['article_id'] = $request->input('article_id');
        }
        $data['user_id'] = $user_id;
        $res = $this->history->save($data);
        if($res){
            return API_MSG($res,'操作成功！');
        }
        return API_MSG('','操作失败！','false',500);
    }
}