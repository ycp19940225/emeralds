<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/6/3
 * Time: 17:31
 */

namespace App\Services\Ifs\Admin;

interface GoodsServices
{
    //获取全部
    public function getAll();
    //获取一个
    public function getOne($id);
    //添加
    public function save($data);
    //更新
    public function update($id);
    //删除
    public function delete($id);

    public function search($input);
}