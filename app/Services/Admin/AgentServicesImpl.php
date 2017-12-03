<?php
/**
 * Created by PhpStorm.
 * User: ycp
 * Date: 2017/11/21
 * Time: 17:38
 */

namespace App\Services\Admin;


use App\Models\Admin\Agent;
use App\Services\Ifs\Admin\AgentServices;

class AgentServicesImpl implements AgentServices
{
    protected $agentDao;
    public function __construct()
    {
        $this->agentDao = new Agent();
    }

    public function getAll()
    {
        return $this->agentDao->getAll();
    }

    public function getOne($id)
    {
        // TODO: Implement getOne() method.
    }

    public function save($data)
    {
       return $this->agentDao->add($data);
    }

    public function update($id)
    {
        return $this->agentDao->edit($id);
    }

    public function delete($id)
    {
        return $this->agentDao->where('id',$id)->update(['deleted_at'=>1]);
    }
}