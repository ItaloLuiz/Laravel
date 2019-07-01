<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/clientes', function (Request $request) {
    return $request->clientes();
});

Route::get('/usuarios', 'UsuarioController@index');
Route::post('/usuario/novo/', 'UsuarioController@store');
Route::get('/usuario/{id}', 'UsuarioController@show');
Route::put('/usuario/editar/{id}', 'UsuarioController@update');
Route::delete('/usuario/{id}', 'UsuarioController@destroy');

Route::get('/clientes', 'ClienteController@index');
Route::post('/cliente/novo/', 'ClienteController@store');
Route::get('/cliente/{id}', 'ClienteController@show');
Route::put('/cliente/editar/{id}', 'ClienteController@update');
Route::delete('/cliente/{id}', 'ClienteController@destroy');

Route::get('/fornecedores', 'FornecedorController@index');
Route::post('/fornecedor/novo/', 'FornecedorController@store');
Route::get('/fornecedor/{id}', 'FornecedorController@show');
Route::put('/fornecedor/editar/{id}', 'FornecedorController@update');
Route::delete('/fornecedor/{id}', 'FornecedorController@destroy');