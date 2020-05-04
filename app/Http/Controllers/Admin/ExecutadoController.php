<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Executado;

class ExecutadoController extends Controller
{
    public function index()
    {
        $registros = Executado::all();
        return view('admin.executados.index', compact('registros'));
    }

    public function visualizar($id)
    {
        $registro = Executado::find($id);
        return view('admin.executados.visualizar');
    }

    public function adicionar()
    {
        return view('admin.executados.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Executado::create($dados);

        return redirect()->route('admin.executados');
    }

    public function editar($id)
    {
        $registro = Executado::find($i)
        return view('admin.executados.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Executado::find($id)->update($dados);
        return redirect()->route('admin.executados');
    }

    public function deletar($id)
    {
        Executado::find($id)->delete();
        return redirect()->route('admin.executados')
    }
}
