<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente\Cliente;

class ClienteController extends Controller
{
    function telaCadastro()
    {
        return view('cadastro/cadastro_cliente');
    }

    function cadastrarCliente(Request $req)
    {
        $nome = $req->input('nome');
        $endereco = $req->input('endereco');
        $cep = $req->input('cep');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');

        $cliente = new Cliente();
        $cliente->nome = $nome;
        $cliente->endereco = $endereco;
        $cliente->cep = $cep;
        $cliente->cidade = $cidade;
        $cliente->estado = $estado;
        if ($cliente->save()){
            $msg = 'Cliente '.$cliente->nome.' Criado com sucesso!';
        }else{
            $msg ='Cliente não foi cadastrado';
        }
        return view('resultado',['mensagem'=> $msg]);
    }

    function ListarClientes(){
        $cliente = new Cliente();
        $clientes = $cliente::all();

        return view('lista',['clientes'=> $clientes]);
    }
}
