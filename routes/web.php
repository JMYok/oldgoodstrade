<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/products')->name('root');

/*商品主页*/
Route::get('products', 'ProductsController@index')->name('products.index');

/*排行榜*/
Route::get('rankingsale','RankController@sale')->name('rank.sale');
Route::get('rankingpoint','RankController@point')->name('rank.point');

/*登录路由*/
Auth::routes();

/*成功登录路由组*/
Route::group(['middleware' => 'auth'], function() {
	/*邮箱验证*/
    Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')->name('email_verify_notice');
    Route::get('/email_verification/verify', 'EmailVerificationController@verify')->name('email_verification.verify');
    Route::get('/email_verification/send', 'EmailVerificationController@send')->name('email_verification.send');
    /*邮箱成功验证路由组*/
    Route::group(['middleware' => 'email_verified'], function() {
    	/*新增、修改、删除收货地址路由*/
         Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
         Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
         Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
         Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
         Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
         Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');
         /*收藏以及取消收藏商品*/
        Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
        Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
        /*收藏列表*/
        Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');

        /*购物车*/
        Route::post('cart', 'CartController@add')->name('cart.add');
        Route::get('cart', 'CartController@index')->name('cart.index');
        Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');

        /*订单*/
        Route::post('orders', 'OrdersController@store')->name('orders.store');
        Route::get('orders', 'OrdersController@index')->name('orders.index');
        Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');
        //确实收货
        Route::post('orders/{order}/received', 'OrdersController@received')->name('orders.received');
        //订单支付宝付款
        Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');
        //支付成功前端回调
        Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');

        /*评论*/
        Route::get('orders/{order}/review', 'OrdersController@review')->name('orders.review.show');
        Route::post('orders/{order}/review', 'OrdersController@sendReview')->name('orders.review.store');

        /*退款*/
        Route::post('orders/{order}/apply_refund', 'OrdersController@applyRefund')->name('orders.apply_refund');

        //优惠券
        Route::get('coupon_codes/{code}', 'CouponCodesController@show')->name('coupon_codes.show');
    });
});
//支付成功服务器回调
Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');
//放在后方避免与收藏列表路由冲突
Route::get('products/{product}', 'ProductsController@show')->name('products.show');
