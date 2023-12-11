<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriaRequest;
use App\Http\Services\CategoriaService;

class CategoriaController extends Controller
{
    protected $categoriaService;

    public function __construct( CategoriaService $categoriaService) {
        $this->categoriaService = $categoriaService;
    }


    /**
     * Show the form for creating a new resource.
     */
  
    public function Categoria()
    {
        return view('Manutencao.Categoria.Categoria');
    }

    public function cadastrarCategoria()
    {
        return view('Manutencao.Categoria.CadastrarCategoria');
    }

    public function createCategoria(CategoriaRequest $request)
    {
            $dadosCategoria = $request->validated();
            $dadosCategoria = $this->categoriaService->create($dadosCategoria);
            return redirect()->route('index')->with('success', 'Categoria cadastrado com sucesso!');
    }
}
