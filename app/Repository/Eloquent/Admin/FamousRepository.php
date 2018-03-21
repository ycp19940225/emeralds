<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/7
 * Time: 21:33
 */

namespace App\Repository\Eloquent\Admin;


use App\Models\Admin\Famous;

class FamousRepository
{
    /**
     * 注入 Type model
     */
    protected $famousModel;

    /**
     * UserRepository constructor.
     * @param Famous $famous
     */
    public function __construct(Famous $famous)
    {
        $this->famousModel = $famous;
    }

    public function getAll()
    {
        return $this->famousModel->select('id','logo','name')->where('deleted_at',0)->get();
    }

    public function getOne($id)
    {
        return $this->famousModel->where('deleted_at',0)->with('goods')->find($id);
    }

    public function save($data)
    {
        return $this->famousModel->create($data);
    }

    public function update($data)
    {
        return $this->famousModel->find($data['id'])->update($data);
    }

    public function delete($id)
    {
        return $this->famousModel->where('id',$id)->update(['deleted_at'=>1]);
    }

    public function getAlls()
    {
        return $this->famousModel->where('deleted_at',0)->get();
    }
}