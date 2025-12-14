<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = 'hospital';
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
