<?php

namespace App\Providers;

use App\Services\Admin\AdminLoginServicesImpl;
use App\Services\Admin\AgentServicesImpl;
use App\Services\Admin\PriServicesImpl;
use App\Services\Admin\RoleServicesImpl;
use App\Services\Admin\UserServicesImpl;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //管理员
        $this->app->singleton('App\Services\Ifs\Admin\UserServices',function(){
            return new UserServicesImpl();
        });
        //角色
        $this->app->singleton('App\Services\Ifs\Admin\RoleServices',function(){
            return new RoleServicesImpl();
        });
        //权限
        $this->app->singleton('App\Services\Ifs\Admin\PriServices',function(){
            return new PriServicesImpl();
        });
        //登陆
        $this->app->singleton('App\Services\Ifs\Admin\AdminLoginServices',function(){
            return new AdminLoginServicesImpl();
        });
        //代理商
        $this->app->singleton('App\Services\Ifs\Admin\AgentServices',function(){
            return new AgentServicesImpl();
        });
    }
}
