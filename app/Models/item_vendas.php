<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item_vendas extends Model
{
    protected $fillable = 
    ['id_venda', 'id_produto','valor_unitario','quantidade_comprada'];
}
