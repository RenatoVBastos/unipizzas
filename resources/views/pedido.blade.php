@extends('layouts.templates')
@section('title', 'Pedidos')
@section('conteudo')
    <form action="{{ action('OrdersController@store') }}" method="post" class="form-horizontal">
        {{csrf_field()}}
        <fieldset>

            <legend>Faça seu pedido!</legend>

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
                    <input id="email" name="email" type="text" required placeholder="joaozinho_bolaDEFOGO@gmail.com" class="form-control input-md">
                </div>

                <label class="col-xs-1 control-label" for="textinput">Telefone:</label>
                <div class="col-xs-2">
                    <input id="telefone" name="telefone" type="text" placeholder="99234-5678" class="form-control input-md">
                </div>


            </div>

            <!-- Sabor, Tamanho, Preço-->
            <div class="form-group">
                <label class="col-xs-1 control-label" for="textinput">Sabor: </label>
                <div class="col-xs-3">
                    <select required id="pizza_id" name="pizza_id">
                        <option value="">Escolha um sabor</option>
                        <option value="1">1-Mussarela</option>
                        <option value="2">2-Calabresa</option>
                        <option value="3">3-Frango c/ Catupiry</option>
                        <option value="4">4-Chocolate</option>
                    </select>
                </div>

                <label class="col-xs-1 control-label" for="selectbasic">Tamanho: </label>
                <div class="col-xs-3">
                   <select required id="tamanho" name="tamanho">
                       <option value="">Escolha um tamanho</option>
                       <option value="1">Pequeno(15cm)</option>
                       <option value="2">Médio(25cm)</option>
                       <option value="3">Grande(35cm)</option>
                       <option value="3">Gigante(45cm)</option>
                   </select>
                </div>


            </div>

            <!-- preço -->
            <div class="form-group">
                <label class="col-xs-6 control-label" for="textinput">Preço: </label>
                <div class="col-xs-4">
                    <input id="preco_final" name="preco_final" type="text" placeholder="0.00" class="form-control input-md">
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
@endsection