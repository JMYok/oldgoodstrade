@extends('layouts.apptemplate')
@section('title','搜索页')

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
                         <a href="{{ route('root') }}"><img src="{{URL::asset('images/catalog/demo/logo/logo-2.png')}}" alt="Your Store" width="110" height="27" title="Your Store"></a>
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
      <div class="breadcrumbs">
    		<div class="container">
    			<div class="title-breadcrumb">
    				数码集市
    			</div>
    			<ul class="breadcrumb-cate">
    				<li><a href="{{ route('root') }}"><i class="fa fa-home"></i></a></li>
    			</ul>
    		</div>
    	</div>

	<div class="container product-detail">
		<div class="row">

			<div id="content" class="col-md-12 col-sm-12 col-xs-12">

        <a href="javascript:void(0)" class="open-sidebar hidden-lg hidden-md"><i class="fa fa-bars"></i>Sidebar</a>
				<div class="products-category">
					<div class="form-group clearfix">
						<h3 class="title-category ">Bluetooth Speakers</h3>
					</div>
					<div class="products-category">
						<div class="product-filter filters-panel">
							<div class="row">
								<div class="col-sm-2 view-mode hidden-sm hidden-xs">
									<div class="list-view">
										<button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th"></i></button>
                    <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
									</div>
								</div>

								<div class="short-by-show form-inline text-right col-md-10 col-sm-12">
									<div class="form-group short-by">
										<label class="control-label" for="input-sort">Sort By:</label>
										<select id="input-sort" class="form-control" onchange="location = this.value;">
											<option value="" selected="selected">Default</option>
											<option value="">Name (A - Z)</option>
											<option value="">Name (Z - A)</option>
											<option value="">Price (Low &gt; High)</option>
											<option value="">Price (High &gt; Low)</option>
											<option value="">Rating (Highest)</option>
											<option value="">Rating (Lowest)</option>
											<option value="">Model (A - Z)</option>
											<option value="">Model (Z - A)</option>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label" for="input-limit">Show:</label>
										<select id="input-limit" class="form-control" onchange="location = this.value;">
											<option value="" selected="selected">12</option>
											<option value="">25</option>
											<option value="">50</option>
											<option value="">75</option>
											<option value="">100</option>
										</select>
									</div>
									<div class="form-group product-compare"><a id="compare-total" class="btn btn-default">Product Compare (0)</a></div>
								</div>

							</div>
						</div>
						<div class="products-list grid row number-col-3 so-filter-gird">
							<div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="product-item-container">
									<div class="left-block">
										<div class="product-image-container  second_img  ">
											<a href="#" title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium ">
												<img src="image/catalog/demo/product/electronic/26.jpg " alt="Lorem Ipsum dolor at vero eos et iusto odi  with Premium " title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium " class="img-1 img-responsive">
												<img src="image/catalog/demo/product/electronic/30.jpg" alt="Lorem Ipsum dolor at vero eos et iusto odi  with Premium " title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium " class="img-2 img-responsive">
											</a>
										</div>
										<div class="countdown_box">
											<div class="countdown_inner">
											</div>
										</div>
										<div class="box-label">
											<span class="label-product label-sale">
												Sale
											</span>
										</div>
									</div>

									<div class="right-block">
										<div class="caption">
											<h4><a href="#">Lorem Ipsum dolor at vero eos et iusto odi  with Premium </a></h4>
											<div class="total-price">
												<div class="price price-left">
													<span class="price-new">$98.00 </span> <span class="price-old">$122.00 </span>
												</div>
												<div class="price-sale price-right">
													<span class="discount">-20%
														<strong>OFF</strong>
													</span>
												</div>
											</div>
											<div class="description item-desc hidden">
												<p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the.. </p>
											</div>
											<div class="list-block hidden">
												<button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
											</div>
										</div>
										<div class="button-group">
											<a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe" href="quickview.html"> <i class="fa fa-search"></i> </a>
											<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('105');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
											<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('105');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
											<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('105', '2');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
										</div>
									</div>
								</div>
							</div>
							<div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="product-item-container">
									<div class="left-block">
										<div class="product-image-container  second_img  ">
											<a href="#" title="Computer Science saepe eveniet ut et volu redae ">
												<img src="image/catalog/demo/product/electronic/23.jpg " alt="Computer Science saepe eveniet ut et volu redae " title="Computer Science saepe eveniet ut et volu redae " class="img-1 img-responsive">
												<img src="image/catalog/demo/product/electronic/15.jpg" alt="Computer Science saepe eveniet ut et volu redae " title="Computer Science saepe eveniet ut et volu redae " class="img-2 img-responsive">
											</a>
											<div class="box-label">
												<span class="label-product label-sale">
													Sale
												</span>
											</div>
										</div>
										<div class="countdown_box">
											<div class="countdown_inner">
											</div>
										</div>
									</div>
									<div class="right-block">
										<div class="caption">
											<h4><a href="#">Computer Science saepe eveniet ut et volu redae </a></h4>
											<div class="total-price">
												<div class="price price-left">
													<span class="price-new">$119.60 </span> <span class="price-old">$122.00 </span>
												</div>
												<div class="price-sale price-right">
													<span class="discount">-2%
														<strong>OFF</strong>
													</span>
												</div>
											</div>

											<div class="description item-desc hidden">
												<p>Born to be worn.

							Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your musical fashion statement... </p>
											</div>
											<div class="list-block hidden">
												<button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
											</div>
										</div>
										<div class="button-group">
											<a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe"> <i class="fa fa-search"></i> </a>
											<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('58');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
											<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('58');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
											<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('58', '1');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
										</div>
									</div>

								</div>
							</div>
							<div class="clearfix visible-sm-block"></div>
							<div class="product-layout  col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="product-item-container">
									<div class="left-block">
										<div class="product-image-container  second_img  ">
											<a title="Compact Portable Charger External ">
											<img src="image/catalog/demo/product/electronic/22.jpg " alt="Compact Portable Charger External " title="Compact Portable Charger External " class="img-1 img-responsive">
											<img src="image/catalog/demo/product/electronic/23.jpg" alt="Compact Portable Charger External " title="Compact Portable Charger External " class="img-2 img-responsive">
											</a>
											<div class="box-label">
												<span class="label-product label-sale">
													Sale
												</span>
											</div>
										</div>
										<div class="countdown_box">
											<div class="countdown_inner">
											</div>
										</div>
									</div>
									<div class="right-block">
										<div class="caption">
											<h4><a href="#">Compact Portable Charger External </a></h4>
											<div class="total-price">
												<div class="price price-left">
													<span class="price-new">$962.00 </span> <span class="price-old">$1,202.00 </span>
												</div>
												<div class="price-sale price-right">
													<span class="discount">-20%
														<strong>OFF</strong>
													</span>
												</div>
											</div>
											<div class="description item-desc hidden">
												<p>Born to be worn.

							Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your musical fashion statement... </p>
											</div>
											<div class="list-block hidden">
												<button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
											</div>
										</div>
										<div class="button-group">
											<a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe" href="quickview.html"> <i class="fa fa-search"></i> </a>
											<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('61');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
											<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('61');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
											<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('61', '1');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix visible-lg-block"></div>
							<div class="product-layout  col-lg-4 col-md-4 col-sm-6 col-xs-6" >
								<div class="product-item-container">
									<div class="left-block">
										<div class="product-image-container  second_img  ">
											<a href="#" title="Compact Portable Charger (Power Bank) with Premium ">
												<img src="image/catalog/demo/product/electronic/19.jpg " alt="Compact Portable Charger (Power Bank) with Premium " title="Compact Portable Charger (Power Bank) with Premium " class="img-1 img-responsive">
												<img src="image/catalog/demo/product/electronic/2.jpg" alt="Compact Portable Charger (Power Bank) with Premium " title="Compact Portable Charger (Power Bank) with Premium " class="img-2 img-responsive">
											</a>
											<div class="box-label">
												<span class="label-product label-sale">
													Sale
												</span>
											</div>
										</div>
										<div class="countdown_box">
											<div class="countdown_inner">
											</div>
										</div>
									</div>
									<div class="right-block">
										<div class="caption">
											<h4><a href="#">Compact Portable Charger (Power Bank) with Premium </a></h4>
											<div class="total-price">
												<div class="price price-left">
													<span class="price-new">$74.00 </span> <span class="price-old">$241.99 </span>
												</div>
												<div class="price-sale price-right">
													<span class="discount">-70%
														<strong>OFF</strong>
													</span>
												</div>
											</div>
											<div class="description item-desc hidden">
												<p>Samsung Galaxy Tab 10.1, is the world’s thinnest tablet, measuring 8.6 mm thickness, running with Android 3.0 Honeycomb OS on a 1GHz dual-core Tegra 2 processor, similar to its younger brother S.. </p>
											</div>
											<div class="list-block hidden">
												<button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
											</div>
										</div>
										<div class="button-group">
											<a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe" href="quickview.html"> <i class="fa fa-search"></i> </a>
											<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('66');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
											<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('66');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
											<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('66', '1');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
										</div>
									</div>

								</div>
							</div>
							<div class="clearfix visible-sm-block"></div>
							<div class="product-layout  col-lg-4 col-md-4 col-sm-6 col-xs-6" >
								<div class="product-item-container">
									<div class="left-block">
										<div class="product-image-container  second_img  ">
											<a href="#" title="Compact Portable Charger (External Battery) T23 ">
												<img src="image/catalog/demo/product/electronic/17.jpg " alt="Compact Portable Charger (External Battery) T23 " title="Compact Portable Charger (External Battery) T23 " class="img-1 img-responsive">
												<img src="image/catalog/demo/product/electronic/15.jpg" alt="Compact Portable Charger (External Battery) T23 " title="Compact Portable Charger (External Battery) T23 " class="img-2 img-responsive">
											</a>
										</div>
									</div>
									<div class="box-label">
									</div>
									<div class="right-block">
										<div class="caption">
											<h4><a href="#">Compact Portable Charger (External Battery) T23 </a></h4>
											<div class="total-price">
												<div class="price price-left">
													<span class="price-new">$1,202.00 </span>
												</div>
												<div class="price-sale price-right">
												</div>
											</div>
											<div class="description item-desc hidden">
												<p>Unprecedented power. The next generation of processing technology has arrived. Built into the newest VAIO notebooks lies Intel's latest, most powerful innovation yet: Intel® Centrino® 2 pr.. </p>
											</div>
											<div class="list-block hidden">
												<button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
											</div>
										</div>
										<div class="button-group">
											<a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe" href="quickview.html"> <i class="fa fa-search"></i> </a>
											<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('68');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
											<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('68');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
											<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('68', '1');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
										</div>
									</div>
								</div>
							</div>
							<div class="product-layout  col-lg-4 col-md-4 col-sm-6 col-xs-6" >
								<div class="product-item-container">
									<div class="left-block">
										<div class="product-image-container  second_img  ">
											<a href="#" title="Compact Portable Charger (External Battery) ">
												<img src="image/catalog/demo/product/electronic/13.jpg " alt="Compact Portable Charger (External Battery) " title="Compact Portable Charger (External Battery) " class="img-1 img-responsive">
												<img src="image/catalog/demo/product/electronic/15.jpg" alt="Compact Portable Charger (External Battery) " title="Compact Portable Charger (External Battery) " class="img-2 img-responsive">
											</a>
											<div class="box-label">
											</div>
										</div>
									</div>
									<div class="right-block">
										<div class="caption">
											<h4><a href="#">Compact Portable Charger (External Battery) </a></h4>
											<div class="total-price">
												<div class="price price-left">
													<span class="price-new">$98.00 </span>
												</div>
												<div class="price-sale price-right">
												</div>
											</div>
											<div class="description item-desc hidden">
												<p>Engineered with pro-level features and performance, the 12.3-effective-megapixel D300 combines brand new technologies with advanced features inherited from Nikon's newly announced D3 professional .. </p>
											</div>
											<div class="list-block hidden">
												<button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
											</div>
										</div>
										<div class="button-group">
											<a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe" href="quickview.html"> <i class="fa fa-search"></i> </a>
											<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('103');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
											<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('103');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
											<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('103', '1');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
										</div>
									</div>

								</div>
							</div>
							<div class="clearfix visible-lg-block"></div>
							<div class="product-layout  col-lg-4 col-md-4 col-sm-6 col-xs-6" >
								<div class="product-item-container">
									<div class="left-block">
										<div class="product-image-container  second_img  ">
											<a href="#" title="Compact (External Battery Power Bank) with Premium ">
												<img src="image/catalog/demo/product/electronic/12.jpg " alt="Compact (External Battery Power Bank) with Premium " title="Compact (External Battery Power Bank) with Premium " class="img-1 img-responsive">
												<img src="image/catalog/demo/product/electronic/2.jpg" alt="Compact (External Battery Power Bank) with Premium " title="Compact (External Battery Power Bank) with Premium " class="img-2 img-responsive">
											</a>
										</div>
									</div>
									<div class="right-block">
										<div class="caption">
											<h4><a href="#">Compact (External Battery Power Bank) with Premium </a></h4>
											<div class="total-price">
												<div class="price price-left">
														<span class="price-new">$122.00 </span>
												</div>
												<div class="price-sale price-right">
												</div>
											</div>
											<div class="description item-desc hidden">
												<p>【Neckband Designed】: Around-the-Neck Wearing Style With Body-contoured Fit. Made of ultra-light shape-memory alloy, great for easy carrying and all day comfort. Ensures a 100% comfortable fit especial.. </p>
											</div>
											<div class="list-block hidden">
												<button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
											</div>
										</div>
										<div class="button-group">
											<a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe" href="#"> <i class="fa fa-search"></i> </a>
											<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('111');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
											<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('111');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
											<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('111', '1');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
										</div>
									</div>
								</div>
							</div>
							<div class="product-layout  col-lg-4 col-md-4 col-sm-6 col-xs-6" >
								<div class="product-item-container">
									<div class="left-block">
										<div class="product-image-container  second_img  ">
											<a href="#" title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus ">
												<img src="image/catalog/demo/product/electronic/1.jpg " alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus " title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus " class="img-1 img-responsive">
												<img src="image/catalog/demo/product/electronic/10.jpg" alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus " title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus " class="img-2 img-responsive">
											</a>
										</div>
										<div class="countdown_box">
											<div class="countdown_inner">
											</div>
										</div>
										<div class="box-label">
											<span class="label-product label-sale">
												Sale
											</span>
										</div>
									</div>
									<div class="right-block">
										<div class="caption">
											<h4><a href="#"> Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus </a></h4>
											<div class="total-price">
												<div class="price price-left">
													<span class="price-new">$98.00 </span> <span class="price-old">$122.00 </span>
												</div>
												<div class="price-sale price-right">
													<span class="discount">-20%
														<strong>OFF</strong>
													</span>
												</div>
											</div>
											<div class="description item-desc hidden">
												<p>【Neckband Designed】: Around-the-Neck Wearing Style With Body-contoured Fit. Made of ultra-light shape-memory alloy, great for easy carrying and all day comfort. Ensures a 100% comfortable fit especial.. </p>
											</div>
											<div class="list-block hidden">
												<button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
											</div>
										</div>
										<div class="button-group">
											<a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe" href="#"> <i class="fa fa-search"></i> </a>
											<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
											<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
											<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('30', '1');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
										</div>
									</div>
								</div>
							</div>
              <div class="product-layout  col-lg-4 col-md-4 col-sm-6 col-xs-6" >
                <div class="product-item-container">
                  <div class="left-block">
                    <div class="product-image-container  second_img  ">
                      <a href="#" title="Portable  Compact Charger (External Battery) t45">
                        <img src="image/catalog/demo/product/electronic/4.jpg " alt=" Portable  Compact Charger (External Battery) t45" title="Portable  Compact Charger (External Battery) t45" class="img-1 img-responsive">
                        <img src="image/catalog/demo/product/electronic/6.jpg" alt="Portable  Compact Charger (External Battery) t45" title="Portable  Compact Charger (External Battery) t45" class="img-2 img-responsive">
                      </a>
                    </div>
                    <div class="box-label">

                    </div>
                  </div>
                  <div class="right-block">
                    <div class="caption">
                      <h4><a href="#">Portable  Compact Charger (External Battery) t45</a></h4>
                      <div class="total-price">
                        <div class="price price-left">
                          <span class="price-new">$1299.00</span>
                        </div>
                      </div>
                      <div class="description item-desc hidden">
                        <p>【Neckband Designed】: Around-the-Neck Wearing Style With Body-contoured Fit. Made of ultra-light shape-memory alloy, great for easy carrying and all day comfort. Ensures a 100% comfortable fit especial.. </p>
                      </div>
                      <div class="list-block hidden">
                        <button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
                      </div>
                    </div>
                    <div class="button-group">
                      <a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe" href="#"> <i class="fa fa-search"></i> </a>
                      <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                      <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
                      <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('30', '1');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
                    </div>
                  </div>
                </div>
              </div>
						</div>

						<div class="product-filter product-filter-bottom filters-panel">
							<div class="col-sm-6 text-left">
                <ul class="pagination">
                  <li class="active"><span>1</span></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">&gt;</a></li>
                  <li><a href="#">&gt;|</a></li>
                </ul>
              </div>
							<div class="col-sm-6 text-right">Showing 1 to 9 of 9 (1 Pages)</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>

	<!-- //Main Container -->

    </div>
</body>

@endsection
