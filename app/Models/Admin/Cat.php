<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/23
 * Time: 16:46
 */

namespace App\Models\Admin;


use App\Models\Base;

class Cat extends Base
{
    protected $table = 'emerald_cat';
    protected $dateFormat = 'U';

    /**
     * 可以被集体赋值的表字段
     * @var array
     */
    public $fillable = array('id','cat_name','parent_id','goods_id','pic','created_at','updated_at','deleted_at','sort');

    /**
     * 关联分类下的类型
     */
    public function type()
    {
        return $this->belongsToMany('App\Models\Admin\type','emerald_cat_type','cat_id','type_id');
    }


    public function add($data)
    {
        $model = $this->create($data);
        $model->type()->attach($data['type_id']);
        return $model;
    }

    /**
     * @name 修改信息
     * @desc 修改信息
     * @param $data
     * @return bool
     */
    public function edit($data)
    {
        $this->find($data['id'])->update($data);
        return $this->find($data['id'])->type()->sync($data['type_id']);
    }

    public function getAll()
    {
        return $this->where('deleted_at',0)->orderBy('sort')->get();
    }

    public function find($id)
    {
        return $this->where('deleted_at',0)->find($id);
    }
}