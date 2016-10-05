@section('navbar')
    <div class="navbar-fixed">
        <nav class="darken-3" >
            <div class="nav-wrapper container left">
                <ul class="right">
                    @if(Auth::check())
                    <li><a href="{{ route('admin') }}">Administrador</a></li>
                    @endif
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('sabores') }}">Sabores</a></li>
                    <li><a href="{{ route('pedido') }}">Faça seu pedido</a></li>
                    <li><a href="{{ route('contato') }}">Contato</a></li>
                    @if(Auth::check())
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    @endif
                </ul>
                <li href="#" class="brand-logo left">UniPizzas</li>
            </div>
        </nav>
    </div>
@endsection
