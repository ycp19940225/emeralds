<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/21
 * Time: 0:01
 */

namespace App\Http\Controllers\Api\Controller;

use App\Http\Controllers\Api\BaseController;
use App\Repository\Eloquent\Admin\UserRepository;
use Dingo\Api\Http\Request;


class UserController extends BaseController
{
    protected $user;

    public function __construct(UserRepository $userRepository)
    {
        $this->user=$userRepository;
    }

    /**
     * Login user
     *
     * Login with a `username` and `password`.
     *

     * })
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'telphone' => 'required|unique:emerald_user|max:255',
            'password' => 'required',
        ]);
        $data = $request->all();
        $data['password'] = get_md5_password($data['password']);
        $data = $this->user->save($data);
        return $data;
    }

    public function show($id)
    {

    }

}