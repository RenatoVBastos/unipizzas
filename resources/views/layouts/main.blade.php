<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('materialize/css/materialize.css')}}">
    @yield('css')
	<title>UniPizzas - @yield('title')</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
	@yield('navbar')
	@yield('slideshow')
	@yield('contato')
	@yield('pedido')
	@yield('admin')
	<main class="container">
		@yield('conteudo')
	</main>
	@yield('footer')
</body>
</html>