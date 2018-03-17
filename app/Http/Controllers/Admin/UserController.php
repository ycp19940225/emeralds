<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/25
 * Time: 16:53
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Repository\Eloquent\Admin\UserRepository;
use App\Services\Common\UploadServicesImpl;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected  $user ;

    public function __construct(UserRepository $userRepository)
    {
        $this->user=$userRepository;
    }

    /**
     * @name 用户首页
     * @desc
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = $this->user->getAll();
        return view('admin.user.index',['data'=>$data,'title'=>'用户列表']);
    }


    /**
     * @name 添加用户页面
     * @desc 添加用户
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        return view('admin.user.edit',['title'=>'添加用户']);
    }

    /**
     * @name 添加用户操作
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addOperate(Request $request,UploadServicesImpl $uploadServicesImpl)
    {
        $data = $request->input();
        $pic = $uploadServicesImpl->upload('user',$request->file('pic'));
        $data['password'] = bcrypt($data['password']);
        $data['logo'] = json_decode($pic)->url;
        if($this->user->save($data)){
            dd(1);
            return redirect('admin/users/index')->with('info','添加成功！');
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
        $data = $this->user->getOne($id);
        if($data['status'] == 0){
            $data['checked_0'] = "checked";
        }
        if($data['status'] == 1){
            $data['checked_1'] = "checked";
        }
        if($data['status'] == 2){
            $data['checked_2'] = "checked";
        }
        return view('admin.user.edit',['data'=>$data,'title'=>'编辑用户']);
    }
    /**
     * @name 修改操作
     * @desc 修改操作
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function editOperate(Request $request,UploadServicesImpl $uploadServicesImpl)
    {
        $data = $request->input();
        if($request->file('pic')){
            $pic = $uploadServicesImpl->upload('user',$request->file('pic'));
            $data['logo'] = json_decode($pic)->url;
        }
        if(isset($data['password'])){
            $data['password'] = bcrypt($data['password']);
        }
        if($this->user->update($data)){
            return redirect('admin/users/index')->with('info','修改成功！');
        }
        return back()->withInput()->with('error','修改失败！');
    }

    /**
     * @name 删除用户
     * @desc 删除用户
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        if($this->user->delete($request->input('id'))){
            return response()->json(msg('success','删除成功!'));
        } else
            return response()->json(msg('error','删除失败!'));
    }

    /**
     * @name 修改积分
     * @desc
     * @author ycp
     * @param Request $request
     */
    public function editScore(Request $request)
    {
        $method = $request->only('type');
        $data = $request->only('id','score');
        if($method['type'] == 'minus'){
            $data['score'] = -1*$data['score'];
        }
        $data['score'] = $this->user->getOne($data['id'])->score + $data['score'];
        if($this->user->update($data)){
            return response()->json(msg('success','操作成功!'));
        } else
            return response()->json(msg('error','操作失败!'));

    }
}