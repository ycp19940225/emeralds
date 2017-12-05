<?php

namespace App\Providers;

use App\Services\Common\UploadServicesImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }

        //商品
        $this->app->singleton('App\Services\Ifs\Admin\UploadServices',function(){
            return new UploadServicesImpl();
        });
    }
}
