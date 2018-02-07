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
        return $this->articleModel->where('deleted_at',0)->with('cat')->simplePaginate(10);
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
}