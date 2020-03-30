@extends('layouts.apptemplate')
@section('title','我的购物车')

@section('content')
<body class="account-login account res layout-1">
    <div id="wrapper" class="wrapper-fluid banners-effect-10">

      <!-- Header Container  -->
       <header id="header" class=" typeheader-1">
          <!-- Header Top -->
          <div class="header-top hidden-compact">
             <div class="container">
                <div class="row">
                   <div class="col-lg-3 col-xs-6 header-logo ">
                      <div class="navbar-logo">
                         <a href="{{ route('products.index') }}"><img src="{{URL::asset('images/catalog/demo/logo/logo-2.png')}}" alt="Your Store" width="110" height="27" title="Your Store"></a>
                      </div>
                   </div>
                   <div class="col-lg-7 header-sevices">
                      <div class="module html--sevices ">
                         <div class="clearfix sevices-menu">
                            <ul>
                               <li class="col-md-4 item home">
                                  <div class="icon"></div>
                                  <div class="text">
                                     <a>100 S Manhattan St, Amarillo,</a><a>
                                     </a>
                                     <p><a>TX 79104, North America</a></p>
                                     <a>
                                     </a>
                                  </div>
                               </li>
                               <li class="col-md-4 item mail">
                                  <div class="icon" > </div>
                                  <div class="text">
                                     <a class="name" href="#">Sales@okokok.Com</a>
                                     <p>( +123 ) 456 7890</p>
                                  </div>
                               </li>
                               <li class="col-md-4 item delivery">
                                  <div class="icon"> </div>
                                  <div class="text">
                                     <a class="name" href="#">免运费</a>
                                     <p>599元以上订单</p>
                                  </div>
                               </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                   @auth
                   <div class="col-lg-2 col-xs-6 header-cart">
                      <div class="shopping_cart">
                         <div id="cart" class="btn-shopping-cart">
                            <a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
                               <div class="shopcart">
                                  <span class="handle pull-left"></span>
                                  <div class="cart-info">
                                     <h2 class="title-cart">购物车</h2>
                                     <h2 class="title-cart2 hidden">我的购物车</h2>
                                     <span class="total-shopping-cart cart-total-full">
                                     <span class="items_cart">2 </span><span class="items_cart2">item(s)</span><span class="items_carts"> - $206.80</span>
                                     </span>
                                  </div>
                               </div>
                            </a>
                            <ul class="dropdown-menu pull-right shoppingcart-box">
                               <li class="content-item">
                                   <table class="table table-striped" style="margin-bottom:10px;">
                                       <tbody>
                                           <tr>
                                               <td class="text-center size-img-cart">
                                                   <a href="product.html"><img src="{{URL::asset('image/catalog/demo/product/travel/10-54x54.jpg')}}" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-thumbnail"></a>
                                               </td>
                                               <td class="text-left"><a href="product.html">Bougainvilleas on Lombard Street,  San Francisco, Tokyo</a>
                                                   <br> - <small>Size M</small> </td>
                                               <td class="text-right">x1</td>
                                               <td class="text-right">$120.80</td>
                                               <td class="text-center">
                                                   <button type="button" title="Remove" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                               </td>
                                           </tr>
                                       </tbody>
                                   </table>

                               </li>
                               <li>
                                  <div class="checkout clearfix">
                                     <a href="{{route('cart.index')}}" class="btn btn-view-cart inverse">查看购物车</a>
                                  </div>
                               </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                   @endauth
                </div>
             </div>
          </div>
          <!-- //Header Top -->
          <!-- Header center -->
          <div class="header-center">
             <div class="container">
                <div class="row">
                   <!-- Menuhome -->
                   <div class="col-lg-8 col-md-8 col-sm-1 col-xs-3 header-menu">
                      <div class="megamenu-style-dev megamenu-dev">
                         <div class="responsive">
                            <nav class="navbar-default">
                               <div class="container-megamenu horizontal">
                                  <div class="navbar-header">
                                     <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                     <span class="icon-bar"></span>
                                     <span class="icon-bar"></span>
                                     <span class="icon-bar"></span>
                                     </button>
                                  </div>
                                  <div class="megamenu-wrapper">
                                     <span id="remove-megamenu" class="fa fa-times"></span>
                                     <div class="megamenu-pattern">
                                        <div class="container">
                                           <ul class="megamenu" data-transition="slide" data-animationtime="500">
                                              <li class="full-width menu-home with-sub-menu hover">
                                                 <a href="{{ route('root') }}" class="clearfix">
                                                 <strong>
                                                 主页
                                                 </strong>
                                                 </a>
                                              </li>
                                              <li class="">
                                                 <p class="close-menu"></p>
                                                 <a href="blog-page.html" class="clearfix">
                                                 <strong>
                                                 FAQ
                                                 </strong>
                                                 </a>
                                              </li>
                                              <li class="">
                                                 <p class="close-menu"></p>
                                                 <a href="blog-page.html" class="clearfix">
                                                 <strong>
                                                 博客
                                                 </strong>
                                                 </a>
                                              </li>
                                           </ul>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </nav>
                         </div>
                      </div>
                   </div>

                   <!--Searchhome-->
                   <div class="col-lg-4 col-md-4 col-sm-11 col-xs-9 header-search">
                      <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                        <form action="{{ route('products.search') }}" >
                           <div id="search0" class="search input-group form-group">
                              <input class="autosearch-input form-control" id="search-input"  type="text" size="50" autocomplete="off" name="search" placeholder="搜索">
                              <span id="search-form-btn" class="input-group-btn">
                              <button type="submit" class="button-search btn btn-default btn-lg"><i class="fa fa-search"></i></button>
                              </span>
                           </div>
                        </form>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- //Header center -->
       </header>
      <!-- //Header Container  -->


      <!-- Main Container  -->
<div class="container">
  <ul class="breadcrumb">
    <li><a href="{{ route('root') }}"><i class="fa fa-home"></i></a></li>
    <li><a href="{{ route('cart.index') }}">购物车</a></li>
  </ul>

  <div class="row">
    <div id="content" class="col-sm-12">
      <h1>购物车
      </h1>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th><input type="checkbox" id="select-all"></th>
              <td class="text-center">图片</td>
              <td class="text-left">商品名称</td>
              <td class="text-left">数量</td>
              <td class="text-right">单价</td>
              <td class="text-right">总价</td>
            </tr>
          </thead>
          <tbody>
            @foreach($cartItems as $item)
            <tr data-id="{{ $item->productSku->id }}">
              <td>
                <input type="checkbox" name="select" value="{{ $item->productSku->id }}" {{ $item->productSku->product->on_sale ? 'checked' : 'disabled' }}>
              </td>
              <td class="text-center"> <a target="_blank" href="{{ route('products.show', [$item->productSku->product_id]) }}"><img src="{{ $item->productSku->product->image_url }}" alt="{{ $item->productSku->product->description }}" title="{{ $item->productSku->product->title }}" class="img-thumbnail"></a> </td>
              <td class="text-left"><a href="#">{{ $item->productSku->product->title }}</a><br>
                <small>{{ $item->productSku->title }}</small>
              </td>
              <td class="text-left">Product 5</td>
              <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">
                <input type="text" name="quantity[315]" value="1" size="1" class="form-control">
                <span class="input-group-btn">
                <button type="submit" data-toggle="tooltip" title="" class="btn btn-primary" data-original-titl
                ="Update"><i class="fa fa-refresh"></i></button>
                <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="cart.remove('315');" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
                </span></div></td>
              <td class="text-right">$128.00</td>
            </tr>
            @endforeach
          </tbody>

        </table>
      </div>
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title"><a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">使用优惠券<i class="fa fa-caret-down"></i></a></h4>
        </div>
        <div id="collapse-coupon" class="panel-collapse collapse">
          <div class="panel-body">
            <label class="col-sm-2 control-label" for="input-coupon">输入优惠码</label>
            <div class="input-group">
              <input type="text" name="coupon"  id="input-coupon" class="form-control">
              <span class="input-group-btn">
                <input type="button" value="使用优惠码" id="button-coupon" data-loading-text="Loading..." class="btn btn-primary">
              </span>
            </div>
          </div>
        </div>
        </div>

      </div>

      <!-- <div class="row">
        <div class="col-sm-4 col-sm-offset-8">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td class="text-right"><strong>Sub-Total:</strong></td>
                <td class="text-right">$99.00</td>
              </tr>
              <tr>
                <td class="text-right"><strong>Eco Tax (-2.00):</strong></td>
                <td class="text-right">$2.00</td>
              </tr>
              <tr>
                <td class="text-right"><strong>VAT (20%):</strong></td>
                <td class="text-right">$19.80</td>
              </tr>
              <tr>
                <td class="text-right"><strong>Total:</strong></td>
                <td class="text-right">$120.80</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div> -->

      <div class="buttons clearfix">
        <div class="pull-left"><a href="{{ route('root') }}" class="btn btn-default">继续购物</a></div>
        <div class="pull-right"><a href="#" class="btn btn-primary">下单</a></div>
      </div>
    </div>


  </div>

</div>
<!-- //Main Container -->
    </div>
	<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
</body>
@section('content')
