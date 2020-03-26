<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  	<!-- Mobile specific metas
  		============================================ -->
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  	<!-- Favicon
  		============================================ -->
  	<link rel="shortcut icon" type="image/png" href="ico/favicon-16x16.png"/>
  	<!-- Libs CSS JS
  		============================================ -->
  	<link rel="stylesheet" href="http://cdn.bootstrapmb.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<link href="{{URL::asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  	<link href="{{URL::asset('js/datetimepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
  	<link href="{{URL::asset('js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
  	<link href="{{URL::asset('css/themecss/lib.css')}}" rel="stylesheet">
  	<link href="{{URL::asset('js/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">
  	<link href="{{URL::asset('js/minicolors/miniColors.css')}}" rel="stylesheet">
    <!-- Theme CSS
  		============================================ -->
  	<link href="{{URL::asset('css/themecss/so_sociallogin.css')}}" rel="stylesheet">
  	<link href="{{URL::asset('css/themecss/so_searchpro.css')}}" rel="stylesheet">
  	<link href="{{URL::asset('css/themecss/so_megamenu.css')}}" rel="stylesheet">
  	<link href="{{URL::asset('css/themecss/so-categories.css')}}" rel="stylesheet">
  	<link href="{{URL::asset('css/themecss/so-listing-tabs.css')}}" rel="stylesheet">
  	<link href="{{URL::asset('css/themecss/so-category-slider.css')}}" rel="stylesheet">
  	<link href="{{URL::asset('css/themecss/so-newletter-popup.css')}}" rel="stylesheet">
  	<link href="{{URL::asset('css/footer/footer1.css')}}" rel="stylesheet">
  	<link href="{{URL::asset('css/header/header4.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/header/header1.css')}}" rel="stylesheet">
  	<link id="color_scheme" href="{{URL::asset('css/home4.css')}}" rel="stylesheet">
  	<link href="{{URL::asset('css/responsive.css')}}" rel="stylesheet">
    <link id="color_scheme2" href="{{URL::asset('css/theme.css')}}" rel="stylesheet">
  	<link href="{{URL::asset('css/quickview/quickview.css')}}" rel="stylesheet">
  	<!-- Google web fonts
  		============================================ -->
  	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" type="text/css">
  	<style type="text/css">
  		body{font-family: Roboto, sans-serif;}
  	</style>
    <title>@yield('title', 'OldTreasure') - 旧物集市</title>
</head>
