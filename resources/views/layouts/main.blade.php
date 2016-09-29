<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('materialize/css/materialize.min.css')}}">
    @yield('css')
	<title>UniPizzas - @yield('title')</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
	@yield('navbar')
	@yield('slideshow')
	<div class="container">
		@yield('conteudo')
	</div>
	@yield('footer')
</body>
</html>