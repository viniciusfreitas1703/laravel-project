<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $fillable = 
    ['descricao', 'valor','quantidade em estoque','data de criacao'];
}
