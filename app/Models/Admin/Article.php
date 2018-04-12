<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/23
 * Time: 16:46
 */

namespace App\Models\Admin;


use App\Models\Base;

class Article extends Base
{
    protected $table = 'emerald_article';
    protected $dateFormat = 'U';

    /**
     * 可以被集体赋值的表字段
     * @var array
     */
    public $fillable = array('id','top','pic','title','intro','content','cat_id','input_id','views','created_at','updated_at','deleted_at','type','file');

    /**
     * 关联分类下的文章
     */
    public function cat()
    {
        return $this->belongsTo('App\Models\Admin\ArticleCat','cat_id','id');
    }
}