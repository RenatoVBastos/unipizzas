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

        <ul id="filters" class="clearfix">
            <li><span class="filter active" data-filter=".salgada, .doce">Todos</span></li>
            <li><span class="filter" data-filter=".salgada">Salgada</span></li>
            <li><span class="filter" data-filter=".doce">Doce</span></li>
        </ul>

        <!-- Quebra de coluna -->
        <div class="row" id="divsabores">
            <div class="col-md-4 portfolio-item" data-cat="salgada">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/270x300" id="img">
                </a>
                <div id="texto-portfolio">
                <h3>
                    <a href="#">Sabor</a>
                </h3>
                <p id="subtext-port-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
            </div>
            <div class="col-md-4 portfolio-item" data-cat="salgada">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/270x300" alt="">
                </a>
                <div id="texto-portfolio">
                    <h3>
                        <a href="#">Sabor</a>
                    </h3>
                    <p id="subtext-port-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
            </div>
            <div class="col-md-4 portfolio-item" data-cat="salgada">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/270x300" alt="">
                </a>
                <div id="texto-portfolio">
                    <h3>
                        <a href="#">Sabor</a>
                    </h3>
                    <p id="subtext-port-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Quebra de coluna -->
        <div class="row" id="divsabores">
            <div class="col-md-4 portfolio-item" data-cat="salgada">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/270x300" alt="">
                </a>
                <div id="texto-portfolio">
                    <h3>
                        <a href="#">Sabor</a>
                    </h3>
                    <p id="subtext-port-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
            </div>
            <div class="col-md-4 portfolio-item" data-cat="doce">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/270x300" alt="">
                </a>
                <div id="texto-portfolio">
                    <h3>
                        <a href="#">Sabor</a>
                    </h3>
                    <p id="subtext-port-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
            </div>
            <div class="col-md-4 portfolio-item" data-cat="salgada">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/270x300" alt="">
                </a>
                <div id="texto-portfolio">
                    <h3>
                        <a href="#">Sabor</a>
                    </h3>
                    <p id="subtext-port-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
            </div>
        </div>

        <!-- Quebra de coluna -->
        <div class="row" id="divsabores">
            <div class="col-md-4 portfolio-item" data-cat="doce">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/270x300" alt="">
                </a>
                <div id="texto-portfolio">
                    <h3>
                        <a href="#">Sabor</a>
                    </h3>
                    <p id="subtext-port-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
            </div>
            <div class="col-md-4 portfolio-item" data-cat="doce">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/270x300" alt="">
                </a>
                <div id="texto-portfolio">
                    <h3>
                        <a href="#">Sabor</a>
                    </h3>
                    <p id="subtext-port-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
            </div>
            <div class="col-md-4 portfolio-item" data-cat="doce">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/270x300" alt="">
                </a>
                <div id="texto-portfolio">
                    <h3>
                        <a href="#">Sabor</a>
                    </h3>
                    <p id="subtext-port-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Paginação -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#2">2</a>
                    </li>
                    <li>
                        <a href="#3">3</a>
                    </li>
                    <li>
                        <a href="#4">4</a>
                    </li>
                    <li>
                        <a href="#5">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
@endsection