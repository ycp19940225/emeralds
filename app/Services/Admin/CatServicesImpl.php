<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/21
 * Time: 17:38
 */

namespace App\Services\Admin;


use App\Models\Admin\Cat;
use App\Services\Ifs\Admin\CatServices;

class CatServicesImpl implements CatServices
{
    protected $catDao;
    public function __construct()
    {
        $this->catDao = new Cat();
    }

    public function getAll()
    {
        return $this->catDao->getAll();
    }

    public function getOne($id)
    {
        return $this->catDao->find($id);
    }

    public function save($data)
    {
       return $this->catDao->add($data);
    }

    public function update($id)
    {
        return $this->catDao->edit($id);
    }

    public function delete($id)
    {
        return $this->catDao->where('id',$id)->update(['deleted_at'=>1]);
    }

    public function sort($data)
    {
        return $this->catDao->where('id',$data['id'])->update(['sort'=>$data['sort']]);
    }
}