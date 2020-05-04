<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Evento;

class EventoController extends Controller
{
    public function index()
    {
        $registros = Evento::all();
        return view('admin.eventos.index', compact('registros'));
    }

    public function visualizar($id)
    {
        $registro = Evento::find($id);
        return view('admin.eventos.visualizar');
    }

    public function adicionar()
    {
        return view('admin.eventos.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Evento::create($dados);

        return redirect()->route('admin.eventos');
    }

    public function editar($id)
    {
        $registro = Evento::find($i)
        return view('admin.eventos.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Evento::find($id)->update($dados);
        return redirect()->route('admin.eventos');
    }

    public function deletar($id)
    {
        Evento::find($id)->delete();
        return redirect()->route('admin.eventos')
    }
}
