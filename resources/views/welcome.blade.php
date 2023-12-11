@extends('layouts.main')
@section('title', 'E-commerce')
@section('content')
    <div class="container">
        <h1>Bem-vindo ao nosso E-commerce!</h1>
        <p>Confira nossos produtos abaixo:</p>
        <div class="row">
            @foreach($produtos as $produto)
                <div class="col-md-4">
                    <div class="card">
                        {{-- <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}"> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{ $produto->nome }}</h5>
                            <p class="card-text">{{ $produto->descricao }}</p>
                            <p class="card-text">Preço: R$ {{ $produto->preco }}</p>
                            <a href="" class="btn btn-primary">Ver detalhes</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <style>
        .container {
            margin-top: 50px;
        }

        .card {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
@endsection


