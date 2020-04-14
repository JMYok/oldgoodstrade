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
								<a href="{{ route('root') }}"><img src="{{URL::asset('images/catalog/demo/logo/logo4.png')}}" title="Your Old treasures Home" alt="Your Old treasures Home"></a>
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
								<a title="Static Image" href="#"><img src="{{URL::asset('images/catalog/demo/banners/home4/banner4-1.jpg')}}" alt="Static Image"></a>
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
									<li class="ltabs-tab " data-category-id="4" data-active-content=".items-category-4"> <span class="ltabs-tab-label">评分Top10</span> </li>
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
																<span class="price-new">{{ $product->price }}</span>
																<span class="price-old">{{ sprintf('%.2f',$product->price * 0.8) }}</span>
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
																href="product.html" target="_self"
																title="Bazem Carlo again is there anyone who loves oreos ">
															</a>
															<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe"><i class="fa fa-search"></i></a>
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('30');"> <span class="hidden">加入购物车</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										</div>
										@endforeach
								</div>
							</div>

							<div class="ltabs-items items-category-4 grid" data-total="10">
								<div class="ltabs-loading"></div>
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
                @foreach( $products['电脑整机'] as $product)
								<div class="ltabs-item">
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
											<div class="left-block">
											<div class="image product-image-container ">
												<a class="lt-image" href="{{ route('products.show', ['product' => $product->id]) }}" target="_self" title="{{ $product->title }}">
												<img src="{{ $product->image_url }}" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
												</a>
											</div>
											<div class="box-label"><span class="label-product label-sale">Sale</span></div>
											</div>
											<div class="right-block">
											<div class="caption">
												<h4><a href="{{ route('products.show', ['product' => $product->id]) }}" title="{{ $product->title }}" target="_self">{{ $product->title }}</a></h4>
												<div class="total-price clearfix">
												<div class="price price-left">
                        <span class="price-new">{{ $product->price }}</span>
                        <span class="price-old">{{ sprintf('%.02f',$product->price * 0.8) }}</span></div>
												<div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
												</div>
											</div>
											<div class="button-group">
												<div class="button-inner so-quickview">
												<a class="lt-image hidden" href="product.html" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
												<i class="fa fa-search"></i>
												</a>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
												<i class="fa fa-heart"></i>
												</button>
												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
												<span class="hidden">加入购物车</span>
												</button>
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
			</section>

      <section id="box-link3" class="section-style">
			<div class="container page-builder-ltr">
				<div class="row row-style row_a3">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_nvxr  block block_6 title_neo3">
					<div class="module so-listing-tabs-ltr home1-lt-style2 default-nav clearfix img-float home-lt1">
					<div class="head-title font-ct">
						<h2 class="modtitle">{{ $keys[1] }}</h2>
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
										</div>
										<div class="right-block">
											<div class="caption">
											<h4>
												<a href="#" title="Invisible Hidden Spy Earphone Micro Wireless" target="_self">{{ $product->title }}</a>
											</h4>
											<div class="total-price clearfix">
												<div class="price price-left">
												<span class="price-new">{{ $product->price }}</span>
												<span class="price-old">{{ sprintf('%.02f',$product->price * 0.8) }}</span>
												</div>
											</div>
											</div>
											<div class="button-group">
											<div class="button-inner so-quickview">
												<a class="lt-image hidden" href="#" target="_self" title="Invisible Hidden Spy Earphone Micro Wireless"></a>
												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
												<i class="fa fa-search"></i>
												</a>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
												<i class="fa fa-heart"></i>
												</button>
												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
												<span class="hidden">Add to cart</span>
												</button>
											</div>
											</div>
										</div>
										</div>
									</div>
									</div>
                  @endforeach
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
						<h2 class="modtitle">{{ $keys[2] }}</h2>
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
                    @foreach( $products['电脑整机'] as $product)
										<div class="ltabs-item">
											<div class="item-inner product-layout transition product-grid">
												<div class="product-item-container">
												<div class="left-block">
													<div class="image product-image-container ">
													<a class="lt-image" href="#" target="_self" title="Bougainvilleas On Lombard Street, San Francisco, Tokyo">
													<img src="{{ $product->image_url }}" alt="Bougainvilleas On Lombard Street, San Francisco, Tokyo">
													</a>
													</div>
													<div class="box-label">
													<span class="label-product label-sale">Sale</span>
													</div>
												</div>
												<div class="right-block">
													<div class="caption">
													<h4>
														<a href="#" title="Bougainvilleas On Lombard Street, San Francisco, Tokyo" target="_self">{{ $product->title }}</a>
													</h4>
													<div class="total-price clearfix">
														<div class="price price-left">
														<span class="price-new">{{ $product->price }}</span>
														<span class="price-old">{{ sprintf('%.02f',$product->price * 0.8) }}</span>
														</div>
														<div class="price-sale price-right">
														<span class="discount 123">-11%<strong>OFF</strong></span>
														</div>
													</div>
													</div>
													<div class="button-group">
													<div class="button-inner so-quickview">
														<a class="lt-image hidden" href="#" target="_self" title="Bougainvilleas On Lombard Street, San Francisco, Tokyo"></a>
														<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
														<i class="fa fa-search"></i>
														</a>
														<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
														<i class="fa fa-heart"></i>
														</button>
														<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
														<i class="fa fa-exchange"></i>
														</button>
														<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
														<span class="hidden">Add to cart</span>
														</button>
													</div>
													</div>
												</div>
												</div>
											</div>
										</div>
                    @endforeach
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


		</div>
		</div>
		<!-- //Main Container -->
	</div>
	<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
	<!-- End Color Scheme
		============================================ -->
 @endsection
	</body>
