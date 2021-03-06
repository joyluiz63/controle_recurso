<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = [
        'codigo', 'vinculo', 'validade', 'recurso_id' ,
    ];

    public function recursos()
     {
         return $this->belongsTo('App\Recurso');
     }
}
