<?php

namespace App\Services;

class ClienteService 
{
    public function buscarClientes() 
    {
        $clientes = [
            [
                'nome'  => 'Arnaldo',
                'email' => 'arnaldo@gmail.com'
            ],
            [
                'nome'  => 'Scorpion',
                'email' => 'scorpion@gmail.com'
            ],
        ];
        return $clientes;
    }
}
