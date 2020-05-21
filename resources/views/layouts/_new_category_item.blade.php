@if(isset($category['children']) && count($category['children']) > 0)
  <li class="item-vertical css-menu with-sub-menu hover">
    <p class="close-menu"></p>
    <a href="{{ route('products.search', ['category_id' => $category['id']]) }}"  class="clearfix main-menu" style="margin-left:0px !important;">
      <span>
      <strong style="font-weight:bold !important;">{{ $category['name'] }}</strong>
      </span>
      <b class="fa fa-caret-right"></b>
    </a>
    <div class="sub-menu" data-subwidth="100" style="width:100%;">
    <div class="submenu" style="width: auto; @media screen and (max-width: 1000px){.with-sub-menu.hover .submenu{  width: 100%;}}">
      <div class="content">
        <div class="row">
        <div class="col-sm-12">
          <div class="categories">
          <div class="row">
            <div class="col-sm-12 hover-menu">
              <ul class="megamenu" data-transition="slide" data-animationtime="100">
                <!-- 遍历当前类目的子类目，递归调用自己这个模板 -->
                @each('layouts._new_category_item', $category['children'], 'category')
              </ul>
              </div>
            </div>
          </div>
        </div>
       </div>
      </div>
      </div>
    </div>
  </li>
@else
  <li>
      <a href="{{ route('products.search', ['category_id' => $category['id']]) }}">{{ $category['name'] }}</a>
  </li>
@endif
