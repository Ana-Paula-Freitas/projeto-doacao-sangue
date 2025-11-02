<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $fillable = [
        'status',
        'tipo_sangue',
        'id_hemonucleo',
        'quant'
    ];
}
