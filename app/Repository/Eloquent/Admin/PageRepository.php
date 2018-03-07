<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/7
 * Time: 21:33
 */

namespace App\Repository\Eloquent\Admin;


use App\Models\Admin\Slide;

class PageRepository
{
    /**
     * 注入 Page model
     */
    protected $pageModel;

    /**
     * UserRepository constructor.
     * @param Slide $slide
     */
    public function __construct(Slide $slide)
    {
        $this->pageModel = $slide;
    }

    public function getAll()
    {
        return $this->pageModel->where('deleted_at',0)->get();
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
}