<?php

namespace App\Http\Controllers;

use App\Produto\Produto;
use App\Venda\Venda;
use Illuminate\Http\Request;

class ItemVendaController extends Controller
{
    function CadastroItem($id)
    {
        if (session()->has('login')) {
            $venda = Venda::find($id);
            $produtos = Produto::all();
            return view('venda/cadastro_itens_venda', ['venda' => $venda, 'produtos'=>$produtos]);
        }
        return redirect()->route('login');
    }

    function CadastrarItemVenda(Request $req, $id)
    {
        $id_produto = $req->input('id_produto');
        $quantidade = $req->input('quantidade');

        $produto = Produto::find($id_produto);
        $venda = Venda::find($id);
        $subtotal = $produto->valor * $quantidade;

        $pivot = [
            'quantidade' => $quantidade,
            'subtotal' => $subtotal
        ];

        $venda->produtos()->attach($produto->id, $pivot);
        $venda->valor += $subtotal;

        $venda->save();

        return redirect()->route('cadastro_item_vend', ['id'=> $id]);

    }

    function itensVenda($id){
        $venda = Venda::find($id);
        return view('venda/lista_produtos_venda', ['venda'=>$venda]);
    }

    function excluirItemVenda($id,$id_produto)
    {
        $venda = Venda::find($id);
        $subtotal = 0;

        foreach($venda->produtos as $vp){

            if ($vp->pivot->id == $id_produto){
                $subtotal = $vp->pivot->subtotal;
                break;
            }
        }

        $venda->valor = $venda->valor - $subtotal;
        $venda->produtos()->wherePivot('id', '=', $id_produto)->detach();
        $venda->save();

        if ($venda){
            $msg = ['msg'=>'Item excluído com sucesso', true];
        }else{
            $msg = ['msg'=>'Erro ao excluir o item', false];
        }
        return redirect()->route('cadastro_item_vend', ['id'=> $id]);
    }
}
