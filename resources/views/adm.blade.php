@extends('layouts.templates')
@section('title', 'Administrador')
@section('conteudo')
    <div class="row">
        <div class="col s6">
            <form action="{{ action('FlavorsController@store') }}" method="post" class="col s12">
                {{csrf_field()}}
                <div class="row">

                    <div class="input-field col s12">
                        <label for="sabor_input">Sabor</label>
                        <input type="text" class="validate" name="sabor" id="sabor">
                    </div>

                    <div class="input-field col s12">
                        <label for="descricao_input">Descricao</label>
                        <input type="text" class="validate" name="descricao" id="descricao">
                    </div>

                    <div class="input-field col s6">
                        <select id="filtro" name="filtro">
                            <option value="" disabled selected>Escolha o filtro</option>
                            <option value="salgada">Salgada</option>
                            <option value="doce">Doce</option>
                        </select>
                    </div>

                    <div class="input-field col s6">
                        <label for="preco_input">Preço</label>
                        <input type="text" name="preco" class="validate" id="preco">
                    </div>

                    <div class="file-field input-field col s12">
                        <div class="btn deep-orange darken-3">
                            <span>Foto</span>
                            <input type="file" name="imagem">
                        </div>

                        <div class="file-path-wrapper">
                            <input class="file-path validate" id="imagem" type="text" placeholder="Insira a imagem aqui">
                        </div>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary deep-orange darken-3">Criar Sabor</button>

            </form>
        </div>
        <div class="col s6">
            View de pedidos
        </div>
    </div>
@endsection