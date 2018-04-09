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
use App\Repository\Eloquent\Admin\VideoRepository;

/**
 * 轮播图
 *
 * @Resource("Group 轮播图")
 */
class SlideController extends BaseController
{
    protected $slide;
    protected $article;
    protected $video;

    public function __construct(SlideRepository $slideRepository,
                                ArticleRepository $articleRepository,VideoRepository $videoRepository)
    {
        $this->slide=$slideRepository;
        $this->article=$articleRepository;
        $this->video=$videoRepository;
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
        $type_fixed = $this->slide->getByField('type',1);
        $article_data = $this->article->getTop();
        $data = [
            'status' => 200,
            'code'   => true,
            'msg'   => '获取成功！',
            'data'   => $data,
            'articles' =>$article_data->toArray(),
            'type_fixed' =>$type_fixed,
        ];
        if($data){
            return $data;
        }
        return API_MSG('','获取失败！','false',500);
    }

    /**
     * 获取视频
     *
     *
     * @Get("http://temp.cqquality.com/api/video")
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
    public function video()
    {
        $data = $this->video->getByFields();
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