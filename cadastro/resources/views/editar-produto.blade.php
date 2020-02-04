@extends('layouts.app', ['current' => 'produtos'])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="GET">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                <input type="text" class="form-control mb-4" name="nomeProduto" id="nomeProduto" value="{{$prod->nome}}">
                    
                    <label for="estoqueProduto">Quatidade</label>
                    <input type="number" class="form-control mb-4" name="estoqueProduto" id="estoqueProduto" value="{{$prod->estoque}}">
                    
                    <label for="precoProduto">Preço</label>
                    <input type="number" class="form-control mb-4" name="precoProduto" id="precoProduto" value="{{$prod->preco}}">
                    
                    <label for="categoriaProduto">Categoria do produto</label>
                    <select class="form-control" name="categoriaProduto" id="categoriaProduto">
                        @foreach ($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
    
@endsection