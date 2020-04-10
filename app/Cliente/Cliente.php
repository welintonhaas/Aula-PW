<?php

namespace App\Cliente;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    function vendas(){
        return $this->hasMany('App\Venda\Venda');
    }
}
