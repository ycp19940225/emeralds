<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/4
 * Time: 1:03
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Repository\Eloquent\Admin\SlideRepository;
use App\Services\Common\UploadServicesImpl;
use Illuminate\Http\Request;

class SlideController extends controller
{
    protected  $slide ;

    public function __construct(SlideRepository $slideRepository)
    {
        $this->slide=$slideRepository;
    }

    /**
     * @name 轮播图首页
     * @desc
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = $this->slide->getAll();
        return view('admin.slide.index',['data'=>$data,'title'=>'轮播图列表']);
    }


    /**
     * @name 添加轮播图页面
     * @desc 添加轮播图
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        return view('admin.slide.edit',['title'=>'添加轮播图']);
    }

    /**
     * @name 添加轮播图操作
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addOperate(Request $request,UploadServicesImpl $uploadServicesImpl)
    {
        $data = $request->input();
        $pic = $uploadServicesImpl->uploadImg('slide',$request->file('pic'));
        $data['pic'] = $pic;
        if($this->slide->save($data)){
            return redirect('admin/slide/index')->with('info','添加成功！');
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
        $data = $this->slide->getOne($id);
        return view('admin.slide.edit',['data'=>$data,'title'=>'编辑轮播图']);
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
            $pic = $uploadServicesImpl->uploadImg('slide',$request->file('pic'));
            $data['pic'] = $pic;
        }
        if($this->slide->update($data)){
            return redirect('admin/slide/index')->with('info','修改成功！');
        }
        return back()->withInput()->with('error','修改失败！');
    }

    /**
     * @name 删除轮播图
     * @desc 删除轮播图
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        if($this->slide->delete($request->input('id'))){
            return response()->json(msg('success','删除成功!'));
        } else
            return response()->json(msg('error','删除失败!'));
    }

}