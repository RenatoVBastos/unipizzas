@section('navbar')
    <nav class="navbar navbar-default">
  <div class="container-fluid">

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <li style="margin-top: 17px;"><img src="http://imgur.com/cygoocZ.gif" style="height: 50px;"></li>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
          <li><a href="{{ route('admin') }}">Administrador</a></li>
        @endif
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('sabores') }}">Sabores</a></li>
        <li><a href="{{ route('pedido') }}">Faça seu pedido</a></li>
        <li><a href="{{ route('contato') }}">Contato</a></li>
        @if(Auth::Check())
            <li><a href="{{ route('logout') }}">Logout</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

{{-- <div class="navbar-fixed">
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
    </div> --}}
@endsection
