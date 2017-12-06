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

    /**
     * 关联分类（类型）
     */
    public function cat()
    {
        return $this->belongsTo('App\Models\Admin\Cat','cat_id','id');
    }



    public function find($id)
    {
    }
    public function add($data)
    {
    }

    public function add_batch($data)
    {
        $attr = explode(',',replace_others($data['attr']));
        $create_data['cat_id'] = $data['id'];
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