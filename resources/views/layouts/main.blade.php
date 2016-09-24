<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    @yield('css')
	<title>UniPizzas - @yield('title')</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
</head>
<body>
	@yield('navbar')
	<div class="container">
		@yield('conteudo')
	</div>
	@yield('footer')
</body>
</html>