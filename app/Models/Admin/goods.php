<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/23
 * Time: 16:46
 */

namespace App\Models\Admin;


use App\Models\Base;

class Goods extends Base
{
    protected $table = 'emerald_goods';
    protected $dateFormat = 'U';

    /**
     * 可以被集体赋值的表字段
     * @var array
     */
    public $fillable = array('id','goods_code','pic','video','goods_detail','price',
        'sort','is_hot','cat_id','agent_id','stock','status','logo','goods_name',
        'created_at','updated_at','deleted_at');
    /**
     * 关联商品下的分类
     */
    public function Cat()
    {
        return $this->belongsTo('App\Models\Admin\Cat','cat_id','id');
    }

    /**
     * 关联商品下的属性
     */
    public function attr()
    {
        return $this->belongsToMany('App\Models\Admin\Attr','emerald_goods_attr','goods_id','attr_id');
    }


    public function add($data)
    {
        $goods_data = $this->create($data);
        //添加属性
        $goods_data->attr()->sync($data['goods_attr']);
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
        return $this->where('deleted_at',0)->with('attr')->get();
    }

    public function find($id)
    {
        return $this->where('deleted_at',0)->find($id);
    }
}