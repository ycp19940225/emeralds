<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/23
 * Time: 16:46
 */

namespace App\Models\Admin;


use Illuminate\Http\Request;
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
     * 关联父分类下的子分类
     */
    public function child_cat()
    {
        return $this->hasMany('App\Models\Admin\Cat','parent_id','id');
    }

    /**
     * 关联子分类下的父分类
     */
    public function parent_cat()
    {
        return $this->belongsTo('App\Models\Admin\Cat','parent_id','id');
    }

    /**
     * 关联子分类下的属性
     */
    public function child_cat_attr()
    {
        return $this->hasMany('App\Models\Admin\Attr','cat_id','id');
    }

    public function add($data)
    {
        $res_data = $this->create($data);
        $create_data['parent_id'] = $res_data->id;
        $child_name = explode(',',preg_replace("/(\n)|(\s)|(\t)|(\')|(')|(，)/" ,',' ,$data['child_name']));
        foreach ($child_name as $k=>$v){
            $create_data['cat_name'] = $v;
            $this->create($create_data);
        }
        return true;
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
        $child_name = explode(',',preg_replace("/(\n)|(\s)|(\t)|(\')|(')|(，)/" ,',' ,$data['child_name']));
        //删除原来的子分类
        $this->where('parent_id',$data['id'])->delete();
        $create_data['parent_id'] = $data['id'];
        foreach ($child_name as $k=>$v){
            $create_data['cat_name'] = $v;
            $this->create($create_data);
        }
        return true;
    }

    public function getAll()
    {
        return $this->where('deleted_at',0)->with('child_cat')->get();
    }

    public function find($id)
    {
        return $this->where('deleted_at',0)->find($id);
    }
}