<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/4
 * Time: 1:03
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Services\Ifs\Admin\AttrServices;
use App\Services\Ifs\Admin\CatServices;
use Illuminate\Http\Request;

class AttrController extends controller
{
    protected  $cat ;
    protected  $attr ;

    public function __construct(CatServices $catServices,AttrServices $attrServices)
    {
        $this->cat=$catServices;
        $this->attr=$attrServices;
    }

    /**
     * @name 属性首页
     * @desc
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = $this->attr->getAll();
        return view('admin.attr.index',['data'=>$data,'title'=>'属性列表']);
    }


    /**
     * @name 添加属性页面
     * @desc 添加属性
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        return view('admin.attr.edit',['title'=>'添加属性']);
    }

    /**
     * @name 添加操作
     * @desc 添加操作
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addOperate(Request $request)
    {

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
        $data = $this->attr->getOne($id);
        return view('admin.attr.edit',['data'=>$data,'title'=>'编辑属性']);
    }
    /**
     * @name 修改操作
     * @desc 修改操作
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function editOperate(Request $request)
    {

        return response()->json(msg('error','修改失败！'));
    }

    /**
     * @name 删除属性
     * @desc 删除属性
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        if($this->attr->delete($request->input('id'))){
            return response()->json(msg('success','删除成功!'));
        } else
            return response()->json(msg('error','删除失败!'));
    }


    /**
     * @name 批量添加分类属性页面
     * @desc
     * @author ycp
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addBatch($id)
    {
        $data = $this->cat->getOne($id);
        $child_cat_attr = array_column($data->child_cat_attr->toArray(),'attr_name');
        $child_cat_attr = implode(',',$child_cat_attr);
        $data['child_cat_attr'] = $child_cat_attr;
        return view('admin.attr.add_batch',['data'=>$data,'title'=>'批量添加分类属性']);
    }

    /**
     * @name 批量添加分类属性操作
     * @desc
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function addBatchOperate(Request $request)
    {
        $data = $request->input();
        if($this->attr->add_batch($data)){
            $data=$data=$this->cat->getAll();
            return view('admin.cat.index',['data'=>$data,'title'=>'分类列表','info'=>'批量添加成功！']);
        }
        return back()->withInput()->with('error','添加失败！');
    }
}