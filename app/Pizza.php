<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pizza extends Model
{
    use SoftDeletes;

    protected  $fillable = ['sabor', 'descricao', 'filtro', 'preco', 'imagem'];

    protected $dates = ['deleted_at'];
}
