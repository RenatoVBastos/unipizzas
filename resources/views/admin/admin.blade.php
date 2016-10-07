@extends('layouts.templates')
@section('title', 'Administrador')
@section('admin')
    <div class="row createsabor">
        <div class="col s3">
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
                        <div class="btn">
                            <span>Foto</span>
                            <input type="file" name="imagem">
                        </div>

                        <div class="file-path-wrapper">
                            <input class="file-path validate" id="imagem" type="text" placeholder="Insira a imagem aqui">
                        </div>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Criar Sabor</button>

            </form>
        </div>


        <div class="col s9">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Pedidos
                        <small></small>
                    </h4>
                </div>
            </div>
                <table class="table table-striped">
                    <thead>
                    <tr class="row">
                        <th class="col-xs-1">Id</th>
                        <th class="col-xs-1">CEP</th>
                        <th class="col-xs-1">Telefone</th>
                        <th class="col-xs-1">id do Sabor</th>
                        <th class="col-xs-1">Tamanho</th>
                        <th class="col-xs-1">Preço</th>
                        <th class="col-xs-2">Data do Pedido</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr class="row">
                            <td class="col-xs-1">{{$order->id}}</td>
                            <td class="col-xs-1">{{$order->cep}}</td>
                            <td class="col-xs-1">{{$order->telefone}}</td>
                            <td class="col-xs-1">{{$order->id_pizza}}</td>
                            <td class="col-xs-1">{{$order->tamanho}}</td>
                            <td class="col-xs-1">{{$order->preco_final}}</td>
                            <td class="col-xs-2">{{$order->created_at}}</td>


                            </td>
                            <td class="col-xs-1 text-right">
                                <form action="{{action('OrdersController@destroy',['pedido' => $order->id])}}" method="GET">
                                    {{method_field('DELETE')}}
                                    {{csrf_field()}}

                                    <button id="destroyOrder" name="destroyOrder" class="btn btn-danger" type="submit">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection