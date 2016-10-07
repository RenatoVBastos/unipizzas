@extends('layouts.templates')
@section('title', 'Sabores')
@section('conteudo')

    <div class="container">

        <!-- Titulo -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sabores
                    <small></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="portfolioFilter">

            <a href="#" data-filter="*" class="current">Todos</a>
            <a href="#" data-filter=".salgada">Salgadas</a>
            <a href="#" data-filter=".doce">Doces</a>

        </div>

        <div class="portfolioContainer">
            @foreach($pizzas as $pizza)
                    <div class="col-md-4 {{$pizza->filtro}} sabores">
                        <img class="img-responsive circle" src="http://lorempizza.com/270/300" alt="image">
                        <h4>
                            <a href="#">{{$pizza -> sabor}}</a>
                        </h4>
                        <p class="descricao">{{$pizza->descricao}}</p>
                        @if(Auth::check())
                            <button class="btn btn-success">Editar</button>
                            <button class="btn btn-danger" href="{{ route('destroySabor', $pizza->id) }}">Deletar</button>
                        @endif
                    </div>
            @endforeach
    </div>
    </div>
@endsection