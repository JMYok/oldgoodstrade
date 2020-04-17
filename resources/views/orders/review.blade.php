@extends('layouts.apptemplate')
@section('title', '商品评价')

@section('content')
<style>
  .product-info{
    display: flex;
   flex-direction: row;
  }
  .product-info.preview{
      border: 1px solid #eee;
      margin-right: 5px;
  }
  .product-title, .sku-title {
      display: block;
    }
    .product-title > a {
       color: #3c3c3c;
     }
     span.sku-title {
       color: #9e9e9e;
     }

     .rating-star-yes {
       color: gold;
       font-size: 150%;
     }

      .rating-star-no {
        color: lightgrey;
        font-size: 150%;
      }

      .rate-area {
        float: left;
        border-style: none;
        margin: 0 auto;
        padding: 0;
      }

      .rate-area:not(:checked) > input {
        position: absolute;
        top: -9999px;
        clip: rect(0, 0, 0, 0);
      }

      .rate-area:not(:checked) > label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        line-height: 1.2;
        color: lightgrey;
        font-size: 150%;
      }

      .rate-area:not(:checked) > label:before {
        content: '\2605   ';
      }

      rate-area:not(:checked) > label:hover,
      .rate-area:not(:checked) > label:hover ~ label{
          color: gold;
      }

      .rate-area > input:checked ~ label {
        color: gold;
      }

      .rate-area > label:active {
        position: relative;
        top: 2px;
        left: 2px;
      }

      .rate-area > input:checked + label:hover,
     .rate-area > input:checked + label:hover ~ label,
      .rate-area > input:checked ~ label:hover,
      .rate-area > input:checked ~ label:hover ~ label,
      .rate-area > label:hover ~ input:checked ~ label {
       color: gold;
     }


</style>
<body class="account-login account res layout-1">
    <div id="wrapper content" class="wrapper-fluid banners-effect-10">
    @include('layouts._headertemplate2')
    <div class="row">
    <div class="col-lg-10 col-lg-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>商品评价</strong>
        <a class="pull-right" href="{{ route('orders.index') }}">返回订单列表</a>
      </div>
      <div class="panel-body">
        <form action="{{ route('orders.review.store', [$order->id]) }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <table class="table">
          <tbody>
          <tr>
            <td><strong>商品名称</strong></td>
            <td><strong>打分</strong></td>
            <td><strong>评价</strong></td>
          </tr>
          @foreach($order->items as $index => $item)
          <tr>
            <td class="product-info">
              <div class="preview">
                <a target="_blank" href="{{ route('products.show', [$item->product_id]) }}">
                  <img width="100" height="100" src="{{ $item->product->image_url }}">
                </a>
              </div>
              <div>
                <span class="product-title">
                   <a target="_blank" href="{{ route('products.show', [$item->product_id]) }}">{{ $item->product->title }}</a>
                 </span>
                <span class="sku-title">{{ $item->productSku->title }}</span>
              </div>
              <input type="hidden" name="reviews[{{$index}}][id]" value="{{ $item->id }}">
            </td>
            <td class="vertical-middle">
              <!-- 如果订单已经评价则展示评分，下同 -->
              @if($order->reviewed)
              <span class="rating-star-yes">{{ str_repeat('★', $item->rating) }}</span><span class="rating-star-no">{{ str_repeat('★', 5 - $item->rating) }}</span>
              @else
              <ul class="rate-area">
                <input type="radio" id="5-star-{{$index}}" name="reviews[{{$index}}][rating]" value="5" checked /><label for="5-star-{{$index}}"></label>
                <input type="radio" id="4-star-{{$index}}" name="reviews[{{$index}}][rating]" value="4" /><label for="4-star-{{$index}}"></label>
                <input type="radio" id="3-star-{{$index}}" name="reviews[{{$index}}][rating]" value="3" /><label for="3-star-{{$index}}"></label>
                <input type="radio" id="2-star-{{$index}}" name="reviews[{{$index}}][rating]" value="2" /><label for="2-star-{{$index}}"></label>
                <input type="radio" id="1-star-{{$index}}" name="reviews[{{$index}}][rating]" value="1" /><label for="1-star-{{$index}}"></label>
              </ul>
              @endif
            </td>
            <td class="{{ $errors->has('reviews.'.$index.'.review') ? 'has-error' : '' }}">
              @if($order->reviewed)
              {{ $item->review }}
              @else
                <textarea class="form-control" name="reviews[{{$index}}][review]"></textarea>
                @if($errors->has('reviews.'.$index.'.review'))
                  @foreach($errors->get('reviews.'.$index.'.review') as $msg)
                    <span class="help-block">{{ $msg }}</span>
                  @endforeach
                @endif
              @endif
            </td>
          </tr>
          @endforeach
          </tbody>
          <tfoot>
            <tr>
              <td colspan="3" class="text-center">
                @if(!$order->reviewed)
                <button type="submit" class="btn btn-primary center-block">提交</button>
                @else
                <a href="{{ route('orders.show', [$order->id]) }}" class="btn btn-primary">查看订单</a>
                @endif
              </td>
            </tr>
          </tfoot>
        </table>
        </form>
      </div>
    </div>
    </div>
    </div>
    </div>
</body>
@endsection
