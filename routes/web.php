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

Route::get('/', 'UsuarioController@telaCadastro');

Route::get('/usuario/cadastro', 'UsuarioController@telaCadastro')->name('cad_usuario');
Route::post('/usuario/cadastrar', 'UsuarioController@cadastrarUsuario')->name('cadastra_usu');

Route::get('/cliente/cadastro', 'ClienteController@telaCadastro')->name('cad_cliente');
Route::post('/cliente/cadastrar', 'ClienteController@cadastrarCliente')->name('cadastra_cli');
Route::get('/cliente/altera/{id}', 'ClienteController@alteraCliente')->name('altera_cli');
Route::post('/cliente/alterar/{id}', 'ClienteController@cadastrarCliente')->name('alterar_cli');
Route::get('/cliente/excluir/{id}', 'ClienteController@excluirCliente')->name('excluir_cli');

Route::get('/cliente/listar', 'ClienteController@ListarClientes')->name('listar');
