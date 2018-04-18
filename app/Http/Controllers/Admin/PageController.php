<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/4
 * Time: 1:03
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Repository\Eloquent\Admin\ArticleRepository;
use App\Repository\Eloquent\Admin\PageRepository;
use App\Services\Common\UploadServicesImpl;
use Illuminate\Http\Request;

class PageController extends controller
{
    protected  $page;
    protected $article;

    public function __construct(PageRepository $pageRepository,ArticleRepository $articleRepository)
    {
        $this->page=$pageRepository;
        $this->article=$articleRepository;
    }

    /**
     * @name 欢迎页首页
     * @desc
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = $this->page->getAlls();
        return view('admin.page.index',['data'=>$data,'title'=>'欢迎页列表']);
    }


    /**
     * @name 添加欢迎页页面
     * @desc 添加欢迎页
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        $article_data = $this->article->getAll();
        return view('admin.page.edit',['title'=>'添加欢迎页','article_data'=>$article_data]);
    }

    /**
     * @name 添加欢迎页操作
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addOperate(Request $request,UploadServicesImpl $uploadServicesImpl)
    {
        $data = $request->input();
        $pic = $uploadServicesImpl->uploadImg('page',$request->file('pic'));
        $data['pic'] = $pic;
        if($this->page->save($data)){
            return redirect('admin/page/index')->with('info','添加成功！');
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
        $data = $this->page->getOne($id);
        $article_data = $this->article->getAll();
        return view('admin.page.edit',['data'=>$data,'article_data'=>$article_data,'title'=>'编辑欢迎页']);
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
            $pic = $uploadServicesImpl->uploadImg('page',$request->file('pic'));
            $data['pic'] = $pic;
        }
        if($this->page->update($data)){
            return redirect('admin/page/index')->with('info','修改成功！');
        }
        return back()->withInput()->with('error','修改失败！');
    }

    /**
     * @name 删除欢迎页
     * @desc 删除欢迎页
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        if($this->page->delete($request->input('id'))){
            return response()->json(msg('success','删除成功!'));
        } else
            return response()->json(msg('error','删除失败!'));
    }

}