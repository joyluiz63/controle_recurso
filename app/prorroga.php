<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prorroga extends Model
{
    protected $fillable = [
        'solicitado', 'numoficio','resposta', 'documento',
        'concedido', 'obsprorroga', 'recurso_id',
    ];
}
