<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/6/3
 * Time: 17:31
 */

namespace App\Services\Ifs\Admin;

interface AgentServices
{
    //获取全部
    public function getAll();
    //获取一个
    public function getOne($id);
    //添加
    public function save($data);
    //更新
    public function update($data);
    //删除
    public function delete($id);
    //字段获取
    public function getByField($field,$val);
}