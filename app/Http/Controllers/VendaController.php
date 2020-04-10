<?php

namespace App\Http\Controllers;

use App\Cliente\Cliente;
use App\Usuario\Usuario;
use Illuminate\Http\Request;
use App\Venda\Venda;

class VendaController extends Controller
{
    function telaCadastro()
    {
        $clientes = Cliente::all();
        return view('venda/cadastro_venda', ['clientes' => $clientes]);
    }

    function cadastrarVenda(Request $req, $id = null)
    {

        /* verifica se é alteração ou cadastra */
        if (isset($id)){
            $tipo = 'Alterado';
        }else{
            $tipo = 'Cadastrado';
        }

        $id_cliente = $req->input('id_cliente');
        $descricao = $req->input('descricao');
        $valor = $req->input('valor');

        $venda = new Venda();
        $cliente = Cliente::find($id_cliente);

        /* Se for alteração efetua a alteração */
        if ($tipo == 'Alterado'){
            $venda = $venda->find($id);
        }

        $venda->id_cliente = $id_cliente;
        $venda->descricao = $descricao;
        $venda->valor = $valor;
        if ($venda->save()){
            $msg =  [ 'msg'=>'Venda #'.$venda->id.' feita para '.$cliente->nome.' cadastrado com sucesso!', true];
        }else{
            $msg = ['msg'=>'Venda não foi cadastrada', false];
        }
        return $this->ListarVendas($msg);
    }

    function ListarVendas($msg = null){
        $venda = new Venda();
        $vendas = $venda::all();
        $clientes = Cliente::All();

        return view('venda/lista_venda',['vendas'=> $vendas, 'clientes'=> $clientes, 'msg'=> $msg]);
    }

    function alteraVenda($id){
        $venda = Venda::find($id);
        return view('venda/altera_venda',['cli' => $venda]);
    }

    function excluirVenda($id)
    {
        $venda = Venda::find($id)->delete();
        if ($venda){
            $msg = ['msg'=>'Venda excluída com sucesso', true];
        }else{
            $msg = ['msg'=>'Erro ao excluir venda', false];
        }
        return $this->ListarVendas($msg);
    }
}
