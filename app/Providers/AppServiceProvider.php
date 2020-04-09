<?php

namespace App\Providers;

use Monolog\Logger;
use Yansongda\Pay\Pay;
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
        // 当 Laravel 渲染 products.index 和 products.show 模板时，就会使用 CategoryTreeComposer 这个来注入类目树变量
        \View::composer(['products.index', 'products.show','products.home'], \App\Http\ViewComposers\CategoryTreeComposer::class);

        //注入RankList
        \View::composer(['products.home'], \App\Http\ViewComposers\RankListComposer::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // 往服务容器中注入一个名为 alipay 的单例对象
        $this->app->singleton('alipay', function () {
            $config = config('pay.alipay');
            //服务器回调地址
            $config['notify_url'] = 'http://requestbin.net/r/1mwljy31';
            //前端回调地址
            $config['return_url'] = route('payment.alipay.return');
            // 判断当前项目运行环境是否为线上环境
            if (app()->environment() !== 'production') {
                $config['mode']         = 'dev';
                $config['log']['level'] = Logger::DEBUG;
            } else {
                $config['log']['level'] = Logger::WARNING;
            }
            // 调用 Yansongda\Pay 来创建一个支付宝支付对象
            return Pay::alipay($config);
             });

        // $this->app->singleton('wechat_pay', function () {
        //     $config = config('pay.wechat');
        //     if (app()->environment() !== 'production') {
        //         $config['log']['level'] = Logger::DEBUG;
        //     } else {
        //         $config['log']['level'] = Logger::WARNING;
        //     }
        //     // 调用 Yansongda\Pay 来创建一个微信支付对象
        //     return Pay::wechat($config);
        // });
    }
}
