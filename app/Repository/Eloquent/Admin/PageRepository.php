<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/7
 * Time: 21:33
 */

namespace App\Repository\Eloquent\Admin;


use App\Models\Admin\Page;

class PageRepository
{
    /**
     * 注入 Page model
     */
    protected $pageModel;

    /**
     * UserRepository constructor.
     * @param Page $slide
     */
    public function __construct(Page $page)
    {
        $this->pageModel = $page;
    }

    public function getAll()
    {
        return $this->pageModel->where('deleted_at',0)->orderBy('id','desc')->get();
    }

    public function getOne($id)
    {
        return $this->pageModel->where('deleted_at',0)->find($id);
    }

    public function save($data)
    {
        return $this->pageModel->create($data);
    }

    public function update($data)
    {
        return $this->pageModel->find($data['id'])->update($data);
    }

    public function delete($id)
    {
        return $this->pageModel->where('id',$id)->update(['deleted_at'=>1]);
    }
    public function getAlls()
    {
        return $this->pageModel->where('deleted_at',0)->with('article')->orderBy('id','desc')->get();
    }
}