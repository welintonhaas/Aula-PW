<?php

namespace App\Http\Controllers;

use App\Usuario\Usuario;
use Illuminate\Http\Request;
use App\Cliente\Cliente;

class ClienteController extends Controller
{
    function telaCadastro()
    {
        return view('cliente/cadastro_cliente');
    }

    function cadastrarCliente(Request $req, $id = null)
    {
        /* verifica se é alteração ou cadastra */
        if (isset($id)){
            $tipo = 'Alterado';
        }else{
            $tipo = 'Cadastrado';
        }

        $nome = $req->input('nome');
        $endereco = $req->input('endereco');
        $cep = $req->input('cep');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');

        $cliente = new Cliente();

        /* Se for alteração efetua a alteração */
        if ($tipo == 'Alterado'){
            $cliente = $cliente->find($id);
        }

        $cliente->nome = $nome;
        $cliente->endereco = $endereco;
        $cliente->cep = $cep;
        $cliente->cidade = $cidade;
        $cliente->estado = $estado;
        if ($cliente->save()){
            $msg =  [ 'msg'=>'Cliente '.$cliente->nome.' '.$tipo.' com sucesso!', true];
        }else{
            $msg = ['msg'=>'Cliente não foi cadastrado', false];
        }
        return $this->ListarClientes($msg);
    }

    function ListarClientes($msg = null){
        $cliente = new Cliente();
        $clientes = $cliente::all();

        return view('cliente/lista_cliente',['clientes'=> $clientes, 'msg'=> $msg]);
    }

    function alteraCliente($id){
        $cliente = Cliente::find($id);
        return view('cliente/altera_cliente',['cli' => $cliente]);
    }

    function excluirCliente($id)
    {
        $cliente = Cliente::find($id)->delete();
        if ($cliente){
            $msg = ['msg'=>'Cliente excluído com sucesso', true];
        }else{
            $msg = ['msg'=>'Erro ao excluir cliente', false];
        }
        return $this->ListarClientes($msg);
    }
}
