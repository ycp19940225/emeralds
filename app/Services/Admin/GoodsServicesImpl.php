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
        return $this->goodsDao->where('id',$id)->update(['deleted_at'=>1]);
    }

    public function search($input)
    {
        return $this->goodsDao->goods_search($input);
    }

    public function edit($input)
    {
        return $this->goodsDao->where('id',$input['id'])->update($input);
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
}