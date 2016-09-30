@section('navbar')
    <div class="navbar-fixed">
        <nav class="deep-orange darken-3" >
            <div class="nav-wrapper container left">
                <ul class="right">
                    @if(Auth::check())
                    <li><a href="#">Administrador</a></li>
                    @endif
                    <li><a href="./">Home</a></li>
                    <li><a href="./sabores">Sabores</a></li>
                    <li><a href="./pedido">Faça seu pedido</a></li>
                    <li><a href="./contato">Contato</a></li>
                    @if(Auth::check())
                        <li><a href="./logout">Logout</a></li>
                    @endif
                </ul>
                <li href="#" class="brand-logo left">UniPizzas</li>
            </div>
        </nav>
    </div>
@endsection