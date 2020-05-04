<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Prazo;

class PrazoController extends Controller
{
    public function index()
    {
        $registros = Prazo::all();
        return view('admin.prazos.index', compact('registros'));
    }

    public function visualizar($id)
    {
        $registro = Prazo::find($id);
        return view('admin.prazos.visualizar');
    }

    public function adicionar()
    {
        return view('admin.prazos.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Prazo::create($dados);

        return redirect()->route('admin.prazos');
    }

    public function editar($id)
    {
        $registro = Prazo::find($i)
        return view('admin.prazos.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Prazo::find($id)->update($dados);
        return redirect()->route('admin.prazos');
    }

    public function deletar($id)
    {
        Prazo::find($id)->delete();
        return redirect()->route('admin.prazos')
    }
}
