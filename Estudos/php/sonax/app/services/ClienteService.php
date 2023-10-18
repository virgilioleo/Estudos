<?php

namespace App\Services;

class ClienteService 
{
    public function buscarClientes() 
    {
        $clientes = [
            'Arnaldo',
            'Scorpion',
            'Maria',
            'Anna',
            'Jose',
        ];
        return $clientes;
    }
}
