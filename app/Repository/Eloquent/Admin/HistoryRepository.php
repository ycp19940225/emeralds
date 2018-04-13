<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/28
 * Time: 21:40
 */

namespace App\Repository\Eloquent\Admin;


use App\Models\Admin\History;

class HistoryRepository
{
    /**
     * 注入 Type model
     */
    protected $historyModel;

    /**
     * UserRepository constructor.
     * @param History $history
     */
    public function __construct(History $history)
    {
        $this->historyModel = $history;
    }

    public function getAll($id)
    {
        $res=[];
        $data =$this->historyModel
            ->where('deleted_at',0)
            ->where('user_id',$id)
            ->with('goods')
            ->get();
        foreach ($data as $k=>$v){
            if($v->goods !== null){
                $res['goods'][$k] = $v->goods;
            }
        }
            return $res['goods'];
    }

    public function getOne($id)
    {
        return $this->historyModel->where('deleted_at',0)->find($id);
    }

    public function save($data)
    {
        return $this->historyModel->create($data);
    }

    public function update($data)
    {
        return $this->historyModel->find($data['id'])->update($data);
    }

    public function delete($id)
    {
        return $this->historyModel->where('id',$id)->update(['deleted_at'=>1]);
    }
}