<!DOCTYPE html>
<html>
<head>
	<title>UniPizzas - @yield('title')</title>
</head>
<body>
		<ul>
			<li><a href="./">Home</a></li>
			<li><a href="./sabores">Sabores</a></li>
			<li><a href="./pedido">Faça seu pedido</a></li>
			<li><a href="./contato">Contato</a></li>
		</ul>
	<div class="container">
		@yield('conteudo')
	</div>
	<footer>
		<p>Footer</p>
	</footer>
</body>
</html>