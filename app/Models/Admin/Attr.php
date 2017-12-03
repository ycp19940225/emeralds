<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/12/4
 * Time: 2:05
 */

namespace App\Models\Admin;


use Illuminate\Database\Eloquent\Model;

class Attr extends Model
{
    protected $table = 'emerald_attr';
    protected $dateFormat = 'U';
    /**
     * 可以被集体赋值的表字段
     * @var array
     */
    public $fillable = array('id','attr_name','cat_id','pic','created_at','updated_at','deleted_at');

    public function getAll()
    {
    }

    public function find($id)
    {
    }

    public function add($data)
    {
    }

    public function edit($id)
    {
    }
}