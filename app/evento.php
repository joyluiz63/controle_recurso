<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
        'dtevento', 'descrdocumento', 'numdocumento', 
        'obsevento', 'recurso_id',
    ];

    public function recursos()
     {
         return $this->belongsTo('App\Recurso');
     }
}
