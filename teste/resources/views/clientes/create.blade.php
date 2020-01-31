@extends('layouts.principal')

@section('titulo', 'Novo cliente')

@section('conteudo')
<h3>Novo Clitente</h3>

<form action="{{ route('clientes.store')}}" method="POST">
    @csrf
    <input type="text" name="nome">
    <input type="submit" value="Salvar">
</form>
@endsection


