<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cad_usuario', 'UsuarioController@telaCadastro')->name('cad_usuario');
Route::get('/cad_cliente', 'ClienteController@telaCadastro')->name('cad_cliente');
Route::post('/cadastrar_usu', 'UsuarioController@cadastrarUsuario')->name('cadastra_usu');
Route::post('/cadastrar_cli', 'ClienteController@cadastrarCliente')->name('cadastra_cli');
Route::get('/listar', 'ClienteController@ListarClientes')->name('listar');
