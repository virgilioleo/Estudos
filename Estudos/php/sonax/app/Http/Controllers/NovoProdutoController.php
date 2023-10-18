<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovoProdutoController extends Controller
{
    public function index() 
    {
        return view('novoproduto');
    }
}
