<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class EcommerceController extends Controller
{
    public function index()
    {   
        return view('Index');
    }

    public function cadastrar()
    {   
        return view('Cadastrar');
    }

    public function welcome()
    {   
        $produtos = Produto::all();
        return view('welcome', ['produtos' => $produtos]);
    }
}
