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
        return view('admin.attr.index',['data'=>[],'title'=>'编辑分类属性']);
    }

    /**
     * @name 分类属性操作
     * @desc
     * @author ycp
     */
    public function editOperate()
    {

    }
}