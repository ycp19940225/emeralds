<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/21
 * Time: 15:08
 */

namespace App\Http\Controllers\Api\Controller;


use App\Http\Controllers\Api\BaseController;
use App\Services\Ifs\Admin\CatServices;
/**
 * 翡翠品种
 *
 * @Resource("Group 分类")
 */
class CatController extends BaseController
{
    protected $cat;

    public function __construct(CatServices $catServices)
    {
        $this->cat=$catServices;
    }
    /**
     * 获取所有品种
     *
     *[获取所有品种,以及二级分类，三级明细]
     *
     *
     * @Get("http://temp.cqquality.com/api/cats")
     * @Parameters({
     *     @Parameter("data", type="varchar", required=true, description="品种"),
     *     @Parameter("type", type="varchar", required=true, description="二级分类"),
     *     @Parameter("type_val", type="varchar", required=true, description="三级明细，每个值逗号隔开")
     * })
     *@Transaction({
     *      @Request({

    }),
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "获取品种成功！",
     "data":""
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "获取品种失败！",
    "data": ""
     *     }})
     * })
     */
    public function all()
    {
        $cat_data = $this->cat->getAll();
        $data =[];
        foreach($cat_data as $k=>$cat_datum){
            $data[$k]= $cat_datum;
            $data[$k]['type'] = $cat_datum->type;
        }
        if($cat_data){
            return API_MSG($data,'获取品种成功！');
        }
        return API_MSG('','获取品种失败！','false',500);
    }
}