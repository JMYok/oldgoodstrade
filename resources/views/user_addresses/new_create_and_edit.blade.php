@extends('layouts.apptemplate')
@section('title',($address->id ? '修改': '新增') . '收货地址')

@section('content')
<style>
  label{
    font-size: 18px !important;
  }
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
<body class="account-login account res layout-1">
  <div id="app">
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
                                                   <a href="product.html"><img src="{{URL::asset('images/catalog/demo/product/travel/10-54x54.jpg')}}" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-thumbnail"></a>
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
          <li><a href="{{ route('user_addresses.create') }}">新建地址</i></a></li>
    		</ul>

    		<div class="row">
    			<!--Middle Part Start-->
          <div class="col-md-10 offset-lg-1">
      <div class="card">
        <div class="card-header">
          <h2 class="text-center">
             {{ $address->id ? '修改': '新增' }}收货地址
          </h2>
        </div>
        <div class="card-body">
          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <h4>有错误发生：</h4>
              <ul>
                @foreach ($errors->all() as $error)
                  <li><i class="glyphicon glyphicon-remove"></i> {{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <!-- 输出后端报错结束 -->
          <!-- inline-template 代表通过内联方式引入组件 -->
          <user-addresses-create-and-edit inline-template>
            @if($address->id)
             <form class="form-horizontal" role="form" action="{{ route('user_addresses.update', ['user_address' => $address->id]) }}" method="post">
               {{ method_field('PUT') }}
            @else
            <form class="form-horizontal" role="form" action="{{ route('user_addresses.store') }}" method="POST">
            @endif
            <!-- 引入 csrf token 字段 -->
            {{ csrf_field() }}
            <div class="form-group row">
            <select-district :init-value="{{ json_encode([old('province', $address->province), old('city', $address->city), old('district', $address->district)]) }}" @change="onDistrictChanged" inline-template>
              <div class="form-row">
                <label class="col-form-label col-sm-2 text-md-right">省市区</label>
                <div class="col-sm-3">
                  <select class="form-control" v-model="provinceId">
                    <option value="">选择省</option>
                    <option v-for="(name, id) in provinces" :value="id">@{{ name }}</option>
                  </select>
                </div>
                <div class="col-sm-3">
                  <select class="form-control" v-model="cityId">
                    <option value="">选择市</option>
                    <option v-for="(name, id) in cities" :value="id">@{{ name }}</option>
                  </select>
                </div>
                <div class="col-sm-3">
                  <select class="form-control" v-model="districtId">
                    <option value="">选择区</option>
                    <option v-for="(name, id) in districts" :value="id">@{{ name }}</option>
                  </select>
                </div>
              </div>
            </select-district>
          </div>
            <!-- 插入了 3 个隐藏的字段 -->
            <!-- 通过 v-model 与 user-addresses-create-and-edit 组件里的值关联起来 -->
            <!-- 当组件中的值变化时，这里的值也会跟着变 -->
            <input type="hidden" name="province" v-model="province">
            <input type="hidden" name="city" v-model="city">
            <input type="hidden" name="district" v-model="district">
            <div class="form-group row">
              <label class="col-form-label text-md-right col-sm-2">详细地址</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="address" value="{{ old('address', $address->address) }}">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label text-md-right col-sm-2">邮编</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="zip" value="{{ old('zip', $address->zip) }}">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label text-md-right col-sm-2">姓名</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="contact_name" value="{{ old('contact_name', $address->contact_name) }}">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label text-md-right col-sm-2">电话</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="contact_phone" value="{{ old('contact_phone', $address->contact_phone) }}">
              </div>
                </div>
                <div class="form-group row text-center">
              <div class="col-12">
                <button type="submit" class="btn btn-primary">提交</button>
              </div>
            </div>
            </form>
            </user-addresses-create-and-edit>
        </div>
      </div>
    </div>
    			<!--Middle Part End-->
    		</div>
    	</div>
    	<!-- //Main Container -->


    </div>
	<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
</body>
</div>
@section('content')
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
