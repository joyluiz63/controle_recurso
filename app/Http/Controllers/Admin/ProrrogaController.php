<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Prorroga;

class ProrrogaController extends Controller
{
    public function index()
    {
        $registros = Proroga::all();
        return view('admin.prorogas.index', compact('registros'));
    }

    public function visualizar($id)
    {
        $registro = Proroga::find($id);
        return view('admin.prorogas.visualizar');
    }

    public function adicionar()
    {
        return view('admin.prorogas.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Proroga::create($dados);

        return redirect()->route('admin.prorogas');
    }

    public function editar($id)
    {
        $registro = Proroga::find($i)
        return view('admin.prorogas.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Proroga::find($id)->update($dados);
        return redirect()->route('admin.prorogas');
    }

    public function deletar($id)
    {
        Proroga::find($id)->delete();
        return redirect()->route('admin.prorogas')
    }
}
