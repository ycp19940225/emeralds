<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/22
 * Time: 18:28
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgentController extends controller
{
    public function register()
    {
        return view('admin.agent.register');
    }
    public function doRegister(Request $request)
    {
        return view('admin.agent.register');
    }
}