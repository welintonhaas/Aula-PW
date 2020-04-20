<?php

use Illuminate\Support\Facades\Route;

/* Página Inicial */
Route::get('/', function () {
    return view('index');
});

/* Páginas Login */
Route::get('/login', 'AppController@login')->name('login');
Route::get('/logout', 'AppController@logout')->name('logout');
Route::post('/logar', 'AppController@logar')->name('logar');

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

/* Páginas Produto */
Route::get('/produto/cadastra', 'ProdutoController@telaCadastro')->name('cad_produto');
Route::post('/produto/cadastrar', 'ProdutoController@cadastrarProduto')->name('cadastra_prod');
Route::get('/produto/altera/{id}', 'ProdutoController@alteraProduto')->name('altera_prod');
Route::post('/produto/alterar/{id}', 'ProdutoController@cadastrarProduto')->name('alterar_prod');
Route::get('/produto/excluir/{id}', 'ProdutoController@excluirProduto')->name('excluir_prod');
Route::get('/produto/listar', 'ProdutoController@ListarProdutos')->name('listar_prod');

/* Páginas Tipos */
Route::get('/tipo/cadastra', 'TipoController@telaCadastro')->name('cad_tipo');
Route::post('/tipo/cadastrar', 'TipoController@cadastrarTipo')->name('cadastra_tipo');
Route::get('/tipo/altera/{id}', 'TipoController@alteraTipo')->name('altera_tipo');
Route::post('/tipo/alterar/{id}', 'TipoController@cadastrarTipo')->name('alterar_tipo');
Route::get('/tipo/excluir/{id}', 'TipoController@excluirTipo')->name('excluir_tipo');
Route::get('/tipo/listar', 'TipoController@ListarTipos')->name('listar_tipo');

/* Páginas Venda */
Route::get('/venda/cadastra', 'VendaController@telaCadastro')->name('cad_vend');
Route::post('/venda/cadastrar', 'VendaController@cadastrarVenda')->name('cadastra_vend');
Route::get('/venda/excluir/{id}', 'VendaController@excluirVenda')->name('excluir_vend');
Route::get('/venda/listar', 'VendaController@ListarVendas')->name('listar_vend');

/*Páginas Itens Venda */
Route::get('/venda/{id}/listar_itens/', 'ItemVendaController@itensVenda')->name('listar_itens_vend');
Route::get('/venda/{id}/excluir/item/{id_produto}', 'ItemVendaController@excluirItemVenda')->name('excluir_item_vend');
Route::get('/venda/{id}/cadastra/item/', 'ItemVendaController@CadastroItem')->name('cadastro_item_vend');
Route::post('/venda/{id}/cadastrar/item/', 'ItemVendaController@CadastrarItemVenda')->name('cadastrar_item_vend');
