@extends('layouts.apptemplate')
@section('title','重设密码')

@section('content')
<body class="account-login account res layout-1">
  <div id="wrapper" class="wrapper-fluid banners-effect-10">
     @include('layouts._headertemplate2')
  </div>
  <div class="main-container container">
      <div class="row" style="margin:5%;">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">重置密码</div>

                  <div class="panel-body">
                      @if (session('status'))
                          <div class="alert alert-success">
                              {{ session('status') }}
                          </div>
                      @endif

                      <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                          {{ csrf_field() }}

                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email" class="col-md-4 control-label">电子邮箱:</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-8 pull-right">
                                  <button type="submit" class="btn btn-primary">
                                      发送密钥
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</body>
@endsection
