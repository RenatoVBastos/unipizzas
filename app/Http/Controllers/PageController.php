<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }


    public function sabores()
    {
        return view('sabores');
    }

    public function pedido()
    {
        return view('pedido');
    }

    public function contato()
    {
        return view('contato');
    }

}
