<!DOCTYPE html>
<html>
        @include('layouts._headertemplate')
<body>
        @yield('content')
        @include('layouts._footertemplate')

<script type="text/javascript" src="{{URL::asset('js/jquery-2.2.4.min.js')}}"></script>
<script type="text/javascript" src="http://cdn.bootstrapmb.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{URL::asset('js/themejs/so_megamenu.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/owl-carousel/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/slick-slider/slick.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/themejs/libs.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/unveil/jquery.unveil.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/countdown/jquery.countdown.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/datetimepicker/moment.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/modernizr/modernizr-2.6.2.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/minicolors/jquery.miniColors.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.nav.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/quickview/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/themejs/application.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/themejs/homepage.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/themejs/custom_h1.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/themejs/addtocart.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/themejs/nouislider.js')}}"></script>
</body>
</html>
