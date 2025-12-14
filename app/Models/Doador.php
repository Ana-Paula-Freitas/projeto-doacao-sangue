<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    protected $fillable = [
        'status',
        'cpf',
        'rg',
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
        'data_nascimento',
        'peso',
        'tipo_sanguineo',
        'profissao',
        'sexo'
    ];

    protected $table = 'doadores';
}
