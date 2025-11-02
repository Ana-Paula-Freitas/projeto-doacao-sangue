<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distribuicao extends Model
{
    protected $fillable = [
        'status',
        'id_hospital',
        'data_entrega',
        'obs'
    ];
}
