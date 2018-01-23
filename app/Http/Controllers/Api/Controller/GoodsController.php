<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/21
 * Time: 0:01
 */

namespace App\Http\Controllers\Api\Controller;

use App\Http\Controllers\Api\BaseController;
use App\Services\Common\UploadServicesImpl;
use App\Services\Ifs\Admin\GoodsServices;
use Dingo\Api\Http\Request;

/**
 * 商品资源
 *
 * @Resource("Group 商品")
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
     * [分页：http://temp.cqquality.com/api/goods?page={number}]
     *
     * @Get("http://temp.cqquality.com/api/goods")
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

    },
     * "first_page_url": "http://www.emerald.com/api/goods?page=1",
    "from": 1,
    "next_page_url": null,
    "path": "http://www.emerald.com/api/goods",
    "per_page": 10,
    "prev_page_url": null,
    "to": 2
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

    /**
     * 获取单个商品
     *
     *
     * @Get("http://temp.cqquality.com/api/goods/id")
     * @Parameters({
     *      @Parameter("id", type="int",description="商品ID")
     * })
     *@Transaction({
     *      @Request({

    }),
     *      @Response(200, body={
    "status": "true",
    "code": 200,
    "msg": "获取商品详情成功！",
    "data": {

    }
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "获取商品详情失败！",
    "data": ""
     *     }})
     * })
     */
    public function one($id)
    {
        $goods_data = $this->goods->getOne($id);
        if($goods_data){
            return API_MSG($goods_data,'获取商品详情成功！');
        }
        return API_MSG('','获取商品详情失败！','false',500);
    }

    /**
     * 上传商品封面
     *
     *[http://temp.cqquality.com/api/admin/goods/logo,为管理员上传路径]
     *[http://temp.cqquality.com/api/agent/goods/logo,为代理商上传路径]
     *
     * @Post("http://temp.cqquality.com/api/admin(agent)/goods/logo?token={token}")
     * @Parameters({
     *      @Parameter("logo", type="file",description="图片")
     * })
     *@Transaction({
     *      @Request({
     *     "logo":""
    }),
     *      @Response(200, body={
    "status": "true",
    "code": 200,
    "msg": "上传成功！",
    "data": "goods_logo/2017-12-24/naxS3VYvCkPEcrCwsuua1IPTwmtFh80c3BIjCGPy.jpeg"
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "参数错误或者上传失败！",
    "data": ""
     *     }})
     * })
     */
    public function uploadLogo(Request $request,UploadServicesImpl $uploadServicesImpl)
    {
        $files = $request->file('logo');
        $urls = $uploadServicesImpl->uploadImg('goods_logo',$files);
        if ($files&&$urls){
            return API_MSG($urls,'上传成功！','true',200);
        } else {
            return API_MSG('','参数错误或者上传失败！','false',500);
        }
    }
    /**
     * 上传商品相册
     *
     *[http://temp.cqquality.com/api/admin/goods/pic,为管理员上传路径]
     *[http://temp.cqquality.com/api/agent/goods/pic,为代理商上传路径]
     *
     * @Post("http://temp.cqquality.com/api/admin(agent)/goods/logo?token={token}")
     * @Parameters({
     *      @Parameter("pic", type="file",description="图片")
     * })
     *@Transaction({
     *      @Request({
     *     "pic":""
    }),
     *      @Response(200, body={
    "status": "true",
    "code": 200,
    "msg": "上传成功！",
    "data": "goods_pic/2017-12-24/naxS3VYvCkPEcrCwsuua1IPTwmtFh80c3BIjCGPy.jpeg"
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "参数错误或者上传失败！",
    "data": ""
     *     }})
     * })
     */
    public function uploadPic(Request $request,UploadServicesImpl $uploadServicesImpl)
    {
        $files = $request->file('pic');
        $urls = $uploadServicesImpl->uploadImg('goods_pic',$files);
        if ($files&&$urls){
            return API_MSG($urls,'上传成功！','true',200);
        } else {
            return API_MSG('','参数错误或者上传失败！','false',500);
        }
    }

    /**
     * 上传商品视频
     *
     *[http://temp.cqquality.com/api/admin/goods/pic,为管理员上传路径]
     *[http://temp.cqquality.com/api/agent/goods/pic,为代理商上传路径]
     *
     * 视频限制大小为8M
     *
     * @Post("http://temp.cqquality.com/api/admin(agent)/goods/video?token={token}")
     * @Parameters({
     *      @Parameter("video", type="file",description="视频")
     * })
     *@Transaction({
     *      @Request({
     *     "video":""
    }),
     *      @Response(200, body={
    "status": "true",
    "code": 200,
    "msg": "上传成功！",
    "data": "goods_video/2017-12-24/792190e9187897d3b67dc833f77f7da4.mp4"
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "参数错误或者上传失败！",
    "data": ""
     *     }})
     * })
     */
    public function uploadVideo(Request $request,UploadServicesImpl $uploadServicesImpl)
    {
        $files = $request->file('video');
        $urls = $uploadServicesImpl->uploadVideo('goods_video',$files);
        if ($files&&$urls){
            return API_MSG($urls,'上传成功！','true',200);
        } else {
            return API_MSG('','参数错误或者上传失败！'.$urls,'false',500);
        }
    }

    /**
     * 上传商品
     *
     *[http://temp.cqquality.com/api/admin/goods/add,为管理员上传路径]
     *[http://temp.cqquality.com/api/agent/goods/add,为代理商上传路径]
     *
     * @Post("http://temp.cqquality.com/api/admin(agent)/goods/add?token={token}")
     * @Parameters({
     *      @Parameter("logo", type="varchar",description="图片url"),
     *      @Parameter("goods_name", type="varchar",description="翡翠名"),
     *      @Parameter("pic", type="varchar",description="翡翠相册，每张图片以逗号隔开"),
     *      @Parameter("video", type="varchar",description="视频地址"),
     *      @Parameter("goods_detail", type="varchar",description="翡翠详情"),
     *      @Parameter("price", type="varchar",description="翡翠价格"),
     *      @Parameter("stock", type="varchar",description="库存"),
     *      @Parameter("cat_id", type="varchar",description="品种"),
     *      @Parameter("type", type="varchar",description="二级分类及三级明细，格式参考示例请求"),
     *      @Parameter("input_type", type="int",description="录入者类型，1为代理商，2为管理员"),
     *      @Parameter("input_id", type="int",description="录入者Id，结合input_type"),
     * })
     *@Transaction({
     *      @Request({
     *
    "goods_name":"测试翡翠",
    "logo":"goods_logo/2017-12-24/Y2rlFNKjVlv9xDTWjWG7FYsCoSe2SDDf5HHfrGFW.jpeg",
    "pic":"goods_pic/2017-12-24/Zz7G0UBLUISswZPggrQ86UteBOr096hNw5JYmtfZ.jpeg,goods_pic/2017-12-24/naxS3VYvCkPEcrCwsuua1IPTwmtFh80c3BIjCGPy.jpe",
    "video":"goods_video/2017-12-24/792190e9187897d3b67dc833f77f7da4.mp4",
    "goods_detail":"库存仅此一件【尺寸】高35.5mm，宽23.5mm，厚5.6mm【颜　　色】略飘花【透明度】二分之一透明【必要说明】可见细小石纹，但瑕不掩瑜",
    "price":"20000",
    "stock":"1",
    "cat_id":"114",
    "type":{
    "136":{"type_val":"玻璃种"},
    "135":{"type_val":"观音"},
    "137":{"type_val":"飘绿"},
    "138":{"type_val":"1.5-3万"}
    }
    }),
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "添加成功！",
    "data": {
    "goods_name": "测试翡翠",
    "logo": "goods_logo/2017-12-24/Y2rlFNKjVlv9xDTWjWG7FYsCoSe2SDDf5HHfrGFW.jpeg",
    "pic": "goods_pic/2017-12-24/Zz7G0UBLUISswZPggrQ86UteBOr096hNw5JYmtfZ.jpeg,goods_pic/2017-12-24/naxS3VYvCkPEcrCwsuua1IPTwmtFh80c3BIjCGPy.jpe",
    "video": "goods_video/2017-12-24/792190e9187897d3b67dc833f77f7da4.mp4",
    "goods_detail": "库存仅此一件【尺寸】高35.5mm，宽23.5mm，厚5.6mm【颜　　色】略飘花【透明度】二分之一透明【必要说明】可见细小石纹，但瑕不掩瑜",
    "price": "20000",
    "stock": "1",
    "cat_id": "114",
    "goods_code": "LYFC15141200105",
    "updated_at": "1514120010",
    "created_at": "1514120010",
    "id": 39
    }
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "添加失败！",
    "data": ""
     *     }})
     * })
     */
    public function add(Request $request)
    {
        $data = $request->except('token');
        if($this->auth()->user()->getTable() == 'emerald_admin'){
            $data['input_type'] = 2 ;
        }else{
            $data['input_type'] = 1 ;
        }
        $data['goods_code'] = generate_code('LYFC');
        $data['input_id'] = $this->auth()->user()->id;
        $res = $this->goods->save($data);
        if($res){
            return API_MSG($res,'添加成功！');
        }
        return API_MSG('','添加失败！','false',500);
    }

    /**
     * 首页商品搜索
     *
     *
     *
     * @Post("http://temp.cqquality.com/api/goods/search")
     * @Parameters({
     *      @Parameter("input", type="varchar",description="用户输入")
     * })
     *@Transaction({
     *      @Request({
     *     "input":"翡翠"
    }),
     *      @Response(200, body={
    "status": "true",
    "code": 200,
    "msg": "获取成功！",
    "data": ""
    }),
     *      @Response(500, body={"error": {
    "status": "false",
    "code": 500,
    "msg": "参数错误或者获取失败！",
    "data": ""
     *     }})
     * })
     */
    public function search(Request $request)
    {
        $res = $this->goods->search($request->input('input'));
        if ($res){
            return API_MSG($res,'获取成功！','true',200);
        } else {
            return API_MSG('','参数错误或者获取失败！'.$res,'false',500);
        }
    }

    /**
     * 编辑商品
     *
     *[http://temp.cqquality.com/api/admin/goods/add,为管理员编辑路径]
     *[http://temp.cqquality.com/api/agent/goods/add,为代理商编辑路径]
     *
     * @Post("http://temp.cqquality.com/api/admin(agent)/goods/add?token={token}")
     * @Parameters({
     *      @Parameter("id", type="int",description="商品ID"),
     *      @Parameter("logo", type="varchar",description="图片url"),
     *      @Parameter("goods_name", type="varchar",description="翡翠名"),
     *      @Parameter("pic", type="varchar",description="翡翠相册，每张图片以逗号隔开"),
     *      @Parameter("video", type="varchar",description="视频地址"),
     *      @Parameter("goods_detail", type="varchar",description="翡翠详情"),
     *      @Parameter("price", type="varchar",description="翡翠价格"),
     *      @Parameter("stock", type="varchar",description="库存"),
     *      @Parameter("cat_id", type="varchar",description="品种"),
     *      @Parameter("type", type="varchar",description="二级分类及三级明细，格式参考示例请求"),
     *      @Parameter("input_type", type="int",description="录入者类型，1为代理商，2为管理员"),
     *      @Parameter("input_id", type="int",description="录入者Id，结合input_type"),
     * })
     *@Transaction({
     *      @Request({
     *
    "id":"42",
    "goods_name":"测试翡翠",
    "logo":"goods_logo/2017-12-24/Y2rlFNKjVlv9xDTWjWG7FYsCoSe2SDDf5HHfrGFW.jpeg",
    "pic":"goods_pic/2017-12-24/Zz7G0UBLUISswZPggrQ86UteBOr096hNw5JYmtfZ.jpeg,goods_pic/2017-12-24/naxS3VYvCkPEcrCwsuua1IPTwmtFh80c3BIjCGPy.jpe",
    "video":"goods_video/2017-12-24/792190e9187897d3b67dc833f77f7da4.mp4",
    "goods_detail":"库存仅此一件【尺寸】高35.5mm，宽23.5mm，厚5.6mm【颜　　色】略飘花【透明度】二分之一透明【必要说明】可见细小石纹，但瑕不掩瑜",
    "price":"33000",
    "stock":"1",
    "cat_id":"114",
    "type":{
    "136":{"type_val":"玻璃种"},
    "135":{"type_val":"观音"},
    "137":{"type_val":"飘绿"},
    "138":{"type_val":"8千-1.5万"}
    }
    }),
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "修改成功！",
    "data": true
    }),
     *      @Response(500, body={"error": {
    "status": "true",
    "code": "200",
    "msg": "修改失败！",
    "data": true
     *     }})
     * })
     */
    public function edit(Request $request)
    {
        $data = $request->except('token');
        $res = $this->goods->update($data);
        if($res){
            return API_MSG($res,'修改成功！');
        }
        return API_MSG('','修改失败！','false',500);
    }
    /**
     * 商品上下架
     *
     *[http://temp.cqquality.com/api/admin/goods/status,为管理员编辑路径]
     *[http://temp.cqquality.com/api/agent/goods/status,为代理商编辑路径]
     *
     *
     * [代理商上架的商品必须先通过审核，管理员不需要]
     *
     *
     * @Post("http://temp.cqquality.com/api/admin(agent)/goods/status?token={token}")
     * @Parameters({
     *      @Parameter("id", type="int",description="商品ID"),
     *      @Parameter("status", type="int",description="商品状态，1上架。0下架"),
     * })
     *@Transaction({
     *      @Request({
     *
    "id":"42",
    "status":"0"
    }),
     *      @Response(200, body={
    "status": "true",
    "code": "200",
    "msg": "操作成功！",
    "data": 1
    }),
     *      @Response(500, body={"error": {
    "status": "true",
    "code": "200",
    "msg": "修改失败！",
    "data": false
     *     }})
     * })
     */
    public function changeStatus(Request $request)
    {
        $data = $request->only('id','status');
        if($data['status'] == 1){
            $goods_data = $this->goods->getOne($data['id']);
            if($goods_data->checked == 0 && $goods_data->input_type == 1){
                return API_MSG('','操作失败！,该商品还未通过审核','false',500);
            }
        }
        $res = $this->goods->updateFields($data);
        if($res){
            return API_MSG($res,'操作成功！');
        }
        return API_MSG('','操作失败！','false',500);
    }
}