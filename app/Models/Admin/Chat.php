<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/23
 * Time: 16:46
 */

namespace App\Models\Admin;


use App\Models\Base;

class Chat extends Base
{
    protected $table = 'emerald_chat';
    protected $dateFormat = 'U';

    /**
     * 可以被集体赋值的表字段
     * @var array
     */
    public $fillable = array('id','uid','touid','content','img','created_at','updated_at','deleted_at','state');

    /**
     * 关联分类下的类型
     */
    public function type()
    {
        return $this->belongsToMany('App\Models\Admin\type','emerald_cat_type','cat_id','type_id');
    }
}