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
     * @name 分类属性页面
     * @desc
     * @author ycp
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data = $this->cat->getOne($id);
        $child_cat_attr = array_column($data->child_cat_attr->toArray(),'attr_name');
        $child_cat_attr = implode(',',$child_cat_attr);
        $data['child_cat_attr'] = $child_cat_attr;
        return view('admin.attr.index',['data'=>$data,'title'=>'编辑分类属性']);
    }

    /**
     * @name 分类属性操作
     * @desc
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function editOperate(Request $request)
    {
        $data = $request->input();
        if($this->attr->save($data)){
            $data=$data=$this->cat->getAll();
            return view('admin.cat.index',['data'=>$data,'title'=>'分类列表']);
        }
        return back()->withInput()->with('error','添加失败！');
    }
}