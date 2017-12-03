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
    public $fillable = array('id','cat_name','parent_id','pic','created_at','updated_at','deleted_at');

    /**
     * 关联父分类下的子分类
     * 属于该用户的权限。
     */
    public function child_cat()
    {
        return $this->hasMany('App\Models\Admin\Cat','parent_id','id');
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
        return $this->find($data['id'])->update($data);
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