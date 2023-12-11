<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class EcommerceController extends Controller
{
    public function index()
    {   
        $produtos = Produto::all();
        return view('welcome', ['produtos' => $produtos]);
    }
}
