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
    public $fillable = array('id','agent_code','agent_name','telphone','booth_name','pm','wx','bank_name','bank_type','bank_code',
        'bank_name_back','bank_type_back','bank_code_back','alipay_code','alipay_name',
        'alipay_code_back','alipay_name_back','card_front','card_back',
        'agent_pic','status','license_number','updated_at','deleted_at','user_id');

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