<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    protected $fillable = [
        'descrrecurso', 'numprocesso', 'origem',
        'objeto', 'destino',
    ];
}
