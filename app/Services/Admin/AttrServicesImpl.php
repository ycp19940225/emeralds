<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/21
 * Time: 17:38
 */

namespace App\Services\Admin;


use App\Models\Admin\Attr;
use App\Services\Ifs\Admin\AttrServices;

class AttrServicesImpl implements AttrServices
{
    protected $attrDao;
    public function __construct()
    {
        $this->attrDao = new Attr();
    }

    public function getAll()
    {
        return $this->attrDao->getAll();
    }

    public function getOne($id)
    {
        return $this->attrDao->find($id);
    }

    public function save($data)
    {
       return $this->attrDao->add($data);
    }

    public function update($id)
    {
        return $this->attrDao->edit($id);
    }

    public function delete($id)
    {
        return $this->attrDao->where('id',$id)->update(['deleted_at'=>1]);
    }
}