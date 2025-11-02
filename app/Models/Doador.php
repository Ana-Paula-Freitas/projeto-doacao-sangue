<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    protected $fillable = [
        'status',
        'CPF',
        'RG',
        'nome',
        'email',
        'senha',
        'cidade',
        'UF',
        'CEP',
        'logradouro',
        'numero',
        'bairro',
        'telefone',
        'DN',
        'peso',
        'tipoSanguineo',
        'profissao',
        'sexo'
    ];
}
