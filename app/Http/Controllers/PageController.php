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
        $pizzas = \App\Pizza::all();

        return view('sabores')->with('pizzas', $pizzas);
    }

    public function pedido()
    {
       
        $pizzas = \App\Pizza::all();
        $orders = \App\Order::all();

        //return view('pedido')->with('pizzas', $pizzas);
        return view('pedido',compact('pizzas', 'orders'));
       
    }

    public function contato()
    {
        return view('contato');
    }

}
