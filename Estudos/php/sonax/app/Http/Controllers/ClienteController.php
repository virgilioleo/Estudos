<?php

namespace App\Http\Controllers;

use App\Services\ClienteService;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index() 
    {
        $clienteservice = new ClienteService;
        $clientes = $clienteservice->buscarClientes();
        return view('cliente',compact('clientes'));
    }
    public function store(Request $request)
    {
        $nome = $request->nome;
        $email = $request->email;
        print_r($nome);
        echo "<br>";
        print_r($email);
    }

}
