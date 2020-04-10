<?php

namespace App\Http\Controllers;

use App\Usuario\Usuario;
use Illuminate\Http\Request;

class AppController extends Controller
{

    function login(){
        if (session()->has('login')){
            return redirect()->route('listar_cli');
        }
        return view('login');
    }

    function logar(Request $req){
        $login = $req->input('login');
        $senha = $req->input('senha');

        $usuario = Usuario::where('login', '=',$login)->first();

        if ($usuario and $usuario->senha == $senha){
            $var = ['login'=> $login];
            session($var);
            return redirect()->route('listar_cli');
        }else{
            return view('resultado', ['mensagem'=>'Usuario ou senha inválidos']);
        }
    }

    function logout(){
        session()->forget('login');
        return redirect()->route('login');
    }
}
