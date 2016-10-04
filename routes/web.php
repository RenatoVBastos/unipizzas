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

Route::get('/', ['as' => 'home', function () {
    return view('home');

}]);

/*
Route::get('/sabores', function () {
    return view('sabores');
});

Route::get('/pedido', function () {
    return view('pedido');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
});

*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('login');

Route::get('/pedido', 'OrdersController@index')->name('pedido');

Route::get('/sabores', 'FlavorsController@index')->name('sabores');

Route::get('/contato', 'ContactController@index')->name('contato');

Route::get('/logout', 'HomeController@logOut')->name('logout');

Route::get('/admin', 'Admin@index')->name('admin');


