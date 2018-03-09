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
use App\Repository\Eloquent\Admin\SlideRepository;

/**
 * 轮播图
 *
 * @Resource("Group 轮播图")
 */
class SlideController extends BaseController
{
    protected $slide;
    protected $article;

    public function __construct(SlideRepository $slideRepository,ArticleRepository $articleRepository)
    {
        $this->slide=$slideRepository;
        $this->article=$articleRepository;
    }
    /**
     * 获取所有轮播图
     *
     *
     * @Get("http://temp.cqquality.com/api/slides")
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
        $data = $this->slide->getAll();
        $article_data = $this->article->getTop();
        $data['articles'] = $article_data->toArray();
        if($data){
            return API_MSG($data,'获取成功！');
        }
        return API_MSG('','获取失败！','false',500);
    }

}