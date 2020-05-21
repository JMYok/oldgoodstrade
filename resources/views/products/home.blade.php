@extends('layouts.apptemplate')
@section('title', '商品主页')

@section('content')
<style>
 span.count{
			color: #ff5e00;
			font-size: 18px;
 }
</style>

	<body class="common-home res layout-4">
	<div id="wrapper" class="wrapper-fluid banners-effect-3">
		<!-- Header Container  -->
		<header id="header" class="typeheader-4">
		<!-- Header Top -->

		<div class="header-top hidden-compact">
			<div class="container">
			<div class="row">
				@guest
				<div class="header-top-left  col-lg-6  col-sm-4 col-md-6 hidden-xs">
				<div class="list-contact">
					<span class="hidden-sm"> 欢迎您! </span> <a class="link-lg" href="{{route('register')}}">免费注册</a> or <a class="link-lg" href="{{route('login')}}">登录</a>
				</div>
				</div>
				@else
				<div class="header-top-right collapsed-block col-lg-12 col-sm-12 col-md-12 col-xs-12">
				<div class="tabBlock" id="TabBlock-1">
					<ul class="top-link list-inline">
						<li class="account " id="my_account">
							<a href="#" title="My Account" class="btn-xs dropdown-toggle" data-toggle="dropdown"><strong>{{Auth::user()->name}}的账户</strong> <span class="fa fa-angle-down"></span></a>
							<ul class="dropdown-menu">
								<li><a href="{{route('user_addresses.index')}}">收获地址</a></li>
								<li><a href="{{ route('orders.index') }}">我的订单</a></li>
								<li><a href="{{ route('products.favorites') }}">我的收藏</a></li>
								<li>
										<a href="{{ route('logout') }}"
												onclick="event.preventDefault();
																 document.getElementById('logout-form').submit();">
												退出登录
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
										</form>
								</li>
							</ul>
						</li>
						</ul>
				</div>
				</div>
        @endguest
			</div>
			</div>
		</div>
		<!-- //Header Top -->


		<!-- Header center -->
		<div class="header-center">
			<div class="container">
				<div class="row">
					<div class="navbar-logo col-lg-3 col-md-12 col-xs-12">
								<a href="{{ route('root') }}"><img src="{{URL::asset('images/logo1.jpg')}}" title="Your Old treasures Home" alt="Your Old treasures Home"></a>
					</div>
							<div class="header-center-right col-lg-6 col-md-8 col-sm-8 col-xs-9">
								<div class="header_search">
									<div id="sosearchpro" class="sosearchpro-wrapper so-search ">

										<form  action="{{ route('products.search') }}" method="GET">
                      {{ csrf_field() }}
											<div id="search0" class="search input-group form-group">
												<input class="autosearch-input form-control" type="text" size="50" autocomplete="off" placeholder="输入关键字搜索..." name="search">
												<span class="input-group-btn">
												<button type="submit" class="button-search btn btn-default btn-lg" ><i class="fa fa-search"></i><span class="hidden">搜索</span></button>
												</span>
											</div>
										</form>

									</div>
								</div>
							</div>
							<div class="header-cart-phone col-lg-3 col-md-4 col-sm-4 col-xs-3">
              <div class="bt-head header-cart">
					    <div class="shopping_cart">
    						<div id="cart" class="btn-shopping-cart">
    						<a class="btn-group top_cart" href="{{ route('cart.index') }}">
    							<div class="shopcart">
    							<span class="handle pull-left"></span>
    							<div class="cart-info">
    								<h2 class="title-cart">购物车</h2>
    								<h2 class="title-cart2" style="margin-top:15%;">我的购物车</h2>
    								<span class="total-shopping-cart cart-total-full">
    								</span>
    							</div>
    							</div>
    						</a>
    						</div>
    					</div>
    					</div>
    					<div class="header_custom_link hidden-xs">
    							<ul>
    								<li class="wishlist"><a href="{{ route('products.favorites') }}" class="top-link-wishlist" title="心愿单 "></a></li>
    							</ul>
    					</div>
					   </div>
				</div>
			</div>
		</div>
		<!-- //Header center -->


		<!-- Heaader bottom -->
		<div class="header-bottom hidden-compact">
			<div class="container">
			<div class="header-bottom-inner">
				<div class="row">
					<div class="header-bottom-left menu-vertical col-md-3 col-sm-6 col-xs-7">
						<div class="megamenu-style-dev megamenu-dev">
					<div class="responsive">
						<div class="so-vertical-menu no-gutter">
						<nav class="navbar-default">
							<div class="container-megamenu container vertical">
							<div id="menuHeading">
								<div class="megamenuToogle-wrapper">
								<div class="megamenuToogle-pattern">
									<div class="container">
									<div><span></span><span></span><span></span></div>
									<span class="title-mega">
									全部类目
									</span>
									</div>
								</div>
								</div>
							</div>

							<!-- 响应式按钮 -->
							<div class="navbar-header">
								<span class="title-navbar hidden-lg hidden-md">  全部类目  </span>
								<button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>
							</div>

							<div class="vertical-wrapper">
								<span id="remove-verticalmenu" class="fa fa-times"></span>
								<div class="megamenu-pattern">
								<div class="container">
									<ul class="megamenu" data-transition="slide" data-animationtime="100" data-labelledby="categoryTree">
									@if(isset($categoryTree))
									<!-- 遍历 $categoryTree 集合，将集合中的每一项以 $category 变量注入 layouts._category_item 模板中并渲染 -->
									@each('layouts._new_category_item', $categoryTree, 'category')
									@endif
									</ul>
								</div>
								</div>
							</div>
							</div>
						</nav>
						</div>
					</div>
					</div>
					</div>

					<!-- Menuhome -->
					<div class="header-bottom-right col-md-9 col-sm-6 col-xs-5">
					<div class="header-menu">
					<div class="megamenu-style-dev megamenu-dev">
						<div class="responsive">
						<nav class="navbar-default">
							<div class="container-megamenu horizontal">
							<div class="megamenu-wrapper">
								<span id="remove-megamenu" class="fa fa-times"></span>
								<div class="megamenu-pattern">
								<div class="container">
									<ul class="megamenu" data-transition="slide" data-animationtime="500">
								<li>
									<p class="close-menu"></p>
									<a href="#" class="clearfix">
									<strong>
									FAQ
									</strong>
									</a>
								</li>
								<li>
									<p class="close-menu"></p>
									<a href="#" class="clearfix">
									<strong>
									关于我们
									</strong>
									</a>
								</li>
								<li>
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
					</div>
				</div>
			</div>
			</div>
		</div>
		</header>
		<!-- //Header Container  -->


		<!-- Main Container  -->
		<div id="content">
		<div class="so-page-builder">
			<section id="section-style-h4-1" class="section-style-h4">
				<div class="container-fluid page-builder-ltr">
				<div class="row row_a90w  row-style ">
					<!--- 轮播----->
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_dg1b slider-right">
					<div class="module sohomepage-slider so-homeslider-ltr  ">
						<div class="modcontent">
						<div id="sohomepage-slider1">
							<div class="so-homeslider sohomeslider-inner-1">
							<div class="item">
								<a href=" #" title="slide 1 - 1" target="_self">
								<img class="responsive" src="{{URL::asset('images/catalog/demo/slider/home4/l1.jpg')}}" alt="slide 1 - 1">
								</a>
								<div class="sohomeslider-description">
								</div>
							</div>
							<div class="item">
								<a href="#" title="slide 1 - 2" target="_self">
								<img class="responsive" src="{{URL::asset('images/catalog/demo/slider/home4/l2.jpg')}}" alt="slide 1 - 2">
								</a>
								<div class="sohomeslider-description">
								</div>
							</div>
							<div class="item">
								<a href=" #   " title="slide 1 - 3" target="_self">
								<img class="responsive" src="{{URL::asset('images/catalog/demo/slider/home4/l3.jpg')}}" alt="slide 1 - 3">
								</a>
								<div class="sohomeslider-description">
								</div>
							</div>
							<div class="item">
								<a href=" #" title="slide 1 - 4" target="_self">
								<img class="responsive" src="{{URL::asset('images/catalog/demo/slider/home4/l4.jpg')}}" alt="slide 1 - 4">
								</a>
								<div class="sohomeslider-description">
								</div>
							</div>
							</div>
						</div>
						</div>
					</div>
					</div>
				</div>
				</div>
			</section>
			<div class="container page-builder-ltr">
				<!-- 静态宣传页面 -->
			<div class="row row_k43m row-style ">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_hmsd block block_2">
					<div class="home4-banner-1 row clearfix ">
						<div class="item-1 col-lg-4 col-md-4 col-sm-4 col-xs-6 mrb-30 banners">
							<div>
								<a href="{{ route('coupon_codes.index') }}"  id="coupon" title="Static Image"><img src="{{URL::asset('images/coupon1.png')}}" alt="coupon Image"></a>
							</div>
						</div>
						<div class="item-2 col-lg-4 col-md-4 col-sm-4 col-xs-6 mrb-30 banners">
							<div>
								<a title="Static Image" href="#"><img src="{{URL::asset('images/catalog/demo/banners/home4/banner4-2.jpg')}}" alt="Static Image"></a>
							</div>
						</div>
						<div class="item-2 col-lg-4 col-md-4 col-sm-4 hidden-xs mrb-30 banners">
							<div>
								<a title="Static Image" href="#"><img src="{{URL::asset('images/catalog/demo/banners/home4/banner4-3.jpg')}}" alt="Static Image"></a>
							</div>
						</div>
					</div>
				</div>

			</div>
			</div>

			<section id="box-link1" class="section-style">
			<div class="container page-builder-ltr">
				<div class="row row-style row_a1">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_a1c  block block_3 title_neo1">
					<div class="module module so-listing-tabs-ltr home4-lt-style1 default-nav">
					<div class="modcontent">
						<div id="so_listing_tabs_142" class="so-listing-tabs first-load module">
						<div class="ltabs-wrap">
							<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="3" data-xs="2" data-margin="0">
							<!--Begin Tabs-->
							<div class="ltabs-tabs-wrap">
								<span class="ltabs-tab-selected"></span>
								<span class="ltabs-tab-arrow">▼</span>
								<div class="item-sub-cat">
								<ul class="ltabs-tabs cf font-ct list-sub-cat">
									<li class="ltabs-tab tab-sel" data-category-id="1" data-active-content=".items-category-1"> <span class="ltabs-tab-label">销量Top10</span> </li>
									<!-- <li class="ltabs-tab " data-category-id="4" data-active-content=".items-category-4"> <span class="ltabs-tab-label">评分Top10</span> </li> -->
								</ul>
								</div>
							</div>
							<!-- End Tabs-->
							</div>

							<div class="wap-listing-tabs  products-list grid">
							<div class="ltabs-items-container">

            	<!--Begin Items-->
							<div class="ltabs-items ltabs-items-selected ltabs-items-loaded items-category-1" data-total="10">
								<div class="ltabs-items-inner ltabs-slider">
								@foreach($saleranks as $product)
								<div class="ltabs-item ">
										<div class="item-inner product-thumb transition product-layout">
											<div class="product-item-container">
												<div class="left-block">
													<div class="image product-image-container ">
														<a class="lt-image"
															href="{{ route('products.show', ['product' => $product->id]) }}" target="_self"
															title="{{$product->title}}">
														<img width="270" height="280" src="{{ $product->image_url }}" alt="{{$product->title}}">
														</a>
													</div>
													<div class="box-label">
														<span class="label-product label-sale">No.{{ $loop->index + 1}}</span>
													</div>
												</div>
												<div class="right-block">
													<div class="caption">
														<h4>
															<a href="{{ route('products.show', ['product' => $product->id]) }}"
																title="{{$product->title}}" target="_self">
															{{ $product->title }}
															</a>
														</h4>
														<div class="rating">
															<span class="count">
															{{ str_repeat('★', round($product->rating)) }}{{ str_repeat('☆', 5 - round($product->rating)) }}
															</span>
														</div>
														<div class="total-price clearfix">
															<div class="price price-left">
																<span class="price-new">{{ sprintf('%.2f',$product->price * 0.8) }}</span>
																<span class="price-old">{{ $product->price }}</span>
															</div>

															<div class="price-sale price-right">
																<span class="discount 123">
																{{ $product->sold_count }}
																<strong>件！</strong>
																</span>
															</div>
														</div>
													</div>
													<div class="button-group">
														<div class="button-inner so-quickview">
															<a class="lt-image hidden"
																href="#" target="_self"
																title="Bazem Carlo again is there anyone who loves oreos ">
															</a>
															<!-- <button class="btn-favor wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart"></i></button> -->
														</div>
													</div>
												</div>
											</div>
										</div>
										</div>
										@endforeach
								</div>
							</div>
							</div>
							</div>
						</div>

            <div class="ltabs-wrap">
							<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="3" data-xs="2" data-margin="0">
							<!--Begin Tabs-->
							<div class="ltabs-tabs-wrap">
								<span class="ltabs-tab-selected"></span>
								<span class="ltabs-tab-arrow">▼</span>
								<div class="item-sub-cat">
								<ul class="ltabs-tabs cf font-ct list-sub-cat">
									<li class="ltabs-tab tab-sel" data-category-id="1" data-active-content=".items-category-1"> <span class="ltabs-tab-label">评分Top10</span> </li>
									<!-- <li class="ltabs-tab " data-category-id="4" data-active-content=".items-category-4"> <span class="ltabs-tab-label">评分Top10</span> </li> -->
								</ul>
								</div>
							</div>
							<!-- End Tabs-->
							</div>

							<div class="wap-listing-tabs  products-list grid">
							<div class="ltabs-items-container">

            	<!--Begin Items-->
							<div class="ltabs-items ltabs-items-selected ltabs-items-loaded items-category-1" data-total="10">
								<div class="ltabs-items-inner ltabs-slider">
								@foreach($pointranks as $product)
								<div class="ltabs-item ">
										<div class="item-inner product-thumb transition product-layout">
											<div class="product-item-container">
												<div class="left-block">
													<div class="image product-image-container ">
														<a class="lt-image"
															href="{{ route('products.show', ['product' => $product->id]) }}" target="_self"
															title="{{$product->title}}">
														<img width="270" height="270" src="{{ $product->image_url }}" alt="{{$product->title}}">
														</a>
													</div>
													<div class="box-label">
														<span class="label-product label-sale">No.{{ $loop->index + 1}}</span>
													</div>
												</div>
												<div class="right-block">
													<div class="caption">
														<h4>
															<a href="{{ route('products.show', ['product' => $product->id]) }}"
																title="{{$product->title}}" target="_self">
															{{ $product->title }}
															</a>
														</h4>
														<div class="rating">
															<span class="count">
															{{ str_repeat('★', round($product->rating)) }}{{ str_repeat('☆', 5 - round($product->rating)) }}
															</span>
														</div>
														<div class="total-price clearfix">
															<div class="price price-left">
																<span class="price-new">{{ sprintf('%.2f',$product->price * 0.8) }}</span>
																<span class="price-old">{{ $product->price }}</span>
															</div>

															<div class="price-sale price-right">
																<span class="discount 123">
																{{ $product->sold_count }}
																<strong>件！</strong>
																</span>
															</div>
														</div>
													</div>
													<div class="button-group">
														<div class="button-inner so-quickview">
															<a class="lt-image hidden"
																href="#" target="_self"
																title="Bazem Carlo again is there anyone who loves oreos ">
															</a>
															<!-- <button class="btn-favor wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button> -->
														</div>
													</div>
												</div>
											</div>
										</div>
										</div>
										@endforeach
								</div>
							</div>
							</div>
							</div>
						</div>

						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
			</section>

      <section id="box-link2" class="section-style">
			<div class="container page-builder-ltr">
				<div class="row row-style row_a2">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_1bi4  col-style block block_5 title_neo2">
					<div class="module so-listing-tabs-ltr default-nav clearfix img-float label-1 home-lt1">
					<div class="head-title font-ct">
						<h2 class="modtitle">{{ $keys[0] }}</h2>
					</div>
					<div class="modcontent">
						<div id="so_listing_tabs_1" class="so-listing-tabs first-load">
						<div class="ltabs-wrap">
							<div class="wap-listing-tabs ltabs-items-container products-list grid">
							<!--Begin Items-->
							<div class="ltabs-items ltabs-items-selected items-category-1" data-total="16">
								<div class="ltabs-items-inner ltabs-slider">
                @isset($products['电脑配件'])
                @foreach( $products['电脑整机'] as $product)
								<div class="ltabs-item">
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
											<div class="left-block">
											<div class="image product-image-container ">
												<a class="lt-image" href="{{ route('products.show', ['product' => $product->id]) }}" target="_self" title="{{ $product->title }}">
												<img width="270" height="270" src="{{ $product->image_url }}" alt="{{ $product->title }}">
												</a>
											</div>
											<div class="box-label"><span class="label-product label-sale">Sale</span></div>
											</div>
											<div class="right-block">
											<div class="caption">
												<h4><a href="{{ route('products.show', ['product' => $product->id]) }}" title="{{ $product->title }}" target="_self">{{ $product->title }}</a></h4>
												<div class="total-price clearfix">
												<div class="price price-left">
                        <span class="price-new">{{ sprintf('%.02f',$product->price * 0.8) }}</span>
                        <span class="price-old">{{ $product->price }}</span></div>
												<div class="price-sale price-right"><span class="discount 123">-20%<strong>OFF</strong></span></div>
												</div>
											</div>
											<div class="button-group">
												<div class="button-inner so-quickview">
												<a class="lt-image hidden" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
												<!-- <button class="btn-favor wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
												<i class="fa fa-heart"></i>
												</button> -->
												</div>
											</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach
                @endisset
								</div>
							</div>

							</div>
						</div>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
			</section>

      <section id="box-link5" class="section-style">
			<div class="container page-builder-ltr">
				<div class="row row-style row_a5">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_iunl  block block_8 title_neo5">
					<div class="module so-listing-tabs-ltr home1-lt-style4 default-nav clearfix img-float home-lt1">
					<div class="head-title font-ct">
						<h2 class="modtitle">
						<span>{{ $keys[1] }}</span>
						</h2>
					</div>
					<div class="modcontent">
						<div id="so_listing_tabs_4" class="so-listing-tabs first-load">
						<div class="ltabs-wrap">
							<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="3" data-xs="2" data-margin="0">
							<!--Begin Tabs-->
							<!-- End Tabs-->
							</div>
							<div class="wap-listing-tabs products-list grid">
							<div class="ltabs-items-container ">
								<!--Begin Items-->
								<div class="ltabs-items ltabs-items-selected items-category-1" data-total="16">
								<div class="ltabs-items-inner ltabs-slider ">
                  @isset($products['电脑整机'])
                  @foreach($products['电脑整机'] as $product)
									<div class="ltabs-item">
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
										<div class="left-block">
											<div class="image product-image-container ">
											<a class="lt-image" href="{{ route('products.show', ['product' => $product->id]) }}" target="_self" title="{{ $product->title }}">
											<img width="270" height="270" src="{{ $product->image_url }}" alt="{{ $product->title }}">
											</a>
											</div>
											<div class="box-label"><span class="label-product label-sale">Sale</span></div>
										</div>
										<div class="right-block">
											<div class="caption">
											<h4><a href="{{ route('products.show', ['product' => $product->id]) }}" title="{{ $product->title }}" target="_self">{{$product->title}}</a></h4>
											<div class="total-price clearfix">
												<div class="price price-left">
                          <span class="price-new">{{ sprintf('%.02f',$product->price * 0.8) }}</span>
                          <span class="price-old">{{ $product->price }}</span>
                        </div>
												<div class="price-sale price-right"><span class="discount 123">-20%<strong>OFF</strong></span></div>
											</div>
											</div>
											<div class="button-group">
											<div class="button-inner so-quickview">
												<a class="lt-image hidden" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
												<!-- <button class="btn-favor wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
												<i class="fa fa-heart"></i>
												</button> -->
											</div>
											</div>
										</div>
										</div>
									</div>
									</div>
                  @endforeach
                  @endisset
								</div>
								</div>
							</div>
							</div>
						</div>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
			</section>


      <section id="box-link3" class="section-style">
			<div class="container page-builder-ltr">
				<div class="row row-style row_a3">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_nvxr  block block_6 title_neo3">
					<div class="module so-listing-tabs-ltr home1-lt-style2 default-nav clearfix img-float home-lt1">
					<div class="head-title font-ct">
						<h2 class="modtitle">{{ $keys[2] }}</h2>
					</div>
					<div class="modcontent">
						<div id="so_listing_tabs_2" class="so-listing-tabs first-load">
						<div class="ltabs-wrap">
							<div class="wap-listing-tabs products-list grid">
							<div class="item-cat-image banners">
								<div>
								<a href="#" title="" target="_self">
								<img class="categories-loadimage" title="" alt="" src="{{ URL::asset('./images/catalog/demo/banners/home4/img1-fashion-270x870.jpg')}}">
								</a>
								</div>
							</div>
							<div class="ltabs-items-container">
								<div class="ltabs-items ltabs-items-selected items-category-4" data-total="16">
								<div class="ltabs-items-inner ltabs-slider ">
                  @isset($products['外设产品'])
                  @foreach($products['外设产品'] as $product)
									<div class="ltabs-item">
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
										<div class="left-block">
											<div class="image product-image-container ">
											<a class="lt-image" href="{{ route('products.show', ['product' => $product->id]) }}" target="_self" title="{{ $product->title }}">
											<img width="270" height="270" src="{{ $product->image_url }}" alt="{{ $product->title }}">
											</a>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
											<h4>
												<a href="{{ route('products.show', ['product' => $product->id]) }}" title="{{ $product->title }}" target="_self">{{ $product->title }}</a>
											</h4>
											<div class="total-price clearfix">
												<div class="price price-left">
												<span class="price-new">{{ sprintf('%.02f',$product->price * 0.8) }}</span>
												<span class="price-old">{{ $product->price }}</span>
												</div>
                        <div class="price-sale price-right">
                        <span class="discount 123">-20%<strong>OFF</strong></span>
                        </div>
											</div>
											</div>
											<div class="button-group">
											<div class="button-inner so-quickview">
												<a class="lt-image hidden" href="#" target="_self" title="Invisible Hidden Spy Earphone Micro Wireless"></a>
												<!-- <button class="btn-favor wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
												<i class="fa fa-heart"></i>
												</button> -->
											</div>
											</div>
										</div>
										</div>
									</div>
									</div>
                  @endforeach
                  @endisset
								</div>
								</div>
								<div class="ltabs-items  items-category-5 grid" data-total="16">
								<div class="ltabs-loading">
								</div>
								</div>
								<div class="ltabs-items  items-category-6 grid" data-total="16">
								<div class="ltabs-loading">
								</div>
								</div>
							</div>
							</div>
						</div>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
			</section>

      <section id="box-link4" class="section-style">
			<div class="container page-builder-ltr">
				<div class="row row-style row_a4">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_mfpr  block block_7 title_neo4">
					<div class="module so-listing-tabs-ltr home1-lt-style3 default-nav clearfix img-float home-lt1">
					<div class="head-title font-ct">
						<h2 class="modtitle">{{ $keys[3] }}</h2>
					</div>
					<div class="modcontent">
						<div id="so_listing_tabs_3" class="so-listing-tabs first-load">
						<div class="ltabs-wrap">
							<div class="wap-listing-tabs products-list grid">
							<div class="item-cat-image banners">
								<div>
								<a href="#" title="" target="_self">
								<img class="categories-loadimage" title="" alt="" src="{{URL::asset('./images/catalog/demo/banners/home4/img1-travel-270x870.jpg')}}">
								</a>
								</div>
							</div>
							<div class="ltabs-items-container">
								<div class="ltabs-items ltabs-items-selected items-category-4" data-total="16">
									<div class="ltabs-items-inner ltabs-slider">
                    @isset($products['游戏设备'])
                    @foreach( $products['游戏设备'] as $product)
										<div class="ltabs-item">
											<div class="item-inner product-layout transition product-grid">
												<div class="product-item-container">
												<div class="left-block">
													<div class="image product-image-container ">
													<a class="lt-image" href="{{ route('products.show', ['product' => $product->id]) }}" target="_self" title="{{ $product->title }}">
													<img width="270" height="270" src="{{ $product->image_url }}" alt="{{ $product->title }}">
													</a>
													</div>
													<div class="box-label">
													<span class="label-product label-sale">Sale</span>
													</div>
												</div>
												<div class="right-block">
													<div class="caption">
													<h4>
														<a href="{{ route('products.show', ['product' => $product->id]) }}" title="" target="_self">{{ $product->title }}</a>
													</h4>
													<div class="total-price clearfix">
														<div class="price price-left">
														<span class="price-new">{{ sprintf('%.02f',$product->price * 0.8) }}</span>
														<span class="price-old">{{ $product->price }}</span>
														</div>
														<div class="price-sale price-right">
														<span class="discount 123">-20%<strong>OFF</strong></span>
														</div>
													</div>
													</div>
													<div class="button-group">
													<div class="button-inner so-quickview">
														<a class="lt-image hidden" href="#" target="_self" title="Bougainvilleas On Lombard Street, San Francisco, Tokyo"></a>
														<!-- <button class="btn-favor wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
														<i class="fa fa-heart"></i>
														</button> -->
													</div>
													</div>
												</div>
												</div>
											</div>
										</div>
                    @endforeach
                    @endisset
									</div>
								</div>
								<div class="ltabs-items  items-category-7 grid" data-total="16">
								<div class="ltabs-loading">
								</div>
								</div>
								<div class="ltabs-items  items-category-8 grid" data-total="16">
								<div class="ltabs-loading">
								</div>
								</div>
							</div>
							</div>
						</div>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
			</section>

      <section id="box-link5" class="section-style">
			<div class="container page-builder-ltr">
				<div class="row row-style row_a5">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_iunl  block block_8 title_neo5">
					<div class="module so-listing-tabs-ltr home1-lt-style4 default-nav clearfix img-float home-lt1">
					<div class="head-title font-ct">
						<h2 class="modtitle">
						<span>{{ $keys[4] }}</span>
						</h2>
					</div>
					<div class="modcontent">
						<div id="so_listing_tabs_4" class="so-listing-tabs first-load">
						<div class="ltabs-wrap">
							<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="3" data-xs="2" data-margin="0">
							<!--Begin Tabs-->
							<!-- End Tabs-->
							</div>
							<div class="wap-listing-tabs products-list grid">
							<div class="ltabs-items-container ">
								<!--Begin Items-->
								<div class="ltabs-items ltabs-items-selected items-category-1" data-total="16">
								<div class="ltabs-items-inner ltabs-slider ">
                  @isset($products['手机配件'])
                  @foreach($products['手机配件'] as $product)
									<div class="ltabs-item">
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
										<div class="left-block">
											<div class="image product-image-container ">
											<a class="lt-image" href="{{ route('products.show', ['product' => $product->id]) }}" target="_self" title="{{ $product->title }}">
											<img width="270" height="270" src="{{ $product->image_url }}" alt="{{ $product->title }}">
											</a>
											</div>
											<div class="box-label"><span class="label-product label-sale">Sale</span></div>
										</div>
										<div class="right-block">
											<div class="caption">
											<h4><a href="{{ route('products.show', ['product' => $product->id]) }}" title="{{ $product->title }}" target="_self">{{$product->title}}</a></h4>
											<div class="total-price clearfix">
												<div class="price price-left">
                          <span class="price-new">{{ sprintf('%.02f',$product->price * 0.8) }}</span>
                          <span class="price-old">{{ $product->price }}</span>
                        </div>
												<div class="price-sale price-right"><span class="discount 123">-20%<strong>OFF</strong></span></div>
											</div>
											</div>
											<div class="button-group">
											<div class="button-inner so-quickview">
												<a class="lt-image hidden" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
												<!-- <button class="btn-favor wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
												<i class="fa fa-heart"></i>
												</button> -->
											</div>
											</div>
										</div>
										</div>
									</div>
									</div>
                  @endforeach
                  @endisset
								</div>
								</div>
								<div class="ltabs-items items-category-9 grid" data-total="16">
								<div class="ltabs-loading"></div>
								</div>
								<div class="ltabs-items  items-category-10 grid" data-total="16">
								<div class="ltabs-loading"></div>
								</div>
								<div class="row clearfix banner-tab">
								<div class="col-lg-6 col-md-6 col-sm-6 banners">
									<div>
									<a href="#"><img src="{{URL::asset('images/catalog/demo/banners/home4/banner1.jpg')}}" alt="Image Client"></a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 banners">
									<div>
									<a href="#"><img src="{{URL::asset('images/catalog/demo/banners/home4/banner2.jpg')}}" alt="Image Client"></a>
									</div>
								</div>
								</div>
							</div>
							</div>
						</div>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
			</section>


		</div>
		</div>
		<!-- //Main Container -->
	</div>
	<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
	<!-- End Color Scheme
		============================================ -->
 @endsection
	</body>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}">
</script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

<!-- <script>
  $(document).ready(function () {
     // 监听收藏按钮的点击事件
     // $('.btn-favor').click(function () {
     //   // 发起一个 post ajax 请求，请求 url 通过后端的 route() 函数生成。
     //   axios.post('{{ route('products.favor', ['product' => $product->id]) }}')
     //     .then(function () { // 请求成功会执行这个回调
     //       swal('操作成功', '', 'success');
     //     }, function(error) { // 请求失败会执行这个回调
     //       // 如果返回码是 401 代表没登录
     //       if (error.response && error.response.status === 401) {
     //         swal('请先登录', '', 'error');
     //       } else if (error.response && (error.response.data.msg || error.response.data.message)) {
     //         // 其他有 msg 或者 message 字段的情况，将 msg 提示给用户
     //         swal(error.response.data.msg ? error.response.data.msg : error.response.data.message, '', 'error');
     //       }  else {
     //         // 其他情况应该是系统挂了
     //         swal('系统错误', '', 'error');
     //       }
     //     });
     // });

     $('a#coupon').click(function(){
       swal({
         title: "有效优惠券码:ABC",
         icon: "success",
         buttons: ['确定'],
       })
     });
 });
 </script> -->
  </script>
