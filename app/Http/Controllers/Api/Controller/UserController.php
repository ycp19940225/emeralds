<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/21
 * Time: 0:01
 */

namespace App\Http\Controllers\Api\Controller;



use App\Http\Controllers\Api\BaseController;



class UserController extends BaseController
{
   
    public function show()
    {
        return $this->response->noContent();
    }

}