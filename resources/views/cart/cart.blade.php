@extends('layouts.apptemplate')
@section('title','我的购物车')

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
    <li><a href="{{ route('cart.index') }}">购物车</a></li>
  </ul>

  <div class="row">
    <div id="content" class="col-sm-12">
      <h1>购物车
      </h1>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th><input type="checkbox" id="select-all"></th>
              <td class="text-center">图片</td>
              <td class="text-left">商品名称</td>
              <td class="text-left">单价</td>
              <td class="text-right">数量</td>
              <td class="text-right">总价</td>
            </tr>
          </thead>
          <tbody>
            @foreach($cartItems as $item)
            <tr data-id="{{ $item->productSku->id }}">
              <td>
                <input type="checkbox" name="select" value="{{ $item->productSku->id }}" {{ $item->productSku->product->on_sale ? 'checked' : 'disabled' }}>
              </td>
              <td class="text-center">
                <a target="_blank" href="{{ route('products.show', [$item->productSku->product_id]) }}">
                <img width="100" height="100" src="{{ $item->productSku->product->image_url }}" alt="{{ $item->productSku->product->description }}" title="{{ $item->productSku->product->title }}" class="img-thumbnail">
                </a>
            </td>
              <td class="text-left"><a target="_blank" href="{{ route('products.show', [$item->product_id]) }}">{{ $item->productSku->product->title }}</a><br>
                <small>类型:{{ $item->productSku->title }}</small>
              </td>

              <td class="text-left">
                ￥{{ $item->productSku->price }}
              </td>

              <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">
                <input type="text" class="form-control form-control-sm amount" @if(!$item->productSku->product->on_sale) disabled @endif name="amount" value="{{ $item->amount }}" style="width:50%;">
                <span class="input-group-addon product_quantity_down fa fa-caret-down"></span>
                <span class="input-group-addon product_quantity_up fa fa-caret-up"></span>
                <span class="input-group-btn">
                <button type="button" data-toggle="tooltip" title="" class="btn btn-danger btn-remove"><i class="fa fa-times-circle"></i></button>
                </span></div>
              </td>

              <td class="text-right">￥{{ sprintf('%.2f',$item->productSku->price * $item->amount) }}</td>
            </tr>
            @endforeach
          </tbody>

        </table>
      </div>

      <div>
        <form class="form-horizontal" role="form" id="order-form">
          <div class="form-group row">
            <label class="col-form-label col-sm-3 text-md-right">选择收货地址</label>
            <div class="col-sm-9 col-md-7">
              <select class="form-control" name="address">
                @foreach($addresses as $address)
                  <option value="{{ $address->id }}">{{ $address->full_address }} {{ $address->contact_name }} {{ $address->contact_phone }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-form-label col-sm-3 text-md-right">备注</label>
            <div class="col-sm-9 col-md-7">
              <textarea name="remark" class="form-control" rows="3"></textarea>
            </div>
          </div>
        </form>
      </div>

      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title"><a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">使用优惠券<i class="fa fa-caret-down"></i></a></h4>
        </div>
        <div id="collapse-coupon" class="panel-collapse collapse">
          <div class="panel-body">
            <label class="col-sm-2 control-label" for="input-coupon">输入优惠码</label>
            <div class="input-group">
              <input type="text" name="coupon"  id="input-coupon" class="form-control">
              <span class="input-group-btn">
                <input type="button" value="使用优惠码" id="button-coupon" data-loading-text="Loading..." class="btn btn-primary">
              </span>
            </div>
          </div>
        </div>
        </div>

      </div>

      <!-- <div class="row">
        <div class="col-sm-4 col-sm-offset-8">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td class="text-right"><strong>Sub-Total:</strong></td>
                <td class="text-right">$99.00</td>
              </tr>
              <tr>
                <td class="text-right"><strong>Eco Tax (-2.00):</strong></td>
                <td class="text-right">$2.00</td>
              </tr>
              <tr>
                <td class="text-right"><strong>VAT (20%):</strong></td>
                <td class="text-right">$19.80</td>
              </tr>
              <tr>
                <td class="text-right"><strong>Total:</strong></td>
                <td class="text-right">$120.80</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div> -->

      <div class="buttons clearfix">
        <div class="pull-left"><a href="{{ route('root') }}" class="btn btn-default">继续购物</a></div>
        <div class="pull-right"><button class="btn btn-primary btn-create-order">提交订单</button></div>
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
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
$(document).ready(function () {
   // 监听 移除 按钮的点击事件
   $('.btn-remove').click(function () {
     // $(this) 可以获取到当前点击的 移除 按钮的 jQuery 对象
     // closest() 方法可以获取到匹配选择器的第一个祖先元素，在这里就是当前点击的 移除 按钮之上的 <tr> 标签
     // data('id') 方法可以获取到我们之前设置的 data-id 属性的值，也就是对应的 SKU id
     var id = $(this).closest('tr').data('id');
     swal({
       title: "确认要将该商品移除？",
       icon: "warning",
       buttons: ['取消', '确定'],
       dangerMode: true,
     })
     .then(function(willDelete) {
       // 用户点击 确定 按钮，willDelete 的值就会是 true，否则为 false
       if (!willDelete) {
         return;
       }
       axios.delete('/cart/' + id)
         .then(function () {
           location.reload();
         })
     });
   });

   // 监听 全选/取消全选 单选框的变更事件
   $('#select-all').change(function() {
     // 获取单选框的选中状态
     // prop() 方法可以知道标签中是否包含某个属性，当单选框被勾选时，对应的标签就会新增一个 checked 的属性
     var checked = $(this).prop('checked');
     // 获取所有 name=select 并且不带有 disabled 属性的勾选框
     // 对于已经下架的商品我们不希望对应的勾选框会被选中，因此我们需要加上 :not([disabled]) 这个条件
     $('input[name=select][type=checkbox]:not([disabled])').each(function() {
       // 将其勾选状态设为与目标单选框一致
       $(this).prop('checked', checked);
     });
   });

   // 监听创建订单按钮的点击事件
   $('.btn-create-order').click(function () {
     // 构建请求参数，将用户选择的地址的 id 和备注内容写入请求参数
     var req = {
       address_id: $('#order-form').find('select[name=address]').val(),
       items: [],
       remark: $('#order-form').find('textarea[name=remark]').val(),
     };
     // 遍历 <table> 标签内所有带有 data-id 属性的 <tr> 标签，也就是每一个购物车中的商品 SKU
     $('table tr[data-id]').each(function () {
       // 获取当前行的单选框
       var $checkbox = $(this).find('input[name=select][type=checkbox]');
       // 如果单选框被禁用或者没有被选中则跳过
       if ($checkbox.prop('disabled') || !$checkbox.prop('checked')) {
         return;
       }
       // 获取当前行中数量输入框
       var $input = $(this).find('input[name=amount]');
       // 如果用户将数量设为 0 或者不是一个数字，则也跳过
       if ($input.val() == 0 || isNaN($input.val())) {
         return;
       }
       // 把 SKU id 和数量存入请求参数数组中
       req.items.push({
         sku_id: $(this).data('id'),
         amount: $input.val(),
       })
     });
     axios.post('{{ route('orders.store') }}', req)
       .then(function (response) {
         swal('订单提交成功', '', 'success');
       }, function (error) {
         if (error.response.status === 422) {
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
           // 其他情况应该是系统挂了
           swal('系统错误', '', 'error');
         }
       });
   });

 });

</script>
