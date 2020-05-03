<?php

use Illuminate\Support\Facades\Route;

/* Página Inicial */
Route::get('/', function () {
    return view('index');
});

/* Página logout */
Route::get('/logout', 'AppController@logout')->name('logout');
Route::get('/login', 'AppController@login')->name('login');

Auth::routes();

Route::middleware(['auth'])->group(function (){

    /* Páginas Cliente */
    Route::prefix('cliente')->group(function () {
        Route::get('/cadastra', 'ClienteController@telaCadastro')->name('cad_cliente');
        Route::post('/cadastrar', 'ClienteController@cadastrarCliente')->name('cadastra_cli');
        Route::get('/altera/{id}', 'ClienteController@alteraCliente')->name('altera_cli');
        Route::post('/alterar/{id}', 'ClienteController@cadastrarCliente')->name('alterar_cli');
        Route::get('/excluir/{id}', 'ClienteController@excluirCliente')->name('excluir_cli');
    });

    /* Páginas Produto */
    Route::prefix('produto')->group(function () {
        Route::get('/cadastra', 'ProdutoController@telaCadastro')->name('cad_produto');
        Route::post('/cadastrar', 'ProdutoController@cadastrarProduto')->name('cadastra_prod');
        Route::get('/altera/{id}', 'ProdutoController@alteraProduto')->name('altera_prod');
        Route::post('/alterar/{id}', 'ProdutoController@cadastrarProduto')->name('alterar_prod');
        Route::get('/excluir/{id}', 'ProdutoController@excluirProduto')->name('excluir_prod');
    });

    /* Páginas Tipos */
    Route::prefix('tipo')->group(function () {
        Route::get('/cadastra', 'TipoController@telaCadastro')->name('cad_tipo');
        Route::post('/cadastrar', 'TipoController@cadastrarTipo')->name('cadastra_tipo');
        Route::get('/altera/{id}', 'TipoController@alteraTipo')->name('altera_tipo');
        Route::post('/alterar/{id}', 'TipoController@cadastrarTipo')->name('alterar_tipo');
        Route::get('/excluir/{id}', 'TipoController@excluirTipo')->name('excluir_tipo');
    });

    /* Páginas Venda */
    Route::prefix('venda')->group(function () {
        Route::get('/cadastra', 'VendaController@telaCadastro')->name('cad_vend');
        Route::post('/cadastrar', 'VendaController@cadastrarVenda')->name('cadastra_vend');
        Route::get('/excluir/{id}', 'VendaController@excluirVenda')->name('excluir_vend');

        /*Páginas Itens Venda */
        Route::get('/{id}/excluir/item/{id_produto}', 'ItemVendaController@excluirItemVenda')->name('excluir_item_vend');
        Route::get('/{id}/cadastra/item/', 'ItemVendaController@CadastroItem')->name('cadastro_item_vend');
        Route::post('/{id}/cadastrar/item/', 'ItemVendaController@CadastrarItemVenda')->name('cadastrar_item_vend');
    });

});

/* Cliente */
Route::get('/cliente/listar', 'ClienteController@ListarClientes')->name('listar_cli');

/* Produto */
Route::get('/produto/listar', 'ProdutoController@ListarProdutos')->name('listar_prod');

/* Tipos */
Route::get('/tipo/listar', 'TipoController@ListarTipos')->name('listar_tipo');

/* Venda */
Route::get('/venda/listar', 'VendaController@ListarVendas')->name('listar_vend');

/* Itens Venda */
Route::get('/venda/{id}/listar_itens/', 'ItemVendaController@itensVenda')->name('listar_itens_vend');

