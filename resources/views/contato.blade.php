@extends('layouts.templates')
@section('title', 'Contato')
@section('contato')
<div class="box-contato">
    <h1>Contato</h1>
    <h2>Envie-nos suas sugestões, suas críticas ou qualquer outra solicitação. </h2>
</div>
@endsection
@section('conteudo')
    
    <form class="form-horizontal" method="post">
        <fieldset>

            <!-- Nome-->
            <div class="form-group">
                <label class="col-md-4 control-label texto-align" for="textinput">Nome :</label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" class="form-control input-md">
                </div>
            </div>

            <!-- E-mail-->
            <div class="form-group">
                <label class="col-md-4 control-label texto-align" for="textinput">E-mail: </label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" class="form-control input-md">
                </div>
            </div>

            <!-- Assunto-->
            <div class="form-group">
                <label class="col-md-4 control-label texto-align" for="textinput">Assunto: </label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" class="form-control input-md">
                </div>
            </div>

            <!-- Mensagem -->
            <div class="form-group">
                <label class="col-md-4 control-label texto-align" for="textarea">Mensagem: </label>
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