<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $registros = User::all();
        return view('admin.users.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.users.adicionar');
    }

    public function salvar(Request $req)
    {
        $req->validate([
            'name'      =>'required|string|min:5',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:6',
        ]);
        
        $dados = $req->all();
        $dados['password'] = bcrypt($dados['password']);
        User::create($dados);

        return redirect()->route('admin.users');
    }

    public function editar($id)
    {
        $registro = User::find($id);
        return view('admin.users.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $req->validate([
            'name'      =>'required|string|min:5',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:6',
        ]);

        $dados = $req->all();
        $dados['password'] = bcrypt($dados['password']);
        User::find($id)->update($dados);
        return redirect()->route('admin.users');

    }

    public function deletar($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.users');
    }
}
