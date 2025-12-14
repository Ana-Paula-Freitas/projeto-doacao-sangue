<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $fillable = [
        'status',
        'id_hemonucleo',
        'tipo_solicitacao',
        'quant_solicitada',
        'nome_paciente',
        'cpf_paciente',
        'data_solicitacao'
    ];
}
