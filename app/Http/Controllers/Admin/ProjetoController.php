<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Projeto;

class ProjetoController extends Controller
{
    public function index()
    {
        $registros = Projeto::all();
        return view('admin.projetos.index', compact('registros'));
    }

    public function visualizar($id)
    {
        $registro = Projeto::find($id);
        return view('admin.projetos.visualizar');
    }

    public function adicionar()
    {
        return view('admin.projetos.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Projeto::create($dados);

        return redirect()->route('admin.projetos');
    }

    public function editar($id)
    {
        $registro = Projeto::find($i)
        return view('admin.projetos.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Projeto::find($id)->update($dados);
        return redirect()->route('admin.projetos');
    }

    public function deletar($id)
    {
        Projeto::find($id)->delete();
        return redirect()->route('admin.projetos')
    }
}
