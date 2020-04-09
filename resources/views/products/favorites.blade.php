@extends('layouts.apptemplate')
@section('title','我的收藏')

@section('content')

<body class="account-login account res layout-1">
    <div id="wrapper" class="wrapper-fluid banners-effect-10">
    @include('layouts._headertemplate2')

      <!-- Main Container  -->
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{ route('root') }}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{ route('products.favorites') }}">收藏列表</a></li>
      </ul>

      <div class="row">
  	        <div id="content" class="col-sm-12">
  	            <h2 class="text-center">我的收藏</h2>
  	            <div class="table-responsive">
  	                <table class="table table-bordered table-hover">
  	                    <thead>
  	                        <tr>
  	                            <td class="text-center">图片</td>
  	                            <td class="text-center">名称</td>
  	                            <td class="text-center">单价</td>
  	                            <td class="text-center">销量</td>
  	                            <td class="text-center">评价数</td>
                                <td class="text-right">操作</td>
  	                        </tr>
  	                    </thead>
  	                    <tbody>
                          @foreach($products as $product)
  	                        <tr data-id="{{ $product->id }}">
  	                            <td class="text-center">
  	                                <a href="{{ route('products.show',['product'=>$product->id]) }}"><img width="100" height="100" src="{{ $product->image_url }}" alt="{{ $product->title }}" title="{{ $product->title }}" class="img-thumbnail"></a>
  	                            </td>
  	                            <td class="text-center"><a href="{{ route('products.show',['product'=>$product->id]) }}">{{ $product->title }}</a></td>
  	                            <td class="text-center">￥{{ $product->price }}</td>
  	                            <td class="text-center">{{ $product->sold_count }}</td>
  	                            <td class="text-center">{{ $product->review_count }}</td>
  	                            <td class="text-right">
  	                                <button data-toggle="tooltip" class="btn btn-danger btn-remove" data-original-title="移除"><i class="fa fa-times"></i></button>
                                </td>
  	                        </tr>
                          @endforeach
  	                    </tbody>
  	                </table>
  	            </div>
  	            <div class="buttons clearfix">
  	                <div class="pull-left"><a href="{{ route('root') }}" class="btn btn-primary">继续购物</a></div>
  	            </div>
  	        </div>

  	    </div>
    </div>


	<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
</body>
@endsection
<script type="text/javascript" src="{{ URL::asset('js/jquery-2.2.4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
$(document).ready(function () {

$('.btn-remove').click(function () {
  var id = $(this).closest('tr').data('id');
  swal({
    title: "确认要将该商品移除？",
    icon: "warning",
    buttons: ['取消', '确定'],
    dangerMode: true,
  })
  .then(function(willDelete) {
    if (!willDelete) {
      return;
    }
    axios.delete('/products/' + id+'/favorite')
      .then(function () {
        location.reload();
      })
  });
});
});

</script>
