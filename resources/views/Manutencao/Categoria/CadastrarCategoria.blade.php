@extends('layouts.main')
@section('title', 'Cadastrar Categoria')
@section('links')
    <link rel="stylesheet" href="{{asset('css/Manutencao/Produto/CadastrarProduto.css')}}">
    <link rel="stylesheet" href="{{asset('css/BotoesPadrao.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop
@section('content')
<div class="container-principal">
    <div class="form-container">
        <form action="{{route('createCategoria')}}" method="POST">
            @csrf
            <div class="form__group field">
                <input type="input" class="form__field" placeholder="descricao" name="descricao" required>
                <label for="descricao" class="form__label">Descrição</label>
            </div>
            <div class="form__group field">
                <input type="input" class="form__field" placeholder="observacao" name="observacao" required>
                <label for="observacao" class="form__label">Observação</label>
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
            <div class="modal-body">
            Certeza que deseja cancelar o cadastro?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Confirmar</button>
            </div>
        </div>
        </div>
    </div>
  </div>
@endsection