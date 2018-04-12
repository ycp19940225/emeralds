<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/7
 * Time: 21:33
 */

namespace App\Repository\Eloquent\Admin;


use App\Models\Admin\ArticleCat;

class ArticleCatRepository
{
    /**
     * 注入 Type model
     */
    protected $articleCatModel;

    /**
     * UserRepository constructor.
     * @param ArticleCat $articleCat
     */
    public function __construct(ArticleCat $articleCat)
    {
        $this->articleCatModel = $articleCat;
    }

    public function getAll()
    {
        return $this->articleCatModel->where('deleted_at',0)->get();
    }

    public function getOne($id)
    {
        return $this->articleCatModel->where('deleted_at',0)->find($id);
    }

    public function save($data)
    {
        return $this->articleCatModel->create($data);
    }

    public function update($data)
    {
        return $this->articleCatModel->find($data['id'])->update($data);
    }

    public function delete($id)
    {
        return $this->articleCatModel->where('id',$id)->update(['deleted_at'=>1]);
    }
}