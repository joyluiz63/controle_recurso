<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Prorroga;

class ProrrogaController extends Controller
{
    public function index()
    {
        $registros = Prorroga::all();
        return view('admin.prorogas.index', compact('registros'));
    }

    public function visualizar($id)
    {
        $registro = Prorroga::find($id);
        return view('admin.prorogas.visualizar');
    }

    public function adicionar()
    {
        return view('admin.prorogas.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Prorroga::create($dados);

        return redirect()->route('admin.prorogas');
    }

    public function editar($id)
    {
        $registro = Prorroga::find($i)
        return view('admin.prorogas.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Prorroga::find($id)->update($dados);
        return redirect()->route('admin.prorogas');
    }

    public function deletar($id)
    {
        Prorroga::find($id)->delete();
        return redirect()->route('admin.prorogas')
    }
}
