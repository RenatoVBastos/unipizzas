<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bairro');
            $table->string('rua');
            $table->string('numero');
            $table->string('complemento');
            $table->string('cep');
            $table->string('cpf');
            $table->string('telefone');
            $table->string('email');
            $table->integer('id_pizza')->unsigned();
            $table->foreign('id_pizza')->references('id')->on('pizzas')->onDelete('cascade');
            $table->integer('tamanho');
            $table->float('preco_final');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
