<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recurso;
use App\Prazo;

class RecursoController extends Controller
{
    public function index()
    {
        $registros = Recurso::all();
        return view('admin.recursos.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.recursos.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Recurso::create($dados);

        return redirect()->route('admin.recursos');
    }

    public function editar($id)
    {
        $registro = Recurso::find($id);
        return view('admin.recursos.editar', compact('registro'));
    }

    public function visualizar($id)
    {
        $registro = Recurso::find($id);
        return view('admin.recursos.visualizar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Recurso::find($id)->update($dados);
        return redirect()->route('admin.recursos');

    }

    public function deletar($id)
    {
        Recurso::find($id)->delete();
        return redirect()->route('admin.recursos');
    }

}
