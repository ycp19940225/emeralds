<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/4
 * Time: 2:05
 */

namespace App\Models\Admin;


use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'emerald_slide';
    protected $dateFormat = 'U';
    /**
     * 可以被集体赋值的表字段
     * @var array
     */
    public $fillable = array('id','pic','url','created_at','updated_at','deleted_at','type','link_goods');

    /**
     * 关联文章
     */
    public function article()
    {
        return $this->hasOne('App\Models\Admin\Article','id','url');
    }

}