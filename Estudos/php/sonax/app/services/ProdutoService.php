<?php

namespace App\Services;

class ProdutoService 
{
    public function buscarProdutos() 
    {
        $produtos = [
            'Macarrão',
            'Feijão',
            'Manjericão',
            'Açafrão',
            'Cebolão',
        ];
        return $produtos;
    }
    //public function buscarValor()
    //{
    //    $valor = [
    //        '4,99',
    //        '6,99',
    //        '1,99',
    //        '0,99',
    //        '3,99',
    //    ];
    //    return $valor;
    //}
}
