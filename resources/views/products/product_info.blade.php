@extends('layouts.apptemplate')
@section('title','商品详情')

@section('content')
<style>
.products-show-page .skus .btn-group label {
  border-radius: 0 !important;
  margin: 1px 5px;
  padding: 2px 5px;
  font-size: 12px;
}

.products-show-page .skus .btn-group .btn-default.active,
.products-show-page .skus .btn-group .btn-default:hover {
  margin-top: 0px !important;
  background: #fff !important;
  border: 2px solid #ffa000 !important;
}

.products-show-page .skus .btn-group .btn.focus {
  outline: 0 !important;
}

.products-show-page .skus > label {
  color: #999;
  font-size: 12px;
  padding: 0 10px 0 10px;
}

.products-show-page .skus .btn-group {
  margin-left: -10px;
}

 span.count{
			color: #ff5e00;
			font-size: 18px;
 }
</style>

<body class="account-login account res layout-1">
    <div id="wrapper" class="wrapper-fluid banners-effect-10">
      @include('layouts._headertemplate2')


      <!-- Main Container  -->
      	<div class="breadcrumbs">
      		<div class="container">
      			<div class="title-breadcrumb">
      			商品详情
      			</div>
      			<ul class="breadcrumb-cate">
      				<li><a href="{{ route('root') }}"><i class="fa fa-home"></i></a></li>
      			</ul>
      		</div>
      	</div>

      	<div class="container product-detail">

          <div class="products-show-page">
      	  <div class="row">
      		<div id="content" class="col-md-8 col-sm-12 col-xs-12">

        			<div class="sidebar-overlay "></div>
        			<div class="product-view product-detail">
        				<div class="product-view-inner clearfix">
        				   <div class="content-product-left  col-md-5 col-sm-6 col-xs-12">
        					  <div class="so-loadeding"></div>
        					  <div class="large-image  class-honizol">
        						 <div class="box-label">
        							<span class="label-product label-sale">
        							-30%
        							</span>
        						 </div>
        						 <img class="product-image-zoom" src="{{ $product->image_url }}" data-zoom-image="image/catalog/demo/product/travel/2.jpg" title="Canada Travel One or Two European Facials at  Studio" alt="Canada Travel One or Two European Facials at  Studio">
        					  </div>
        					  <div id="thumb-slider" class="full_slider category-slider-inner products-list yt-content-slider" data-rtl="no" data-autoplay="no" data-pagination="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="3" data-items_column1="3" data-items_column2="3" data-items_column3="3" data-items_column4="2" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
        							   <div class="owl2-item " >
        								  <div class="image-additional">
        									 <a data-index="0" class="img thumbnail" data-image="{{ $product->image_url }}" title="{{ $product->title }}">
        									 <img src="{{ $product->image_url }}" title="{{ $product->title }}" alt="{{ $product->title }}">
        									 </a>
        								  </div>
        							   </div>
        							   <div class="owl2-item ">
        								  <div class="image-additional">
        									 <a data-index="1" class="img thumbnail " data-image="{{ $product->image_url }}" title="{{ $product->title }}">
        									 <img src="{{ $product->image_url }}" title="{{ $product->title }}" alt="{{ $product->title }}">
        									 </a>
        								  </div>
        							   </div>
        							   <div class="owl2-item ">
        								  <div class="image-additional">
        									 <a data-index="2" class="img thumbnail " data-image="{{ $product->image_url }}" title="{{ $product->title }}">
        									 <img src="{{ $product->image_url }}" title="{{ $product->title }}" alt="{{ $product->title }}">
        									 </a>
        								  </div>
        							   </div>
        					  </div>
        				   </div>
        				   <div class="content-product-right col-md-7 col-sm-6 col-xs-12">
        					  <div class="title-product">
        						 <h1>{{ $product->title }}</h1>
        					  </div>
        					  <div class="box-review">
        						 <div class="rating">
                       <span class="count">
                       {{ str_repeat('★', round($product->rating)) }}{{ str_repeat('☆', 5 - round($product->rating)) }}
                       </span>
        						 </div>
        					  </div>
        					  <div class="product_page_price price" itemscope="" itemtype="">
                      <span class="price-new">{{ $product->price }}</span>
                      <span class="price-old">{{ sprintf('%.2f',$product->price * 0.8) }}</span>
        					  </div>
        					  <div class="product-box-desc">
        						 <div class="inner-box-desc">
        							<div class="brand"><span>累计销量: </span>{{ $product->sold_count }}</div>
        							<div class="model"><span>累计评价: </span>{{ $product->review_count }}</div>
        							<div class="reward"><span>选   择:</span>

                        <div class="skus">
                           <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        @foreach($product->skus as $sku)
                          <label
                              class="btn sku-btn"
                              data-price="{{ $sku->price }}"
                              data-stock="{{ $sku->stock }}"
                              data-toggle="tooltip"
                              title="{{ $sku->description }}"
                              data-placement="bottom">
                            <input type="radio" name="skus" autocomplete="off" value="{{ $sku->id }}"> {{ $sku->title }}
                          </label>
                        @endforeach
                          </div>
                        </div>

                      </div>
        						 </div>
        					  </div>
        					  <div class="short_description form-group">
        						 <h3>OverView</h3>
        					  </div>
        					  <div id="product">
        						 <div class="box-cart clearfix">
        							<div class="form-group box-info-product">
                          <label for="quantity" ><span><strong>数量</strong></span></label>
        							   <div class="option quantity">
        								  <div class="input-group quantity-control" unselectable="on" style="user-select: none;">
        									 <input class="form-control" type="text" name="cart_amount" id="quantity" value="1">
        									 <span class="input-group-addon product_quantity_down fa fa-caret-down"></span>
        									 <span class="input-group-addon product_quantity_up fa fa-caret-up"></span>
        								  </div>
        							   </div>

                         <div class="stock">

                         </div>

                         <div class=".product-info-btn">
        							   <div class="cart pull-right">
        								  <input type="button" value="加入购物车" class="addToCart btn btn-mega btn-lg btn-add-to-cart" data-toggle="tooltip">
        							   </div>
        							   <div class="add-to-links wish_comp pull-right">
        								  <ul class="blank">
        									 <li class="wishlist">
        										<a><span class="btn-favor"><i class="fa fa-heart"></i></span></a>
        									 </li>
        								  </ul>
        							   </div>
                       </div>

        							</div>
        							<div class="clearfix"></div>
        						 </div>
        					  </div>
        				   </div>
        				</div>
        			 </div>
        			<div class="product-attribute module">
        				<div class="row content-product-midde clearfix">
        				   <div class="col-xs-12">
        					  <div class="producttab ">
        						 <div class="tabsslider  vertical-tabs ">
        							<ul class="nav nav-tabs font-sn col-lg-3 col-sm-4 " style="padding: 0">
        							   <li class="active"><a data-toggle="tab" href="#tab-description">商品概述</a></li>
        							   <li><a href="#tab-review" data-toggle="tab">评论 ({{ $product->review_count }})</a></li>
        							</ul>
        							<div class="tab-content col-lg-9 col-sm-8 col-xs-12 ">
        							   <div class="tab-pane active" id="tab-description">
        								  {!! $product->description !!}
        							   </div>
        							   <div class="tab-pane" id="tab-review">
        								  <form class="form-horizontal" id="form-review">
        									 <div id="review">
                             @if($product->review_count <= 0)
        										<p>目前该商品还没有评论~</p>
                             @endif
        									 </div>

        									</div>

        								  </form>
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

      	<!-- //Main Container -->



    </div>
	<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
</body>
@section('content')
<script type="text/javascript" src="{{ URL::asset('js/jquery-2.2.4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
<script type="text/javascript">

 $(document).ready(function () {
    // $('[data-toggle="tooltip"]').tooltip({trigger: 'hover'});
     $('.sku-btn').click(function () {
       var price = $(this).data('price');
       $('.price-new').text(price);
       $('.price-old').text((price*0.8).toFixed(2));
       $('.stock').text('库存：' + $(this).data('stock') + '件');
     });

/* 购物车 */
// 加入购物车按钮点击事件
    $('.btn-add-to-cart').click(function () {

      // 请求加入购物车接口
      axios.post('{{ route('cart.add') }}', {
        sku_id: $('input[name=skus]').val(),
        amount: $('input[name=cart_amount]').val(),
      })
        .then(function () { // 请求成功执行此回调
          swal('加入购物车成功', '', 'success')
          .then(function() {
          location.href = '{{ route('cart.index') }}'});
        }, function (error) { // 请求失败执行此回调
          if (error.response.status === 401) {

            // http 状态码为 401 代表用户未登陆
            swal('请先登录', '', 'error');

          } else if (error.response.status === 422) {

            // http 状态码为 422 代表用户输入校验失败
            var html = '<div>';
            _.each(error.response.data.errors, function (errors) {
              _.each(errors, function (error) {
                html += error+'<br>';
              })
            });
            html += '</div>';
            swal({content: $(html)[0], icon: 'error'})
          } else {
            swal('系统错误', '', 'error');
          }
        })
    });

    // 监听收藏按钮的点击事件
    $('.btn-favor').click(function () {
      // 发起一个 post ajax 请求，请求 url 通过后端的 route() 函数生成。
      axios.post('{{ route('products.favor', ['product' => $product->id]) }}')
        .then(function () { // 请求成功会执行这个回调
          swal('操作成功', '', 'success');
        }, function(error) { // 请求失败会执行这个回调
          // 如果返回码是 401 代表没登录
          if (error.response && error.response.status === 401) {
            swal('请先登录', '', 'error');
          } else if (error.response && (error.response.data.msg || error.response.data.message)) {
            // 其他有 msg 或者 message 字段的情况，将 msg 提示给用户
            swal(error.response.data.msg ? error.response.data.msg : error.response.data.message, '', 'error');
          }  else {
            // 其他情况应该是系统挂了
            swal('系统错误', '', 'error');
          }
        });
    });
});
</script>
