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
use App\Services\Ifs\Admin\CatServices;
use Illuminate\Http\Request;

class TypeController extends controller
{
    protected  $type ;
    protected  $cat ;

    public function __construct(TypeRepository $typeRepository,CatServices $catServices)
    {
        $this->type=$typeRepository;
        $this->cat=$catServices;
    }

    /**
     * @name 类型首页
     * @desc
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = $this->type->getAll();
        return view('admin.type.index',['data'=>$data,'title'=>'类型列表']);
    }


    /**
     * @name 添加类型页面
     * @desc 添加类型
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        $cat_data = $this->cat->getAll();
        return view('admin.type.edit',['cat_data'=>$cat_data,'title'=>'添加类型']);
    }

    /**
     * @name 添加类型操作
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addOperate(Request $request)
    {
        if($this->type->save($request->input())){
            return redirect('admin/type/index')->with('info','添加成功！');
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
        $cat_data = $this->cat->getAll();
        $data = $this->type->getOne($id);
        return view('admin.type.edit',['data'=>$data,'cat_data'=>$cat_data,'title'=>'编辑类型']);
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
     * @name 删除类型
     * @desc 删除类型
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        if($this->type->delete($request->input('id'))){
            return response()->json(msg('success','删除成功!'));
        } else
            return response()->json(msg('error','删除失败!'));
    }


    /**
     * @name 批量添加分类类型页面
     * @desc
     * @author ycp
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addBatch()
    {
        $cat_data = $this->cat->getAll();
        return view('admin.type.add_batch',['cat_data'=>$cat_data,'title'=>'批量添加分类类型']);
    }

    /**
     * @name 批量添加分类类型操作
     * @desc
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function addBatchOperate(Request $request)
    {
        $data = $request->input();
        if($this->type->addBatch($data)){
            return redirect('admin/type/index')->with('info','批量添加成功！');
        }
        return back()->withInput()->with('error','添加失败！');
    }
}