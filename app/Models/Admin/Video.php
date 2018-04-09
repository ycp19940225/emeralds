<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/4
 * Time: 2:05
 */

namespace App\Models\Admin;


use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'emerald_video';
    protected $dateFormat = 'U';
    /**
     * 可以被集体赋值的表字段
     * @var array
     */
    public $fillable = array('id','pic','created_at','updated_at','deleted_at');

}