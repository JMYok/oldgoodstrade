@extends('layouts.apptemplate')
@section('title','提示')

@section('content')
<style>
.btn-primary {background-color: #ff5e00 !important;}
</style>
<body class="account-login account res layout-1">
  <div id="wrapper" class="wrapper-fluid banners-effect-10">
     @include('layouts._headertemplate2')
  </div>
    <div class="main-container container">
      <div class="panel panel-default">
          <div class="panel-heading">提示</div>
          <div class="panel-body text-center" style="padding:10% 0;">
              <h1>请先验证邮箱</h1>
              <a class="btn btn-primary" href="{{ route('email_verification.send') }}">重新发送验证邮件</a>
          </div>
      </div>
      </div>
</body>
@stop
