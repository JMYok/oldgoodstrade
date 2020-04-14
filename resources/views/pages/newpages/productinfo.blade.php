@extends('layouts.apptemplate')
@section('title','商品详情')

@section('content')
<body class="account-login account res layout-1">
    <div id="wrapper" class="wrapper-fluid banners-effect-10">

      <!-- Header Container  -->
       <header id="header" class=" typeheader-1">
          <!-- Header Top -->
          <div class="header-top hidden-compact">
             <div class="container">
                <div class="row">
                   <div class="col-lg-3 col-xs-6 header-logo ">
                      <div class="navbar-logo">
                         <a href="#"><img src="{{URL::asset('images/catalog/demo/logo/logo-2.png')}}" alt="Your Store" width="110" height="27" title="Your Store"></a>
                      </div>
                   </div>
                   <div class="col-lg-7 header-sevices">
                      <div class="module html--sevices ">
                         <div class="clearfix sevices-menu">
                            <ul>
                               <li class="col-md-4 item home">
                                  <div class="icon"></div>
                                  <div class="text">
                                     <a>100 S Manhattan St, Amarillo,</a><a>
                                     </a>
                                     <p><a>TX 79104, North America</a></p>
                                     <a>
                                     </a>
                                  </div>
                               </li>
                               <li class="col-md-4 item mail">
                                  <div class="icon" > </div>
                                  <div class="text">
                                     <a class="name" href="#">Sales@MagenTech.Com</a>
                                     <p>( +123 ) 456 7890</p>
                                  </div>
                               </li>
                               <li class="col-md-4 item delivery">
                                  <div class="icon"> </div>
                                  <div class="text">
                                     <a class="name" href="#">Free Delivery</a>
                                     <p>On order over $89.00</p>
                                  </div>
                               </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-2 col-xs-6 header-cart">
                      <div class="shopping_cart">
                         <div id="cart" class="btn-shopping-cart">
                            <a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
                               <div class="shopcart">
                                  <span class="handle pull-left"></span>
                                  <div class="cart-info">
                                     <h2 class="title-cart">Shopping cart</h2>
                                     <h2 class="title-cart2 hidden">My Cart</h2>
                                     <span class="total-shopping-cart cart-total-full">
                                     <span class="items_cart">2 </span><span class="items_cart2">item(s)</span><span class="items_carts"> - $206.80</span>
                                     </span>
                                  </div>
                               </div>
                            </a>
                            <ul class="dropdown-menu pull-right shoppingcart-box">
                               <li class="content-item">
                                   <table class="table table-striped" style="margin-bottom:10px;">
                                       <tbody>
                                           <tr>
                                               <td class="text-center size-img-cart">
                                                   <a href="product.html"><img src="{{URL::asset('image/catalog/demo/product/travel/10-54x54.jpg')}}" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-thumbnail"></a>
                                               </td>
                                               <td class="text-left"><a href="product.html">Bougainvilleas on Lombard Street,  San Francisco, Tokyo</a>
                                                   <br> - <small>Size M</small> </td>
                                               <td class="text-right">x1</td>
                                               <td class="text-right">$120.80</td>
                                               <td class="text-center">
                                                   <button type="button" title="Remove" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                               </td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   <table class="table table-striped" style="margin-bottom:10px;">
                                       <tbody>
                                           <tr>
                                               <td class="text-center size-img-cart">
                                                   <a href="product.html"><img src="{{URL::asset('image/catalog/demo/product/travel/2.jpg')}}" alt="Canada Travel One or Two European Facials at  Studio" title="Canada Travel One or Two European Facials at  Studio" class="img-thumbnail"></a>
                                               </td>
                                               <td class="text-left"><a href="product.html">Canada Travel One or Two European Facials at  Studio</a>
                                                   <br> - <small>Size M</small> </td>
                                               <td class="text-right">x1</td>
                                               <td class="text-right">$86.00</td>
                                               <td class="text-center">
                                                   <button type="button" title="Remove" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                               </td>
                                           </tr>
                                       </tbody>
                                   </table>
                               </li>
                               <li>
                                  <div class="checkout clearfix">
                                     <a href="cart.html" class="btn btn-view-cart inverse"> View Cart</a>
                                     <a href="checkout.html" class="btn btn-checkout pull-right">Checkout</a>
                                  </div>
                               </li>
                            </ul>
                         </div>
                      </div>
                   </div>
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
                                                 <p class="close-menu"></p>
                                                 <a href="#" class="clearfix">
                                                 <strong>
                                                 Home
                                                 </strong>
                                                 <b class="caret"></b>
                                                 </a>
                                                 <div class="sub-menu" style=" display: none; right: auto;">
                                                    <div class="content" style="display: none; height: 400px;">
                                                       <div class="row">
                                                          <div class="col-sm-12">
                                                             <div class="html ">
                                                                <div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center; margin-bottom: 20px;min-height: 140px;">
                                                                   <a href="index.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                      <img src="image/catalog/demo/menu/feature/layout1.jpg" alt="layout" style="margin: 0 0 10px; border: 1px solid #ddd;display: inline-block">
                                                                      <p>Home Page 1</p>
                                                                   </a>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center; margin-bottom: 20px;min-height: 140px;">
                                                                   <a href="home2.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                      <img src="image/catalog/demo/menu/feature/layout2.jpg" alt="layout" style="margin: 0 0 10px; border: 1px solid #ddd;display: inline-block">
                                                                      <p>Home Page 2 </p>
                                                                   </a>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center; margin-bottom: 20px;min-height: 140px;">
                                                                   <a href="home3.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                      <img src="image/catalog/demo/menu/feature/layout3.jpg" alt="layout" style="margin: 0 0 10px; border: 1px solid #ddd;display: inline-block">
                                                                      <p>Home Page 3 </p>
                                                                   </a>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center; margin-bottom: 20px;min-height: 140px;">
                                                                   <a href="home4.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                      <img src="image/catalog/demo/menu/feature/layout4.jpg" alt="layout" style="margin: 0 0 10px; border: 1px solid #ddd;display: inline-block">
                                                                      <p>Home Page 4 </p>
                                                                   </a>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center; margin-bottom: 20px;min-height: 140px;">
                                                                   <a href="home5.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                      <img src="image/catalog/demo/menu/feature/layout5.jpg" alt="layout" style="margin: 0 0 10px; border: 1px solid #ddd;display: inline-block">
                                                                      <p>Home Page 5 </p>
                                                                   </a>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center; margin-bottom: 20px;min-height: 140px;">
                                                                   <a href="home6.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                      <img src="image/catalog/demo/menu/feature/layout6.jpg" alt="layout" style="margin: 0 0 10px; border: 1px solid #ddd;display: inline-block">
                                                                      <p>Home Page 6 </p>
                                                                   </a>
                                                                </div>
                                                             </div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </li>
                                              <li class="full-width option2 with-sub-menu hover">
                                                 <p class="close-menu"></p>
                                                 <a class="clearfix">
                                                 <strong>
                                                 Features
                                                 </strong>
                                                 <span class="labelopencart"></span>
                                                 <b class="caret"></b>
                                                 </a>
                                                 <div class="sub-menu" style="width: 100%;">
                                                    <div class="content" >
                                                       <div class="row">
                                                          <div class="col-sm-12">
                                                             <div class="html ">
                                                                <div class="row">
                                                                  <div class="col-md-3">
                                                                    <div class="column">
                                                                      <a href="#" class="title-submenu">Listing pages</a>
                                                                      <div>
                                                                        <ul class="row-list">
                                                                          <li><a href="category.html">Category Page 1 </a></li>
                                                                          <li><a href="category-v2.html">Category Page 2</a></li>
                                                                          <li><a href="category-v3.html">Category Page 3</a></li>
                                                                        </ul>

                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-md-3">
                                                                    <div class="column">
                                                                      <a href="#" class="title-submenu">Product pages</a>
                                                                      <div>
                                                                        <ul class="row-list">
                                                                          <li><a href="product.html">Image size - small</a></li>
                                                                          <li><a href="product-v2.html">Image size - medium</a></li>
                                                                          <li><a href="product-v3.html">Image size - big</a></li>
                                                                        </ul>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-md-3">
                                                                    <div class="column">
                                                                      <a href="#" class="title-submenu">Shopping pages</a>
                                                                      <div>
                                                                        <ul class="row-list">
                                                                          <li><a href="cart.html">Shopping Cart Page</a></li>
                                                                          <li><a href="checkout.html">Checkout Page</a></li>
                                                                          <li><a href="compare.html">Compare Page</a></li>
                                                                          <li><a href="wishlist.html">Wishlist Page</a></li>

                                                                        </ul>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="col-md-3">
                                                                    <div class="column">
                                                                      <a href="#" class="title-submenu">My Account pages</a>
                                                                      <div>
                                                                        <ul class="row-list">
                                                                          <li><a href="login.html">Login Page</a></li>
                                                                          <li><a href="register.html">Register Page</a></li>
                                                                          <li><a href="my-account.html">My Account</a></li>
                                                                          <li><a href="order-history.html">Order History</a></li>
                                                                          <li><a href="order-information.html">Order Information</a></li>
                                                                          <li><a href="return.html">Product Returns</a></li>
                                                                          <li><a href="gift-voucher.html">Gift Voucher</a></li>
                                                                        </ul>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                             </div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </li>
                                              <li class="item-style1 content-full with-sub-menu hover">
                                                 <p class="close-menu"></p>
                                                 <a class="clearfix">
                                                 <strong>
                                                 Colections
                                                 </strong>
                                                 <span class="labelNew"></span>
                                                 <b class="caret"></b>
                                                 </a>
                                                 <div class="sub-menu" style="width: 100%; right: 0px;">
                                                    <div class="content">
                                                       <div class="row">
                                                          <div class="col-sm-3">
                                                             <div class="link ">
                                                                <img src="image/catalog/demo/menu/menu-img1.jpg" alt="" style="width: 100%;">
                                                             </div>
                                                          </div>
                                                          <div class="col-sm-3">
                                                             <div class="link ">
                                                                <img src="image/catalog/demo/menu/menu-img2.jpg" alt="" style="width: 100%;">
                                                             </div>
                                                          </div>
                                                          <div class="col-sm-3">
                                                             <div class="link ">
                                                                <img src="image/catalog/demo/menu/menu-img3.jpg" alt="" style="width: 100%;">
                                                             </div>
                                                          </div>
                                                          <div class="col-sm-3">
                                                             <div class="link ">
                                                                <img src="image/catalog/demo/menu/menu-img4.jpg" alt="" style="width: 100%;">
                                                             </div>
                                                          </div>
                                                       </div>
                                                       <div class="border"></div>
                                                       <div class="row">
                                                          <div class="col-sm-3">
                                                             <div class="categories ">
                                                                <div class="row">
                                                                   <div class="col-sm-12 static-menu">
                                                                      <div class="menu">
                                                                         <ul>
                                                                            <li>
                                                                               <a href="category-v3.html" onclick="window.location = '#';" class="main-menu">Food &amp; Restaurant</a>
                                                                               <ul>
                                                                                  <li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Women Fashion</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Bags</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Fashion</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Trending</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Macs</a></li>
                                                                               </ul>
                                                                            </li>
                                                                         </ul>
                                                                      </div>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                          </div>
                                                          <div class="col-sm-3">
                                                             <div class="categories ">
                                                                <div class="row">
                                                                   <div class="col-sm-12 static-menu">
                                                                      <div class="menu">
                                                                         <ul>
                                                                            <li>
                                                                               <a href="#" onclick="window.location = '#';" class="main-menu">Fashion &amp; Accessories</a>
                                                                               <ul>
                                                                                  <li><a href="#" onclick="window.location = '#';">Pearl Jewelry</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Destinations</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Camera New</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Spa &amp; Massage</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Camera New</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Cell &amp; Cable</a></li>
                                                                               </ul>
                                                                            </li>
                                                                         </ul>
                                                                      </div>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                          </div>
                                                          <div class="col-sm-3">
                                                             <div class="categories ">
                                                                <div class="row">
                                                                   <div class="col-sm-12 static-menu">
                                                                      <div class="menu">
                                                                         <ul>
                                                                            <li>
                                                                               <a href="#" onclick="window.location = '#';" class="main-menu">Sport &amp; Entertaiment</a>
                                                                               <ul>
                                                                                  <li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Fashion &amp; Accessories</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Bags</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Men Fashion</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Knage unget</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Qunge genga</a></li>
                                                                               </ul>
                                                                            </li>
                                                                         </ul>
                                                                      </div>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                          </div>
                                                          <div class="col-sm-3">
                                                             <div class="categories ">
                                                                <div class="row">
                                                                   <div class="col-sm-12 static-menu">
                                                                      <div class="menu">
                                                                         <ul>
                                                                            <li>
                                                                               <a href="#" onclick="window.location = '#';" class="main-menu">Mobile &amp; Table</a>
                                                                               <ul>
                                                                                  <li><a href="#" onclick="window.location = '#';">Web Cameras</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Windows</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Pearl mens</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Pearl Jewelry</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Spa &amp; Massage</a></li>
                                                                               </ul>
                                                                            </li>
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
                                              <li class="item-style2 content-full feafute with-sub-menu hover">
                                                 <p class="close-menu"></p>
                                                 <a class="clearfix">
                                                 <strong>
                                                 Accessories
                                                 </strong>
                                                 <b class="caret"></b>
                                                 </a>
                                                 <div class="sub-menu" style="width: 100%">
                                                    <div class="content">
                                                       <div class="row">
                                                          <div class="col-sm-8">
                                                             <div class="categories ">
                                                                <div class="row">
                                                                   <div class="col-sm-4 static-menu">
                                                                      <div class="menu">
                                                                         <ul>
                                                                            <li>
                                                                               <a href="#" onclick="window.location = '#';" class="main-menu">Fashion &amp; Accessories</a>
                                                                               <ul>
                                                                                  <li><a href="#" onclick="window.location = '#';">Digital &amp; Electronics</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Bluetooth Speakers</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Cell &amp; Cable</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Spa &amp; Massage</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Sport &amp; Entertaiment</a></li>
                                                                               </ul>
                                                                            </li>
                                                                            <li>
                                                                               <a href="#" onclick="window.location = '#';" class="main-menu">Pearl mens</a>
                                                                               <ul>
                                                                                  <li><a href="#" onclick="window.location = '#';">Web Cameras</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Windows</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Knage unget</a></li>
                                                                               </ul>
                                                                            </li>
                                                                         </ul>
                                                                      </div>
                                                                   </div>
                                                                   <div class="col-sm-4 static-menu">
                                                                      <div class="menu">
                                                                         <ul>
                                                                            <li>
                                                                               <a href="#" onclick="window.location = '#';" class="main-menu">Sport &amp; Entertaiment</a>
                                                                               <ul>
                                                                                  <li><a href="#" onclick="window.location = '#';">Jean</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Latenge mange</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Punge nenune</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Trending</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
                                                                               </ul>
                                                                            </li>
                                                                            <li>
                                                                               <a href="#" onclick="window.location = '#';" class="main-menu">Mobile &amp; Table</a>
                                                                               <ul>
                                                                                  <li><a href="#" onclick="window.location = '#';">Case</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Laptop &amp; Notebook</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Laptops &amp; Notebooks</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Dress Ladies</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Kitchen</a></li>
                                                                               </ul>
                                                                            </li>
                                                                         </ul>
                                                                      </div>
                                                                   </div>
                                                                   <div class="col-sm-4 static-menu">
                                                                      <div class="menu">
                                                                         <ul>
                                                                            <li>
                                                                               <a href="#" onclick="window.location = '#';" class="main-menu">Cell &amp; Cable</a>
                                                                               <ul>
                                                                                  <li><a href="#" onclick="window.location = '#';">Bluetooth Speakers</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Fashion &amp; Accessories</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Qunge genga</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Punge nenune</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Punge nenune</a></li>
                                                                               </ul>
                                                                            </li>
                                                                            <li>
                                                                               <a href="#" onclick="window.location = '#';" class="main-menu">Food &amp; Restaurant</a>
                                                                               <ul>
                                                                                  <li><a href="#" onclick="window.location = '#';">Fashion</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Bags</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Necklaces</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
                                                                                  <li><a href="#" onclick="window.location = '#';">Men Fashion</a></li>
                                                                               </ul>
                                                                            </li>
                                                                         </ul>
                                                                      </div>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                          </div>
                                                          <div class="col-sm-4">
                                                             <div class="product best-sellers-menu">
                                                                <div class="image">
                                                                   <a href="#" onclick="window.location = '#'"><img src="image/catalog/demo/product/fashion/24.png" alt=""></a>
                                                                </div>
                                                                <div class="name"><a href="#" onclick="window.location = '#'">Est Officia Including Shoes Beautiful Pieces Canaz</a></div>
                                                                <div class="price">
                                                                   $98.00
                                                                </div>
                                                             </div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                 </div>
                                              </li>
                                              <li class="style-page with-sub-menu hover">
                                                 <p class="close-menu"></p>
                                                 <a class="clearfix">
                                                 <strong>
                                                 Pages
                                                 </strong>
                                                 <b class="caret"></b>
                                                 </a>
                                                 <div class="sub-menu" style="width: 40%;">
                                                    <div class="content" >
                                                       <div class="row">
                                                        <div class="col-md-6">
                                                          <ul class="row-list">
                                                            <li><a class="subcategory_item" href="faq.html">FAQ</a></li>

                                                            <li><a class="subcategory_item" href="sitemap.html">Site Map</a></li>
                                                            <li><a class="subcategory_item" href="contact.html">Contact us</a></li>
                                                            <li><a class="subcategory_item" href="banner-effect.html">Banner Effect</a></li>
                                                          </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                          <ul class="row-list">
                                                            <li><a class="subcategory_item" href="about-us.html">About Us 1</a></li>
                                                            <li><a class="subcategory_item" href="about-us-2.html">About Us 2</a></li>
                                                            <li><a class="subcategory_item" href="about-us-3.html">About Us 3</a></li>
                                                            <li><a class="subcategory_item" href="about-us-4.html">About Us 4</a></li>
                                                          </ul>
                                                        </div>
                                                      </div>
                                                    </div>
                                                 </div>
                                              </li>
                                              <li class="">
                                                 <p class="close-menu"></p>
                                                 <a href="blog-page.html" class="clearfix">
                                                 <strong>
                                                 Blog
                                                 </strong>
                                                 </a>
                                              </li>
                                              <li class="deal-h5 hidden">
                                                 <p class="close-menu"></p>
                                                 <a href="#" class="clearfix">
                                                 <strong>
                                                 <img src="image/catalog/demo/menu/hot-block.png" alt="">Buy This Theme!
                                                 </strong>
                                                 </a>
                                              </li>
                                              <li class="deal-h5 hidden">
                                                 <p class="close-menu"></p>
                                                 <a href="#" class="clearfix">
                                                 <strong>
                                                 Today Deals
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
                         <form method="GET" action="index.php">
                            <div id="search0" class="search input-group form-group">
                               <div class="select_category filter_type  icon-select">
                                  <select class="no-border" name="category_id">
                                     <option value="0">All Categories </option>
                                     <option value="82 ">Book Stationery </option>
                                     <option value="65">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Girls New </option>
                                     <option value="56">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kitchen </option>
                                     <option value="61">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pearl mens </option>
                                     <option value="38 ">Laptop &amp; Notebook </option>
                                     <option value="52 ">Spa &amp; Massage </option>
                                     <option value="44">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Latenge mange </option>
                                     <option value="53">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Necklaces </option>
                                     <option value="54">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pearl Jewelry </option>
                                     <option value="55">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Slider 925 </option>
                                     <option value="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phones &amp; PDAs </option>
                                     <option value="59 ">Sport &amp; Entertaiment </option>
                                     <option value="69">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Camping &amp; Hiking </option>
                                     <option value="70">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cusen mariot </option>
                                     <option value="74">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Engite nanet </option>
                                     <option value="64">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fashion </option>
                                     <option value="66">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Men </option>
                                     <option value="60 ">Travel &amp; Vacation </option>
                                     <option value="71">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Best Tours </option>
                                     <option value="72">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cruises </option>
                                     <option value="73">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Destinations </option>
                                     <option value="67">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hotel &amp; Resort </option>
                                     <option value="63">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Infocus </option>
                                     <option value="18 ">Laptops &amp; Notebooks </option>
                                     <option value="46">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Macs </option>
                                     <option value="45">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Windows </option>
                                     <option value="34 ">Food &amp; Restaurant </option>
                                     <option value="47">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hanet magente </option>
                                     <option value="43">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Knage unget </option>
                                     <option value="48">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Punge nenune </option>
                                     <option value="49">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Qunge genga </option>
                                     <option value="50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tange manue </option>
                                     <option value="51">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Web Cameras </option>
                                     <option value="39 ">Shop Collection </option>
                                     <option value="40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hanet magente </option>
                                     <option value="41">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Knage unget </option>
                                     <option value="42">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Latenge mange </option>
                                     <option value="58">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Punge nenune </option>
                                     <option value="17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Qunge genga </option>
                                     <option value="57">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tange manue </option>
                                     <option value="35 ">Fashion &amp; Accessories </option>
                                     <option value="36">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dress Ladies </option>
                                     <option value="31">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jean </option>
                                     <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Men Fashion </option>
                                     <option value="88">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T-shirt </option>
                                     <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trending </option>
                                     <option value="37">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Western Wear </option>
                                     <option value="20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Women Fashion </option>
                                     <option value="32">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bags </option>
                                     <option value="33 ">Digital &amp; Electronics </option>
                                     <option value="83">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cell Computers </option>
                                     <option value="84">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Computer Accessories </option>
                                     <option value="85">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Computer Headsets </option>
                                     <option value="86">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Desna Jacket </option>
                                     <option value="87">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Electronics </option>
                                     <option value="89">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Headphone </option>
                                     <option value="90">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Laptops </option>
                                     <option value="78">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mobiles </option>
                                     <option value="79">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sound </option>
                                     <option value="80">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; USB &amp; HDD </option>
                                     <option value="81">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VGA and CPU </option>
                                     <option value="62">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Video &amp; Camera </option>
                                     <option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Video You </option>
                                     <option value="75">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wireless Speakers </option>
                                     <option value="29">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Camera New </option>
                                     <option value="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Case </option>
                                     <option value="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cell &amp; Cable </option>
                                     <option value="77">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mobile &amp; Table </option>
                                     <option value="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bluetooth Speakers </option>
                                  </select>
                               </div>
                               <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">

                               <span class="input-group-btn">
                               <button type="submit" class="button-search btn btn-default btn-lg" name="submit_search"><i class="fa fa-search"></i><span class="hidden">Search</span></button>
                               </span>
                            </div>
                            <input type="hidden" name="route" value="product/search">
                         </form>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- //Header center -->
       </header>
      <!-- //Header Container  -->


      <!-- Main Container  -->
      	<div class="breadcrumbs">
      		<div class="container">
      			<div class="title-breadcrumb">
      				Canada Travel One or Two European Facials at  Studio
      			</div>
      			<ul class="breadcrumb-cate">
      				<li><a href="index.html"><i class="fa fa-home"></i></a></li>
      				<li><a href="#">One or Two European Facials at  Studio</a></li>
      			</ul>
      		</div>
      	</div>

      	<div class="container product-detail">
      	   <div class="row">

      		<div id="content" class="col-md-9 col-sm-12 col-xs-12">
        			<a href="javascript:void(0)" class="open-sidebar hidden-lg hidden-md"><i class="fa fa-bars"></i>Sidebar</a>
        			<div class="sidebar-overlay "></div>
        			<div class="product-view product-detail">
        				<div class="product-view-inner clearfix">
        				   <div class="content-product-left  col-md-5 col-sm-6 col-xs-12">
        					  <div class="so-loadeding"></div>
        					  <div class="large-image  class-honizol">
        						 <div class="box-label">
        							<span class="label-product label-sale">
        							-30%
        							</span>
        						 </div>
        						 <img class="product-image-zoom" src="image/catalog/demo/product/travel/2.jpg" data-zoom-image="image/catalog/demo/product/travel/2.jpg" title="Canada Travel One or Two European Facials at  Studio" alt="Canada Travel One or Two European Facials at  Studio">
        					  </div>
        					  <div id="thumb-slider" class="full_slider category-slider-inner products-list yt-content-slider" data-rtl="no" data-autoplay="no" data-pagination="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="3" data-items_column1="3" data-items_column2="3" data-items_column3="3" data-items_column4="2" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
        							   <div class="owl2-item " >
        								  <div class="image-additional">
        									 <a data-index="0" class="img thumbnail" data-image="image/catalog/demo/product/travel/2.jpg" title="Canada Travel One or Two European Facials at  Studio">
        									 <img src="image/catalog/demo/product/travel/2.jpg" title="Canada Travel One or Two European Facials at  Studio" alt="Canada Travel One or Two European Facials at  Studio">
        									 </a>
        								  </div>
        							   </div>
        							   <div class="owl2-item ">
        								  <div class="image-additional">
        									 <a data-index="1" class="img thumbnail " data-image="image/catalog/demo/product/travel/12.jpg" title="Canada Travel One or Two European Facials at  Studio">
        									 <img src="image/catalog/demo/product/travel/12.jpg" title="Canada Travel One or Two European Facials at  Studio" alt="Canada Travel One or Two European Facials at  Studio">
        									 </a>
        								  </div>
        							   </div>
        							   <div class="owl2-item ">
        								  <div class="image-additional">
        									 <a data-index="2" class="img thumbnail " data-image="image/catalog/demo/product/travel/13.jpg" title="Canada Travel One or Two European Facials at  Studio">
        									 <img src="image/catalog/demo/product/travel/13.jpg" title="Canada Travel One or Two European Facials at  Studio" alt="Canada Travel One or Two European Facials at  Studio">
        									 </a>
        								  </div>
        							   </div>


        					  </div>
        				   </div>
        				   <div class="content-product-right col-md-7 col-sm-6 col-xs-12">
        					  <div class="countdown_box">
        						 <div class="countdown_inner">
        							<div class="Countdown-1">
        							</div>
        						 </div>
        					  </div>
        					  <div class="title-product">
        						 <h1>Canada Travel One or Two European Facials at  Studio</h1>
        					  </div>
        					  <div class="box-review">
        						 <div class="rating">
        							<div class="rating-box">
        							   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
        							   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
        							   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
        							   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
        							   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
        							</div>
        						 </div>
        						 <a class="reviews_button" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a> / <a class="write_review_button" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
        					  </div>
        					  <div class="product_page_price price" itemscope="" itemtype="http://data-vocabulary.org/Offer">
        						 <span class="price-new"><span id="price-special">$86.00</span></span>
        						 <span class="price-old" id="price-old">$122.00</span>
        						 <div class="price-tax"><span>Ex Tax:</span> $70.00</div>
        					  </div>
        					  <div class="product-box-desc">
        						 <div class="inner-box-desc">
        							<div class="brand"><span>Brand: </span><a href="#">HTC</a></div>
        							<div class="model"><span>Product Code: </span> Simple Product</div>
        							<div class="reward"><span>Reward Points:</span> 400</div>
        							<div class="stock"><span>Availability:</span> <i class="fa fa-check-square-o"></i>In Stock</div>
        						 </div>
        					  </div>
        					  <div class="short_description form-group">
        						 <h3>OverView</h3>
        					  </div>
        					  <div id="product">
        						 <div class="box-cart clearfix">
        							<div class="form-group box-info-product">
        							   <div class="option quantity">
        								  <div class="input-group quantity-control" unselectable="on" style="user-select: none;">
        									 <input class="form-control" type="text" name="quantity" value="1">
        									 <input type="hidden" name="product_id" value="108">
        									 <span class="input-group-addon product_quantity_down fa fa-caret-down"></span>
        									 <span class="input-group-addon product_quantity_up fa fa-caret-up"></span>
        								  </div>
        							   </div>
        							   <div class="cart">
        								  <input type="button" value="Add to Cart" class="addToCart btn btn-mega btn-lg " data-toggle="tooltip" title="" onclick="cart.add('30');" data-original-title="Add to cart">
        							   </div>
        							   <div class="add-to-links wish_comp">
        								  <ul class="blank">
        									 <li class="wishlist">
        										<a onclick="wishlist.add(108);"><i class="fa fa-heart"></i></a>
        									 </li>
        									 <li class="compare">
        										<a onclick="compare.add(108);"><i class="fa fa-random"></i></a>
        									 </li>
        								  </ul>
        							   </div>
        							</div>
        							<div class="clearfix"></div>
        						 </div>
        					  </div>
        				   </div>
        				</div>
        			 </div>
        			<div class="product-attribute module">
        				<div class="row content-product-midde clearfix">
        				   <div class="col-xs-12">
        					  <div class="producttab ">
        						 <div class="tabsslider  vertical-tabs ">
        							<ul class="nav nav-tabs font-sn col-lg-3 col-sm-4 " style="padding: 0">
        							   <li class="active"><a data-toggle="tab" href="#tab-description">Description</a></li>
        							   <li><a href="#tab-review" data-toggle="tab">Reviews (0)</a></li>
        							</ul>
        							<div class="tab-content col-lg-9 col-sm-8 col-xs-12 ">
        							   <div class="tab-pane active" id="tab-description">
        								  <div>
        									 <strong>Born to be worn.</strong>
        									 <p>
        										Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your musical fashion statement.
        									 </p>
        									 <p>
        										<strong>Random meets rhythm.</strong>
        									 </p>
        									 <p>
        										With iTunes autofill, iPod shuffle can deliver a new musical experience every time you sync. For more randomness, you can shuffle songs during playback with the slide of a switch.
        									 </p>
        									 <strong>Everything is easy.</strong>
        									 <p>
        										Charge and sync with the included USB dock. Operate the iPod shuffle controls with one hand. Enjoy up to 12 hours straight of skip-free music playback.
        									 </p>
        								  </div>
        							   </div>
        							   <div class="tab-pane" id="tab-review">
        								  <form class="form-horizontal" id="form-review">
        									 <div id="review">
        										<p>There are no reviews for this product.</p>
        									 </div>
        									 <h2>Write a review</h2>
        									 <div class="form-group required">
        										<div class="col-sm-12">
        										   <label class="control-label" for="input-name">Your Name</label>
        										   <input type="text" name="name" value="" id="input-name" class="form-control">
        										</div>
        									 </div>
        									 <div class="form-group required">
        										<div class="col-sm-12">
        										   <label class="control-label" for="input-review">Your Review</label>
        										   <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
        										   <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
        										</div>
        									 </div>
        									 <div class="form-group required">
        										<div class="col-sm-12">
        										   <label class="control-label">Rating</label>
        										   &nbsp;&nbsp;&nbsp; Bad&nbsp;
        										   <input type="radio" name="rating" value="1">
        										   &nbsp;
        										   <input type="radio" name="rating" value="2">
        										   &nbsp;
        										   <input type="radio" name="rating" value="3">
        										   &nbsp;
        										   <input type="radio" name="rating" value="4">
        										   &nbsp;
        										   <input type="radio" name="rating" value="5">
        										   &nbsp;Good
        										</div>
        									 </div>
        									 <div class="buttons clearfix" style="visibility: hidden; display: block;">
        										<div class="pull-right">
        										   <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
        										</div>
        									 </div>
        								  </form>
        							   </div>
        							</div>
        						 </div>
        					  </div>
        				   </div>
        				</div>
        			</div>

        			<div class="content-product-bottom bottom-product clearfix">
        				<ul class="nav nav-tabs">
        					<li class="active"><a data-toggle="tab" href="#product-related">Related Products</a></li>
        					<li><a data-toggle="tab" href="#product-upsell">UPSELL PRODUCTS</a></li>
        				</ul>
        				<div class="tab-content">
        					<div id="product-related" class="tab-pane fade in active">
        						<div class="clearfix module horizontal">
        							<div class="products-category">
        								<div class="category-slider-inner products-list yt-content-slider releate-products grid" data-rtl="no" data-autoplay="no" data-pagination="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="3" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
        									<div class="product-layout">
        										<div class="product-item-container">
        											<div class="left-block">
        												<div class="product-image-container">
        													<a href="product.html" title="Portable  Compact Charger (External Battery) t45 ">
        														<img src="image/catalog/demo/product/electronic/3.jpg " alt="Portable  Compact Charger (External Battery) t45" title="Portable  Compact Charger (External Battery) t45 " class="img-1 img-responsive">
        													</a>
        												</div>
        											</div>
        											<div class="box-label">
        												<span class="label-product label-sale">
        													 -40%
        												</span>
        											</div>
        											<div class="right-block">
        												<div class="caption">
        													<h4><a href="product.html">Portable  Compact Charger (External Battery) t45 </a></h4>
        													<div class="total-price clearfix" style="visibility: hidden; display: block;">
        														<div class="price price-left">
        															<span class="price-new">$74.00</span>
        															<span class="price-old">$122.00</span>
        														</div>
        														<div class="price-sale price-right">
        															<span class="discount">
        																-40%
        																<strong>OFF</strong>
        															</span>
        														</div>
        													</div>
        													<div class="description hidden">
        														<p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the.. </p>
        													</div>
        												</div>
        												<div class="button-group">
        													<div class="button-inner so-quickview">
        														<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview "> <i class="fa fa-search"></i> </a>
        														<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('78');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        														<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('78');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
        														<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('78', '2');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
        													</div>
        												</div>
        											</div>
        										</div>
        									</div>
        									<div class="product-layout">
        										<div class="product-item-container">
        											<div class="left-block">
        												<div class="product-image-container">
        													<a href="product.html" title="Portable  Compact Charger (External Battery) t45 ">
        														<img src="image/catalog/demo/product/electronic/6.jpg " alt="Portable  Compact Charger (External Battery) t45" title="Portable  Compact Charger (External Battery) t45 " class="img-1 img-responsive">
        													</a>
        												</div>
        											</div>
        											<div class="box-label">
        												<span class="label-product label-sale">
        													 -40%
        												</span>
        											</div>
        											<div class="right-block">
        												<div class="caption">
        													<h4><a href="product.html">Portable  Compact Charger (External Battery) t45 </a></h4>
        													<div class="total-price clearfix" style="visibility: hidden; display: block;">
        														<div class="price price-left">
        															<span class="price-new">$74.00</span>
        															<span class="price-old">$122.00</span>
        														</div>
        														<div class="price-sale price-right">
        															<span class="discount">
        																-40%
        																<strong>OFF</strong>
        															</span>
        														</div>
        													</div>
        													<div class="description hidden">
        														<p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the.. </p>
        													</div>
        												</div>
        												<div class="button-group">
        													<div class="button-inner so-quickview">
        														<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview "> <i class="fa fa-search"></i> </a>
        														<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('78');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        														<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('78');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
        														<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('78', '2');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
        													</div>
        												</div>
        											</div>
        										</div>
        									</div>
        									<div class="product-layout">
        										<div class="product-item-container">
        											<div class="left-block">
        												<div class="product-image-container">
        													<a href="product.html" title="Portable  Compact Charger (External Battery) t45 ">
        														<img src="image/catalog/demo/product/electronic/8.jpg " alt="Portable  Compact Charger (External Battery) t45" title="Portable  Compact Charger (External Battery) t45 " class="img-1 img-responsive">
        													</a>
        												</div>
        											</div>
        											<div class="box-label">
        												<span class="label-product label-sale">
        													 -40%
        												</span>
        											</div>
        											<div class="right-block">
        												<div class="caption">
        													<h4><a href="product.html">Portable  Compact Charger (External Battery) t45 </a></h4>
        													<div class="total-price clearfix" style="visibility: hidden; display: block;">
        														<div class="price price-left">
        															<span class="price-new">$74.00</span>
        															<span class="price-old">$122.00</span>
        														</div>
        														<div class="price-sale price-right">
        															<span class="discount">
        																-40%
        																<strong>OFF</strong>
        															</span>
        														</div>
        													</div>
        													<div class="description hidden">
        														<p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the.. </p>
        													</div>
        												</div>
        												<div class="button-group">
        													<div class="button-inner so-quickview">
        														<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview "> <i class="fa fa-search"></i> </a>
        														<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('78');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        														<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('78');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
        														<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('78', '2');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
        													</div>
        												</div>
        											</div>
        										</div>
        									</div>
        									<div class="product-layout">
        										<div class="product-item-container">
        											<div class="left-block">
        												<div class="product-image-container">
        													<a href="product.html" title="Portable  Compact Charger (External Battery) t45 ">
        														<img src="image/catalog/demo/product/electronic/28.jpg " alt="Portable  Compact Charger (External Battery) t45" title="Portable  Compact Charger (External Battery) t45 " class="img-1 img-responsive">
        													</a>
        												</div>
        											</div>
        											<div class="box-label">
        												<span class="label-product label-sale">
        													 -40%
        												</span>
        											</div>
        											<div class="right-block">
        												<div class="caption">
        													<h4><a href="product.html">Portable  Compact Charger (External Battery) t45 </a></h4>
        													<div class="total-price clearfix" style="visibility: hidden; display: block;">
        														<div class="price price-left">
        															<span class="price-new">$74.00</span>
        															<span class="price-old">$122.00</span>
        														</div>
        														<div class="price-sale price-right">
        															<span class="discount">
        																-40%
        																<strong>OFF</strong>
        															</span>
        														</div>
        													</div>
        													<div class="description hidden">
        														<p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the.. </p>
        													</div>
        												</div>
        												<div class="button-group">
        													<div class="button-inner so-quickview">
        														<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview "> <i class="fa fa-search"></i> </a>
        														<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('78');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        														<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('78');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
        														<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('78', '2');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
        													</div>
        												</div>
        											</div>
        										</div>
        									</div>
        								</div>
        							</div>
        						</div>
        					</div>
        					<div id="product-upsell" class="tab-pane fade in">
        						<div class="clearfix module horizontal">
        							<div class="products-category">
        								<div class="category-slider-inner products-list yt-content-slider releate-products grid"releate-products products-list grid contentslider" data-rtl="no" data-autoplay="no" data-pagination="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="3" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
        									<div class="product-layout">
        										<div class="product-item-container">
        											<div class="left-block">
        												<div class="product-image-container">
        													<a href="product.html" title="Portable  Compact Charger (External Battery) t45 ">
        														<img src="image/catalog/demo/product/electronic/4.jpg " alt="Portable  Compact Charger (External Battery) t45" title="Portable  Compact Charger (External Battery) t45 " class="img-1 img-responsive">
        													</a>
        												</div>
        											</div>
        											<div class="box-label">
        												<span class="label-product label-sale">
        													 -40%
        												</span>
        											</div>
        											<div class="right-block">
        												<div class="caption">
        													<h4><a href="product.html">Portable  Compact Charger (External Battery) t45 </a></h4>
        													<div class="total-price clearfix" style="visibility: hidden; display: block;">
        														<div class="price price-left">
        															<span class="price-new">$74.00</span>
        															<span class="price-old">$122.00</span>
        														</div>
        														<div class="price-sale price-right">
        															<span class="discount">
        																-40%
        																<strong>OFF</strong>
        															</span>
        														</div>
        													</div>
        													<div class="description hidden">
        														<p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the.. </p>
        													</div>
        												</div>
        												<div class="button-group">
        													<div class="button-inner so-quickview">
        														<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview "> <i class="fa fa-search"></i> </a>
        														<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('78');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        														<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('78');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
        														<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('78', '2');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
        													</div>
        												</div>
        											</div>
        										</div>
        									</div>
        									<div class="product-layout">
        										<div class="product-item-container">
        											<div class="left-block">
        												<div class="product-image-container">
        													<a href="product.html" title="Portable  Compact Charger (External Battery) t45 ">
        														<img src="image/catalog/demo/product/electronic/28.jpg " alt="Portable  Compact Charger (External Battery) t45" title="Portable  Compact Charger (External Battery) t45 " class="img-1 img-responsive">
        													</a>
        												</div>
        											</div>
        											<div class="box-label">
        												<span class="label-product label-sale">
        													 -40%
        												</span>
        											</div>
        											<div class="right-block">
        												<div class="caption">
        													<h4><a href="product.html">Portable  Compact Charger (External Battery) t45 </a></h4>
        													<div class="total-price clearfix" style="visibility: hidden; display: block;">
        														<div class="price price-left">
        															<span class="price-new">$74.00</span>
        															<span class="price-old">$122.00</span>
        														</div>
        														<div class="price-sale price-right">
        															<span class="discount">
        																-40%
        																<strong>OFF</strong>
        															</span>
        														</div>
        													</div>
        													<div class="description hidden">
        														<p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the.. </p>
        													</div>
        												</div>
        												<div class="button-group">
        													<div class="button-inner so-quickview">
        														<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview "> <i class="fa fa-search"></i> </a>
        														<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('78');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        														<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('78');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
        														<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('78', '2');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
        													</div>
        												</div>
        											</div>
        										</div>
        									</div>
        									<div class="product-layout">
        										<div class="product-item-container">
        											<div class="left-block">
        												<div class="product-image-container">
        													<a href="product.html" title="Portable  Compact Charger (External Battery) t45 ">
        														<img src="image/catalog/demo/product/electronic/11.jpg " alt="Portable  Compact Charger (External Battery) t45" title="Portable  Compact Charger (External Battery) t45 " class="img-1 img-responsive">
        													</a>
        												</div>
        											</div>
        											<div class="box-label">
        												<span class="label-product label-sale">
        													 -40%
        												</span>
        											</div>
        											<div class="right-block">
        												<div class="caption">
        													<h4><a href="product.html">Portable  Compact Charger (External Battery) t45 </a></h4>
        													<div class="total-price clearfix" style="visibility: hidden; display: block;">
        														<div class="price price-left">
        															<span class="price-new">$74.00</span>
        															<span class="price-old">$122.00</span>
        														</div>
        														<div class="price-sale price-right">
        															<span class="discount">
        																-40%
        																<strong>OFF</strong>
        															</span>
        														</div>
        													</div>
        													<div class="description hidden">
        														<p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the.. </p>
        													</div>
        												</div>
        												<div class="button-group">
        													<div class="button-inner so-quickview">
        														<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview "> <i class="fa fa-search"></i> </a>
        														<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('78');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        														<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('78');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
        														<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('78', '2');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
        													</div>
        												</div>
        											</div>
        										</div>
        									</div>
        								</div>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
      		</div>
          <aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
             <span id="close-sidebar" class="fa fa-times"></span>
             <div class="module category-style">
              <h3 class="modtitle"><span>Categories </span></h3>
              <div class="mod-content box-category">
                 <ul class="accordion" id="accordion-category">
                  <li class="panel">
                   <a href="#">Book Stationery </a>
                   <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category0 "></a></span>
                   <div id="category0" class="panel-collapse collapse  " style="clear:both">
                    <ul>
                       <li>
                        <a href="#">Girls New </a>
                       </li>
                       <li>
                        <a href="#">Kitchen </a>
                       </li>
                       <li>
                        <a href="#">Pearl mens </a>
                       </li>
                    </ul>
                   </div>
                  </li>
                  <li class="panel">
                   <a href="#">Laptop &amp; Notebook </a>
                  </li>
                  <li class="panel">
                   <a href="#">Spa &amp; Massage </a>
                   <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category2 "></a></span>
                   <div id="category2" class="panel-collapse collapse  " style="clear:both">
                    <ul>
                       <li>
                        <a href="#">Latenge mange </a>
                       </li>
                       <li>
                        <a href="#">Necklaces </a>
                       </li>
                       <li>
                        <a href="#">Pearl Jewelry </a>
                       </li>
                       <li>
                        <a href="#">Slider 925 </a>
                       </li>
                       <li>
                        <a href="#">Phones &amp; PDAs </a>
                       </li>
                    </ul>
                   </div>
                  </li>
                  <li class="panel">
                   <a href="#">Sport &amp; Entertaiment </a>
                   <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category3 "></a></span>
                   <div id="category3" class="panel-collapse collapse  " style="clear:both">
                    <ul>
                       <li>
                        <a href="#">Camping &amp; Hiking </a>
                       </li>
                       <li>
                        <a href="#">Cusen mariot </a>
                       </li>
                       <li>
                        <a href="#">Engite nanet </a>
                       </li>
                       <li>
                        <a href="#">Fashion </a>
                       </li>
                       <li>
                        <a href="#">Men </a>
                       </li>
                    </ul>
                   </div>
                  </li>
                  <li class="panel">
                   <a href="#">Travel &amp; Vacation </a>
                   <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category4 "></a></span>
                   <div id="category4" class="panel-collapse collapse  " style="clear:both">
                    <ul>
                       <li>
                        <a href="#">Best Tours </a>
                       </li>
                       <li>
                        <a href="#">Cruises </a>
                       </li>
                       <li>
                        <a href="#">Destinations </a>
                       </li>
                       <li>
                        <a href="#">Hotel &amp; Resort </a>
                       </li>
                       <li>
                        <a href="#">Infocus </a>
                       </li>
                    </ul>
                   </div>
                  </li>
                  <li class="panel">
                   <a href="#">Laptops &amp; Notebooks </a>
                   <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category5 "></a></span>
                   <div id="category5" class="panel-collapse collapse  " style="clear:both">
                    <ul>
                       <li>
                        <a href="#">Macs </a>
                       </li>
                       <li>
                        <a href="#">Windows </a>
                       </li>
                    </ul>
                   </div>
                  </li>
                  <li class="panel">
                   <a href="#">Food &amp; Restaurant </a>
                   <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category6 "></a></span>
                   <div id="category6" class="panel-collapse collapse  " style="clear:both">
                    <ul>
                       <li>
                        <a href="#">Hanet magente </a>
                       </li>
                       <li>
                        <a href="#">Knage unget </a>
                       </li>
                       <li>
                        <a href="#">Punge nenune </a>
                       </li>
                       <li>
                        <a href="#">Qunge genga </a>
                       </li>
                       <li>
                        <a href="#">Tange manue </a>
                       </li>
                       <li>
                        <a href="#">Web Cameras </a>
                       </li>
                    </ul>
                   </div>
                  </li>
                  <li class="panel">
                   <a href="#">Shop Collection </a>
                   <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category7 "></a></span>
                   <div id="category7" class="panel-collapse collapse  " style="clear:both">
                    <ul>
                       <li>
                        <a href="#">Hanet magente </a>
                       </li>
                       <li>
                        <a href="#">Knage unget </a>
                       </li>
                       <li>
                        <a href="#">Latenge mange </a>
                       </li>
                       <li>
                        <a href="#">Punge nenune </a>
                       </li>
                       <li>
                        <a href="#">Qunge genga </a>
                       </li>
                       <li>
                        <a href="#">Tange manue </a>
                       </li>
                    </ul>
                   </div>
                  </li>
                  <li class="panel">
                   <a href="#">Fashion &amp; Accessories </a>
                   <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category8 "></a></span>
                   <div id="category8" class="panel-collapse collapse  " style="clear:both">
                    <ul>
                       <li>
                        <a href="#">Dress Ladies </a>
                       </li>
                       <li>
                        <a href="#">Jean </a>
                       </li>
                       <li>
                        <a href="#">Men Fashion </a>
                       </li>
                       <li>
                        <a href="#">T-shirt </a>
                       </li>
                       <li>
                        <a href="#">Trending </a>
                       </li>
                       <li>
                        <a href="#">Western Wear </a>
                       </li>
                       <li>
                        <a href="#">Women Fashion </a>
                       </li>
                       <li>
                        <a href="#">Bags </a>
                       </li>
                    </ul>
                   </div>
                  </li>
                  <li class="panel">
                   <a href="#">Digital &amp; Electronics </a>
                   <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category9 "></a></span>
                   <div id="category9" class="panel-collapse collapse  " style="clear:both">
                    <ul>
                       <li>
                        <a href="#">Cell Computers </a>
                       </li>
                       <li>
                        <a href="#">Computer Accessories </a>
                       </li>
                       <li>
                        <a href="#">Computer Headsets </a>
                       </li>
                       <li>
                        <a href="#">Desna Jacket </a>
                       </li>
                       <li>
                        <a href="#">Electronics </a>
                       </li>
                       <li>
                        <a href="#">Headphone </a>
                       </li>
                       <li>
                        <a href="#">Laptops </a>
                       </li>
                       <li>
                        <a href="#">Mobiles </a>
                       </li>
                       <li>
                        <a href="#">Sound </a>
                       </li>
                       <li>
                        <a href="#">USB &amp; HDD </a>
                       </li>
                       <li>
                        <a href="#">VGA and CPU </a>
                       </li>
                       <li>
                        <a href="#">Video &amp; Camera </a>
                       </li>
                       <li>
                        <a href="#">Video You </a>
                       </li>
                       <li>
                        <a href="#">Wireless Speakers </a>
                       </li>
                       <li>
                        <a href="#">Camera New </a>
                       </li>
                       <li>
                        <a href="#">Case </a>
                       </li>
                       <li>
                        <a href="#">Cell &amp; Cable </a>
                       </li>
                       <li>
                        <a href="#">Mobile &amp; Table </a>
                       </li>
                       <li>
                        <a href="#">Bluetooth Speakers </a>
                       </li>
                    </ul>
                   </div>
                  </li>
                 </ul>
              </div>
             </div>
             <div class="moduletable module so-extraslider-ltr best-seller best-seller-custom">
              <h3 class="modtitle"><span>Best Sellers</span></h3>
              <div class="modcontent">
                <div id="so_extra_slider" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
                  <div class="extraslider-inner owl2-carousel owl2-theme owl2-loaded extra-animate" data-effect="none">
                    <div class="item ">
                       <div class="item-wrap style1 ">
                        <div class="item-wrap-inner">
                         <div class="media-left">
                          <div class="item-image">
                             <div class="item-img-info product-image-container ">
                              <div class="box-label">
                              </div>
                              <a class="lt-image" data-product="104" href="#" target="_self" title="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2)">
                              <img src="image/catalog/demo/product/electronic/25.jpg" alt="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2)">
                              </a>
                             </div>
                          </div>
                         </div>
                         <div class="media-body">
                          <div class="item-info">
                             <!-- Begin title -->
                             <div class="item-title">
                             <a href="product.html" target="_self" title="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2) ">
                              Toshiba Pro 21"(21:9) FHD  IPS LED 1920X1080 HDMI(2)
                              </a>
                             </div>
                             <!-- Begin ratting -->
                             <div class="rating">
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                             </div>
                             <!-- Begin item-content -->
                             <div class="price">
                              <span class="old-price product-price">$62.00</span>
                              <span class="price-old">$337.99</span>
                             </div>
                          </div>
                         </div>
                         <!-- End item-info -->
                        </div>
                        <!-- End item-wrap-inner -->
                       </div>
                       <!-- End item-wrap -->
                       <div class="item-wrap style1 ">
                        <div class="item-wrap-inner">
                         <div class="media-left">
                          <div class="item-image">
                             <div class="item-img-info product-image-container ">
                              <div class="box-label">
                              </div>
                              <a class="lt-image" data-product="66" href="#" title="Compact Portable Charger (Power Bank) with Premium">
                              <img src="image/catalog/demo/product/electronic/19.jpg" alt="Compact Portable Charger (Power Bank) with Premium">
                              </a>
                             </div>
                          </div>
                         </div>
                         <div class="media-body">
                          <div class="item-info">
                             <!-- Begin title -->
                             <div class="item-title">
                              <a href="product.html" target="_self" title="Compact Portable Charger (Power Bank) with Premium ">
                              Compact Portable Charger (Power Bank) with Premium
                              </a>
                             </div>
                             <!-- Begin ratting -->
                             <div class="rating">
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                             </div>
                             <!-- Begin item-content -->
                             <div class="price">
                              <span class="old-price product-price">$74.00</span>
                              <span class="price-old">$241.99</span>
                             </div>
                          </div>
                         </div>
                         <!-- End item-info -->
                        </div>
                        <!-- End item-wrap-inner -->
                       </div>
                       <!-- End item-wrap -->
                       <div class="item-wrap style1 ">
                        <div class="item-wrap-inner">
                         <div class="media-left">
                          <div class="item-image">
                             <div class="item-img-info product-image-container ">
                              <div class="box-label">
                              </div>
                              <a class="lt-image" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan ">
                              <img src="image/catalog/demo/product/travel/8.jpg" alt="Philipin Tour Group Manila/ Pattaya / Mactan ">
                              </a>
                             </div>
                          </div>
                         </div>
                         <div class="media-body">
                          <div class="item-info">
                             <!-- Begin title -->
                             <div class="item-title">
                              <a href="product.html" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan  ">
                              Philipin Tour Group Manila/ Pattaya / Mactan
                              </a>
                             </div>
                             <!-- Begin ratting -->
                             <div class="rating">
                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                             </div>
                             <!-- Begin item-content -->
                             <div class="price">
                              <span class="old-price product-price">$74.00</span>
                              <span class="price-old">$122.00</span>
                             </div>
                          </div>
                         </div>
                         <!-- End item-info -->
                        </div>
                        <!-- End item-wrap-inner -->
                       </div>
                       <!-- End item-wrap -->
                       <div class="item-wrap style1">
                        <div class="item-wrap-inner">
                         <div class="media-left">
                          <div class="item-image">
                             <div class="item-img-info product-image-container ">
                              <div class="box-label">
                              </div>
                              <a class="lt-image" data-product="78" href="#">
                              <img src="image/catalog/demo/product/electronic/4.jpg" alt="Portable  Compact Charger (External Battery) t45">
                              </a>
                             </div>
                          </div>
                         </div>
                         <div class="media-body">
                          <div class="item-info">
                             <!-- Begin title -->
                             <div class="item-title">
                              <a href="product.html" target="_self" title="Portable  Compact Charger (External Battery) t45 ">
                              Portable  Compact Charger (External Battery) t45
                              </a>
                             </div>
                             <!-- Begin ratting -->
                             <div class="rating">
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                             </div>
                             <!-- Begin item-content -->
                             <div class="price">
                              <span class="old-price product-price">$74.00</span>
                              <span class="price-old">$122.00</span>
                             </div>
                          </div>
                         </div>
                         <!-- End item-info -->
                        </div>
                        <!-- End item-wrap-inner -->
                       </div>
                       <!-- End item-wrap -->
                    </div>
                    <div class="item ">
                       <div class="item-wrap style1 ">
                        <div class="item-wrap-inner">
                         <div class="media-left">
                          <div class="item-image">
                             <div class="item-img-info product-image-container ">
                              <div class="box-label">
                              </div>
                              <a class="lt-image" data-product="104" href="#" target="_self" title="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2)">
                              <img src="image/catalog/demo/product/electronic/15.jpg" alt="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2)">
                              </a>
                             </div>
                          </div>
                         </div>
                         <div class="media-body">
                          <div class="item-info">
                             <!-- Begin title -->
                             <div class="item-title">
                              <a href="product.html" target="_self" title="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2) ">
                              Toshiba Pro 21"(21:9) FHD  IPS LED 1920X1080 HDMI(2)
                              </a>
                             </div>
                             <!-- Begin ratting -->
                             <div class="rating">
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                             </div>
                             <!-- Begin item-content -->
                             <div class="price">
                              <span class="old-price product-price">$62.00</span>
                              <span class="price-old">$337.99</span>
                             </div>
                          </div>
                         </div>
                         <!-- End item-info -->
                        </div>
                        <!-- End item-wrap-inner -->
                       </div>
                       <!-- End item-wrap -->
                       <div class="item-wrap style1 ">
                        <div class="item-wrap-inner">
                         <div class="media-left">
                          <div class="item-image">
                             <div class="item-img-info product-image-container ">
                              <div class="box-label">
                              </div>
                              <a class="lt-image" data-product="66" href="#" title="Compact Portable Charger (Power Bank) with Premium">
                              <img src="image/catalog/demo/product/electronic/14.jpg" alt="Compact Portable Charger (Power Bank) with Premium">
                              </a>
                             </div>
                          </div>
                         </div>
                         <div class="media-body">
                          <div class="item-info">
                             <!-- Begin title -->
                             <div class="item-title">
                              <a href="product.html" target="_self" title="Compact Portable Charger (Power Bank) with Premium ">
                              Compact Portable Charger (Power Bank) with Premium
                              </a>
                             </div>
                             <!-- Begin ratting -->
                             <div class="rating">
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                             </div>
                             <!-- Begin item-content -->
                             <div class="price">
                              <span class="old-price product-price">$74.00</span>
                              <span class="price-old">$241.99</span>
                             </div>
                          </div>
                         </div>
                         <!-- End item-info -->
                        </div>
                        <!-- End item-wrap-inner -->
                       </div>
                       <!-- End item-wrap -->
                       <div class="item-wrap style1 ">
                        <div class="item-wrap-inner">
                         <div class="media-left">
                          <div class="item-image">
                             <div class="item-img-info product-image-container ">
                              <div class="box-label">
                              </div>
                              <a class="lt-image" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan ">
                              <img src="image/catalog/demo/product/travel/4.jpg" alt="Philipin Tour Group Manila/ Pattaya / Mactan ">
                              </a>
                             </div>
                          </div>
                         </div>
                         <div class="media-body">
                          <div class="item-info">
                             <!-- Begin title -->
                             <div class="item-title">
                              <a href="product.html" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan  ">
                              Philipin Tour Group Manila/ Pattaya / Mactan
                              </a>
                             </div>
                             <!-- Begin ratting -->
                             <div class="rating">
                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                             </div>
                             <!-- Begin item-content -->
                             <div class="price">
                              <span class="old-price product-price">$74.00</span>
                              <span class="price-old">$122.00</span>
                             </div>
                          </div>
                         </div>
                         <!-- End item-info -->
                        </div>
                        <!-- End item-wrap-inner -->
                       </div>
                       <!-- End item-wrap -->
                       <div class="item-wrap style1">
                        <div class="item-wrap-inner">
                         <div class="media-left">
                          <div class="item-image">
                             <div class="item-img-info product-image-container ">
                              <div class="box-label">
                              </div>
                              <a class="lt-image" data-product="78" href="#">
                              <img src="image/catalog/demo/product/electronic/6.jpg" alt="Portable  Compact Charger (External Battery) t45">
                              </a>
                             </div>
                          </div>
                         </div>
                         <div class="media-body">
                          <div class="item-info">
                             <!-- Begin title -->
                             <div class="item-title">
                              <a href="product.html" target="_self" title="Portable  Compact Charger (External Battery) t45 ">
                              Portable  Compact Charger (External Battery) t45
                              </a>
                             </div>
                             <!-- Begin ratting -->
                             <div class="rating">
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                             </div>
                             <!-- Begin item-content -->
                             <div class="price">
                              <span class="old-price product-price">$74.00</span>
                              <span class="price-old">$122.00</span>
                             </div>
                          </div>
                         </div>
                         <!-- End item-info -->
                        </div>
                        <!-- End item-wrap-inner -->
                       </div>
                       <!-- End item-wrap -->
                    </div>
                  </div>
                </div>
              </div>
             </div>
             <div class="module banner-left hidden-xs ">
              <div class="static-image-home-left banners">
                 <div><a title="Static Image" href="#"><img src="image/catalog/demo/banners/image-left.jpg" alt="Static Image"></a></div>
              </div>
             </div>
          </aside>
      	</div>
      	</div>

      	<!-- //Main Container -->



    </div>
	<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
</body>
@section('content')