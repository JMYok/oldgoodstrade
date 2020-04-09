<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Product;

class RankListComposer
{

    // 当渲染指定的模板时，Laravel 会调用 compose 方法
    public function compose(View $view)
    {
      $salerank = Product::where('on_sale', true)->where('sold_count','!=',0)->orderBy('sold_count','desc')->take(10)->get();
      $pointrank = Product::where('on_sale', true)->where('rating','!=',0)->orderBy('rating','desc')->take(10)->get();

        // 使用 with 方法注入变量
        $view->with('saleranks', $salerank);
        $view->with('pointranks', $pointrank);
      }
}
