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
use App\Repository\Eloquent\Admin\PageRepository;
use App\Repository\Eloquent\Admin\SlideRepository;

/**
 * 欢迎页
 *
 * @Resource("Group 欢迎页")
 */
class PageController extends BaseController
{
    protected $page;
    protected $article;

    public function __construct(PageRepository $pageRepository,ArticleRepository $articleRepository)
    {
        $this->page=$pageRepository;
        $this->article=$articleRepository;
    }
    /**
     * 获取所有欢迎页
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
        $data = $this->page->getAll();
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