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
    public $fillable = array('id','cat_name','parent_id','goods_id','pic','created_at','updated_at','deleted_at');

    /**
     * 关联分类下的类型
     */
    public function type()
    {
        return $this->hasMany('App\Models\Admin\type','cat_id','id');
    }


    public function add($data)
    {
        /*$res_data = $this->create($data);
        $create_data['parent_id'] = $res_data->id;
        $child_name = explode(',',replace_others($data['child_name']));
        foreach ($child_name as $k=>$v){
            $create_data['cat_name'] = $v;
            $this->create($create_data);
        }*/
        return $this->create($data);
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
        /*$child_name = explode(',',replace_others($data['child_name']));
        //删除原来的子分类
        $this->where('parent_id',$data['id'])->delete();
        $create_data['parent_id'] = $data['id'];
        foreach ($child_name as $k=>$v){
            $create_data['cat_name'] = $v;
            $this->create($create_data);
        }*/
        return true;
    }

    public function getAll()
    {
        return $this->where('deleted_at',0)->get();
    }

    public function find($id)
    {
        return $this->where('deleted_at',0)->find($id);
    }
}