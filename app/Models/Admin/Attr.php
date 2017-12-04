<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/4
 * Time: 2:05
 */

namespace App\Models\Admin;


use Illuminate\Database\Eloquent\Model;

class Attr extends Model
{
    protected $table = 'emerald_attr';
    protected $dateFormat = 'U';
    /**
     * 可以被集体赋值的表字段
     * @var array
     */
    public $fillable = array('id','attr_name','cat_id','pic','created_at','updated_at','deleted_at');

    public function getAll()
    {
    }

    public function find($id)
    {
    }

    public function add($data)
    {
        $attr = explode(',',replace_others($data['attr']));
        $create_data['cat_id'] = $data['id'];
        //删除原来的子分类
        $this->where('cat_id',$data['id'])->delete();
        foreach ($attr as $k=>$v){
            $create_data['attr_name'] = $v;
            $this->create($create_data);
        }
        return true;
    }

    public function edit($id)
    {
    }
}