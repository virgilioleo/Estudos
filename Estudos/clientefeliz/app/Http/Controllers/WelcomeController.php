<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function store() 
    {
        $dados = [];
        return view('welcome', compact('dados'));
    }
}