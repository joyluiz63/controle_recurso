<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
      return view('login.index');
    }

    public function entrar(Request $req)
    {
      $dados = $req->all();
      if(Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['senha']]))
      {
        return redirect()->route('admin.recursos');
      }
      return redirect()->route('login.index');
    }

    public function sair()
    {
      Auth::logout();
      return redirect()->route('site.home');
    }
}
