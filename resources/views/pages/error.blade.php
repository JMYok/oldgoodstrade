@extends('layouts.apptemplate')
@section('title','错误')

@section('content')
<body class="account-login account res layout-1">
  <div id="wrapper" class="wrapper-fluid banners-effect-10">
     @include('layouts._headertemplate2')
  </div>
    <div class="main-container container">
      <div class="panel panel-default">
          <div class="panel-heading">提示</div>
          <div class="panel-body text-center" style="padding:10% 0;">
              <h1>发生错误</h1>
              <h2>{{ $msg }}</h2>
              <a class="btn btn-primary" href="{{ route('root') }}">返回首页</a>
          </div>
      </div>
      </div>
</body>
@stop
