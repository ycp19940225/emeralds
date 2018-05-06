<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/7
 * Time: 21:33
 */

namespace App\Repository\Eloquent\Admin;


use App\Models\Admin\Famous;
use DB;

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
        return $this->famousModel->select('id','logo','name')->where('deleted_at',0)->orderBy('id','desc')->get();
    }

    public function getOne($id)
    {
        return $this->famousModel->where('deleted_at',0)->with('goods')->find($id);
    }

    public function save($data)
    {
        $insert_data = $this->famousModel->create($data);
        /*foreach ($data['goods_id'] as $k=>$v){
           DB::table("emerald_goods")->where('id',$v)->update(['famous_id'=>$insert_data['id']]);
        }*/
        return $insert_data;
    }

    public function update($data)
    {
        $insert_data = $this->famousModel->find($data['id'])->update($data);
        /*foreach ($data['goods_id'] as $k=>$v) {
           DB::table("emerald_goods")->where('id', $v)->update(['famous_id' => $data['id']]);
        }*/
        return $insert_data;
    }

    public function delete($id)
    {
        return $this->famousModel->where('id',$id)->update(['deleted_at'=>1]);
    }

    public function getAlls()
    {
        return $this->famousModel->where('deleted_at',0)->orderBy('id','desc')->get();
    }
}