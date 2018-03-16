<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/7
 * Time: 21:33
 */

namespace App\Repository\Eloquent\Admin;



use App\Models\Admin\Users;

class AdminRepository
{
    /**
     * 注入 User model
     */
    protected $adminModel;

    /**
     * UserRepository constructor.
     * @param Users $admin
     */
    public function __construct(Users $admin)
    {
        $this->adminModel = $admin;
    }

    public function getAll()
    {
        return $this->adminModel->where('deleted_at',0)->get();
    }

    public function getOne($id)
    {
        return $this->adminModel->where('deleted_at',0)->find($id);
    }

    public function save($data)
    {
        return $this->adminModel->create($data);
    }

    public function update($data)
    {
        return $this->adminModel->find($data['id'])->update($data);
    }

    public function delete($id)
    {
        return $this->adminModel->where('id',$id)->update(['deleted_at'=>1]);
    }

    public function getByField($field, $val)
    {
        return $this->adminModel->where($field,$val)->where('deleted_at',0)->first();
    }
}