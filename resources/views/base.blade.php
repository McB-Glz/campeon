<!DOCTYPE html>
<html dir="ltr" lang="es-LA">
<head>

@section('head')
	
	<!-- Metas
	============================================= -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="McB Gonzalez" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	

	<!-- Document Title
    ============================================= -->
	<title>Artículos Elásticos Campeón @yield('title','- Bienvenido')</title>

	<!-- Facebook Opengraph
    ============================================= -->
    <meta property="og:locale" content="es_LA"/>
    <meta property="og:title" content="Artículos Elásticos Campeón"/>
    <meta property="og:description" content=""/>
    <meta property="og:url" content="{{ url('/') }}"/>
    <meta property="og:site_name" content="Artículos Elásticos Campeón"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="{{ url('assets/img/iconified/og-image.jpg') }}"/>
    <meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />

    <!-- Icons
    ============================================= -->
	<link rel="shortcut icon" href="{{ url('assets/img/iconified/favicon.ico') }}" type="image/x-icon" />
	<link rel="apple-touch-icon" href="{{ url('assets/img/iconified/apple-touch-icon.png') }}" />
	<link rel="apple-touch-icon" sizes="57x57" href="{{ url('assets/img/iconified/apple-touch-icon-57x57.png') }}" />
	<link rel="apple-touch-icon" sizes="72x72" href="{{ url('assets/img/iconified/apple-touch-icon-72x72.png') }}" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/img/iconified/apple-touch-icon-76x76.png') }}" />
	<link rel="apple-touch-icon" sizes="114x114" href="{{ url('assets/img/iconified/apple-touch-icon-114x114.png') }}" />
	<link rel="apple-touch-icon" sizes="120x120" href="{{ url('assets/img/iconified/apple-touch-icon-120x120.png') }}" />
	<link rel="apple-touch-icon" sizes="144x144" href="{{ url('assets/img/iconified/apple-touch-icon-144x144.png') }}" />
	<link rel="apple-touch-icon" sizes="152x152" href="{{ url('assets/img/iconified/apple-touch-icon-152x152.png') }}" />
	<link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/img/iconified/apple-touch-icon-180x180.png') }}" />
	
    <!-- Stylesheets
    ============================================= -->
    <link rel="stylesheet" href="/assets/css/main.min.css" type="text/css" />

    @section('styles')

    @show

   
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

@show

	<script type="text/javascript" src="/assets/js/jquery.js"></script>

</head>
<body id="@yield('sectionId', 'home')" class="@yield('sectionClass', 'stretched')">
	
	<!-- Analytics Snippet
	============================================= -->
	
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		@section('header')
			<div id="home" class="page-section" style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>

		@show

		@section('content')
			
		@show

		@section('footer')
			@include('partials.footer')
		@show

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="/assets/js/app.min.js"></script>
	@section('js')

	@show
</body>
</html>