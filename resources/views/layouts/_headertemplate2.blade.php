<style>
li.account > a::before {
  content: "\f007";
}
li > a::before {
   font-family: 'FontAwesome';
   margin-right: 7px;
   font-size: 20px;
}
</style>
<!-- Header Container  -->
 <header id="header" class=" typeheader-1">
    <!-- Header Top -->
    <div class="header-top hidden-compact">
       <div class="container">
          <div class="row">
             <div class="col-lg-3 col-md-3 col-xs-4 header-logo ">
                <div class="navbar-logo">
                   <a href="{{ route('products.index') }}"><img src="{{URL::asset('images/catalog/demo/logo/logo-2.png')}}" alt="Your Store" width="110" height="27" title="Your Store"></a>
                </div>
             </div>
             <div class="col-lg-7 col-md-6">
                <div class="module html--sevices ">
                   <div class="clearfix sevices-menu">
                      <ul>
                         <li class="col-md-4 item home">
                            <div class="icon"></div>
                            <div class="text">
                               <a>100 百草路, 郫县</a><a>
                               </a>
                               <p><a>TX 610500, 中国大陆</a></p>
                               <a>
                               </a>
                            </div>
                         </li>
                         <li class="col-md-4 item mail">
                            <div class="icon" > </div>
                            <div class="text">
                               <a class="name" href="#">Sales@okokok.Com</a>
                               <p>( +123 ) 456 7890</p>
                            </div>
                         </li>
                         <li class="col-md-4 item delivery">
                            <div class="icon"> </div>
                            <div class="text">
                               <a class="name" href="#">免运费</a>
                               <p>599元以上订单</p>
                            </div>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
             @auth
             <div class="header-top-right collapsed-block col-lg-2 col-sm-8 col-md-3 col-xs-8 ">
         				<div class="tabBlock" id="TabBlock-1">
         					<ul class="top-link list-inline pull-right">
         						<li class="account " id="my_account">
         							<a data-target="#" title="My Account" class="btn-xs dropdown-toggle" data-toggle="dropdown"><span style="font-size:20px;font-weight:bold;">{{Auth::user()->name}}的账户</span> <span class="fa fa-angle-down"></span></a>
         							<ul class="dropdown-menu">
         								<li><a href="{{route('user_addresses.index')}}">收获地址</a></li>
         								<li><a href="{{ route('orders.index') }}">我的订单</a></li>
         								<li><a href="{{ route('products.favorites') }}">我的收藏</a></li>
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
         						</ul>
         				</div>
       				</div>
             @endauth
          </div>
       </div>
    </div>
    <!-- //Header Top -->
    <!-- Header center -->
    <div class="header-center">
       <div class="container">
          <div class="row">
             <!-- Menuhome -->
             <div class="col-lg-8 col-md-8 col-sm-1 col-xs-3 header-menu">
                <div class="megamenu-style-dev megamenu-dev">
                   <div class="responsive">
                      <nav class="navbar-default">
                         <div class="container-megamenu horizontal">
                            <div class="navbar-header">
                               <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               </button>
                            </div>
                            <div class="megamenu-wrapper">
                               <span id="remove-megamenu" class="fa fa-times"></span>
                               <div class="megamenu-pattern">
                                  <div class="container">
                                     <ul class="megamenu" data-transition="slide" data-animationtime="500">
                                        <li class="full-width menu-home with-sub-menu hover">
                                           <a href="{{ route('root') }}" class="clearfix">
                                           <strong>
                                           主页
                                           </strong>
                                           </a>
                                        </li>
                                        <li class="">
                                           <p class="close-menu"></p>
                                           <a href="blog-page.html" class="clearfix">
                                           <strong>
                                           FAQ
                                           </strong>
                                           </a>
                                        </li>
                                        <li class="">
                                           <p class="close-menu"></p>
                                           <a href="blog-page.html" class="clearfix">
                                           <strong>
                                           博客
                                           </strong>
                                           </a>
                                        </li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </nav>
                   </div>
                </div>
             </div>

             <!--Searchhome-->
             <div class="col-lg-4 col-md-4 col-sm-11 col-xs-9 header-search">
                <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                  <form action="{{ route('products.search') }}">
                     <div id="search0" class="search input-group form-group">
                        <input class="autosearch-input form-control" id="search-input"  type="text" size="50" autocomplete="off" name="search" placeholder="搜索">
                        <span id="search-form-btn" class="input-group-btn">
                        <button type="submit" class="button-search btn btn-default btn-lg"><i class="fa fa-search"></i></button>
                        </span>
                     </div>
                     @if(isset($filters))
                     <input type="hidden" name="order" value="{{ $filters['order'] }}">
                     <input type="hidden" name="limit" value="{{ $filters['limit'] }}">
                     @endif
                  </form>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- //Header center -->
 </header>
<!-- //Header Container  -->
