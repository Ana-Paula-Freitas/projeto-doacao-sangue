<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'status',
        'CNPJ',
        'nome',
        'email',
        'senha',
        'cidade',
        'UF',
        'CEP',
        'logradouro',
        'numero',
        'bairro',
        'telefone'
    ];
}
