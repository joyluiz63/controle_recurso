<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $fillable = [
        'dtpedido', 'numpedido', 'dtempenho', 'numempenho', 'empenhado',
        'empenhado', 'anulado', 'liquidado', 'pago', 'numnotafiscal', 'executado_id',
    ];
}
