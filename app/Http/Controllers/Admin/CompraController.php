<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Compra;

class CompraController extends Controller
{
    public function index()
    {
        $registros = Compra::all();
        return view('admin.compras.index', compact('registros'));
    }

    public function visualizar($id)
    {
        $registro = Compra::find($id);
        return view('admin.compras.visualizar');
    }

    public function adicionar()
    {
        return view('admin.compras.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Compra::create($dados);

        return redirect()->route('admin.compras');
    }

    public function editar($id)
    {
        $registro = Compra::find($i)
        return view('admin.compras.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Compra::find($id)->update($dados);
        return redirect()->route('admin.compras');
    }

    public function deletar($id)
    {
        Compra::find($id)->delete();
        return redirect()->route('admin.compras')
    }
}
