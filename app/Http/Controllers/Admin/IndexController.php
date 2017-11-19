<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Services\Admin\SC;

class IndexController extends controller
{

    /**
     * @name 后台首页
     * @desc 后台首页
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $nav= config('nav.NAV');
        $menu = checkMenu($nav);
        return view('admin.index.index',['menu'=>$menu]);
    }

    /**
     * @name  后台主页
     * @desc 后台主页
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function main()
    {
        return view('admin.index.main');
    }

}