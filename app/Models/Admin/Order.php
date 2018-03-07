<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/23
 * Time: 16:46
 */

namespace App\Models\Admin;


use App\Models\Base;

class Order extends Base
{
    protected $table = 'emerald_order';
    protected $dateFormat = 'U';

    /**
     * 可以被集体赋值的表字段
     * @var array
     */
    public $fillable = array('id','express_name','express_code','agent_id',
        'admin_id','status','user_id','updated_at','created_at','deleted_at');

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin\Users','admin_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\Admin\User','user_id');
    }
    public function agent()
    {
        return $this->belongsTo('App\Models\Admin\Agent','agent_id');
    }
    public function goods()
    {
        return $this->belongsToMany('App\Models\Admin\Goods','emerald_goods_order','order_id','goods_id');
    }

}