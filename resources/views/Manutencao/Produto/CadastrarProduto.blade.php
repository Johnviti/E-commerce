@include('layouts.main')
@section('title', 'Cadastrar Produto')
@section('content')
<div class="container-principal">
    <div class="form-container">
        <form action="{{route('create')}}" method="post" media>
            @csrf
            <div class="item-group">
                <label for="codigo">Código</label>
                <input type="text" name="codigo" id="codigo" placeholder="Código do produto" required>
            </div>
            <div class="item-group">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" id="descricao" placeholder="Descrição do produto" required>
            </div>
            <div class="item-group">
                <label for="unidade">Unidade</label>
                <input type="text" name="unidade" id="unidade" placeholder="Unidade do produto" required>
            </div>
            <div class="item-group">
                <label for="peso">Peso</label>
                <input type="text" name="peso" id="peso" placeholder="Peso do produto" required>
            </div>
            <div class="item-group">
                <label for="preco">Preço</label>
                <input type="text" name="preco" id="preco" placeholder="Preço do produto" required>
            </div>
            {{-- <div class="item-group">
                <label for="id_categoria_produto">Categoria</label>
                <select name="id_categoria_produto" id="id_categoria_produto" required>
                    <option value="">Selecione uma categoria</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->descricao}}</option>
                    @endforeach
                </select>
            </div> --}}
        </form>
    </div>
</div>
@endsection