<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use Illuminate\Http\Request;
use App\Http\Services\ProdutoService;
use App\Models\Categoria;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // use 

    // public function __construct(Type $var = null) {
    //     $this->var = $var;
    // }
    protected $productService;

    public function __construct( ProdutoService $productService) {
        $this->productService = $productService;
    }

    public function index()
    {
        return view('produto.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createProduto(ProdutoRequest $request){       
            $dadosProduto = $request->validated();
            $dadosProduto = $this->productService->create($dadosProduto);
            return redirect()->route('index')->with('success', 'Produto cadastrado com sucesso!');
        }

    /**
     * Store a newly created resource in storage.
     */
    public function cadastrarProduto()
    {   
        $categorias = Categoria::all();
        return view('Manutencao.Produto.CadastrarProduto', ['categorias' => $categorias]);
    }


    public function editarProduto($id)
    {   
        $produto = $this->productService->find($id);
        $categorias = Categoria::all();
        return view('Manutencao.Produto.EditarProduto', ['produto' => $produto, 'categorias' => $categorias]);
    }

    public function edicaoProduto(ProdutoRequest $request, $id)
    {   
        $dadosProduto = $request->validated();
        $dadosProduto = $this->productService->update($dadosProduto, $id);
        return redirect()->route('index')->with('success', 'Produto editado com sucesso!');
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
