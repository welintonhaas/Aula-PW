<?php

namespace App\Produto;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $primaryKey = 'id';

    function vendas()
    {
        return $this->belongsToMany('App\Venda\Venda', 'produtos_vendas',
            'id_produto', 'id_venda')
            ->withPivot(['id','quantidade','subtotal'])
            ->withTimestamps();
    }
}
