<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});
Route::get('/productos',function(){
	return View::make('productos');
});

Route::get('carrito',function(){
	return View::make('carrito');
});
Route::post("/producto-get","productoController@get");
Route::post("/carrito-add",'productoController@add');
Route::post("/carrito-get-cantidad","productoController@getCantidad");
Route::post("/carrito-more-one","productoController@more");
Route::post("/carrito-quit","productoController@quit");
Route::get('/logout','loginController@logout');

Route::group(["before"=>"guest"],function(){
	Route::match(["POST","GET"],'/login','loginController@login');
});

Route::group(["before"=>"auth"],function(){
	Route::match(["POST","GET"],"/categorias-admin",'categoriaController@show');
});