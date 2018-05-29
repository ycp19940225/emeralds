<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/7
 * Time: 21:33
 */

namespace App\Repository\Eloquent\Admin;


use App\Models\Admin\Article;

class ArticleRepository
{
    /**
     * 注入 Type model
     */
    protected $articleModel;

    /**
     * UserRepository constructor.
     * @param Article $article
     */
    public function __construct(Article $article)
    {
        $this->articleModel = $article;
    }

    public function getAll()
    {
        return $this->articleModel->where('deleted_at',0)->orderBy('created_at','desc')->with('cat')->get();
    }

    public function getOne($id)
    {
        return $this->articleModel->where('deleted_at',0)->find($id);
    }

    public function save($data)
    {
        return $this->articleModel->create($data);
    }

    public function update($data)
    {
        return $this->articleModel->find($data['id'])->update($data);
    }

    public function delete($id)
    {
        return $this->articleModel->where('id',$id)->update(['deleted_at'=>1]);
    }

    public function getTop()
    {
        return $this->articleModel->select('id','title','pic')->where('top',1)->limit(2)->orderBy('id','desc')->get();
    }

    public function getShiCui()
    {
        return $this->articleModel->select('id','title','pic')->whereIn('cat_id',['13','11'])->orderBy('created_at','desc')->get();
    }

}