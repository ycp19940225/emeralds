<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/28
 * Time: 21:32
 */

namespace App\Models\Admin;


use App\Models\Base;

class Collect extends Base
{
    protected $table = 'emerald_collect';
    protected $dateFormat = 'U';
    /**
     * 可以被集体赋值的表字段
     * @var array
     */
    public $fillable = array('id','user_id','goods_id','article_id','created_at','updated_at','deleted_at');

    /**
     * 关联商品
     */
    public function goods()
    {
        return $this->hasOne('App\Models\Admin\Goods','id','goods_id');
    }

    /**
     * 关联文章
     */
    public function articles()
    {
        return $this->hasOne('App\Models\Admin\Article','id','article_id');
    }
}