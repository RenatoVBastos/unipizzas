<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Order extends Model
{
    use SoftDeletes;

    protected $fillable = ['bairro', 'rua', 'numero', 'complemento', 'cep', 'cpf', 'telefone', 'email', 'id_pizza', 'tamanho', 'preco_final'];

    protected $dates = ['deleted_at'];

    public function pizzaId(){
        return $this->belongsTo('App\Pizza', 'id_pizza');
    }

}
