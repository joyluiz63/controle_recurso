<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planejado extends Model
{
    protected $fillable = [
        'descrplano', 'qtdplano', 'valorun', 'recurso_id',
    ];    
}
