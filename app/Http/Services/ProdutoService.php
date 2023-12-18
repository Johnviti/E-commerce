<?php

namespace App\Http\Services;
use App\Models\Produto; 

class ProdutoService{
    public function create($dadosProduto){
        $dadosProduto = Produto::create($dadosProduto);
        return $dadosProduto;
    }

    public function update($dadosProduto, $id){
        $dadosProduto = Produto::where('id', $id)->update($dadosProduto);
        return $dadosProduto;
    }

    public function find($id){
        $produto = Produto::find($id);
        return $produto;
    }
}