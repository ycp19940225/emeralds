<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/21
 * Time: 20:35
 */

namespace App\Http\Controllers\Api\Controller;


use App\Http\Controllers\Api\BaseController;
use App\Repository\Eloquent\Admin\SlideRepository;

/**
 * 轮播图
 *
 * @Resource("Group Slide")
 */
class SlideController extends BaseController
{
    protected $slide;

    public function __construct(SlideRepository $slideRepository)
    {
        $this->slide=$slideRepository;
    }
    /**
     * 获取所有轮播图
     *
     *
     * @Get("/api/slides")
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
        if($data){
            return API_MSG($data,'获取成功！');
        }
        return API_MSG('','获取失败！','false',500);
    }

}