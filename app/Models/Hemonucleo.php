<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hemonucleo extends Model
{
    protected $table = 'hemonucleo';
    protected $fillable = [
        'status',
        'cnpj',
        'nome',
        'email',
        'senha',
        'cidade',
        'uf',
        'cep',
        'logradouro',
        'numero',
        'bairro',
        'telefone',
        'nome_responsavel'
    ];
}
