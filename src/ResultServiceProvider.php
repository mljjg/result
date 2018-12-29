<?php

namespace Ml\Result;

use Illuminate\Support\ServiceProvider;
use Ml\Result\Lib\Response\Result;

class ResultServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if (method_exists($this, 'loadViewsFrom')) {
            $this->loadViewsFrom(__DIR__.'/views', 'result-viewer');
        }

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vendor/result-viewer'),//发布视图目录到resources
            __DIR__ . '/config/result.php' => config_path('result.php'),//发布配置文件到laravel的config下
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        // 单例绑定服务
        $this->app->singleton('result', function ($app) {
            return new Result();
        });
    }

    /**
     * @return array
     */
    public function provides()
    {
        return ['result'];
    }
}
