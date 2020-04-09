@extends('layouts.apptemplate')
@section('title','登录')

@section('content')
<body class="account-login account res layout-1">
    <div id="wrapper" class="wrapper-fluid banners-effect-10">
      @include('layouts._headertemplate2')


	<!-- Main Container  -->
		<div class="container">
  		<div class="row">
        <ul class="breadcrumb">
          <li><a href="{{route('root')}}"><i class="fa fa-home"></i></a></li>
          <li><a href="#">登录</a></li>
        </ul>
  			<div id="content" class="col-md-9">
  				<div class="row">
          <div class="col-sm-6">
            <div class="well ">
              <h2>新用户</h2>
              <p><strong>注册账户</strong></p>
              <p>创建账户后您能够拥有更好的购物体验</p>
              <a href="{{ route('register') }}" class="btn btn-primary">注册</a></div>
          </div>
          <div class="col-sm-6">

                  <div class="well col-sm-12">

              <h2>已注册用户</h2>
              <p><strong>我是已注册用户</strong></p>
              <div class="container">
              <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label class="control-label" for="input-email">电子邮箱</label>
                  <input type="text" name="email" id="input-email" value="" placeholder="E-Mail Address" class="form-control" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label class="control-label" for="input-password">密码</label>
                  <input type="password" name="password" id="input-password" value="" placeholder="Password" class="form-control" required>
                  <a href="{{ route('password.request') }}">
                      忘记密码
                  </a>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pull-left">
                        登录
                    </button>
                    <div class="checkbox pull-right">
                        <label>
                            <input type="checkbox" name="remember" value="{{ old('remember') ? 'checked' : '' }}"> 记住我
                        </label>
                    </div>
                </div>
                  </div>
                </div>
                  </div>
                </div>
              </form>
            </div>

            @auth
            <aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
             <span id="close-sidebar" class="fa fa-times"></span>
             <div class="module">
                 <h3 class="modtitle"><span>快捷访问</span></h3>
                 <div class="module-content custom-border">
                     <ul class="list-box">
                         <li><a href="#">地址簿</a></li>
                         <li><a href="wishlist.html">心愿单</a></li>
                         <li><a href="#">订单历史</a></li>
                     </ul>
                 </div>
             </div>
             </aside>
            @endauth
          </div>

        </div>
  			</div>
	<!-- //Main Container -->


    </div>
	<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
</body>
@section('content')
