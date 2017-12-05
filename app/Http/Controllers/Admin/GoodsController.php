<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/22
 * Time: 18:28
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Services\Common\UploadServicesImpl;
use App\Services\Ifs\Admin\CatServices;
use App\Services\Ifs\Admin\GoodsServices;
use App\Services\Ifs\Common\UploadServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GoodsController extends controller
{
    protected $goods;
    protected $cat;

    public function __construct(GoodsServices $goodsServices,CatServices $catServices)
    {
        $this->goods=$goodsServices;
        $this->cat=$catServices;
    }

    /**
     * @name 分类列表
     * @desc
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data=$this->goods->getAll();
        return view('admin.goods.index',['data'=>$data,'title'=>'翡翠列表']);
    }

    /**
     * @name 添加分类页面
     * @desc 添加分类
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        $cat_data = $this->cat->getAll();
        return view('admin.goods.edit',['cat_data'=>$cat_data,'title'=>'添加翡翠']);
    }

    /**
     * @name 添加操作
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function addOperate(Request $request,UploadServicesImpl $uploadServicesImpl)
    {
        $data = $request->input();
        $logo = $uploadServicesImpl->uploadImg('logo',$request->file('logo'));
        $data['logo'] = $logo;
        $data['pic'] =  implode(',',$data['pic']);
        if($this->goods->save($data)){
            $data=$data=$this->goods->getAll();
            return view('admin.goods.index',['data'=>$data,'title'=>'翡翠列表','info'=>'添加成功！']);
        }
        return back()->withInput()->with('error','添加失败！');
    }

    /**
     * @name 修改页面
     * @desc 修改页面
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @internal param Request $request
     */
    public function edit($id)
    {
        $data = $this->goods->getOne($id);
        $child_goods =array_column($data->child_goods->toArray(),'goods_name');
        $child_goods = implode(',',$child_goods);
        $data['child_goods'] = $child_goods;
        return view('admin.goods.edit',['data'=>$data,'title'=>'添加分类']);
    }

    /**
     * @name 修改操作
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function editOperate(Request $request)
    {
        $data = $request->input();
        if($this->goods->update($data)){
            $data=$data=$this->goods->getAll();
            return view('admin.goods.index',['data'=>$data,'title'=>'分类列表','info'=>'编辑成功！']);
        }
        return back()->withInput()->with('error','修改失败！');
    }

    /**
     * @name 商品删除
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        if($this->goods->delete($request->input('id'))){
            return response()->json(msg('success','删除成功!'));
        } else
            return response()->json(msg('error','删除失败!'));
    }

    /**
     * @name 上传翡翠相册
     * @author ycp
     * @internal param UploadServices $uploadServices
     * @return \Illuminate\Http\JsonResponse
     */
    public function uploadImg(Request $request,UploadServicesImpl $uploadServicesImpl)
    {
        $pics = $request->file('goods_pic');
        $pic_data = [];
        foreach($pics as $k=>$v){
            $img_path = $uploadServicesImpl->uploadImg('goods_pic',$v);
            $pic_data[] =$img_path;
        }
        return response()->json(msg('success','相册上传成功!',$pic_data));
    }
}