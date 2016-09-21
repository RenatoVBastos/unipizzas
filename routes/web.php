<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('Home');
});

Route::get('/sabores', function () {
    return view('sabores');
});

Route::get('/pedido', function () {
    return view('pedido');
});

Route::get('/contato', function () {
    return view('contato');
});






Auth::routes();

Route::get('/home', 'HomeController@index');
