@extends('layouts.apptemplate')
@section('title','订单列表')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
<body class="account-login account res layout-1">
    <div id="wrapper" class="wrapper-fluid banners-effect-10">
    @include('layouts._headertemplate2')

      <!-- Main Container  -->
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{ route('root') }}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{ route('orders.index') }}">订单列表</a></li>
      </ul>

      <div class="row">
        <div id="content" class="col-sm-12">
          <h1>所有订单</h1>
          <ul class="list-group">
            @foreach($orders as $order)
            <li class="list-group-item">
            <div class="card">
             <div class="card-header">
               订单号：{{ $order->no }}
               <span class="pull-right">{{ $order->created_at->format('Y-m-d H:i:s') }}</span>
             </div>
           <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="text-center">图片</th>
                  <th class="text-left">商品名称</th>
                  <th class="text-left">单价</th>
                  <th class="text-right">数量</th>
                  <th class="text-right">订单总价</th>
                  <th class="text-right">状态</th>
                  <th class="text-right">操作</th>
                </tr>
              </thead>
              <tbody>
                 @foreach($order->items as $index => $item)
                 <tr>
                    <td>
                     <a target="_blank" href="{{ route('products.show', [$item->product_id]) }}">
                       <img width="80px" src="{{ $item->product->image_url }}">
                     </a>
                    </td>
                    <td>
                     <a target="_blank" href="{{ route('products.show', [$item->product_id]) }}">
                       {{ $item->product->title }}
                     </a>
                     <small>类型:{{ $item->productSku->title }}</small>
                    </td>
                    <td>
                      ￥{{ $item->price }}
                    </td>
                     <td class="sku-amount text-center">{{ $item->amount }}</td>
                      @if($index === 0)
                     <td rowspan="{{ count($order->items) }}" class="text-center total-amount">￥{{ $order->total_amount }}</td>
                     <td rowspan="{{ count($order->items) }}" class="text-center">
                       @if($order->paid_at)
                         @if($order->refund_status === \App\Models\Order::REFUND_STATUS_PENDING)
                           已支付
                         @else
                           {{ \App\Models\Order::$refundStatusMap[$order->refund_status] }}
                         @endif
                       @elseif($order->closed)
                         已关闭
                       @else
                         未支付<br>
                         请于 {{ $order->created_at->addSeconds(config('app.order_ttl'))->format('H:i') }} 前完成支付<br>
                         否则订单将自动关闭
                       @endif
                     </td>
                     <td rowspan="{{ count($order->items) }}" class="text-center"><a class="btn btn-primary btn-sm" href="{{ route('orders.show',['order' => $order->id]) }}">查看订单</a></td>
                     @endif
                 </tr>
                 @endforeach
              </tbody>
            </table>
            </div>
          </div>
            </div>
            </li>
            @endforeach
          </ul>
<!-- //Main Container -->
          </div>
        </div>
      </div>
    </div>


	<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
</body>
@section('content')
