<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
     protected $fillable = [
         'banco', 'contabil_cc', 'contabil_apl', 'projeto_id',
     ];
}
