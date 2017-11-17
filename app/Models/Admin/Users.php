<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/6/3
 * Time: 16:46
 */

namespace App\Models\Admin;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use App\Models\Base;
use Yajra\Datatables\Facades\Datatables;

class Users extends Base
{
    protected $table = 'emerald_admin';
    protected $dateFormat = 'U';

    /**
     * 可以被集体赋值的表字段
     * @var array
     */
    public $fillable = array('id','adminname','password','email','logo','created_at','updated_at','input_id','token');


    /**
     * 关联模型
     * 属于该用户的身份。
     */
    public function roles()
    {
        return $this->belongsToMany('App\Models\Admin\Role','emerald_admin_role','admin_id','role_id');
    }

    /**
     * @name 添加后台用户
     * @desc 添加后台用户
     * @author ycp
     * @param Request $request
     * @return mixed
     */
    public function addUser(Request $request)
    {
        $data = $this->processingData($request->input(),'add');
        return $this->create($data);
    }


    /**
     * @name 检测字段是否重复
     * @desc 检测字段是否重复
     * @param $field
     * @param string $id
     * @return bool
     */
    public function checkUnique($field, $id='')
    {
        if(!empty($id)){
            $data = $this->where('id','!=',$id)->get();
            foreach ($data as $k=>$v){
                if($v['adminname'] == $field){
                    return true;
                }
            }
        }else
            return $field==$this->where(['adminname'=>$field])->value('adminname') ;
    }


    /**
     * @name 修改信息
     * @desc 修改信息
     * @param $data
     * @return bool
     */
    public function edit($data)
    {
        return $this->find($data['id'])->update($this->processingData($data,'edit'));
    }


    /**
     * @name 数据处理
     * @desc 主要是处理密码
     * @param $data
     * @param string $method
     * @return mixed
     */
    public function processingData($data, $method = ''){
        switch ($method){
            case 'add':  $data['password'] = get_md5_password($data['password']) ;
                break;
            case 'edit':
                $res = $this->find($data['id']);
                if(isset($data['password']) && $res['password'] !== $data['password']){
                    $data['password'] = get_md5_password($data['password']);
                }
                if(!isset($data['email'])){
                    $data['email'] = '';
                }
                break;
            default:break;
        }
        return $data;
    }

    /**
     * 判断用户合法性
     * @param $password
     * @param $username
     */
    public function doLogin($password,$username)
    {
        return $this->where('adminname',$username)->where('password',get_md5_password($password))->first();
    }

    /**
     * @name 获取信息
     * @desc 获取表结构
     * @author ycp
     * @return mixed
     */
    public function getTables()
    {
        return Datatables::eloquent($this::select('id','adminname','updated_at','created_at'))
            ->make(true);
    }
}