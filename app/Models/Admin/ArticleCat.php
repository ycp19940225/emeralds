<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/23
 * Time: 16:46
 */

namespace App\Models\Admin;


use App\Models\Base;

class ArticleCat extends Base
{
    protected $table = 'emerald_article_cat';
    protected $dateFormat = 'U';

    /**
     * 可以被集体赋值的表字段
     * @var array
     */
    public $fillable = array('id','cat_name','intro','created_at','updated_at','deleted_at');

    /**
     * 关联分类下的文章
     */
    public function articles()
    {
        return $this->hasMany('App\Models\Admin\article','cat_id','id');
    }
}