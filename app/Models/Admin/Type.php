<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/4
 * Time: 2:05
 */

namespace App\Models\Admin;


use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'emerald_type';
    protected $dateFormat = 'U';
    /**
     * 可以被集体赋值的表字段
     * @var array
     */
    public $fillable = array('id','type_name','type_val','created_at','updated_at','deleted_at');

    /**
     * 关联分类（类型）
     */
    public function cat()
    {
        return $this->belongsToMany('App\Models\Admin\Cat','emerald_cat_type','cat_id','type_id');
    }
}