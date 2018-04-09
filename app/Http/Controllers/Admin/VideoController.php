<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/4
 * Time: 1:03
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Repository\Eloquent\Admin\VideoRepository;
use App\Services\Common\UploadServicesImpl;
use Illuminate\Http\Request;

class VideoController extends controller
{
    protected  $video ;

    public function __construct(VideoRepository $videoRepository)
    {
        $this->video=$videoRepository;
    }

    /**
     * @name 视频首页
     * @desc
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = $this->video->getAll();
        return view('admin.video.index',['data'=>$data,'title'=>'视频列表']);
    }


    /**
     * @name 添加视频页面
     * @desc 添加视频
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        return view('admin.video.edit',['title'=>'添加视频']);
    }

    /**
     * @name 添加视频操作
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addOperate(Request $request,UploadServicesImpl $uploadServicesImpl)
    {
        $data = $request->input();
        $pic = $uploadServicesImpl->uploadImg('video',$request->file('pic'));
        $data['pic'] = $pic;
        if($this->video->save($data)){
            return redirect('admin/video/index')->with('info','添加成功！');
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
        $data = $this->video->getOne($id);
        $article_data = $this->article->getAll();
        return view('admin.video.edit',['data'=>$data,'article_data'=>$article_data,'title'=>'编辑视频']);
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
            $pic = $uploadServicesImpl->uploadImg('video',$request->file('pic'));
            $data['pic'] = $pic;
        }
        if($this->video->update($data)){
            return redirect('admin/video/index')->with('info','修改成功！');
        }
        return back()->withInput()->with('error','修改失败！');
    }

    /**
     * @name 删除视频
     * @desc 删除视频
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        if($this->video->delete($request->input('id'))){
            return response()->json(msg('success','删除成功!'));
        } else
            return response()->json(msg('error','删除失败!'));
    }

}