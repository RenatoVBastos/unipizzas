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

            <div class="col-md-4 doce">
                <img class="img-responsive" src="http://placehold.it/270x300" alt="image">
                <h4>
                    <a href="#">Sabor Doce</a>
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>

            <div class="col-md-4 doce">
                <img class="img-responsive" src="http://placehold.it/270x300" alt="image">
                <h4>
                    <a href="#">Sabor Doce</a>
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>

            <div class="col-md-4 salgada">
                <img class="img-responsive" src="http://placehold.it/270x300" alt="image">
                <h4>
                    <a href="#">Sabor Salgado</a>
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>

            <div class="col-md-4 salgada">
                <img class="img-responsive" src="http://placehold.it/270x300" alt="image">
                <h4>
                    <a href="#">Sabor Salgado</a>
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>

            <div class="col-md-4 doce">
                <img class="img-responsive" src="http://placehold.it/270x300" alt="image">
                <h4>
                    <a href="#">Sabor Doce</a>
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>

            <div class="col-md-4 salgada">
                <img class="img-responsive" src="http://placehold.it/270x300" alt="image">
                <h4>
                    <a href="#">Sabor Salgado</a>
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>

            <div class="col-md-4 doce">
                <img class="img-responsive" src="http://placehold.it/270x300" alt="image">
                <h4>
                    <a href="#">Sabor Doce</a>
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>

            <div class="col-md-4 salgada">
                <img class="img-responsive" src="http://placehold.it/270x300" alt="image">
                <h4>
                    <a href="#">Sabor Salgado</a>
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>

            <div class="col-md-4 doce">
                <img class="img-responsive" src="http://placehold.it/270x300" alt="image">
                <h4>
                    <a href="#">Sabor Doce</a>
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
    </div>
@endsection