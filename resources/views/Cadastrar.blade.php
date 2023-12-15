@extends('layouts.main')
@section('title', 'Login')
@section('links')
    <link rel="stylesheet" href="{{asset('css/Manutencao/Produto/CadastrarProduto.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/BotoesPadrao.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/Index.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop
@section('content')
<div class="container-cadastro">
    <div class="form-container">
        <p class="title">Cadastro</p>
        <form class="form" method="POST" action="{{ route('cadastrar') }}">
            @csrf
            <div class="input-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="">
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="">
            </div>
            <div class="input-group">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" placeholder="">
            </div>
            <div class="input-group">
                <label for="password_confirmation">Confirmar Senha</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="">
            </div>
            <button type="submit" class="sign">Cadastrar</button>
        </form>
        <div class="social-message">
            <div class="line"></div>
            <p class="message">Cadastre-se com conta</p>
            <div class="line"></div>
        </div>
        <p class="signup">Já tem uma conta?
            <a rel="noopener noreferrer" href="{{ route('login') }}" class="">Faça login</a>
        </p>
    </div>
</div>

@endsection