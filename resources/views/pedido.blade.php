@extends('layouts.templates')
@section('title', 'Pedidos')
@section('conteudo')
    <form class="form-horizontal">
        <fieldset>

            <legend>Faça seu pedido!</legend>

            <!-- Bairro, rua, número-->
            <div class="form-group">
                <label class="col-xs-1 control-label" for="textinput">Bairro</label>
                <div class="col-xs-2">
                    <input id="textinput" name="textinput" type="text" placeholder="Rua do Queiroz" class="form-control input-md">
                </div>

                <label class="col-xs-1 control-label" for="textinput">Rua</label>
                <div class="col-xs-4">
                    <input id="textinput" name="textinput" type="text" placeholder="Rua do Queiroz" class="form-control input-md">
                </div>

                <label  class="col-xs-1 control-label" for="textinput"> Nº: </label>
                <div class="col-xs-1">
                    <input id="textinput" name="textinput" type="text" placeholder="70" class="form-control input-sm">
                </div>

            </div>

            <!--complemento e CEP -->

            <div class="form-group">
                <label class="col-xs-2 control-label" for="textinput">Complemento:</label>
                <div class="col-xs-4">
                    <input id="textinput" name="textinput" type="text" placeholder="bloco 3 apt 12 / referência p/ entrega " class="form-control input-md">
                </div>

                <label class="col-xs-2 control-label"  for="textinput">CEP:</label>
                <div class="col-xs-2">
                    <input id="text" name="textinput" type="text" required placeholder="20771-002" class="form-control input-md">
                </div>


            </div>

            <!-- E-mail , telefone e CPF-->
            <div class="form-group">
                <label class="col-xs-1 control-label" for="textinput">E-mail: </label>
                <div class="col-xs-3">
                    <input id="textinput" name="textinput" type="text" required placeholder="joaozinho_bolaDEFOGO@gmail.com" class="form-control input-md">
                </div>

                <label class="col-xs-1 control-label" for="textinput">Telefone:</label>
                <div class="col-xs-3">
                    <input id="text" name="textinput" type="text" placeholder="99234-5678" class="form-control input-md">
                </div>

                <label class="col-xs-1 control-label" for="textinput">CPF:</label>
                <div class="col-xs-3">
                    <input id="text" name="textinput" type="text" placeholder="000.000.000-00" class="form-control input-md">
                </div>
            </div>

            <!-- Sabor, Tamanho, Preço-->
            <div class="form-group">
                <label class="col-xs-2 control-label" for="textinput">Escolha o sabor: </label>
                <div class="col-xs-3">
                    <select required id="selectSabor" name="selectSabor"  class="form-control">
                        <option value="">Escolha um sabor</option>
                        <option value="1">1-Mussarela</option>
                        <option value="2">2-Calabresa</option>
                        <option value="3">3-Frango c/ Catupiry</option>
                        <option value="4">4-Chocolate</option>
                    </select>
                </div>

                <label class="col-xs-3 control-label" for="selectbasic">Tamanho: </label>
                <div class="col-xs-3">
                   <select required id="selectTamanho" name="selectTamanho" class="form-control">
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
                <label class="col-xs-8 control-label" for="textinput">Preço: </label>
                <div class="col-xs-4">

                </div>
            </div>

            <!-- Botões -->
            <div class="form-group">
                <label class="col-xs-4 control-label" for="button1id"></label>
                <div class="col-xs-8">
                    <input type="submit" id="button1id" name="button1id" class="btn btn-success"></input>
                    <input type="reset" id="button2id" name="button2id" class="btn btn-danger"></input>
                </div>
            </div>

        </fieldset>
    </form>
@endsection