@extends('layouts.apptemplate')
@section('title','地址簿')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<body class="account-login account res layout-1">
    <div id="wrapper" class="wrapper-fluid banners-effect-10">
      @include('layouts._headertemplate2')

      <!-- Main Container  -->
    	<div class="main-container container">
    		<ul class="breadcrumb">
    			<li><a href="{{ route('root') }}"><i class="fa fa-home"></i></a></li>
          <li><a href="{{ route('user_addresses.index') }}">地址簿</i></a></li>
    		</ul>

    		<div class="row">
    			<!--Middle Part Start-->
    			<div id="content" class="col-md-12">
    				<h2 class="title" >地址簿</h2>
            <div class="panel panel-default">
            <div class="panel-heading">收货地址列表<a href="{{ route('user_addresses.create') }}" class="pull-right">新建</a></div>
            <div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-bordered table-hover">
    						<thead>
    							<tr>
    								<th class="text-center">收货人</th>
    								<th class="text-left">地址</th>
    								<th class="text-center">邮编</th>
    								<th class="text-center">电话</th>
    								<th class="text-center">操作</th>
    							</tr>
    						</thead>
    						<tbody>
                  @foreach($addresses as $address)
    							<tr>
    								<td class="text-center">
    								{{ $address->contact_name }}
    								</td>
    								<td class="text-left">
                      {{ $address->full_address }}
    								</td>
    								<td class="text-center">{{ $address->zip }}</td>
    								<td class="text-center">{{ $address->contact_phone }}</td>
    								<td class="text-center">
                      <button class="btn btn-primary" style="padding:0;"> <a href="{{ route('user_addresses.edit', ['user_address' => $address->id]) }}" class="btn btn-primary">修改</a></button>
                      <form action="{{ route('user_addresses.destroy', ['user_address' => $address->id]) }}" method="post" style="display: inline-block">
                       {{ csrf_field() }}
                       {{ method_field('DELETE') }}
                       <button class="btn btn-danger btn-del-address" type="button" data-id="{{ $address->id }}">删除</button>
                     </form>
                    </td>
    							</tr>
                  @endforeach

    						</tbody>
    					</table>
    				</div>

    			   </div>
           </div>
    			<!--Middle Part End-->
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

<script>
$(document).ready(function() {
  // 删除按钮点击事件
  $('.btn-del-address').click(function() {
    // 获取按钮上 data-id 属性的值，也就是地址 ID
    var id = $(this).data('id');
    // 调用 sweetalert
    swal({
        title: "确认要删除该地址？",
        icon: "warning",
        buttons: ['取消', '确定'],
        dangerMode: true,
      })
    .then(function(willDelete) { // 用户点击按钮后会触发这个回调函数
      // 用户点击确定 willDelete 值为 true， 否则为 false
      // 用户点了取消，啥也不做
      if (!willDelete) {
        return;
      }
      // 调用删除接口，用 id 来拼接出请求的 url
      axios.delete('/user_addresses/' + id)
        .then(function () {
          // 请求成功之后重新加载页面
          location.reload();
        })
    });
  });
});
</script>
