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
    public $fillable = array('id','attr_name','type_id','created_at','updated_at','deleted_at');

    /**
     * 关联分类（类型）
     */
    public function type()
    {
        return $this->belongsTo('App\Models\Admin\type','type_id','id');
    }



    public function find($id)
    {
        return $this->where('deleted_at',0)->find($id);
    }
    public function add($data)
    {
        return $this->create($data);
    }

    public function add_batch($data)
    {
        $attr = explode(',',replace_others($data['attr']));
        $create_data['type_id'] = $data['type_id'];
        foreach ($attr as $k=>$v){
            $create_data['attr_name'] = $v;
            $this->create($create_data);
        }
        return true;
    }

    public function edit($id)
    {
    }

    public function getAll()
    {
        return $this->where('deleted_at',0)->get();
    }
}