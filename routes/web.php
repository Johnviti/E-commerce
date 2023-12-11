<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EcommerceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [EcommerceController::class, 'index'])->name('index');

Route::get('/produto', [ProdutoController::class, 'Produto'])->name('Produto');
Route::get('/cadastrar-produto', [ProdutoController::class, 'cadastrarProduto'])->name('cadastrarProduto');
Route::post('/cadastro-produto', [ProdutoController::class, 'createProduto'])->name('createProduto');


Route::get('/categoria', [CategoriaController::class, 'Categoria'])->name('indexCategoria');
Route::get('/cadastrar-categoria', [CategoriaController::class, 'cadastrarCategoria'])->name('cadastrarCategoria');
Route::post('/cadastro-categoria', [CategoriaController::class, 'createCategoria'])->name('createCategoria');