<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SI-TA | @yield('title')</title>
	
	<link rel="icon" type="image/png" href="{{asset('img/Logo-Material.png')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrappaper.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/papercustom.min.css')}}">
	<link href="{{asset('css/rooboto.css')}}">
	<link href="{{asset('css/material-icon.css')}}" rel="stylesheet">
	<script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrappaper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/ga.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	
	<!-- Custom layout -->
	<link rel="stylesheet" href="{{asset('css/custom.css')}}">
	@yield('moreStyle')
</head>
<body>
<div>
	@if(session('user'))
		@include('layout.header_logedin')
	@else
		@include('layout.header')
	@endif
	<div class="col-md-12 col-lg-12 col-sm-12" style="margin-top: 10px;">
		<div class="col-md-3 col-lg-3">
			@include('layout.sidebar')
		</div>
		<div class="col-md-9 col-lg-9 col-sm-12">
			@yield('content')	
		</div>
	</div>
	@include('layout.footer')
</div>

@yield('moreScript')
</body>
</html>