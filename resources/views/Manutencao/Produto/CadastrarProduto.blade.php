@extends('layouts.main')
@section('title', 'Cadastrar Produto')
@section('links')
    <link rel="stylesheet" href="{{asset('css/Manutencao/Produto/CadastrarProduto.css')}}">
    <link rel="stylesheet" href="{{asset('css/BotoesPadrao.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop
@section('content')
<div class="container-principal">
        {{-- 'codigo',
        'descricao',
        'unidade',
        'peso',
        'preco',
        'id_categoria_produto', --}}
    <div class="form-container">
        <form action="{{route('create')}}" method="post" media>
            @csrf
            <div class="form__group field">
                <input type="input" class="form__field" placeholder="codigo" required="">
                <label for="codigo" class="form__label">Código</label>
            </div>
            <div class="form__group field">
                <input type="input" class="form__field" placeholder="descricao" required="">
                <label for="descricao" class="form__label">Descrição</label>
            </div>
            <div class="form__group field">
                <input type="input" class="form__field" placeholder="unidade" required="">
                <label for="unidade" class="form__label">Unidade</label>
            </div>
            <div class="form__group field">
                <input type="input" class="form__field" placeholder="peso" required="">
                <label for="peso" class="form__label">Peso</label>
            </div>
            <div class="form__group field">
                <input type="input" class="form__field" placeholder="preco" required="">
                <label for="preco" class="form__label">Preço</label>
            </div>
            <div class="form_button">
                <button type="submit">Cadastrar</button>
                <button type="button" data-bs-toggle="modal" data-bs-target="#modalCadastrarProduto">
                    Cancelar
                </button>
            </div>
        </form>
        
    </div>
</div>
    <div class="modal fade" id="modalCadastrarProduto" tabindex="-1" aria-labelledby="modalCadastrarProdutoLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>
  </div>
@endsection