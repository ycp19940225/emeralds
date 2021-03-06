<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/21
 * Time: 17:38
 */

namespace App\Services\Admin;


use App\Models\Admin\Goods;
use App\Services\Ifs\Admin\GoodsServices;

class GoodsServicesImpl implements GoodsServices
{
    protected $goodsDao;
    public function __construct()
    {
        $this->goodsDao = new Goods();
    }

    public function getAll()
    {
        return $this->goodsDao->getAll();
    }

    public function getOne($id)
    {
        return $this->goodsDao->find($id);
    }

    public function save($data)
    {
       return $this->goodsDao->add($data);
    }

    public function update($data)
    {
        return $this->goodsDao->edit($data);
    }

    public function delete($id)
    {
        return $this->goodsDao->where('id',$id)->delete();
    }

    public function search($input)
    {
        return $this->goodsDao->goods_search($input);
    }

    public function edit($input)
    {
        return $this->goodsDao->where('id',$input['id'])->update(['checked'=>$input['checked']]);
    }

    public function getByFields($data)
    {
       $sql = $this->goodsDao;
       foreach ($data as $k=>$v){
           $sql = $sql->where($k,$v);
       }
       $res = $sql->get();
       return $res;
    }

    public function updateFields($input)
    {
        return $this->goodsDao->where('id',$input['id'])->update($input);
    }

    public function getByField($field,$val)
    {
        return $this->goodsDao->where($field,$val)->first();
    }

    public function getAlls()
    {
        return $this->goodsDao
            ->where('deleted_at',0)
            ->with('attr')
            ->get();
    }

    /**
     * 获取名家收藏的商品
     */
    public function getLinks()
    {
        return $this->goodsDao->where('status',1)
            ->where('deleted_at',0)
            ->where('checked',1)
            ->where('famous_id',"0")
            ->where('type',3)
            ->get();
    }

    public function getSelects($id)
    {
        return $this->goodsDao->where('status',1)
            ->where('deleted_at',0)
            ->where('famous_id',$id)
            ->get();
    }
}