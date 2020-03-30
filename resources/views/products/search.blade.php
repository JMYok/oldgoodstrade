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

                         <form action="{{ route('products.search') }}" >
                            <div id="search0" class="search input-group form-group">
                               <input class="autosearch-input form-control" id="search-input"  type="text" size="50" autocomplete="off" name="search" placeholder="搜索">
                               <span id="search-form-btn" class="input-group-btn">
                               <button type="submit" class="button-search btn btn-default btn-lg"><i class="fa fa-search"></i></button>
                               </span>
                            </div>
                            <input type="hidden" name="order" value="{{ $filters['order'] }}">
                            <input type="hidden" name="limit" value="{{ $filters['limit'] }}">
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

        <a href="javascript:void(0)" class="open-sidebar hidden-lg hidden-md"><i class="fa fa-bars"></i>侧边栏</a>
				<div class="products-category">
					<div class="form-group clearfix">
						<h3 class="title-category ">搜索结果</h3>
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

                <form action="{{ route('products.search') }}" class="search-form-order">
								<div class="short-by-show form-inline text-right col-md-10 col-sm-12">
									<div class="form-group short-by">
										<label class="control-label" for="input-sort">排序方式:</label>
										<select id="input-sort" name="order" class="form-control" >
											<option value="" selected="selected">无</option>
                      <option value="price_asc">价格从低到高</option>
                       <option value="price_desc">价格从高到低</option>
                       <option value="sold_count_desc">销量从高到低</option>
                       <option value="sold_count_asc">销量从低到高</option>
                       <option value="rating_desc">评价从高到低</option>
                       <option value="rating_asc">评价从低到高</option>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label" for="input-limit">每页:</label>
										<select id="input-limit" name="limit" class="form-control">
											<option value="12" selected="selected">12条</option>
											<option value="25">25条</option>
											<option value="50">50条</option>
											<option value="75">75条</option>
											<option value="100">100条</option>
										</select>
									</div>
								</div>
                <input type="hidden" name="search" value="{{ $filters['search'] }}">
                </form>

							</div>
						</div>
						<div class="products-list grid row number-col-12 so-filter-gird">

              @foreach($products as $product)
							<div class="product-layout  col-lg-3 col-md-3 col-sm-3 col-xs-3" style="height:60% !important;">
								<div class="product-item-container" style="height:80% !important;">
									<div class="left-block">
										<div class="product-image-container second_img  ">
											<a href="#" title="Compact Portable Charger (Power Bank) with Premium ">
												<img src="{{ $product->image_url }}" alt="{{ $product->description }}" title="{{ $product->title }}" class="img-1 img-responsive">
												<img src="{{ $product->image_url }}" alt="{{ $product->description }}" title="{{ $product->title }}" class="img-2 img-responsive">
											</a>
										</div>

                    <div class="description item-desc">
                      <p>{{ $product->description }}</p>
                    </div>

									</div>
									<div class="right-block">
										<div class="caption">
											<h4><a href="#">{{ $product->title }}</a></h4>
											<div class="total-price">
												<div class="price price-left">
													<span class="price-new">{{ $product->price }}</span><span class="price-old">{{ sprintf('%.2f',$product->price * 0.8) }}</span>
												</div>
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
              @endforeach

						</div>

						<div class="product-filter product-filter-bottom filters-panel">
							<div class="col-sm-6">
                {{ $products->appends($filters)->render() }}
              </div>
							<!-- <div class="col-sm-6 text-right">展示 第1页 到 第<span id="currentPage"></span>页 的第 <span id="lastPage"></span>页 (共 <span id="countPage"></span>  页)</div> -->
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
<script type="text/javascript" src="{{URL::asset('js/jquery-2.2.4.min.js')}}"></script>
<script>
var filters = @json($filters);
var products = @json($products);
console.log(products);
      $(document).ready(function(){
      $('#search-input').val(filters.search);
      $('.search-form-order select[name=order]').val(filters.order);
      $('.search-form-order select[name=limit]').val(filters.limit);

      $('.search-form-order select[name=order]').on('change', function() {
        $('.search-form-order').submit();
      });
      $('.search-form-order select[name=limit]').on('change', function() {
        $('.search-form-order').submit();
      });

      //分页状态展示
      $('span #currentPage').text("text");
    })
</script>
