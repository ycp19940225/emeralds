<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

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
        return view('admin.index.index');
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