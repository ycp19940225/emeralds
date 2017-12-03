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

class Agent extends Base
{
    protected $table = 'emerald_agent';
    protected $dateFormat = 'U';

    /**
     * 可以被集体赋值的表字段
     * @var array
     */
    public $fillable = array('id','agent_code','agent_name','telphone','booth_number','pm','wx','bank_code','alipay_code','qq_code','status','license_number','updated_at','deleted_at');

    public function add($data)
    {
        return $this->create($data);
    }

    /**
     * @name 修改信息
     * @desc 修改信息
     * @param $data
     * @return bool
     */
    public function edit($data)
    {
        return $this->find($data['id'])->update($data);
    }

    public function getAll()
    {
        return $this->where('deleted_at',0)->get();
    }
}