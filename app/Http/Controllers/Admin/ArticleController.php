<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/22
 * Time: 18:28
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Repository\Eloquent\Admin\ArticleRepository;
use App\Repository\Eloquent\Admin\ArticleCatRepository;
use Illuminate\Http\Request;

class ArticleController extends controller
{
    protected $cat;
    protected $article;

    public function __construct(ArticleRepository $articleRepository,
                                ArticleCatRepository $articleCatRepository)
    {
        $this->article=$articleRepository;
        $this->cat=$articleCatRepository;
    }

    /**
     * @name 文章列表
     * @desc
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data=$this->article->getAll();
        return view('admin.article.index',['data'=>$data,'title'=>'文章列表']);
    }

    /**
     * @name 添加文章页面
     * @desc 添加分类
     * @author ycp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        return view('admin.article.edit',['title'=>'添加文章']);
    }

    /**
     * @name 添加操作
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function addOperate(Request $request)
    {
        $data = $request->input();
        if($this->article->save($data)){
            return redirect('admin/article/index')->with('info','文章添加成功！');
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
        $data = $this->article->getOne($id);
        return view('admin.article.edit',['data'=>$data,'title'=>'添加文章']);
    }

    /**
     * @name 修改操作
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function editOperate(Request $request)
    {
        $data = $request->input();
        if($this->article->update($data)){
            return redirect('admin/article/index')->with('info','修改成功！');
        }
        return back()->withInput()->with('error','修改失败！');
    }

    /**
     * @name 文章删除
     * @desc
     * @author ycp
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        if($this->article->delete($request->input('id'))){
            return response()->json(msg('success','删除成功!'));
        } else
            return response()->json(msg('error','删除失败!'));
    }
}