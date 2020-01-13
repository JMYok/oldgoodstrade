<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
	//后台主界面
    $router->get('/', 'HomeController@index');
    //用户管理界面
    $router->get('users', 'UsersController@index');

    /*商品管理界面*/
    $router->get('products', 'ProductsController@index');
    //添加商品
    $router->get('products/create', 'ProductsController@create');
    //保存商品
    $router->post('products', 'ProductsController@store');
    //编辑商品
    $router->get('products/{id}/edit', 'ProductsController@edit');
    //更新商品
  	$router->put('products/{id}', 'ProductsController@update');
  	//删除商品
  	$router->delete('products/{id}', 'ProductsController@destroy');

    /*管理订单*/
    $router->get('orders', 'OrdersController@index')->name('admin.orders.index');
    $router->get('orders/{order}', 'OrdersController@show')->name('admin.orders.show');
    //发货
    $router->post('orders/{order}/ship', 'OrdersController@ship')->name('admin.orders.ship');
    //退款
    $router->post('orders/{order}/refund', 'OrdersController@handleRefund')->name('admin.orders.handle_refund');

    //优惠券
    $router->get('coupon_codes', 'CouponCodesController@index');

    /*管理类目*/
    $router->get('categories', 'CategoriesController@index');
    $router->get('categories/create', 'CategoriesController@create');
    $router->get('categories/{id}/edit', 'CategoriesController@edit');
    $router->post('categories', 'CategoriesController@store');
    $router->put('categories/{id}', 'CategoriesController@update');
    $router->delete('categories/{id}', 'CategoriesController@destroy');
    $router->get('api/categories', 'CategoriesController@apiIndex');
});
