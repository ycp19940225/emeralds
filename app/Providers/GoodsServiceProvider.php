<?php

namespace App\Providers;

use App\Services\Admin\AttrServicesImpl;
use App\Services\Admin\CatServicesImpl;
use App\Services\Admin\GoodsServicesImpl;
use Illuminate\Support\ServiceProvider;

class GoodsServiceProvider extends ServiceProvider
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
        //分类
        $this->app->singleton('App\Services\Ifs\Admin\CatServices',function(){
            return new CatServicesImpl();
        });
        //属性
        $this->app->singleton('App\Services\Ifs\Admin\AttrServices',function(){
            return new AttrServicesImpl();
        });
        //商品
        $this->app->singleton('App\Services\Ifs\Admin\GoodsServices',function(){
            return new GoodsServicesImpl();
        });

    }
}
