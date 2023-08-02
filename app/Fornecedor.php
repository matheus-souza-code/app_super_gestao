<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//fornecedor
//fornecedors

class Fornecedor extends Model
{
    //
    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
