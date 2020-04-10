<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Usuario\Usuario;

class UsuarioController extends Controller
{
    function telaCadastro()
    {
        return view('usuario/cadastro_usuario');
    }

    function cadastrarUsuario(Request $req)
    {
        $nome = $req->input('nome');
        $login = $req->input('login');
        $senha = $req->input('senha');
        $email = $req->input('email');

        $usuario = new Usuario();
        $usuario->nome = $nome;
        $usuario->login = $login;
        $usuario->senha = $senha;
        if ($usuario->save()){
            $msg = 'Usuário '.$usuario->nome.' Criado com sucesso!';
        }else{
            $msg ='Usuário não foi cadastrado';
        }
        return view('resultado',['mensagem'=> $msg]);
    }

}
