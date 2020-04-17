@extends('layouts.apptemplate')
@section('title','搜索页')

@section('content')
<body class="account-login account res layout-1">
    <div id="wrapper" class="wrapper-fluid banners-effect-10">
      @include('layouts._headertemplate2')

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
                    <!-- <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button> -->
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
              @if(empty($products))
              <h2>搜索结果为空</h2>
              @else
              @foreach($products as $product)
							<div class="product-layout  col-lg-3 col-md-3 col-sm-3 col-xs-3" style="height:60% !important;">
								<div class="product-item-container" style="height:80% !important;">
									<div class="left-block">
										<div class="product-image-container second_img  ">
											<a href="{{ route('products.show', ['product' => $product->id]) }}" title="Compact Portable Charger (Power Bank) with Premium ">
												<img src="{{ $product->image_url }}" alt="{{ $product->description }}" title="{{ $product->title }}" class="img-1 img-responsive">
												<img src="{{ $product->image_url }}" alt="{{ $product->description }}" title="{{ $product->title }}" class="img-2 img-responsive">
											</a>
										</div>

									</div>
									<div class="right-block">
										<div class="caption">
											<h4><a href="{{ route('products.show', ['product' => $product->id]) }}">{{ $product->title }}</a></h4>
											<div class="total-price">
												<div class="price price-left">
													<span class="price-new">{{ $product->price }}</span><span class="price-old">{{ sprintf('%.2f',$product->price * 0.8) }}</span>
												</div>
											</div>

											<!-- <div class="list-block hidden">
												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
											</div> -->
										</div>
										<!-- <div class="button-group">
											<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('66');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
										</div> -->
									</div>

								</div>
							</div>
              @endforeach
              @endif
						</div>

						<div class="product-filter product-filter-bottom filters-panel">
							<div class="col-sm-6">
                {{ $products->appends($filters)->links() }}
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
