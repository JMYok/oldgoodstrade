@extends('layouts.apptemplate')
@section('title','所用可用优惠券')

@section('content')
<body class="account-login account res layout-1">
    <div id="wrapper" class="wrapper-fluid banners-effect-10">
      @include('layouts._headertemplate2')


      <!-- Main Container  -->
<div class="container">
  <ul class="breadcrumb">
    <li><a href="{{ route('root') }}"><i class="fa fa-home"></i></a></li>
    <li><a href="{{ route('coupon_codes.index') }}">所有可用优惠券</a></li>
  </ul>

  <div class="row">
    <div id="content" class="col-sm-12">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="text-center">名称</td>
              <td class="text-center">优惠码</td>
              <td class="text-center">描述</td>
              <td class="text-center">用量</td>
              <td class="text-center">有效时间</td>
            </tr>
          </thead>
          <tbody>
            @foreach($coupons as $item)
            <tr>
              <td class="text-center">
                <span>{{ $item->name }}</span>
              </td>
              <td class="text-center">
                <strong><span style="color:red;">{{ $item->code }}</span></strong>
              </td>

              <td class="text-center">
                {{ $item->description }}
              </td>

              <td class="text-center">
                <span style="color:red;">{{ $item->used }}</span> / {{ $item->total }}
              </td>

              <td class="text-center">
                {{ $item->not_before }} -- {{ $item->not_after }}
              </td>
            </tr>
            @endforeach
          </tbody>

        </table>
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
      </div>
    </div>


  </div>

</div>
<!-- //Main Container -->
    </div>
	<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
</body>
@section('content')
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
<script>
$(document).ready(function () {
    //监听增加减少数量按钮
    var $value = $('input#quantity');
    $('span.fa.fa-caret-down').click(function () {
          var val = parseInt($value.val()) - 1;
          $value.val(val > 0 ? val : 1);
          return false
      });
    $('span.fa.fa-caret-up').click(function () {
          var val = parseInt($value.val()) + 1;
          $value.val(val <999 ? val : 1);
          return false
      });

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
       coupon_code: $('input[name=coupon_code]').val(), // 从优惠码输入框中获取优惠码
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
         swal('订单提交成功', '', 'success')
         .then(() => {
             location.href = '/orders/' + response.data.id;
           });
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


    // 优惠券按钮点击事件
      $('#btn-check-coupon').click(function () {
        // 获取用户输入的优惠码
        var code = $('input[name=coupon_code]').val();
        // 如果没有输入则弹框提示
        if(!code) {
          swal('请输入优惠码', '', 'warning');
          return;
        }
        // 调用检查接口
        axios.get('/coupon_codes/' + encodeURIComponent(code))
          .then(function (response) {  // then 方法的第一个参数是回调，请求成功时会被调用
            $('#coupon_desc').text(response.data.description); // 输出优惠信息
            $('input[name=coupon_code]').prop('readonly', true); // 禁用输入框
            $('#btn-cancel-coupon').show(); // 显示 取消 按钮
            $('#btn-check-coupon').hide(); // 隐藏 检查 按钮
          }, function (error) {
            // 如果返回码是 404，说明优惠券不存在
            if(error.response.status === 404) {
              swal('优惠码不存在', '', 'error');
            } else if (error.response.status === 403) {
            // 如果返回码是 403，说明有其他条件不满足
              swal(error.response.data.msg, '', 'error');
            } else {
            // 其他错误
              swal('系统内部错误', '', 'error');
            }
          })
      });

      // 隐藏 按钮点击事件
      $('#btn-cancel-coupon').click(function () {
        $('#coupon_desc').text(''); // 隐藏优惠信息
        $('input[name=coupon_code]').prop('readonly', false);  // 启用输入框
        $('#btn-cancel-coupon').hide(); // 隐藏 取消 按钮
        $('#btn-check-coupon').show(); // 显示 检查 按钮
      });
 });

</script>
