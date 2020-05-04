<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Conta;

class ContaController extends Controller
{
    public function index()
    {
        $registros = Conta::all();
        return view('admin.contas.index', compact('registros'));
    }

    public function visualizar($id)
    {
        $registro = Conta::find($id);
        return view('admin.contas.visualizar');
    }

    public function adicionar()
    {
        return view('admin.contas.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Conta::create($dados);

        return redirect()->route('admin.contas');
    }

    public function editar($id)
    {
        $registro = Conta::find($i)
        return view('admin.contas.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Conta::find($id)->update($dados);
        return redirect()->route('admin.contas');
    }

    public function deletar($id)
    {
        Conta::find($id)->delete();
        return redirect()->route('admin.contas')
    }
}
