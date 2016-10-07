@extends('layouts.templates')
@section('title', 'Pedidos')
@section('pedido')
    <div class="box-contato">
        <h1>Pedido</h1>
        <h2>Faça aqui o seu pedido! </h2>
    </div>
    @endsection
@section('conteudo')
    <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>

    <form action="{{ action('OrdersController@store') }}" method="post" class="form-horizontal">
        {{csrf_field()}}
        <fieldset>

            <!-- Bairro, rua, número-->
            <div class="form-group">
                <label class="col-xs-1 control-label" for="textinput">Bairro</label>
                <div class="col-xs-3">
                    <input id="bairro" name="bairro" type="text" placeholder="Flamengo" class="form-control input-md">
                </div>

                <label class="col-xs-1 control-label" for="textinput">Rua</label>
                <div class="col-xs-4">
                    <input id="rua" name="rua" type="text" placeholder="Rua do Queiroz" class="form-control input-md">
                </div>

                <label  class="col-xs-1 control-label" for="textinput"> Nº: </label>
                <div class="col-xs-2">
                    <input id="numero" name="numero" type="text" placeholder="70" class="form-control input-sm">
                </div>

            </div>

            <!--complemento e CEP -->

            <div class="form-group">
                <label class="col-xs-1 control-label" for="textinput">Compl.:</label>
                <div class="col-xs-4">
                    <input id="complemento" name="complemento" type="text" placeholder="bloco 3 apt 12 / referência p/ entrega " class="form-control input-md">
                </div>

                <label class="col-xs-1 control-label"  for="textinput">CEP:</label>
                <div class="col-xs-2">
                    <input id="cep" name="cep" type="text" required placeholder="20771-002" class="form-control input-md">
                </div>


            </div>

            <!-- E-mail , telefone e CPF-->
            <div class="form-group">
                <label class="col-xs-1 control-label" for="textinput">CPF:</label>
                <div class="col-xs-2">
                    <input id="cpf" name="cpf" type="text" placeholder="000.000.000-00" class="form-control input-md">
                </div>                

                <label class="col-xs-1 control-label" for="textinput">E-mail: </label>
                <div class="col-xs-4">
                    <input id="email" name="email" type="text" required placeholder="email@email.com" class="form-control input-md">
                </div>

                <label class="col-xs-1 control-label" for="textinput">Telefone:</label>
                <div class="col-xs-2">
                    <input id="telefone" name="telefone" type="text" placeholder="99234-5678" class="form-control input-md">
                </div>


            </div>

            <!-- Sabor, Tamanho, Preço-->
            
            <div class="form-group">
                <label class="col-xs-1 control-label" for="">Sabor: </label>
                <div class="col-xs-3">
                    <select required id="id_pizza" name="id_pizza">
                        <option value="NULL">Escolha um sabor</option>
                        @foreach($pizzas as $pizza)
                            <option value="{{$pizza->id}}">{{$pizza->id}} - {{$pizza->sabor}}</option>
                        @endforeach
                    </select>
                </div>
            
            

            
                <label class="col-xs-1 control-label" for="selectbasic">Tamanho: </label>
                <div class="col-xs-3">
                   <select required id="tamanho" name="tamanho">
                       <option value="NULL">Escolha um tamanho</option>
                       <option value="1">Pequeno(15cm)</option>
                       <option value="2">Médio(25cm)</option>
                       <option value="3">Grande(35cm)</option>
                       <option value="4">Gigante(45cm)</option>
                   </select>
                </div>


            </div>
           

            <!-- preço -->
            <div class="form-group">
                <label class="col-xs-6 control-label" for="textinput">Preço: </label>
                <div class="col-xs-2">
                    <input id="preco_final" name="preco_final" readonly="readonly" type="float.fixed(2)" value="0.00" class="form-control">
                </div>
            </div>

            <!-- Botões -->
            <div class="form-group">
                <label class="col-xs-10 control-label" for="button1id"></label>
                <div class="col-xs-8">
                    <input type="submit" id="enviar_pedido" name="enviar_pedido" class="btn btn-success"></input>
                    <input type="reset" id="button2id" name="button2id" class="btn btn-danger"></input>
                </div>
            </div>

        </fieldset>
    </form>



    <div>
        <table class="table table-striped">
            <thead>
                <tr class="row">
                    <th class="col-xs-1">Id</th>
                    <th class="col-xs-1">CEP</th>
                    <th class="col-xs-1">Telefone</th>
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
@endsection