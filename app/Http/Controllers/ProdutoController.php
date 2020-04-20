<?php

namespace App\Http\Controllers;

use App\Produto\Produto;
use App\Produto\Tipo;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    function telaCadastro()
    {
        if (session()->has('login')) {
            $tipos = Tipo::all();
            return view('produto/cadastro_produto', ['tipos' => $tipos]);
        }
        return redirect()->route('login');
    }

    function cadastrarProduto(Request $req, $id = null)
    {

        /* verifica se é alteração ou cadastro */
        if (isset($id)){
            $modo = 'Alterado';
        }else{
            $modo = 'Cadastrado';
        }

        $nome = $req->input('nome');
        $id_tipo = $req->input('id_tipo');
        $valor = $req->input('valor');

        $produto = new Produto();
        $tipo = Tipo::find($id_tipo);

        /* Se for alteração efetua a alteração */
        if ($modo == 'Alterado'){
            $produto = $produto->find($id);
        }

        $produto->nome = $nome;
        $produto->id_tipo = $id_tipo;
        $produto->valor = $valor;
        if ($produto->save()){
            $msg =  [ 'msg'=>'Produto #'.$produto->id.' '.$produto->nome.' cadastrado com sucesso!', true];
        }else{
            $msg = ['msg'=>'Produto não foi cadastrado', false];
        }
        return $this->ListarProdutos($msg);
    }

    function ListarProdutos($msg = null){
        $produto = new Produto();
        $produtos = $produto::all();
        $tipos = Tipo::All();

        return view('produto/lista_produto',['produtos'=> $produtos, 'tipos'=> $tipos, 'msg'=> $msg]);
    }

    function alteraProduto($id){
        $produto = Produto::find($id);
        $tipos = Tipo::all();
        return view('produto/altera_produto',['produto' => $produto, 'tipos' => $tipos]);
    }

    function excluirProduto($id)
    {
        $produto = Produto::find($id)->delete();
        if ($produto){
            $msg = ['msg'=>'Produto excluído com sucesso', true];
        }else{
            $msg = ['msg'=>'Erro ao excluir produto', false];
        }
        return $this->ListarProdutos($msg);
    }
}
