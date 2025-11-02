<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $fillable = [
        'status',
        'id_hemonucleo',
        'tipoSolicitacao',
        'quantSolicitada',
        'nomePaciente',
        'CPFpaciente',
        'dataSolicitacao'
    ];
}
