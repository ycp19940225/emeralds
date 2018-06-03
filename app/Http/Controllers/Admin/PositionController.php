<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/22
 * Time: 18:28
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use DB;

class PositionController extends controller
{
    /**
     * @name 位置列表
     * @desc
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data=DB::table('emerald_position')->get();
        return view('admin.position.index',['data'=>$data,'title'=>'位置列表']);
    }
}