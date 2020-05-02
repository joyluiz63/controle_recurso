<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prazo extends Model
{
    protected $fillable = [
        'valor', 'recebido', 'inicial', 'prorrogado', 'recurso_id',
    ];

    public function recursos()
     {
         return $this->belongsTo('App\Recurso');
     }
}
