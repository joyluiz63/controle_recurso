<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recurso;

class HomeController extends Controller
{
    public function index()
    {
        $recursos = Recurso::PAGINATE(10);
        return view('home', compact('recursos'));
        
        return view('home');
    }
}
