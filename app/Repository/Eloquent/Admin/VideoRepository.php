<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/7
 * Time: 21:33
 */

namespace App\Repository\Eloquent\Admin;


use App\Models\Admin\Video;

class VideoRepository
{
    /**
     * 注入 Type model
     */
    protected $videoModel;

    /**
     * UserRepository constructor.
     * @param Video $video
     */
    public function __construct(Video $video)
    {
        $this->videoModel = $video;
    }

    public function getAll()
    {
        return $this->videoModel->where('deleted_at',0)->get();
    }

    public function getOne($id)
    {
        return $this->videoModel->where('deleted_at',0)->find($id);
    }

    public function save($data)
    {
        return $this->videoModel->create($data);
    }

    public function update($data)
    {
        return $this->videoModel->find($data['id'])->update($data);
    }

    public function delete($id)
    {
        return $this->videoModel->where('id',$id)->update(['deleted_at'=>1]);
    }

    public function getByFields()
    {
        return $this->videoModel->where('deleted_at',0)->first();
    }
}