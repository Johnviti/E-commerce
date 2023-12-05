<?php

namespace App\Http\Services;
use App\Models\Produto; 

class ProdutoService{
    public function create($dadosProduto){
        $dadosProduto = Produto::create($dadosProduto);
        return $dadosProduto;
    }
}