<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/7
 * Time: 21:33
 */

namespace App\Repository\Eloquent\Admin;


use App\Models\Admin\Type;

class TypeRepository
{
    /**
     * 注入 Type model
     */
    protected $typeModel;

    /**
     * UserRepository constructor.
     * @param Type $type
     */
    public function __construct(Type $type)
    {
        $this->typeModel = $type;
    }

    public function getAll()
    {
        return $this->typeModel->where('deleted_at',0)->get();
    }

    public function getOne($id)
    {
        return $this->typeModel->where('deleted_at',0)->find($id);
    }

    public function save($data)
    {
        return $this->typeModel->create($data);
    }

    public function update($data)
    {
        return $this->typeModel->where('id',$data['id'])->update($data);
    }

    public function delete($id)
    {
        return $this->typeModel->where('id',$id)->update(['deleted_at'=>1]);
    }

    public function addBatch($data)
    {
        $attr = explode(',',replace_others($data['type']));
        $create_data['cat_id'] = $data['cat_id'];
        foreach ($attr as $k=>$v){
            $create_data['type_name'] = $v;
            $this->typeModel->create($create_data);
        }
        return true;
    }
}