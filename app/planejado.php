<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planejado extends Model
{
    protected $fillable = [
        'descrplano', 'qtdplano', 'valorun', 'recurso_id',
    ];
    
    public function recursos()
     {
         return $this->belongsTo('App\Recurso');
     }
}
