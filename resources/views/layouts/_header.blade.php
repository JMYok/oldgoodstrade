<nav class="navbar navbar-default navbar-static-top navbar-orange">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand navbar-font" href="{{ url('/') }}">
              <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                旧物交易
            </a>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
              <li>
                  <a href="#" class="navbar-font">网站特点</a>
              </li>
              <li>
                  <a href="#" class="navbar-font">联系我们</a>
              </li>
              <li>
                  <a href="#" class="navbar-font">FAQ</a>
              </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <!-- 顶部类目菜单开始 -->
                <!-- 判断模板是否有 $categoryTree 变量 -->
                <!-- 类目树 -->
                @if(isset($categoryTree))
                  <li class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle navbar-font" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="categoryTree">所有类目 <b class="caret"></b></a>
                    <ul class="dropdown-menu" aria-labelledby="categoryTree">
                      <!-- 遍历 $categoryTree 集合，将集合中的每一项以 $category 变量注入 layouts._category_item 模板中并渲染 -->
                      @each('layouts._category_item', $categoryTree, 'category')
                    </ul>
                  </li>
                @endif
                <!-- 顶部类目菜单结束 -->

                <li class="dropdown">
                    <a id="ranklist" href="#" class="dropdown-toggle navbar-font" data-toggle="dropdown" role="button" aria-expanded="false">排行榜<b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{route('rank.sale')}}">销量排行</a>
                        </li>
                        <li>
                            <a href="{{route('rank.point')}}">评分排行</a>
                        </li>
                    </ul>
                </li>

                <!-- 登录注册链接开始 -->
                @guest
                    <li><a href="{{ route('login')}}" class="navbar-font">登录</a></li>
                    <li><a href="{{ route('register') }}" class="navbar-font">注册</a></li>
                @else
                 <li class="nav-item">
                    <a class="nav-link mt-1" href="{{ route('cart.index') }}"><span class="glyphicon glyphicon-shopping-cart" style="color:#fff;"></span></a>
                 </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                <img src="/images/touxiang.jpg" height="30px">
                            </span>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('user_addresses.index') }}">收货地址</a>
                            </li>
                            <li>
                                <a href="{{ route('orders.index') }}">我的订单</a>
                            </li>
                            <li>
                                <a href="{{ route('products.favorites') }}">我的收藏</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    退出登录
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
                <!-- 登录注册链接结束 -->
            </ul>
        </div>
    </div>
</nav>
