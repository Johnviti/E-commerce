<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produto', [ProdutoController::class, 'index'])->name('index');
Route::get('/cadastrar-produto', [ProdutoController::class, 'cadastrarProduto'])->name('cadastrarProduto');
Route::post('/cadastro-produto', [ProdutoController::class, 'create'])->name('create');