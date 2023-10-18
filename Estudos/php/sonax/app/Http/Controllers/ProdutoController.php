<?php

namespace App\Http\Controllers;

use App\Services\ProdutoService;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index() 
    {
        $produtoservice = new ProdutoService;
        $produtos = $produtoservice->buscarProdutos();
        return view('produto',compact('produtos'));
    }
    public function store(Request $request)
    {
        $produto = $request->produto;
        $descricao = $request->descricao;
        //print_r($nome);
        //echo "<br>";
        //print_r($email);
    }

}
