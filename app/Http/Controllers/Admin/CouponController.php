<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/4
 * Time: 1:03
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Repository\Eloquent\Admin\CouponRepository;
use App\Services\Common\UploadServicesImpl;
use Illuminate\Http\Request;

class CouponController extends controller
{
    protected  $coupon ;

    public function __construct(CouponRepository $couponRepository)
    {
        $this->coupon=$couponRepository;
    }

    /**
     * @name 优惠券首页
     * @desc
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = $this->coupon->getAll();
        foreach ($data as $k=>$v){
            $v['start_time'] =  date('Y-m-d',$v['start_time']);
            $v['end_time'] =  date('Y-m-d',$v['end_time']);
        }
        return view('admin.coupon.index',['data'=>$data,'title'=>'优惠券列表']);
    }


    /**
     * @name 添加优惠券页面
     * @desc 添加优惠券
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        return view('admin.coupon.edit',['title'=>'添加优惠券']);
    }

    /**
     * @name 添加优惠券操作
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addOperate(Request $request,UploadServicesImpl $uploadServicesImpl)
    {
        $data = $request->input();
        $data['start_time'] =  strtotime($data['start_time']);
        $data['end_time'] =  strtotime($data['end_time']);
        $pic = $uploadServicesImpl->uploadImg('coupon',$request->file('logo'));
        $data['logo'] = $pic;
        if($this->coupon->save($data)){
            return redirect('admin/coupon/index')->with('info','添加成功！');
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
        $data = $this->coupon->getOne($id);
        $data['start_time'] =  date('Y-m-d',$data['start_time']);
        $data['end_time'] =  date('Y-m-d',$data['end_time']);
        return view('admin.coupon.edit',['data'=>$data,'title'=>'编辑优惠券']);
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
            $pic = $uploadServicesImpl->uploadImg('coupon',$request->file('pic'));
            $data['pic'] = $pic;
        }
        if($this->coupon->update($data)){
            return redirect('admin/coupon/index')->with('info','修改成功！');
        }
        return back()->withInput()->with('error','修改失败！');
    }

    /**
     * @name 删除优惠券
     * @desc 删除优惠券
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        if($this->coupon->delete($request->input('id'))){
            return response()->json(msg('success','删除成功!'));
        } else
            return response()->json(msg('error','删除失败!'));
    }

}