<?php

namespace App\Venda;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = 'vendas';
    function usuario(){
        return $this->belongsTo('App\Cliente\Cliente', 'id_cliente', 'id');
    }
}
