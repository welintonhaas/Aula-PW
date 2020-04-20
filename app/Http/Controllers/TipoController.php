<?php

namespace App\Http\Controllers;

use App\Produto\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    function telaCadastro()
    {
        if (session()->has('login')) {
            $tipos = Tipo::all();
            return view('produto/tipo/cadastro_tipo', ['tipos' => $tipos]);
        }
        return redirect()->route('login');
    }

    function cadastrarTipo(Request $req, $id = null)
    {

        /* verifica se é alteração ou cadastro */
        if (isset($id)){
            $modo = 'Alterado';
        }else{
            $modo = 'Cadastrado';
        }

        $nome = $req->input('nome');
        $descricao = $req->input('descricao');

        $tipo = new Tipo();

        /* Se for alteração efetua a alteração */
        if ($modo == 'Alterado'){
            $tipo = $tipo->find($id);
        }

        $tipo->nome = $nome;
        $tipo->descricao = $descricao;
        if ($tipo->save()){
            $msg =  [ 'msg'=>'Tipo #'.$tipo->id.' '.$tipo->nome.' cadastrado com sucesso!', true];
        }else{
            $msg = ['msg'=>'Tipo não foi cadastrado', false];
        }
        return $this->ListarTipos($msg);
    }

    function ListarTipos($msg = null){
        $tipos = Tipo::All();
        return view('produto/tipo/lista_tipo',['tipos'=> $tipos,  'msg'=> $msg]);
    }

    function alteraTipo($id){
        $tipo = Tipo::find($id);
        return view('produto/tipo/altera_tipo',['tipo' => $tipo]);
    }

    function excluirTipo($id)
    {
        $tipo = Tipo::find($id)->delete();
        if ($tipo){
            $msg = ['msg'=>'Tipo excluído com sucesso', true];
        }else{
            $msg = ['msg'=>'Erro ao excluir tipo', false];
        }
        return $this->ListarTipos($msg);
    }
}
