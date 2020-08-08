<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendas extends Model
{
    protected $fillable = 
    ['id_cliente', 'valor_total','data_venda'];
}
