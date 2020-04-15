@extends('layouts.apptemplate')
@section('title','注册')

@section('content')
<body class="account-login account res layout-1">
    <div id="wrapper" class="wrapper-fluid banners-effect-10">
      @include('layouts._headertemplate2')
    </div>

    <!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="{{route('root')}}"><i class="fa fa-home"></i></a></li>
			<li><a href="{{route('register')}}">Register</a></li>
		</ul>

		<div class="row">
			<div id="content" class="col-md-12">
				<h2 class="title">注册帐号</h2>
				<p>已有帐号？ <a href="{{route('login')}}">登录</a></p>
        <div class="panel panel-default">

        <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label"><strong>昵称</strong></label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label"><strong>E-Mail</strong></label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="(推荐QQ邮箱)" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label"><strong>密码</strong></label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label"><strong>确认密码</strong></label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group {{ $errors->has('captcha') ? ' has-error' : '' }}">
                <label for="captcha" class="col-md-4 control-label"><strong>验证码</strong></label>

                <div class="col-md-3">
                    <input id="captcha" class="form-control" name="captcha" >

                    @if ($errors->has('captcha'))
                        <span class="help-block">
                            <strong>{{ $errors->first('captcha') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                  <img class="thumbnail captcha" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码" style="margin-top:auto;">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-6">
                    <button type="submit" class="btn btn-primary">
                        注册
                    </button>
                </div>
            </div>
        </form>
        </div>
        </div>
			</div>
		</div>
	</div>
	<!-- //Main Container -->
</body>
