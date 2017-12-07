<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/4
 * Time: 1:03
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Repository\Eloquent\Admin\TypeRepository;
use App\Services\Ifs\Admin\AttrServices;
use App\Services\Ifs\Admin\CatServices;
use Illuminate\Http\Request;

class AttrController extends controller
{
    protected  $cat ;
    protected  $attr ;
    protected  $type ;

    public function __construct(CatServices $catServices,TypeRepository $typeRepository,AttrServices $attrServices)
    {
        $this->cat=$catServices;
        $this->type=$typeRepository;
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
        $cat_data = $this->cat->getAll();
        return view('admin.attr.edit',['cat_data'=>$cat_data,'title'=>'添加属性']);
    }

    /**
     * @name 添加操作
     * @desc 添加操作
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addOperate(Request $request)
    {
        if($this->attr->save($request->input())){
            return redirect('admin/attr/index')->with('info','添加成功！');
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
        $data = $this->attr->getOne($id);  //属性
        $type_data = $data->type;  //该属性的类型
        $cat_data = $this->cat->getAll(); //所有分类
        $cat_id = $this->type->getOne($type_data['id'])->cat->id; //该属性的分类
        //所有类型
        $all_type = $this->type->getAll();
        return view('admin.attr.edit',[
            'data'=>$data,
            'type_data'=>$type_data,
            'cat_data'=>$cat_data,
            'cat_id'=>$cat_id,
            'all_type'=>$all_type,
            'title'=>'编辑属性'
        ]);
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
        $type_data = $this->type->getOne($id);  //类型
        $cat_data = $type_data->cat;  //该类型的分类
        //所有类型
        return view('admin.attr.add_batch',['type_data'=>$type_data,'cat_data'=>$cat_data,'title'=>'批量添加分类属性']);
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