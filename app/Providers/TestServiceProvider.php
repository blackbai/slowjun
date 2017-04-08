<?php

namespace App\Providers;

use App\Services\TestService;
use App\Services\Test1Service;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
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
        //使用singleton绑定单例
        $this->app->singleton('test',function(){
            return new TestService();
        });

        $this->app->singleton('test1',function(){
            return new Test1Service();
        });


        //使用bind绑定实例到接口以便依赖注入
        $this->app->bind('App\Contracts\TestContract',function(){
            return new TestService();
        });

        $this->app->alias('App\Contracts\TestContract','aaa');
    }
}
