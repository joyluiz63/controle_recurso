<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [
        'dtpedido', 'numpedido', 'dtempenho', 'numempenho', 'empenhado',
        'anulado', 'liquidado', 'pago', 'numnotafiscal', 'executado_id',
    ];

    public function executados()
     {
         return $this->belongsTo('App\Executado');
     }
}
