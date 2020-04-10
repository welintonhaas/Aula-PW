<?php

use Illuminate\Support\Facades\Route;

/* Página Inicial */
Route::get('/', 'ClienteController@ListarClientes');

/* Páginas Usuário */
Route::get('/usuario/cadastra', 'UsuarioController@telaCadastro')->name('cad_usuario');
Route::post('/usuario/cadastrar', 'UsuarioController@cadastrarUsuario')->name('cadastra_usu');

/* Páginas Cliente */
Route::get('/cliente/cadastra', 'ClienteController@telaCadastro')->name('cad_cliente');
Route::post('/cliente/cadastrar', 'ClienteController@cadastrarCliente')->name('cadastra_cli');
Route::get('/cliente/altera/{id}', 'ClienteController@alteraCliente')->name('altera_cli');
Route::post('/cliente/alterar/{id}', 'ClienteController@cadastrarCliente')->name('alterar_cli');
Route::get('/cliente/excluir/{id}', 'ClienteController@excluirCliente')->name('excluir_cli');
Route::get('/cliente/listar', 'ClienteController@ListarClientes')->name('listar_cli');

/* Páginas Venda */
Route::get('/venda/cadastra', 'VendaController@telaCadastro')->name('cad_vend');
Route::post('/venda/cadastrar', 'VendaController@cadastrarVenda')->name('cadastra_vend');
Route::get('/venda/excluir/{id}', 'VendaController@excluirVenda')->name('excluir_vend');
Route::get('/venda/listar', 'VendaController@ListarVendas')->name('listar_vend');
