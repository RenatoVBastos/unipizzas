<!DOCTYPE html>
<html>
<head>
	<title>UniPizzas - @yield('title')</title>
</head>
<body>
		<nav class="navbar" navbar-default navbar-static-top>
		<div class="container-fluid">
		<ul class="nav navbar-nav">
			<li class="active"><a href="./">Home</a></li>
			<li><a href="./sabores">Sabores</a></li>
			<li><a href="./pedido">Faça seu pedido</a></li>
			<li><a href="./contato">Contato</a></li>
		</ul>
		</div>
		</nav>
	<div class="container">
		@yield('conteudo')
	</div>
	<footer >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<p>Footer</p>
	</footer>
</body>
</html>