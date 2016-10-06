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


//Auth
Auth::routes();



//Rotas do visitante
Route::get('home',['as' => 'login', 'uses' => 'HomeController@index']);

Route::get('/', ['as' => 'home', 'uses' => 'PageController@home']);

Route::get('pedido', ['as' => 'pedido', 'uses' => 'PageController@pedido']);

Route::get('sabores', ['as' => 'sabores', 'uses' => 'PageController@sabores']);

Route::get('contato', ['as' => 'contato', 'uses' => 'PageController@contato']);

Route::get('logout', ['as' => 'logout', 'uses' => 'HomeController@logOut']);





//Rotas das CRUDs

Route::post('saboresCreate', ['as' => 'saboresCreate', 'uses' => 'FlavorsController@store']);

Route::post('destroy/{id}', ['as' => 'destroySabor', 'uses' => 'FlavorsController@destroy']);

Route::post('pedido', ['as' => 'enviar_pedido', 'uses' => 'OrdersController@store']);





//Rotas do admin

Route::group(['middleware' => 'auth'], function () {

    Route::get('admin', ['as' => 'admin', 'uses' => 'Admin@index']);
});




