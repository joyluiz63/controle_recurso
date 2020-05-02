<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Executado extends Model
{
    protected $fillable = [
        'descrexecutado', 'qtdexecutado', 'valorun', 'recurso_id',
    ];

    public function recursos()
     {
         return $this->belongsTo('App\Recurso');
     }

     public function compras()
    {
        return $this->hasMany('App\Compra');
    }
}
