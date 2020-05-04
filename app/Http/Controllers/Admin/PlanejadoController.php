<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Planejado;

class PlanejadoController extends Controller
{
    public function index()
    {
        $registros = Planejado::all();
        return view('admin.planejados.index', compact('registros'));
    }

    public function visualizar($id)
    {
        $registro = Planejado::find($id);
        return view('admin.planejados.visualizar');
    }

    public function adicionar()
    {
        return view('admin.planejados.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Planejado::create($dados);

        return redirect()->route('admin.planejados');
    }

    public function editar($id)
    {
        $registro = Planejado::find($i)
        return view('admin.planejados.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Planejado::find($id)->update($dados);
        return redirect()->route('admin.planejados');
    }

    public function deletar($id)
    {
        Planejado::find($id)->delete();
        return redirect()->route('admin.planejados')
    }
}
