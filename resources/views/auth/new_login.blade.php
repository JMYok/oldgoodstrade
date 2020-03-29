@extends('layouts.apptemplate')
@section('title','登录')

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
                         <a href="#"><img src="{{URL::asset('images/catalog/demo/logo/logo-2.png')}}" alt="Your Store" width="110" height="27" title="Your Store"></a>
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
                                     <a href="cart.html" class="btn btn-view-cart inverse"> View Cart</a>
                                     <a href="checkout.html" class="btn btn-checkout pull-right">Checkout</a>
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


	<!-- Main Container  -->
		<div class="container">
  		<div class="row">
        <ul class="breadcrumb">
          <li><a href="{{route('root')}}"><i class="fa fa-home"></i></a></li>
          <li><a href="#">登录</a></li>
        </ul>
  			<div id="content" class="col-md-9">
  				<div class="row">
          <div class="col-sm-6">
            <div class="well ">
              <h2>新用户</h2>
              <p><strong>注册账户</strong></p>
              <p>创建账户后您能够拥有更好的购物体验</p>
              <a href="{{ route('register') }}" class="btn btn-primary">注册</a></div>
          </div>
          <div class="col-sm-6">

                  <div class="well col-sm-12">

              <h2>已注册用户</h2>
              <p><strong>我是已注册用户</strong></p>
              <div class="container">
              <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label class="control-label" for="input-email">电子邮箱</label>
                  <input type="text" name="email" id="input-email" value="" placeholder="E-Mail Address" class="form-control" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label class="control-label" for="input-password">密码</label>
                  <input type="password" name="password" id="input-password" value="" placeholder="Password" class="form-control" required>
                  <a href="{{ route('password.request') }}">
                      忘记密码
                  </a>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pull-left">
                        登录
                    </button>
                    <div class="checkbox pull-right">
                        <label>
                            <input type="checkbox" name="remember" value="{{ old('remember') ? 'checked' : '' }}"> 记住我
                        </label>
                    </div>
                </div>
                  </div>
                </div>
                  </div>
                </div>
              </form>
            </div>

            @auth
            <aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
             <span id="close-sidebar" class="fa fa-times"></span>
             <div class="module">
                 <h3 class="modtitle"><span>快捷访问</span></h3>
                 <div class="module-content custom-border">
                     <ul class="list-box">
                         <li><a href="#">地址簿</a></li>
                         <li><a href="wishlist.html">心愿单</a></li>
                         <li><a href="#">订单历史</a></li>
                     </ul>
                 </div>
             </div>
             </aside>
            @endauth
          </div>

        </div>
  			</div>
	<!-- //Main Container -->


    </div>
	<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
</body>
@section('content')
