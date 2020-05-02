<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    protected $fillable = [
        'descrrecurso', 'numprocesso', 'origem',
        'objeto', 'destino',
    ];

    public function projetos()
    {
        return $this->hasMany('App\Projeto');
    }

    public function contas()
    {
        return $this->hasMany('App\Conta');
    }

    public function planejados()
    {
        return $this->hasMany('App\Planejado');
    }

    public function executados()
    {
        return $this->hasMany('App\Executado');
    }

    public function eventos()
    {
        return $this->hasMany('App\Evento');
    }

    public function prazos()
    {
        return $this->hasMany('App\Prazo');
    }

    public function prorrogas()
    {
        return $this->hasMany('App\Prorroga');
    }
}

