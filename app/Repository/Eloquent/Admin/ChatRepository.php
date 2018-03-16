<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/7
 * Time: 21:33
 */

namespace App\Repository\Eloquent\Admin;


use App\Models\Admin\Chat;

class ChatRepository
{
    /**
     * 注入 Type model
     */
    protected $chatModel;

    /**
     * UserRepository constructor.
     * @param Chat $slide
     */
    public function __construct(Chat $chat)
    {
        $this->chatModel = $chat;
    }

    public function getAll()
    {
        return $this->chatModel->where('deleted_at',0)->get();
    }

    public function getOne($id)
    {
        return $this->chatModel->where('deleted_at',0)->find($id);
    }

    public function save($data)
    {
        return $this->chatModel->create($data);
    }

    public function update($data)
    {
        return $this->chatModel->find($data['id'])->update($data);
    }

    public function delete($id)
    {
        return $this->chatModel->where('id',$id)->update(['deleted_at'=>1]);
    }
}