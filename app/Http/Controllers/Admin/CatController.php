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
use App\Services\Ifs\Admin\AttrServices;
use App\Services\Ifs\Admin\CatServices;
use Illuminate\Http\Request;

class CatController extends controller
{
    protected $cat;
    protected $attr;

    public function __construct(CatServices $catServices,AttrServices $attrServices)
    {
        $this->cat=$catServices;
        $this->attr=$attrServices;
    }

    /**
     * @name 分类列表
     * @desc
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data=$this->cat->getAll();
        return view('admin.cat.index',['data'=>$data,'title'=>'分类列表']);
    }

    /**
     * @name 添加分类页面
     * @desc 添加分类
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        return view('admin.cat.edit',['title'=>'添加分类']);
    }

    /**
     * @name 添加操作
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function addOperate(Request $request)
    {
        $data = $request->input();
        if($this->cat->save($data)){
            $data=$data=$this->cat->getAll();
            return view('admin.cat.index',['data'=>$data,'title'=>'分类列表','info'=>'添加成功！']);
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
        $data = $this->cat->getOne($id);
        $child_cat =array_column($data->child_cat->toArray(),'cat_name');
        $child_cat = implode(',',$child_cat);
        $data['child_cat'] = $child_cat;
        return view('admin.cat.edit',['data'=>$data,'title'=>'添加分类']);
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
        if($this->cat->update($data)){
            $data=$data=$this->cat->getAll();
            return view('admin.cat.index',['data'=>$data,'title'=>'分类列表','info'=>'编辑成功！']);
        }
        return back()->withInput()->with('error','修改失败！');
    }

    /**
     * @name 分类删除
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        if($this->cat->delete($request->input('id'))){
            return response()->json(msg('success','删除成功!'));
        } else
            return response()->json(msg('error','删除失败!'));
    }

    /**
     * @name 获取子分类
     * @desc
     * @author ycp\
     * @return \Illuminate\Http\JsonResponse
     */
    public function getChild(Request $request)
    {
        $data = $this->cat->getOne($request->input('cat_id'));
        $data = $data->child_cat->toArray();
        foreach ($data as $k=>$v){
            $attr = $this->cat->getOne($v['id'])->child_cat_attr;
            $data[$k]['attr'] = $attr->toArray();
        }
      if($data){
          return response()->json(msg('success','成功获取子分类!',$data));
      }else{
          return response()->json(msg('error','获取子分类失败!'));
      }
    }

    /**
     * @name 获取子分类下的属性
     * @desc
     * @author ycp\
     */
    public function getAttr()
    {

    }
}