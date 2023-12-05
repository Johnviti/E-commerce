<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use Illuminate\Http\Request;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // use 

    // public function __construct(Type $var = null) {
    //     $this->var = $var;
    // }

    public function index()
    {
        return view('produto.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ProdutoRequest $request)
    {
        $dadosProduto = $request->validated();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function cadastrarProduto()
    {
        return view('Manutencao.Produto.CadastrarProduto');
    }


    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
