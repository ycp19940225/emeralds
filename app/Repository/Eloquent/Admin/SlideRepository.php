<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/7
 * Time: 21:33
 */

namespace App\Repository\Eloquent\Admin;


use App\Models\Admin\Slide;

class SlideRepository
{
    /**
     * 注入 Type model
     */
    protected $slideModel;

    /**
     * UserRepository constructor.
     * @param Slide $slide
     */
    public function __construct(Slide $slide)
    {
        $this->slideModel = $slide;
    }

    public function getAll()
    {
        return $this->slideModel->where('deleted_at',0)->where('type',0)->get();
    }

    public function getOne($id)
    {
        return $this->slideModel->where('deleted_at',0)->find($id);
    }

    public function save($data)
    {
        return $this->slideModel->create($data);
    }

    public function update($data)
    {
        return $this->slideModel->find($data['id'])->update($data);
    }

    public function delete($id)
    {
        return $this->slideModel->where('id',$id)->update(['deleted_at'=>1]);
    }

    public function getByField($fields,$val)
    {
        return $this->slideModel->where('deleted_at',0)->where($fields,$val)->first();
    }
    public function getAlls()
    {
        return $this->slideModel->where('deleted_at',0)->get();
    }
}