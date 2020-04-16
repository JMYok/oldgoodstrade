@extends('layouts.apptemplate')
@section('title','订单信息')

@section('content')
<body class="account-login account res layout-1">
    <div id="wrapper" class="wrapper-fluid banners-effect-10">
    @include('layouts._headertemplate2')

      <!-- Main Container  -->
<div class="main-container container">
  <ul class="breadcrumb">
    <li><a href="{{ route('root') }}"><i class="fa fa-home"></i></a></li>
  </ul>

<div id="app">
<div class="container">
  <div class="row">
  <div class="col-lg-12">
  <div class="panel panel-default">
    <div class="card-header">
      <h2 style="text-align:center;">订单详情</h2>
    </div>
    <div style="margin:5%;">
      <table class="table">
        <thead>
        <tr>
          <th>商品信息</th>
          <th class="text-center">单价</th>
          <th class="text-center">数量</th>
          <th class="text-right item-amount">小计</th>
        </tr>
        </thead>
        @foreach($order->items as $index => $item)
          <tr>
            <td class="text-center">
              <div class="preview">
                <a target="_blank" href="{{ route('products.show', [$item->product_id]) }}">
                  <img style="" width="150" height="150" src="{{ $item->product->image_url }}">
                </a>
              </div>
              <div>
                <span class="product-title">
                   <a target="_blank" href="{{ route('products.show', [$item->product_id]) }}">{{ $item->product->title }}</a>
                </span>
                <span class="sku-title">{{ $item->productSku->title }}</span>
              </div>
            </td>
            <td class="sku-price text-center vertical-middle">￥{{ $item->price }}</td>
            <td class="sku-amount text-center vertical-middle">{{ $item->amount }}</td>
            <td class="item-amount text-right vertical-middle"><strong>￥{{ number_format($item->price * $item->amount, 2, '.', '') }}</strong></td>
          </tr>
        @endforeach
        <tr><td colspan="4"></td></tr>
      </table>
      <div class="order-bottom">
        <div class="order-info">
          <div class="line"><div class="line-label"><strong>收货地址：</strong></div><div class="line-value">{{ join(' ', $order->address) }}</div></div>
          <div class="line"><div class="line-label"><strong>订单备注：</strong></div><div class="line-value">{{ $order->remark ?: '-' }}</div></div>
          <div class="line"><div class="line-label"><strong>订单编号：</strong></div><div class="line-value">{{ $order->no }}</div></div>
        </div>
        <div class="order-summary text-right">
          <div class="total-amount">
            <span><strong>订单总价：</strong></span>
            <div class="value">￥{{ $order->total_amount }}</div>
          </div>
          <div>
            <span><strong>订单状态：</strong></span>
            <div class="value">
              @if($order->paid_at)
                @if($order->refund_status === \App\Models\Order::REFUND_STATUS_PENDING)
                  已支付
                @else
                  {{ \App\Models\Order::$refundStatusMap[$order->refund_status] }}
                @endif
              @elseif($order->closed)
                已关闭
              @else
                未支付
              @endif
            </div>
          </div>
          @if(isset($order->extra['refund_disagree_reason']))
           <div>
             <span>拒绝退款理由：</span>
             <div class="value">{{ $order->extra['refund_disagree_reason'] }}</div>
           </div>
           @endif
          @if(!$order->paid_at && !$order->closed)
          <div class="payment-buttons">
            <a class="btn btn-default" href="{{ route('payment.alipay', ['order' => $order->id]) }}">支付宝支付</a>
          </div>
          @endif
          <!-- 如果订单的发货状态为已发货则展示确认收货按钮 -->
           @if($order->ship_status === \App\Models\Order::SHIP_STATUS_DELIVERED)
           <div class="receive-button">
             <form method="post" action="{{ route('orders.received', [$order->id]) }}">
               {{ csrf_field() }}
               <button type="submit" class="btn btn-sm btn-success">确认收货</button>
             </form>
           </div>
           @endif
           <!-- 订单已支付，且退款状态是未退款时展示申请退款按钮 -->
          @if($order->paid_at && $order->refund_status === \App\Models\Order::REFUND_STATUS_PENDING)
          <div class="refund-button">
            <button class="btn btn-sm btn-danger" id="btn-apply-refund">申请退款</button>
          </div>
          @endif
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
@endsection
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
<script>
$(document).ready(function(){
  // 退款按钮点击事件
    $('#btn-apply-refund').click(function () {
      swal({
        text: '请输入退款理由',
        content: "input",
      }).then(function (input) {
        // 当用户点击 swal 弹出框上的按钮时触发这个函数
        if(!input) {
          swal('退款理由不可空', '', 'error');
          return;
        }
        // 请求退款接口
        axios.post('{{ route('orders.apply_refund', [$order->id]) }}', {reason: input})
          .then(function () {
            swal('申请退款成功', '', 'success').then(function () {
              // 用户点击弹框上按钮时重新加载页面
              location.reload();
            });
          });
      });
    });
});

</script>
