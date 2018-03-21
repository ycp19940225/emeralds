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

class Famous extends Base
{
    protected $table = 'emerald_famous';
    protected $dateFormat = 'U';

    /**
     * 可以被集体赋值的表字段
     * @var array
     */
    public $fillable = array('id','name','logo','intro','content','created_at','updated_at','deleted_at');

    /**
     * 关联分类下的文章
     */
    public function goods()
    {
        return $this->hasMany('App\Models\Admin\Goods','famous_id','id');
    }
}