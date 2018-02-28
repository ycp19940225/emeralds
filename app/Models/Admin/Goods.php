<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/23
 * Time: 16:46
 */

namespace App\Models\Admin;


use App\Models\Base;

use Nicolaslopezj\Searchable\SearchableTrait;

class Goods extends Base
{
    use SearchableTrait;
    protected $table = 'emerald_goods';
    protected $dateFormat = 'U';

    /**
     * 可以被集体赋值的表字段
     * @var array
     */
    public $fillable = array('id','goods_code','pic','video','goods_detail','price',
        'sort','is_hot','cat_id','input_id','input_type','stock','status','logo','goods_name',
        'created_at','updated_at','deleted_at','checked','weight','format');

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'emerald_goods.goods_name' => 10,
            'emerald_goods.goods_code' => 2,
        ]

    ];


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
        return $this->belongsToMany('App\Models\Admin\type','emerald_goods_type','goods_id','type_id')->withPivot('type_val');
    }


    public function add($data)
    {
        $goods_data = $this->create($data);
        //添加属性
        $goods_data->attr()->attach($data['type']);
        return $goods_data;
    }

    /**
     * @name 修改信息
     * @desc 修改信息
     * @param $data
     * @return bool
     */
    public function edit($data)
    {
        $res = $this->find($data['id'])->update($data);
        //修改属性
        $this->find($data['id'])->attr()->sync($data['type']);
        return $res;
    }

    public function getAll()
    {
        return $this->where('deleted_at',0)
            ->where('status',1)
            ->with('attr')
            ->simplePaginate(10);
    }

    public function find($id)
    {
        return $this->where('deleted_at',0)->find($id);
    }

    public function goods_search($input)
    {

        return $this->where('deleted_at',0)->search($input)
            ->get();
    }
}