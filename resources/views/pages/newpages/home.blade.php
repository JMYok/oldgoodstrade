@extends('layouts.apptemplate')
@section('title', '商品主页')

@section('content')
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
				<div class="header-top-right collapsed-block col-lg-6 col-sm-8 col-md-6 col-xs-12 ">
				<div class="tabBlock" id="TabBlock-1">
									<ul class="top-link list-inline">
										<li class="account " id="my_account">
											<a href="#" title="My Account" class="btn-xs dropdown-toggle" data-toggle="dropdown"> <span>{{Auth::user()->name}}的账户</span> <span class="fa fa-angle-down"></span></a>
											<ul class="dropdown-menu">
												<li><a href="{{route('user_addresses.index')}}">收获地址</a></li>
												<li><a href="{{ route('orders.index') }}">我的订单</a></li>
												<li><a href="{{ route('products.favorites') }}">我的收藏</a></li>
												<li><a href="{{ route('logout') }}"><span>退出登录</span></a></li>
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
								<a href="#"><img src="{{URL::asset('images/catalog/demo/logo/logo4.png')}}" title="Your Old treasures Home" alt="Your Old treasures Home"></a>
							</div>
							<div class="header-center-right col-lg-6 col-md-7 col-sm-7 col-xs-9">
								<div class="header_search">
									<div id="sosearchpro" class="sosearchpro-wrapper so-search ">
										<form  action="{{ route('products.index') }}">
											<div id="search0" class="search input-group form-group">

												<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="输入关键字搜索..." name="search">
												<span class="input-group-btn">
												<button type="submit" class="button-search btn btn-default btn-lg" name="submit_search"><i class="fa fa-search"></i><span class="hidden">搜索</span></button>
												</span>
											</div>
											<input type="hidden" name="route" value="product/search">
										</form>
									</div>
								</div>
							</div>
							<div class="header-cart-phone col-lg-3 col-md-5 col-sm-5 col-xs-3"><div class="bt-head header-cart">
					    <div class="shopping_cart">
						<div id="cart" class="btn-shopping-cart">
						<a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
							<div class="shopcart">
							<span class="handle pull-left"></span>
							<div class="cart-info">
								<h2 class="title-cart">购物车</h2>
								<h2 class="title-cart2 hidden">我的购物车</h2>
								<span class="total-shopping-cart cart-total-full">
								<span class="items_cart">2 </span><span class="items_cart2">件物品</span><span class="items_cart2"> - $206.80</span>
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
									<td class="text-left"><a href="#">Bougainvilleas on Lombard Street,  San Francisco, Tokyo</a>
									<br> - <small>Size M</small>
									</td>
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
								<a href="{{ route('cart.index') }}" class="btn btn-view-cart inverse">查看购物车</a>
							</div>
							</li>
						</ul>
						</div>
					</div>
					</div>
					@auth
					<div class="header_custom_link hidden-xs">
							<ul>
								<li class="wishlist"><a href="wishlist.html" class="top-link-wishlist" title="心愿单 "></a></li>
							</ul>
					</div>
					@endauth
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
		<div class="custom-scoll hidden-sm hidden-md hidden-xs">
			<div class="custom-html">
			<div class="scoll-cate list_diemneo">
				<ul id="nav-scroll">
				<li class="neo1"><a href="#box-link1"><span>Hot deal</span></a></li>
				<li class="neo2"><a href="#box-link2"><span>Spa</span></a></li>
				<li class="neo3"><a href="#box-link3"><span>Fashion</span></a></li>
				<li class="neo4"><a href="#box-link4"><span>Travel</span></a></li>
				<li class="neo5"><a href="#box-link5"><span>Digital</span></a></li>
				</ul>
			</div>
			</div>
		</div>
		<div class="so-page-builder">
			<section id="section-style-h4-1" class="section-style-h4">
				<div class="container-fluid page-builder-ltr">
				<div class="row row_a90w  row-style ">
					<!--- SLider right-->
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
									<li class="ltabs-tab tab-sel" data-category-id="1" data-active-content=".items-category-1"> <span class="ltabs-tab-label">销量最高</span> </li>
									<li class="ltabs-tab " data-category-id="4" data-active-content=".items-category-4"> <span class="ltabs-tab-label">评分最高</span> </li>
								</ul>
								</div>
							</div>
							<!-- End Tabs-->
							</div>

							<div class="wap-listing-tabs  products-list grid">
							<div class="ltabs-items-container">
							<!--Begin Items-->
							<div class="ltabs-items ltabs-items-selected ltabs-items-loaded items-category-1" data-total="6">
								<div class="ltabs-items-inner ltabs-slider">
								<div class="ltabs-item ">
										<div class="item-inner product-thumb transition product-layout">
											<div class="product-item-container">
												<div class="left-block">
													<div class="image product-image-container ">
														<a class="lt-image"
															href="product.html" target="_self"
															title="Bazem Carlo again is there anyone who loves oreos ">
														<img src="{{URL::asset('images/catalog/demo/banners/home4/banner4-3.jpg')}}" alt="Bazem Carlo again is there anyone who loves oreos ">
														</a>
													</div>
													<div class="box-label">
														<span class="label-product label-sale">Sale</span>
													</div>
												</div>
												<div class="right-block">
													<div class="caption">
														<h4>
															<a href="#"
																title="Bazem Carlo again is there anyone who loves oreos " target="_self">
															Bazem Carlo again is there anyone who loves oreos
															</a>
														</h4>
														<div class="rating">
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														</div>
														<div class="total-price clearfix">
															<div class="price price-left">
																<span class="price-new">$100.00</span>
																<span class="price-old">$120.00</span>
															</div>
															<div class="price-sale price-right">
																<span class="discount 123">
																-17%
																<strong>OFF</strong>
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
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('30');"> <span class="hidden">Add to cart</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										</div>
																<div class="ltabs-item ">
																	<div class="item-inner product-thumb transition product-layout">
																		<div class="product-item-container">
																			<div class="left-block">
																				<div class="image product-image-container ">
																					<a class="lt-image"
																						href="product.html" target="_self"
																						title="Bazem Carlo again is there anyone who loves oreos">
																					<img src="image/catalog/demo/product/book/5-370x370.jpg" alt="Bazem Carlo again is there anyone who loves oreos">
																					</a>
																				</div>
																				<div class="box-label">
																					<span class="label-product label-sale">Sale</span>
																				</div>
																			</div>
																			<div class="right-block">
																				<div class="caption">
																					<h4>
																						<a href="product.html"
																							title="Bazem Carlo again is there anyone who loves oreos" target="_self">
																						Bazem Carlo again is there anyone who loves oreos
																						</a>
																					</h4>
																					<div class="rating">
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																					</div>
																					<div class="total-price clearfix">
																						<div class="price price-left">
																							<span class="price-new">$89.00</span>
																							<span class="price-old">$100.00</span>
																						</div>
																						<div class="price-sale price-right">
																							<span class="discount 123">
																							-11%
																							<strong>OFF</strong>
																							</span>
																						</div>
																					</div>
																				</div>
																				<div class="button-group">
																					<div class="button-inner so-quickview">
																						<a class="lt-image hidden"
																							href="product.html" target="_self"
																							title="Bazem Carlo again is there anyone who loves oreos">
																						</a>
																						<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe"><i class="fa fa-search"></i></a>
																						<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
																						<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
																						<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('30');"> <span class="hidden">Add to cart</span></button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="ltabs-item ">
																	<div class="item-inner product-thumb transition product-layout">
																		<div class="product-item-container">
																			<div class="left-block">
																				<div class="image product-image-container ">
																					<a class="lt-image"
																						href="product.html" target="_self"
																						title="Bazem Carlo again is there anyone who loves oreos">
																					<img src="image/catalog/demo/product/book/9-370x370.jpg" alt="Bazem Carlo again is there anyone who loves oreos">
																					</a>
																				</div>
																				<div class="box-label">
																					<span class="label-product label-sale">Sale</span>
																				</div>
																			</div>
																			<div class="right-block">
																				<div class="caption">
																					<h4>
																						<a href="product.html"
																							title="Bazem Carlo again is there anyone who loves oreos" target="_self">
																						Bazem Carlo again is there anyone who loves oreos
																						</a>
																					</h4>
																					<div class="rating">
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																					</div>
																					<div class="total-price clearfix">
																						<div class="price price-left">
																							<span class="price-new">$34.00</span>
																							<span class="price-old">$1,000.00</span>
																						</div>
																						<div class="price-sale price-right">
																							<span class="discount 123">
																							-97%
																							<strong>OFF</strong>
																							</span>
																						</div>
																					</div>
																				</div>
																				<div class="button-group">
																					<div class="button-inner so-quickview">
																						<a class="lt-image hidden"
																							href="product.html" target="_self"
																							title="Bazem Carlo again is there anyone who loves oreos">
																						</a>
																						<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe"><i class="fa fa-search"></i></a>
																						<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
																						<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
																						<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('30');"> <span class="hidden">Add to cart</span></button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="ltabs-item ">
																	<div class="item-inner product-thumb transition product-layout">
																		<div class="product-item-container">
																			<div class="left-block">
																				<div class="image product-image-container ">
																					<a class="lt-image"
																						href="product.html" target="_self"
																						title="Bazem Carlo again is there anyone who loves oreos">
																					<img src="image/catalog/demo/product/book/1-370x370.jpg" alt="Bazem Carlo again is there anyone who loves oreos">
																					</a>
																				</div>
																				<div class="box-label">
																					<span class="label-product label-sale">Sale</span>
																				</div>
																			</div>
																			<div class="right-block">
																				<div class="caption">
																					<h4>
																						<a href="#"
																							title="Bazem Carlo again is there anyone who loves oreos" target="_self">
																						Bazem Carlo again is there anyone who loves oreos
																						</a>
																					</h4>
																					<div class="rating">
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																					</div>
																					<div class="total-price clearfix">
																						<div class="price price-left">
																							<span class="price-new">$40.00</span>
																							<span class="price-old">$100.00</span>
																						</div>
																						<div class="price-sale price-right">
																							<span class="discount 123">
																							-60%
																							<strong>OFF</strong>
																							</span>
																						</div>
																					</div>
																				</div>
																				<div class="button-group">
																					<div class="button-inner so-quickview">
																						<a class="lt-image hidden"
																							href="#" target="_self"
																							title="Bazem Carlo again is there anyone who loves oreos">
																						</a>
																						<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe"><i class="fa fa-search"></i></a>
																						<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
																						<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
																						<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('30');"> <span class="hidden">Add to cart</span></button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="ltabs-item ">
																	<div class="item-inner product-thumb transition product-layout">
																		<div class="product-item-container">
																			<div class="left-block">
																				<div class="image product-image-container ">
																					<a class="lt-image"
																						href="product.html" target="_self"
																						title="Bazem Carlo again is there anyone who loves oreos">
																					<img src="image/catalog/demo/product/book/2-370x370.jpg" alt="Bazem Carlo again is there anyone who loves oreos">
																					</a>
																				</div>
																				<div class="box-label">
																					<span class="label-product label-sale">Sale</span>
																				</div>
																			</div>
																			<div class="right-block">
																				<div class="caption">
																					<h4>
																						<a href="#"
																							title="Bazem Carlo again is there anyone who loves oreos" target="_self">
																						Bazem Carlo again is there anyone who loves oreos
																						</a>
																					</h4>
																					<div class="rating">
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																					</div>
																					<div class="total-price clearfix">
																						<div class="price price-left">
																							<span class="price-new">$45.00</span>
																							<span class="price-old">$50.00</span>
																						</div>
																						<div class="price-sale price-right">
																							<span class="discount 123">
																							-10%
																							<strong>OFF</strong>
																							</span>
																						</div>
																					</div>
																				</div>
																				<div class="button-group">
																					<div class="button-inner so-quickview">
																						<a class="lt-image hidden"
																							href="#" target="_self"
																							title="Bazem Carlo again is there anyone who loves oreos">
																						</a>
																						<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe"><i class="fa fa-search"></i></a>
																						<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
																						<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
																						<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('30');"> <span class="hidden">Add to cart</span></button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="ltabs-item ">
																	<div class="item-inner product-thumb transition product-layout">
																		<div class="product-item-container">
																			<div class="left-block">
																				<div class="image product-image-container ">
																					<a class="lt-image"
																						href="product.html" target="_self"
																						title="Bazem Carlo again is there anyone who loves oreos">
																					<img src="image/catalog/demo/product/book/3-370x370.jpg" alt="Bazem Carlo again is there anyone who loves oreos">
																					</a>
																					<div class="text-location"><span>test 2</span></div>
																				</div>
																				<div class="box-label">
																					<span class="label-product label-sale">Sale</span>
																				</div>
																			</div>
																			<div class="right-block">
																				<div class="caption">
																					<h4>
																						<a href="product.html"
																							title="Bazem Carlo again is there anyone who loves oreos" target="_self">
																						Bazem Carlo again is there anyone who loves oreos
																						</a>
																					</h4>
																					<div class="rating">
																						<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																					</div>
																					<div class="total-price clearfix">
																						<div class="price price-left">
																							<span class="price-new">$80.00</span>
																							<span class="price-old">$100.00</span>
																						</div>
																						<div class="price-sale price-right">
																							<span class="discount 123">
																							-20%
																							<strong>OFF</strong>
																							</span>
																						</div>
																					</div>
																				</div>
																				<div class="button-group">
																					<div class="button-inner so-quickview">
																						<a class="lt-image hidden"
																							href="#" target="_self"
																							title="Bazem Carlo again is there anyone who loves oreos">
																						</a>
																						<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe"><i class="fa fa-search"></i></a>
																						<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
																						<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('48');"><i class="fa fa-exchange"></i></button>
																						<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('30');"> <span class="hidden">Add to cart</span></button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>

								</div>
							</div>
							<div class="ltabs-items items-category-4 grid" data-total="6">
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
						<h2 class="modtitle">Spa &amp; Massage</h2>
					</div>
					<div class="modcontent">
						<div id="so_listing_tabs_1" class="so-listing-tabs first-load">
						<div class="ltabs-wrap">
							<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="3" data-xs="2" data-margin="0">
							<!--Begin Tabs-->
							<div class="ltabs-tabs-wrap">
								<span class="ltabs-tab-selected"></span>
								<span class="ltabs-tab-arrow">▼</span>
								<div class="item-sub-cat">
								<ul class="ltabs-tabs cf">
									<li class="ltabs-tab tab-sel" data-category-id="1" data-active-content=".items-category-1"> <span class="ltabs-tab-label">Best Seller</span> </li>
									<li class="ltabs-tab " data-category-id="2" data-active-content=".items-category-2"> <span class="ltabs-tab-label">New Arrivals</span> </li>
									<li class="ltabs-tab " data-category-id="3" data-active-content=".items-category-3"> <span class="ltabs-tab-label">Most Rating</span> </li>
								</ul>
								</div>
							</div>
							<!-- End Tabs-->
							</div>
							<div class="wap-listing-tabs ltabs-items-container products-list grid">
							<!--Begin Items-->
							<div class="ltabs-items ltabs-items-selected items-category-1" data-total="16">
								<div class="ltabs-items-inner ltabs-slider">
								<div class="ltabs-item">
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
											<div class="left-block">
											<div class="image product-image-container ">
												<a class="lt-image" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
												<img src="image/catalog/demo/product/spa/1-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
												</a>
											</div>
											<div class="box-label"><span class="label-product label-sale">Sale</span></div>
											</div>
											<div class="right-block">
											<div class="caption">
												<h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
												<div class="total-price clearfix">
												<div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
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
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
												<i class="fa fa-exchange"></i>
												</button>
												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
												<span class="hidden">Add to cart</span>
												</button>
												</div>
											</div>
											</div>
										</div>
									</div>
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
											<div class="left-block">
											<div class="image product-image-container ">
												<a class="lt-image"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
												<img src="image/catalog/demo/product/spa/5-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
												</a>
											</div>
											<div class="box-label"><span class="label-product label-sale">Sale</span></div>
											</div>
											<div class="right-block">
											<div class="caption">
												<h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
												<div class="total-price clearfix">
												<div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
												<div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
												</div>
											</div>
											<div class="button-group">
												<div class="button-inner so-quickview">
												<a class="lt-image hidden"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
												<i class="fa fa-search"></i>
												</a>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
												<i class="fa fa-heart"></i>
												</button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
												<i class="fa fa-exchange"></i>
												</button>
												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
												<span class="hidden">Add to cart</span>
												</button>
												</div>
											</div>
											</div>
										</div>
									</div>
								</div>
								<div class="ltabs-item">
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
											<div class="left-block">
											<div class="image product-image-container ">
												<a class="lt-image" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
												<img src="image/catalog/demo/product/spa/2-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
												</a>
											</div>
											<div class="box-label"><span class="label-product label-sale">Sale</span></div>
											</div>
											<div class="right-block">
											<div class="caption">
												<h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
												<div class="total-price clearfix">
												<div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
												<div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
												</div>
											</div>
											<div class="button-group">
												<div class="button-inner so-quickview">
												<a class="lt-image hidden"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
												<i class="fa fa-search"></i>
												</a>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
												<i class="fa fa-heart"></i>
												</button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
												<i class="fa fa-exchange"></i>
												</button>
												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
												<span class="hidden">Add to cart</span>
												</button>
												</div>
											</div>
											</div>
										</div>
									</div>
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
											<div class="left-block">
											<div class="image product-image-container ">
												<a class="lt-image"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
												<img src="image/catalog/demo/product/spa/6-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
												</a>
											</div>
											<div class="box-label"><span class="label-product label-sale">Sale</span></div>
											</div>
											<div class="right-block">
											<div class="caption">
												<h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
												<div class="total-price clearfix">
												<div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
												<div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
												</div>
											</div>
											<div class="button-group">
												<div class="button-inner so-quickview">
												<a class="lt-image hidden"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
												<i class="fa fa-search"></i>
												</a>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
												<i class="fa fa-heart"></i>
												</button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
												<i class="fa fa-exchange"></i>
												</button>
												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
												<span class="hidden">Add to cart</span>
												</button>
												</div>
											</div>
											</div>
										</div>
									</div>
								</div>
								<div class="ltabs-item">
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
											<div class="left-block">
											<div class="image product-image-container ">
												<a class="lt-image"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
												<img src="image/catalog/demo/product/spa/3-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
												</a>
											</div>
											<div class="box-label"><span class="label-product label-sale">Sale</span></div>
											</div>
											<div class="right-block">
											<div class="caption">
												<h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
												<div class="total-price clearfix">
												<div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
												<div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
												</div>
											</div>
											<div class="button-group">
												<div class="button-inner so-quickview">
												<a class="lt-image hidden"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
												<i class="fa fa-search"></i>
												</a>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
												<i class="fa fa-heart"></i>
												</button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
												<i class="fa fa-exchange"></i>
												</button>
												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
												<span class="hidden">Add to cart</span>
												</button>
												</div>
											</div>
											</div>
										</div>
									</div>
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
											<div class="left-block">
											<div class="image product-image-container ">
												<a class="lt-image"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
												<img src="image/catalog/demo/product/spa/7-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
												</a>
											</div>
											<div class="box-label"><span class="label-product label-sale">Sale</span></div>
											</div>
											<div class="right-block">
											<div class="caption">
												<h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
												<div class="total-price clearfix">
												<div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
												<div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
												</div>
											</div>
											<div class="button-group">
												<div class="button-inner so-quickview">
												<a class="lt-image hidden" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
												<i class="fa fa-search"></i>
												</a>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
												<i class="fa fa-heart"></i>
												</button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
												<i class="fa fa-exchange"></i>
												</button>
												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
												<span class="hidden">Add to cart</span>
												</button>
												</div>
											</div>
											</div>
										</div>
									</div>
								</div>
								<div class="ltabs-item">
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
											<div class="left-block">
											<div class="image product-image-container ">
												<a class="lt-image"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
												<img src="image/catalog/demo/product/spa/4-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
												</a>
											</div>
											<div class="box-label"><span class="label-product label-sale">Sale</span></div>
											</div>
											<div class="right-block">
											<div class="caption">
												<h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
												<div class="total-price clearfix">
												<div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
												<div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
												</div>
											</div>
											<div class="button-group">
												<div class="button-inner so-quickview">
												<a class="lt-image hidden"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
												<i class="fa fa-search"></i>
												</a>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
												<i class="fa fa-heart"></i>
												</button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
												<i class="fa fa-exchange"></i>
												</button>
												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
												<span class="hidden">Add to cart</span>
												</button>
												</div>
											</div>
											</div>
										</div>
									</div>
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
											<div class="left-block">
											<div class="image product-image-container ">
												<a class="lt-image" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
												<img src="image/catalog/demo/product/spa/11-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
												</a>
											</div>
											<div class="box-label"><span class="label-product label-sale">Sale</span></div>
											</div>
											<div class="right-block">
											<div class="caption">
												<h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
												<div class="total-price clearfix">
												<div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
												<div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
												</div>
											</div>
											<div class="button-group">
												<div class="button-inner so-quickview">
												<a class="lt-image hidden"  href="product.html" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
												<i class="fa fa-search"></i>
												</a>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
												<i class="fa fa-heart"></i>
												</button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
												<i class="fa fa-exchange"></i>
												</button>
												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
												<span class="hidden">Add to cart</span>
												</button>
												</div>
											</div>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
							<div class="ltabs-items items-category-2 grid" data-total="16">
								<div class="ltabs-loading"></div>
							</div>
							<div class="ltabs-items  items-category-3 grid" data-total="16">
								<div class="ltabs-loading"></div>
							</div>
							</div>
						</div>
						</div>
					</div>
					</div>
					<div class="home1-banner-2 clearfix">
										<div class="item-1 col-lg-6 col-md-6 col-sm-6 banners">
											<div>
												<a title="Static Image" href="#"><img src="image/catalog/demo/banners/home1/bn-3.jpg" alt="Static Image"></a>
											</div>
										</div>
										<div class="item-2 col-lg-6 col-md-6 col-sm-6 banners">
											<div>
												<a title="Static Image" href="#"><img src="image/catalog/demo/banners/home1/bn-4.jpg" alt="Static Image"></a>
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
						<h2 class="modtitle">Fashion &amp; Accessories</h2>
					</div>
					<div class="modcontent">
						<div id="so_listing_tabs_2" class="so-listing-tabs first-load">
						<div class="ltabs-wrap">
							<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="3" data-md="3" data-sm="3" data-xs="2" data-margin="0">
							<div class="ltabs-tabs-wrap">
								<span class="ltabs-tab-selected">Best sellers</span>
								<span class="ltabs-tab-arrow">▼</span>
								<div class="item-sub-cat">
								<ul class="ltabs-tabs cf">
									<li class="ltabs-tab tab-sel" data-category-id="4" data-active-content=".items-category-4">
									<span class="ltabs-tab-label">Best sellers</span>
									</li>
									<li class="ltabs-tab" data-category-id="5" data-active-content=".items-category-5">
									<span class="ltabs-tab-label">New Arrivals</span>
									</li>
									<li class="ltabs-tab" data-category-id="6" data-active-content=".items-category-6">
									<span class="ltabs-tab-label">Most Rating</span>
									</li>
								</ul>
								</div>
							</div>
							</div>
							<div class="wap-listing-tabs products-list grid">
							<div class="item-cat-image banners">
								<div>
								<a href="product.html" title="" target="_self">
								<img class="categories-loadimage" title="" alt="" src="image/catalog/demo/banners/home4/img1-fashion-270x870.jpg">
								</a>
								</div>
							</div>
							<div class="ltabs-items-container">
								<div class="ltabs-items ltabs-items-selected items-category-4" data-total="16">
								<div class="ltabs-items-inner ltabs-slider ">
									<div class="ltabs-item">
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
										<div class="left-block">
											<div class="image product-image-container ">
											<a class="lt-image"  href="#" target="_self" title="Amazing Yoga Sport Poses Most People Wouldn't Dream ">
											<img src="image/catalog/demo/product/fashion/10-270x270.jpg" alt="Amazing Yoga Sport Poses Most People Wouldn't Dream ">
											</a>
											</div>
											<div class="box-label">
											<span class="label-product label-sale">Sale</span>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
											<h4>
												<a href="product.html" title="Amazing Yoga Sport Poses Most People Wouldn't Dream " target="_self">Amazing Yoga Sport Poses Most People Wouldn't Dre..</a>
											</h4>
											<div class="total-price clearfix">
												<div class="price price-left">
												<span class="price-new">$108.80</span>
												<span class="price-old">$122.00</span>
												</div>
												<div class="price-sale price-right">
												<span class="discount 123">-11%<strong>OFF</strong></span>
												</div>
											</div>
											</div>
											<div class="button-group">
											<div class="button-inner so-quickview">
												<a class="lt-image hidden" href="#" target="_self" title="Amazing Yoga Sport Poses Most People Wouldn't Dream "></a>
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
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
										<div class="left-block">
											<div class="image product-image-container ">
											<a class="lt-image" href="#" target="_self" title="Est Officia Including Shoes Beautiful Pieces Canaz">
											<img src="image/catalog/demo/product/fashion/15-270x270.png" alt="Est Officia Including Shoes Beautiful Pieces Canaz">
											</a>
											</div>
											<div class="box-label">
											<span class="label-product label-sale">Sale</span>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
											<h4>
												<a href="product.html" title="Est Officia Including Shoes Beautiful Pieces Canaz" target="_self">Est Officia Including Shoes Beautiful Pieces Canaz</a>
											</h4>
											<div class="total-price clearfix">
												<div class="price price-left">
												<span class="price-new">$62.00</span>
												<span class="price-old">$337.99</span>
												</div>
												<div class="price-sale price-right">
												<span class="discount 123">-82%<strong>OFF</strong></span>
												</div>
											</div>
											</div>
											<div class="button-group">
											<div class="button-inner so-quickview">
												<a class="lt-image hidden" href="#" target="_self" title="Est Officia Including Shoes Beautiful Pieces Canaz"></a>
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
									<div class="ltabs-item">
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
										<div class="left-block">
											<div class="image product-image-container ">
											<a class="lt-image" href="#" target="_self" title="Girly Summer Outfit Ideas To Upgrade Your Wardrobe">
											<img src="image/catalog/demo/product/fashion/2-270x270.jpg" alt="Girly Summer Outfit Ideas To Upgrade Your Wardrobe">
											</a>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
											<h4>
												<a href="product.html" title="Girly Summer Outfit Ideas To Upgrade Your Wardrobe" target="_self">Girly Summer Outfit Ideas To Upgrade Your Wardrob..</a>
											</h4>
											<div class="total-price clearfix">
												<div class="price price-left">
												<span class="price-new">$128.80</span>
												<span class="price-old"></span>
												</div>
											</div>
											</div>
											<div class="button-group">
											<div class="button-inner so-quickview">
												<a class="lt-image hidden" href="#" target="_self" title="Girly Summer Outfit Ideas To Upgrade Your Wardrobe"></a>
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
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
										<div class="left-block">
											<div class="image product-image-container ">
											<a class="lt-image" href="#" target="_self" title="Cras idrisusiopsa quo voluptas nulla pariatur shoprer">
											<img src="image/catalog/demo/product/fashion/4-270x270.jpg" alt="Cras idrisusiopsa quo voluptas nulla pariatur shoprer">
											</a>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
											<h4>
												<a href="product.html" title="Cras idrisusiopsa quo voluptas nulla pariatur shoprer" target="_self">Cras idrisusiopsa quo voluptas nulla par...</a>
											</h4>
											<div class="total-price clearfix">
												<div class="price price-left">
												<span class="price-new">$242.00</span>
												<span class="price-old"></span>
												</div>
											</div>
											</div>
											<div class="button-group">
											<div class="button-inner so-quickview">
												<a class="lt-image hidden" href="#" target="_self" title="Cras idrisusiopsa quo voluptas nulla pariatur shoprer"></a>
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
									<div class="ltabs-item">
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
										<div class="left-block">
											<div class="image product-image-container ">
											<a class="lt-image" href="#" target="_self" title="Invisible Hidden Spy Earphone Micro Wireless">
											<img src="image/catalog/demo/product/fashion/16-270x270.png" alt="Invisible Hidden Spy Earphone Micro Wireless">
											</a>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
											<h4>
												<a href="product.html" title="Invisible Hidden Spy Earphone Micro Wireless" target="_self">Invisible Hidden Spy Earphone Micro Wireless</a>
											</h4>
											<div class="total-price clearfix">
												<div class="price price-left">
												<span class="price-new">$122.00</span>
												<span class="price-old"></span>
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
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
										<div class="left-block">
											<div class="image product-image-container ">
											<a class="lt-image" href="#" target="_self" title="Est Officia Including Shoes Beautiful Pieces Canaz">
											<img src="image/catalog/demo/product/fashion/24-270x270.png" alt="Est Officia Including Shoes Beautiful Pieces Canaz">
											</a>
											</div>
											<div class="box-label">
											<span class="label-product label-sale">Sale</span>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
											<h4>
												<a href="product.html" title="Est Officia Including Shoes Beautiful Pieces Canaz" target="_self">Est Officia Including Shoes Beautiful Pieces Canaz</a>
											</h4>
											<div class="total-price clearfix">
												<div class="price price-left">
												<span class="price-new">$98.00</span>
												<span class="price-old">$122.00</span>
												</div>
												<div class="price-sale price-right">
												<span class="discount 123">-20%<strong>OFF</strong></span>
												</div>
											</div>
											</div>
											<div class="button-group">
											<div class="button-inner so-quickview">
												<a class="lt-image hidden" href="#" target="_self" title="Est Officia Including Shoes Beautiful Pieces Canaz"></a>
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
						<h2 class="modtitle">Travel & Vacation</h2>
					</div>
					<div class="modcontent">
						<div id="so_listing_tabs_3" class="so-listing-tabs first-load">
						<div class="ltabs-wrap">
							<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="3" data-md="3" data-sm="3" data-xs="2" data-margin="0">
							<div class="ltabs-tabs-wrap">
								<span class="ltabs-tab-selected">Best sellers</span>
								<span class="ltabs-tab-arrow">▼</span>
								<div class="item-sub-cat">
								<ul class="ltabs-tabs cf">
									<li class="ltabs-tab tab-sel" data-category-id="4" data-active-content=".items-category-4">
									<span class="ltabs-tab-label">Best sellers</span>
									</li>
									<li class="ltabs-tab" data-category-id="7" data-active-content=".items-category-7">
									<span class="ltabs-tab-label">New Arrivals</span>
									</li>
									<li class="ltabs-tab" data-category-id="8" data-active-content=".items-category-8">
									<span class="ltabs-tab-label">Most Rating</span>
									</li>
								</ul>
								</div>
							</div>
							</div>
							<div class="wap-listing-tabs products-list grid">
							<div class="item-cat-image banners">
								<div>
								<a href="product.html" title="" target="_self">
								<img class="categories-loadimage" title="" alt="" src="image/catalog/demo/banners/home4/img1-travel-270x870.jpg">
								</a>
								</div>
							</div>
							<div class="ltabs-items-container">
								<div class="ltabs-items ltabs-items-selected items-category-4" data-total="16">
									<div class="ltabs-items-inner ltabs-slider">
										<div class="ltabs-item">
											<div class="item-inner product-layout transition product-grid">
												<div class="product-item-container">
												<div class="left-block">
													<div class="image product-image-container ">
													<a class="lt-image" href="#" target="_self" title="Bougainvilleas On Lombard Street, San Francisco, Tokyo">
													<img src="image/catalog/demo/product/travel/10-270x270.jpg" alt="Bougainvilleas On Lombard Street, San Francisco, Tokyo">
													</a>
													</div>
													<div class="box-label">
													<span class="label-product label-sale">Sale</span>
													</div>
												</div>
												<div class="right-block">
													<div class="caption">
													<h4>
														<a href="product.html" title="Bougainvilleas On Lombard Street, San Francisco, Tokyo" target="_self">Bougainvilleas On Lombard Street, San Francisco, Tokyo</a>
													</h4>
													<div class="total-price clearfix">
														<div class="price price-left">
														<span class="price-new">$108.80</span>
														<span class="price-old">$122.00</span>
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
											<div class="item-inner product-layout transition product-grid">
												<div class="product-item-container">
												<div class="left-block">
													<div class="image product-image-container ">
													<a class="lt-image"  href="#" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan ">
													<img src="image/catalog/demo/product/travel/8-270x270.jpg" alt="Philipin Tour Group Manila/ Pattaya / Mactan ">
													</a>
													</div>
													<div class="box-label">
													<span class="label-product label-sale">Sale</span>
													</div>
												</div>
												<div class="right-block">
													<div class="caption">
													<h4>
														<a href="product.html" title="Philipin Tour Group Manila/ Pattaya / Mactan " target="_self">Philipin Tour Group Manila/ Pattaya / Mactan </a>
													</h4>
													<div class="total-price clearfix">
														<div class="price price-left">
														<span class="price-new">$74.00</span>
														<span class="price-old">$122.00</span>
														</div>
														<div class="price-sale price-right">
														<span class="discount 123">-40%<strong>OFF</strong></span>
														</div>
													</div>
													</div>
													<div class="button-group">
													<div class="button-inner so-quickview">
														<a class="lt-image hidden"  href="#" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan "></a>
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
										<div class="ltabs-item">
											<div class="item-inner product-layout transition product-grid">
												<div class="product-item-container">
												<div class="left-block">
													<div class="image product-image-container ">
													<a class="lt-image"  href="#" target="_self" title="Burger King Japan debuts Monster Baby, Double, Canada">
													<img src="image/catalog/demo/product/travel/1-270x270.jpg" alt="Burger King Japan debuts Monster Baby, Double, Canada">
													</a>
													</div>
												</div>
												<div class="right-block">
													<div class="caption">
													<h4>
														<a href="product.html" title="Burger King Japan debuts Monster Baby, Double, Canada" target="_self">Burger King Japan debuts Monster Baby, Double, Canada</a>
													</h4>
													<div class="total-price clearfix">
														<div class="price price-left">
														<span class="price-new">$1,202.00</span>
														</div>
													</div>
													</div>
													<div class="button-group">
													<div class="button-inner so-quickview">
														<a class="lt-image hidden"  href="#" target="_self" title="Burger King Japan debuts Monster Baby, Double, Canada"></a>
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
											<div class="item-inner product-layout transition product-grid">
												<div class="product-item-container">
												<div class="left-block">
													<div class="image product-image-container ">
													<a class="lt-image"  href="#" target="_self" title="Thailand Group Departure / Pattaya / Bangkok">
													<img src="image/catalog/demo/product/travel/15-270x270.jpg" alt="Thailand Group Departure / Pattaya / Bangkok">
													</a>
													</div>
												</div>
												<div class="right-block">
													<div class="caption">
													<h4>
														<a href="product.html" title="Thailand Group Departure / Pattaya / Bangkok" target="_self">Thailand Group Departure / Pattaya / Bangkok</a>
													</h4>
													<div class="total-price clearfix">
														<div class="price price-left">
														<span class="price-new">$122.00</span>
														</div>
													</div>
													</div>
													<div class="button-group">
													<div class="button-inner so-quickview">
														<a class="lt-image hidden"  href="#" target="_self" title="Thailand Group Departure / Pattaya / Bangkok"></a>
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
										<div class="ltabs-item">
											<div class="item-inner product-layout transition product-grid">
												<div class="product-item-container">
												<div class="left-block">
													<div class="image product-image-container ">
													<a class="lt-image"  href="#" target="_self" title="Chicago Tour Departure / Pattaya / Solimania...">
													<img src="image/catalog/demo/product/travel/5-270x270.jpg" alt="Chicago Tour Departure / Pattaya / Solimania/ Tokyo/ Canada">
													</a>
													</div>
													<div class="box-label">
													<span class="label-product label-sale">Sale</span>
													</div>
												</div>
												<div class="right-block">
													<div class="caption">
													<h4>
														<a href="product.html" title="Chicago Tour Departure / Pattaya / Solimania/ Tokyo/ Canada" target="_self">Chicago Tour Departure / Pattaya / Solimania...</a>
													</h4>
													<div class="total-price clearfix">
														<div class="price price-left">
														<span class="price-new">$108.80</span>
														<span class="price-old">$122.00</span>
														</div>
														<div class="price-sale price-right">
														<span class="discount 123">-11%<strong>OFF</strong></span>
														</div>
													</div>
													</div>
													<div class="button-group">
													<div class="button-inner so-quickview">
														<a class="lt-image hidden"  href="#" target="_self" title="Chicago Tour Departure / Pattaya / Solimania/ Tokyo/ Canada"></a>
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
											<div class="item-inner product-layout transition product-grid">
												<div class="product-item-container">
												<div class="left-block">
													<div class="image product-image-container ">
													<a class="lt-image"  href="#" target="_self" title="Tokyo Temple on Elevated Area Under Blue Sky and White">
													<img src="image/catalog/demo/product/travel/13-270x270.jpg" alt="Tokyo Temple on Elevated Area Under Blue Sky and White">
													</a>
													</div>
												</div>
												<div class="right-block">
													<div class="caption">
													<h4>
														<a href="product.html" title="Tokyo Temple on Elevated Area Under Blue Sky and White" target="_self">Tokyo Temple on Elevated Area Under Blue Sky and White</a>
													</h4>
													<div class="total-price clearfix">
														<div class="price price-left">
														<span class="price-new">$122.00</span>
														</div>
													</div>
													</div>
													<div class="button-group">
													<div class="button-inner so-quickview">
														<a class="lt-image hidden"  href="#" target="_self" title="Tokyo Temple on Elevated Area Under Blue Sky and White"></a>
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
			<!-- Digital & Electronics -->
			<section id="box-link5" class="section-style">
			<div class="container page-builder-ltr">
				<div class="row row-style row_a5">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_iunl  block block_8 title_neo5">
					<div class="module so-listing-tabs-ltr home1-lt-style4 default-nav clearfix img-float home-lt1">
					<div class="head-title font-ct">
						<h2 class="modtitle">
						<span>Digital & Electronics</span>
						</h2>
					</div>
					<div class="modcontent">
						<div id="so_listing_tabs_4" class="so-listing-tabs first-load">
						<div class="ltabs-wrap">
							<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="3" data-xs="2" data-margin="0">
							<!--Begin Tabs-->
							<div class="ltabs-tabs-wrap">
								<span class="ltabs-tab-selected"></span>
								<span class="ltabs-tab-arrow">▼</span>
								<div class="item-sub-cat">
								<ul class="ltabs-tabs cf">
									<li class="ltabs-tab tab-sel" data-category-id="1" data-active-content=".items-category-1"> <span class="ltabs-tab-label">Best Seller</span> </li>
									<li class="ltabs-tab " data-category-id="9" data-active-content=".items-category-9"> <span class="ltabs-tab-label">New Arrivals</span> </li>
									<li class="ltabs-tab " data-category-id="10" data-active-content=".items-category-10"> <span class="ltabs-tab-label">Most Rating</span> </li>
								</ul>
								</div>
							</div>
							<!-- End Tabs-->
							</div>
							<div class="wap-listing-tabs products-list grid">
							<div class="ltabs-items-container ">
								<!--Begin Items-->
								<div class="ltabs-items ltabs-items-selected items-category-1" data-total="16">
								<div class="ltabs-items-inner ltabs-slider ">
									<div class="ltabs-item">
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
										<div class="left-block">
											<div class="image product-image-container ">
											<a class="lt-image" href="#" target="_self" title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
											<img src="image/catalog/demo/product/electronic/1-270x270.jpg" alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
											</a>
											</div>
											<div class="box-label"><span class="label-product label-sale">Sale</span></div>
										</div>
										<div class="right-block">
											<div class="caption">
											<h4><a href="product.html" title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus" target="_self"> Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus</a></h4>
											<div class="total-price clearfix">
												<div class="price price-left"><span class="price-new">$98.00</span><span class="price-old">$122.00</span></div>
												<div class="price-sale price-right"><span class="discount 123">-20%<strong>OFF</strong></span></div>
											</div>
											</div>
											<div class="button-group">
											<div class="button-inner so-quickview">
												<a class="lt-image hidden" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
												<i class="fa fa-search"></i>
												</a>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
												<i class="fa fa-heart"></i>
												</button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
												<i class="fa fa-exchange"></i>
												</button>
												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
												<span class="hidden">Add to cart</span>
												</button>
											</div>
											</div>
										</div>
										</div>
									</div>
									</div>
									<div class="ltabs-item">
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
										<div class="left-block">
											<div class="image product-image-container ">
											<a class="lt-image" href="#" target="_self" title="Compact (External Battery Power Bank) with Premium">
											<img src="image/catalog/demo/product/electronic/12-270x270.jpg" alt="Compact (External Battery Power Bank) with Premium">
											</a>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
											<h4><a href="product.html" title="Compact (External Battery Power Bank) with Premium" target="_self">Compact (External Battery Power Bank) with Premium</a></h4>
											<div class="total-price clearfix">
												<div class="price price-left"><span class="price-new">$122.00</span><span class="price-old"></span></div>
											</div>
											</div>
											<div class="button-group">
											<div class="button-inner so-quickview">
												<a class="lt-image hidden" href="#" target="_self" title="Compact (External Battery Power Bank) with Premium"></a>
												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
												<i class="fa fa-search"></i>
												</a>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
												<i class="fa fa-heart"></i>
												</button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
												<i class="fa fa-exchange"></i>
												</button>
												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
												<span class="hidden">Add to cart</span>
												</button>
											</div>
											</div>
										</div>
										</div>
									</div>
									</div>
									<div class="ltabs-item">
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
										<div class="left-block">
											<div class="image product-image-container ">
											<a class="lt-image" href="#" target="_self" title="Compact Portable Charger (External Battery)">
											<img src="image/catalog/demo/product/electronic/13-270x270.jpg" alt="Compact Portable Charger (External Battery)">
											</a>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
											<h4><a href="product.html" title="Compact Portable Charger (External Battery)" target="_self">Compact Portable Charger (External Battery)</a></h4>
											<div class="total-price clearfix">
												<div class="price price-left"><span class="price-new">$98.00</span><span class="price-old"></span></div>
											</div>
											</div>
											<div class="button-group">
											<div class="button-inner so-quickview">
												<a class="lt-image hidden" href="#" target="_self" title="Compact Portable Charger (External Battery)"></a>
												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
												<i class="fa fa-search"></i>
												</a>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
												<i class="fa fa-heart"></i>
												</button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
												<i class="fa fa-exchange"></i>
												</button>
												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
												<span class="hidden">Add to cart</span>
												</button>
											</div>
											</div>
										</div>
										</div>
									</div>
									</div>
									<div class="ltabs-item">
									<div class="item-inner product-layout transition product-grid">
										<div class="product-item-container">
										<div class="left-block">
											<div class="image product-image-container ">
											<a class="lt-image" href="#" target="_self" title="Compact Portable Charger (External Battery) T22">
											<img src="image/catalog/demo/product/electronic/21-270x270.jpg" alt="Compact Portable Charger (External Battery) T22">
											</a>
											</div>
											<div class="box-label"><span class="label-product label-sale">Sale</span></div>
										</div>
										<div class="right-block">
											<div class="caption">
											<h4><a href="product.html" title="Compact Portable Charger (External Battery) T22" target="_self">Compact Portable Charger (External Battery) T22</a></h4>
											<div class="total-price clearfix">
												<div class="price price-left"><span class="price-new">$98.00</span><span class="price-old">$122.00</span></div>
												<div class="price-sale price-right"><span class="discount 123">-20%<strong>OFF</strong></span></div>
											</div>
											</div>
											<div class="button-group">
											<div class="button-inner so-quickview">
												<a class="lt-image hidden" href="#" target="_self" title="Compact Portable Charger (External Battery) T22"></a>
												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
												<i class="fa fa-search"></i>
												</a>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
												<i class="fa fa-heart"></i>
												</button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
												<i class="fa fa-exchange"></i>
												</button>
												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
												<span class="hidden">Add to cart</span>
												</button>
											</div>
											</div>
										</div>
										</div>
									</div>
									</div>
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
									<a href="#"><img src="image/catalog/demo/banners/home4/banner1.jpg" alt="Image Client"></a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 banners">
									<div>
									<a href="#"><img src="image/catalog/demo/banners/home4/banner2.jpg" alt="Image Client"></a>
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
			<!--Extra-->
			<div class="container page-builder-ltr">
			<div class="row row-style row_a6">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col_siw1  block block_9">
				<div class="moduletable module so-extraslider-ltr home1-extra clearfix">
					<div class="head-title font-ct">
					<h2 class="modtitle">Sport &amp; Entertaiment</h2>
					</div>
					<div class="modcontent">
					<div id="so_extra_slider_sport" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
						<div class="extraslider-inner owl2-carousel owl2-theme owl2-loaded extra-animate">
						<div class="category-slider-inner products-list yt-content-slider-2" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
							<div class="item products-list grid">
							<div class="item-wrap product-layout style1 ">
								<div class="item-wrap-inner product-item-container">
								<div class="left-block">
									<div class="item-image">
									<div class="item-img-info product-image-container ">
										<a class="lt-image" href="#" target="_self" title="Men Collection Outfit Grid, Outfit and  Colored Sport ">
										<img src="image/catalog/demo/product/sport/9-120x120.jpg" alt="Men Collection Outfit Grid, Outfit and  Colored Sport ">
										</a>
									</div>
									</div>
									<div class="box-label">
									<span class="label-product label-sale">Sale</span>
									</div>
								</div>
								<div class="right-block">
									<div class="caption">
									<h4 class="item-title">
										<a href="product.html" target="_self" title="Men Collection Outfit Grid, Outfit and  Colored Sport ">
										Men Collection Outfit Grid, Outfit and  Colored Sport
										</a>
									</h4>
									<!-- Begin item-content -->
									<div class="item-content">
										<div class="total-price">
										<div class="price price-left">
											<span class="price product-price">
											$74.20
											</span>
											<span class="price-old">$122.00</span>
										</div>
										<div class="price-sale price-right">
											<span class="discount">-40%
											<strong>OFF</strong>
											</span>
										</div>
										</div>
									</div>
									<!-- End item-content -->
									</div>
									<!-- End item-info -->
								</div>
								</div>
								<div class="item-wrap-inner product-item-container">
								<div class="left-block">
									<div class="item-image">
									<div class="item-img-info product-image-container ">
										<a class="lt-image" href="#" target="_self" title="Xumstick teachings  uttempor the actual of the great">
										<img src="image/catalog/demo/product/sport/6-120x120.jpg" alt="Xumstick teachings  uttempor the actual of the great">
										</a>
									</div>
									</div>
									<div class="box-label">
									</div>
								</div>
								<div class="right-block">
									<div class="caption">
									<h4 class="item-title">
										<a href="product.html" target="_self" title="Xumstick teachings  uttempor the actual of the great">
										Xumstick teachings uttempor the actual of...
										</a>
									</h4>
									<!-- Begin item-content -->
									<div class="item-content">
										<div class="total-price">
										<div class="price price-left">
											<span class="price product-price">
											$98.00
											</span>
											<span class="price-old">$122.00</span>
										</div>
										<div class="price-sale price-right">
											<span class="discount">-20%
											<strong>OFF</strong>
											</span>
										</div>
										</div>
									</div>
									<!-- End item-content -->
									</div>
									<!-- End item-info -->
								</div>
								</div>
								<div class="item-wrap-inner product-item-container">
								<div class="left-block">
									<div class="item-image">
									<div class="item-img-info product-image-container ">
										<a class="lt-image" href="#" target="_self" title="Amy Byer Big Girls' Colorblock  Trapeze Dress orilamra">
										<img src="image/catalog/demo/product/sport/1-120x120.jpg" alt="Amy Byer Big Girls' Colorblock  Trapeze Dress orilamra">
										</a>
									</div>
									</div>
									<div class="box-label">
									</div>
								</div>
								<div class="right-block">
									<div class="caption">
									<h4 class="item-title">
										<a href="product.html" target="_self" title="Amy Byer Big Girls' Colorblock  Trapeze Dress orilamra">
										Amy Byer Big Girls' Colorblock Trapeze Dre...
										</a>
									</h4>
									<!-- Begin item-content -->
									<div class="item-content">
										<div class="total-price">
										<div class="price price-left">
											<span class="price product-price">
											$122.00
											</span>
										</div>
										<div class="price-sale price-right">
										</div>
										</div>
									</div>
									<!-- End item-content -->
									</div>
									<!-- End item-info -->
								</div>
								</div>
								<!-- End item-wrap-inner -->
							</div>
							</div>
							<div class="item products-list grid">
							<div class="item-wrap product-layout style1 ">
								<div class="item-wrap-inner product-item-container">
								<div class="left-block">
									<div class="item-image">
									<div class="item-img-info product-image-container ">
										<a class="lt-image" href="#" target="_self" title="Drumstick uttempor the actual teachings of the great">
										<img src="image/catalog/demo/product/spa/12-120x120.jpg" alt="Drumstick uttempor the actual teachings of the great">
										</a>
									</div>
									</div>
									<div class="box-label">
									</div>
								</div>
								<div class="right-block">
									<div class="caption">
									<h4 class="item-title">
										<a href="product.html" target="_self" title="Drumstick uttempor the actual teachings of the great">
										Drumstick uttempor the actual teachings of the great
										</a>
									</h4>
									<!-- Begin item-content -->
									<div class="item-content">
										<div class="total-price">
										<div class="price price-left">
											<span class="price product-price">
											$123.20
											</span>
										</div>
										<div class="price-sale price-right">
										</div>
										</div>
									</div>
									<!-- End item-content -->
									</div>
									<!-- End item-info -->
								</div>
								</div>
								<div class="item-wrap-inner product-item-container">
								<div class="left-block">
									<div class="item-image">
									<div class="item-img-info product-image-container ">
										<a class="lt-image" href="#" target="_self" title="Drumstick uttempor the actual teachings of the great">
										<img src="image/catalog/demo/product/sport/1-120x120.jpg" alt="Drumstick uttempor the actual teachings of the great">
										</a>
									</div>
									</div>
									<div class="box-label">
									</div>
								</div>
								<div class="right-block">
									<div class="caption">
									<h4 class="item-title">
										<a href="product.html" target="_self" title="Drumstick uttempor the actual teachings of the great">
										Drumstick uttempor the actual teachings of the great
										</a>
									</h4>
									<!-- Begin item-content -->
									<div class="item-content">
										<div class="total-price">
										<div class="price price-left">
											<span class="price product-price">
											$122.00
											</span>
										</div>
										<div class="price-sale price-right">
										</div>
										</div>
									</div>
									<!-- End item-content -->
									</div>
									<!-- End item-info -->
								</div>
								</div>
								<div class="item-wrap-inner product-item-container">
								<div class="left-block">
									<div class="item-image">
									<div class="item-img-info product-image-container ">
										<a class="lt-image" href="#" target="_self" title="Amy Byer Big Girls' Colorblock  Trapeze orilamra ">
										<img src="image/catalog/demo/product/sport/4-120x120.jpg" alt="Amy Byer Big Girls' Colorblock  Trapeze orilamra ">
										</a>
									</div>
									</div>
									<div class="box-label">
									<span class="label-product label-sale">Sale</span>
									</div>
								</div>
								<div class="right-block">
									<div class="caption">
									<h4 class="item-title">
										<a href="product.html" target="_self" title="Amy Byer Big Girls' Colorblock  Trapeze orilamra">
										Vitaeelit pilama loves or pursues or desires to pain
										</a>
									</h4>
									<!-- Begin item-content -->
									<div class="item-content">
										<div class="total-price">
										<div class="price price-left">
											<span class="price product-price">
											$1,990.00
											</span>
											<span class="price-old">$2,000.00</span>
										</div>
										<div class="price-sale price-right">
											<span class="discount">-1%
											<strong>OFF</strong>
											</span>
										</div>
										</div>
									</div>
									<!-- End item-content -->
									</div>
									<!-- End item-info -->
								</div>
								</div>
								<!-- End item-wrap-inner -->
							</div>
							</div>
						</div>
						</div>
					</div>
					</div>
				</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col_lhsd  block block_9">
				<div class="moduletable module so-extraslider-ltr home1-extra clearfix home1-extra-style2">
					<div class="head-title font-ct">
					<h2 class="modtitle">Food & Restaurant</h2>
					</div>
					<div class="modcontent">
					<div  id="so_extra_slider_food" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
						<div class="extraslider-inner owl2-carousel owl2-theme owl2-loaded extra-animate">
						<div class="category-slider-inner products-list yt-content-slider-2" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
							<div class="item products-list grid">
							<div class="item-wrap product-layout style1 ">
								<div class="item-wrap-inner product-item-container">
								<div class="left-block">
									<div class="item-image">
									<div class="item-img-info product-image-container ">
										<a class="lt-image"  href="#" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain">
										<img src="image/catalog/demo/product/food/2-120x120.jpg" alt="Vitaeelit pilama loves or pursues or desires to pain">
										</a>
									</div>
									</div>
									<div class="box-label">
									<span class="label-product label-sale">Sale</span>
									</div>
								</div>
								<div class="right-block">
									<div class="caption">
									<h4 class="item-title">
										<a href="product.html" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain ">
										Vitaeelit pilama loves or pursues or desires to pain
										</a>
									</h4>
									<!-- Begin item-content -->
									<div class="item-content">
										<div class="total-price">
										<div class="price price-left">
											<span class="price product-price">
											$123.20
											</span>
											<span class="price-old">$98.00</span>
										</div>
										<div class="price-sale price-right">
											<span class="discount">-13%
											<strong>OFF</strong>
											</span>
										</div>
										</div>
									</div>
									<!-- End item-content -->
									</div>
									<!-- End item-info -->
								</div>
								</div>
								<div class="item-wrap-inner product-item-container">
								<div class="left-block">
									<div class="item-image">
									<div class="item-img-info product-image-container ">
										<a class="lt-image"  href="#" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain">
										<img src="image/catalog/demo/product/food/8-120x120.jpg" alt="Vitaeelit pilama loves or pursues or desires to pain">
										</a>
									</div>
									</div>
									<div class="box-label">
									</div>
								</div>
								<div class="right-block">
									<div class="caption">
									<h4 class="item-title">
										<a href="product.html" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain ">
										Vitaeelit pilama loves or pursues or desires to pain
										</a>
									</h4>
									<!-- Begin item-content -->
									<div class="item-content">
										<div class="total-price">
										<div class="price price-left">
											<span class="price product-price">
											$123.20
											</span>
										</div>
										<div class="price-sale price-right">
										</div>
										</div>
									</div>
									<!-- End item-content -->
									</div>
									<!-- End item-info -->
								</div>
								</div>
								<div class="item-wrap-inner product-item-container">
								<div class="left-block">
									<div class="item-image">
									<div class="item-img-info product-image-container ">
										<a class="lt-image"  href="#" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain">
										<img src="image/catalog/demo/product/food/1-120x120.jpg" alt="Vitaeelit pilama loves or pursues or desires to pain">
										</a>
									</div>
									</div>
									<div class="box-label">
									</div>
								</div>
								<div class="right-block">
									<div class="caption">
									<h4 class="item-title">
										<a href="product.html" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain ">
										Vitaeelit pilama loves or pursues or desires to pain
										</a>
									</h4>
									<!-- Begin item-content -->
									<div class="item-content">
										<div class="total-price">
										<div class="price price-left">
											<span class="price product-price">
											$123.20
											</span>
										</div>
										<div class="price-sale price-right">
										</div>
										</div>
									</div>
									<!-- End item-content -->
									</div>
									<!-- End item-info -->
								</div>
								</div>
								<!-- End item-wrap-inner -->
							</div>
							</div>
							<div class="item products-list grid">
							<div class="item-wrap product-layout style1 ">
								<div class="item-wrap-inner product-item-container">
								<div class="left-block">
									<div class="item-image">
									<div class="item-img-info product-image-container ">
										<a class="lt-image"  href="#" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain">
										<img src="image/catalog/demo/product/food/9-120x120.jpg" alt="Vitaeelit pilama loves or pursues or desires to pain">
										</a>
									</div>
									</div>
									<div class="box-label">
									</div>
								</div>
								<div class="right-block">
									<div class="caption">
									<h4 class="item-title">
										<a href="product.html" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain ">
										Vitaeelit pilama loves or pursues or desires to pain
										</a>
									</h4>
									<!-- Begin item-content -->
									<div class="item-content">
										<div class="total-price">
										<div class="price price-left">
											<span class="price product-price">
											$123.20
											</span>
										</div>
										<div class="price-sale price-right">
										</div>
										</div>
									</div>
									<!-- End item-content -->
									</div>
									<!-- End item-info -->
								</div>
								</div>
								<div class="item-wrap-inner product-item-container">
								<div class="left-block">
									<div class="item-image">
									<div class="item-img-info product-image-container ">
										<a class="lt-image"  href="#" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain">
										<img src="image/catalog/demo/product/food/7-120x120.jpg" alt="Vitaeelit pilama loves or pursues or desires to pain">
										</a>
									</div>
									</div>
									<div class="box-label">
									</div>
								</div>
								<div class="right-block">
									<div class="caption">
									<h4 class="item-title">
										<a href="product.html" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain ">
										Vitaeelit pilama loves or pursues or desires to pain
										</a>
									</h4>
									<!-- Begin item-content -->
									<div class="item-content">
										<div class="total-price">
										<div class="price price-left">
											<span class="price product-price">
											$182.00
											</span>
										</div>
										<div class="price-sale price-right">
										</div>
										</div>
									</div>
									<!-- End item-content -->
									</div>
									<!-- End item-info -->
								</div>
								</div>
								<div class="item-wrap-inner product-item-container">
								<div class="left-block">
									<div class="item-image">
									<div class="item-img-info product-image-container ">
										<a class="lt-image"  href="#" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain">
										<img src="image/catalog/demo/product/food/4-120x120.jpg" alt="Vitaeelit pilama loves or pursues or desires to pain">
										</a>
									</div>
									</div>
									<div class="box-label">
									</div>
								</div>
								<div class="right-block">
									<div class="caption">
									<h4 class="item-title">
										<a href="product.html" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain ">
										Vitaeelit pilama loves or pursues or desires to pain
										</a>
									</h4>
									<!-- Begin item-content -->
									<div class="item-content">
										<div class="total-price">
										<div class="price price-left">
											<span class="price product-price">
											$182.00
											</span>
										</div>
										<div class="price-sale price-right">
										</div>
										</div>
									</div>
									<!-- End item-content -->
									</div>
									<!-- End item-info -->
								</div>
								</div>
								<!-- End item-wrap-inner -->
							</div>
							</div>
						</div>
						</div>
					</div>
					</div>
				</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col_dkfx  block block_9">
				<div class="moduletable module so-extraslider-ltr home1-extra clearfix home1-extra-style3">
					<div class="head-title font-ct">
					<h2 class="modtitle">Book Stationery</h2>
					</div>
					<div class="modcontent">
					<div id="so_extra_slider_book" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
						<div class="extraslider-inner owl2-carousel owl2-theme owl2-loaded extra-animate">
						<div class="category-slider-inner products-list yt-content-slider-2" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
							<div class="item products-list grid">
							<div class="item-wrap product-layout style1 ">
								<div class="item-wrap-inner product-item-container">
								<div class="left-block">
									<div class="item-image">
									<div class="item-img-info product-image-container ">
										<a class="lt-image"  href="#" target="_self" title="Bazem Carlo again is there anyone who loves oreos">
										<img src="image/catalog/demo/product/book/3-120x120.jpg" alt="Bazem Carlo again is there anyone who loves oreos">
										</a>
									</div>
									</div>
									<div class="box-label">
									<span class="label-product label-sale">Sale</span>
									</div>
								</div>
								<div class="right-block">
									<div class="caption">
									<h4 class="item-title">
										<a href="product.html" target="_self" title="Bazem Carlo again is there anyone who loves oreos">
										Bazem Carlo again is there anyone who loves oreos
										</a>
									</h4>
									<!-- Begin item-content -->
									<div class="item-content">
										<div class="total-price">
										<div class="price price-left">
											<span class="price product-price">
											$98.00
											</span>
											<span class="price-old">$122.00</span>
										</div>
										<div class="price-sale price-right">
											<span class="discount">-20%
											<strong>OFF</strong>
											</span>
										</div>
										</div>
									</div>
									<!-- End item-content -->
									</div>
									<!-- End item-info -->
								</div>
								</div>
								<div class="item-wrap-inner product-item-container">
								<div class="left-block">
									<div class="item-image">
									<div class="item-img-info product-image-container ">
										<a class="lt-image"  href="#" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
										<img src="image/catalog/demo/product/book/5-120x120.jpg" alt="Bazem Carlo again is there anyone who loves oreos ">
										</a>
									</div>
									</div>
									<div class="box-label">
									<span class="label-product label-sale">Sale</span>
									</div>
								</div>
								<div class="right-block">
									<div class="caption">
									<h4 class="item-title">
										<a href="product.html" target="_self" title="Bazem Carlo again is there anyone who loves oreos">
										Bazem Carlo again is there anyone who loves oreos
										</a>
									</h4>
									<!-- Begin item-content -->
									<div class="item-content">
										<div class="total-price">
										<div class="price price-left">
											<span class="price product-price">
											$108.80
											</span>
											<span class="price-old">$122.00</span>
										</div>
										<div class="price-sale price-right">
											<span class="discount">-20%
											<strong>OFF</strong>
											</span>
										</div>
										</div>
									</div>
									<!-- End item-content -->
									</div>
									<!-- End item-info -->
								</div>
								</div>
								<div class="item-wrap-inner product-item-container">
								<div class="left-block">
									<div class="item-image">
									<div class="item-img-info product-image-container ">
										<a class="lt-image"  href="#" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
										<img src="image/catalog/demo/product/book/8-120x120.jpg" alt="Bazem Carlo again is there anyone who loves oreos ">
										</a>
									</div>
									</div>
									<div class="box-label">
									<span class="label-product label-sale">Sale</span>
									</div>
								</div>
								<div class="right-block">
									<div class="caption">
									<h4 class="item-title">
										<a href="product.html" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
										Bazem Carlo again is there anyone who loves oreos
										</a>
									</h4>
									<!-- Begin item-content -->
									<div class="item-content">
										<div class="total-price">
										<div class="price price-left">
											<span class="price product-price">
											$122.00
											</span>
											<span class="price-old">$146.00</span>
										</div>
										<div class="price-sale price-right">
											<span class="discount">-17%
											<strong>OFF</strong>
											</span>
										</div>
										</div>
									</div>
									<!-- End item-content -->
									</div>
									<!-- End item-info -->
								</div>
								</div>
								<!-- End item-wrap-inner -->
							</div>
							</div>
							<div class="item products-list grid">
							<div class="item-wrap product-layout style1 ">
								<div class="item-wrap-inner product-item-container">
								<div class="left-block">
									<div class="item-image">
									<div class="item-img-info product-image-container ">
										<a class="lt-image"  href="#" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
										<img src="image/catalog/demo/product/book/9-120x120.jpg" alt="Bazem Carlo again is there anyone who loves oreos ">
										</a>
									</div>
									</div>
									<div class="box-label">
									<span class="label-product label-sale">Sale</span>
									</div>
								</div>
								<div class="right-block">
									<div class="caption">
									<h4 class="item-title">
										<a href="product.html" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
										Bazem Carlo again is there anyone who loves oreos
										</a>
									</h4>
									<!-- Begin item-content -->
									<div class="item-content">
										<div class="total-price">
										<div class="price price-left">
											<span class="price product-price">
											$42.80
											</span>
											<span class="price-old">$1,202.00</span>
										</div>
										<div class="price-sale price-right">
											<span class="discount">-97%
											<strong>OFF</strong>
											</span>
										</div>
										</div>
									</div>
									<!-- End item-content -->
									</div>
									<!-- End item-info -->
								</div>
								</div>
								<div class="item-wrap-inner product-item-container">
								<div class="left-block">
									<div class="item-image">
									<div class="item-img-info product-image-container ">
										<a class="lt-image"  href="#" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
										<img src="image/catalog/demo/product/book/1-120x120.jpg" alt="Bazem Carlo again is there anyone who loves oreos ">
										</a>
									</div>
									</div>
									<div class="box-label">
									<span class="label-product label-sale">Sale</span>
									</div>
								</div>
								<div class="right-block">
									<div class="caption">
									<h4 class="item-title">
										<a href="product.html" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
										Bazem Carlo again is there anyone who loves oreos
										</a>
									</h4>
									<!-- Begin item-content -->
									<div class="item-content">
										<div class="total-price">
										<div class="price price-left">
											<span class="price product-price">
											$50.00
											</span>
											<span class="price-old">$122.00</span>
										</div>
										<div class="price-sale price-right">
											<span class="discount">-60%
											<strong>OFF</strong>
											</span>
										</div>
										</div>
									</div>
									<!-- End item-content -->
									</div>
									<!-- End item-info -->
								</div>
								</div>
								<div class="item-wrap-inner product-item-container">
								<div class="left-block">
									<div class="item-image">
									<div class="item-img-info product-image-container ">
										<a class="lt-image"  href="#" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
										<img src="image/catalog/demo/product/book/2-120x120.jpg" alt="Bazem Carlo again is there anyone who loves oreos ">
										</a>
									</div>
									</div>
									<div class="box-label">
									<span class="label-product label-sale">Sale</span>
									</div>
								</div>
								<div class="right-block">
									<div class="caption">
									<h4 class="item-title">
										<a href="product.html" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
										Bazem Carlo again is there anyone who loves oreos
										</a>
									</h4>
									<!-- Begin item-content -->
									<div class="item-content">
										<div class="total-price">
										<div class="price price-left">
											<span class="price product-price">
											$56.00
											</span>
											<span class="price-old">$62.00</span>
										</div>
										<div class="price-sale price-right">
											<span class="discount">-10%
											<strong>OFF</strong>
											</span>
										</div>
										</div>
									</div>
									<!-- End item-content -->
									</div>
									<!-- End item-info -->
								</div>
								</div>
								<!-- End item-wrap-inner -->
							</div>
							</div>
						</div>
						</div>
					</div>
					</div>
				</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_5dfs  block block_10">
				<div class="clearfix home1-sevices">
					<ul class="category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="4" data-items_column0="4" data-items_column1="3" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
					<li class="item payment col-md-3">
						<div class="icon">
						</div>
						<div class="text">
						<h5><a href="#">Payment on Delivery</a></h5>
						<p>Cash on delivery option</p>
						</div>
					</li>
					<li class="item free col-md-3">
						<div class="icon">
						</div>
						<div class="text">
						<h5><a href="#">Free shipping</a></h5>
						<p>Free shipping on oder over $100</p>
						</div>
					</li>
					<li class="item secure col-md-3">
						<div class="icon">
						</div>
						<div class="text">
						<h5><a href="#">Secure Payment</a></h5>
						<p>We value your security</p>
						</div>
					</li>
					<li class="item support col-md-3">
						<div class="icon">
						</div>
						<div class="text">
						<h5><a href="#">Online support</a></h5>
						<p>We have support 24/7</p>
						</div>
					</li>
					</ul>
				</div>
				</div>

			</div>
			</div>
		</div>
		</div>
		<!-- //Main Container -->
	</div>
	<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
	<!-- End Color Scheme
		============================================ -->
 @endsection
	</body>
