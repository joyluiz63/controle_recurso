<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Executado extends Model
{
    protected $fillable = [
        'descrexecutado', 'qtdexecutado', 'valorun', 'recurso_id',
    ];
}
