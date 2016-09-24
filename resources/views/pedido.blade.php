@extends('layouts.templates')
@section('title', 'Pedidos')
@section('conteudo')
    <form class="form-horizontal">
        <fieldset>

            <legend>Faça seu pedido!</legend>

            <!-- Bairro, rua, número-->
            <div class="form-group">
                <label class="col-md-1 control-label" for="textinput">Bairro</label>
                <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="Rua do Queiroz" class="form-control input-md">
                </div>

                <label class="col-md-1 control-label" for="textinput">Rua</label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="Rua do Queiroz" class="form-control input-md">
                </div>

                <label  class="col-md-1 control-label" for="textinput"> Nº: </label>
                <div class="col-sm-1">
                    <input id="textinput" name="textinput" type="text" placeholder="70" class="form-control input-sm">
                </div>

            </div>

         

            <!-- E-mail-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">E-mail: </label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="joaozinho_bolaDEFOGO@gmail.com" class="form-control input-md">
                </div>
            </div>

            <!-- Assunto-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Assunto: </label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="Digite aqui o assunto" class="form-control input-md">
                </div>
            </div>

            <!-- Mensagem -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textarea">Mensagem: </label>
                <div class="col-md-4">
                    <textarea class="form-control" id="textarea" name="textarea" placeholder="Escreva seu texto aqui"></textarea>
                </div>
            </div>

            <!-- Botões -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="button1id"></label>
                <div class="col-md-8">
                    <input type="submit" id="button1id" name="button1id" class="btn btn-success"></input>
                    <input type="reset" id="button2id" name="button2id" class="btn btn-danger"></input>
                </div>
            </div>

        </fieldset>
    </form>
@endsection