<?php

namespace App\Http\Services;
use App\Models\Categoria; 

class CategoriaService{
    public function create($dadosCategoria){
        $dadosCategoria = Categoria::create($dadosCategoria);
        return $dadosCategoria;
    }

    public function update($dadosCategoria, $id){
        $dadosCategoria = Categoria::where('id', $id)->update($dadosCategoria);
        return $dadosCategoria;
    }
}