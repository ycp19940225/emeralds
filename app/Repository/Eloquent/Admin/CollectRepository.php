<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/28
 * Time: 21:40
 */

namespace App\Repository\Eloquent\Admin;


use App\Models\Admin\Collect;

class CollectRepository
{
    /**
     * 注入 Type model
     */
    protected $collectModel;

    /**
     * UserRepository constructor.
     * @param Collect $collect
     */
    public function __construct(Collect $collect)
    {
        $this->collectModel = $collect;
    }

    public function getAll($id)
    {
        return $this->collectModel
            ->where('deleted_at',0)
            ->where('user_id',$id)
            ->with('goods')
            ->with('articles')
            ->simplePaginate(10);
    }

    public function getOne($id)
    {
        return $this->collectModel->where('deleted_at',0)->find($id);
    }

    public function save($data)
    {
        return $this->collectModel->updateOrCreate($data);
    }

    public function update($data)
    {
        return $this->collectModel->find($data['id'])->update($data);
    }

    public function delete($id)
    {
        return $this->collectModel->where('id',$id)->update(['deleted_at'=>1]);
    }
}