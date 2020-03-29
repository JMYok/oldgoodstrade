@extends('layouts.apptemplate')
@section('title','提示')

@section('content')
<style>
.btn-primary {background-color: #ff5e00 !important;}
</style>
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
                       <a href="{{route('root')}}"><img src="{{URL::asset('images/catalog/demo/logo/logo-2.png')}}" alt="Your Store" width="110" height="27" title="Your Store"></a>
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
                                   <a href="{{route('cart.index')}}" class="btn btn-view-cart inverse"> View Cart</a>
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
                                               <a href="#" class="clearfix">
                                               <strong>
                                               FAQ
                                               </strong>
                                               </a>
                                            </li>
                                            <li class="">
                                               <p class="close-menu"></p>
                                               <a href="#" class="clearfix">
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
                       <form method="GET" action="index.php">
                          <div id="search0" class="search input-group form-group">
                             <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="搜索" name="search">
                             <span class="input-group-btn">
                             <button type="submit" class="button-search btn btn-default btn-lg" name="submit_search"><i class="fa fa-search"></i><span class="hidden">Search</span></button>
                             </span>
                          </div>
                          <input type="hidden" name="route" value="product/search">
                       </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- //Header center -->
     </header>
    <!-- //Header Container  -->

  </div>
    <div class="main-container container">
      <div class="panel panel-default">
          <div class="panel-heading">提示</div>
          <div class="panel-body text-center" style="padding:10% 0;">
              <h1>请先验证邮箱</h1>
              <a class="btn btn-primary" href="{{ route('email_verification.send') }}">重新发送验证邮件</a>
          </div>
      </div>
      </div>
</body>
@stop
