@extends('layouts.app', ['current' => 'categorias'])

@section('body')

    <div class="card border">
        <div class="card-body">
        <form action="/categorias/{{$cat->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria">Editar Categoria</label>
                    <input type="text" class="form-control" name="nomeCategoria" id="nomeCategoria" value="{{$cat->nome}}">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
    
@endsection