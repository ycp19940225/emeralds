<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/7
 * Time: 21:33
 */

namespace App\Repository\Eloquent\Admin;



use App\Models\Admin\User;

class UserRepository
{
    /**
     * 注入 User model
     */
    protected $userModel;

    /**
     * UserRepository constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    public function getAll()
    {
        return $this->userModel->where('deleted_at',0)->get();
    }

    public function getOne($id)
    {
        return $this->userModel->where('deleted_at',0)->find($id);
    }

    public function save($data)
    {
        return $this->userModel->create($data);
    }

    public function update($data)
    {
        return $this->userModel->find($data['id'])->update($data);
    }

    public function delete($id)
    {
        return $this->userModel->destroy($id);
    }

    public function getByField($field, $val)
    {
        return $this->userModel->where($field,$val)->where('deleted_at',0)->first();
    }
    public function getByFields($field, $val)
    {
        return $this->userModel->where($field,$val)->where('deleted_at',0)->get();
    }
}