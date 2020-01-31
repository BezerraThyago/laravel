@extends('layouts.principal')

@section('titulo', 'Informações do Cliente')

@section('conteudo')
<h3>Info Cliente</h3>

<p>ID: {{$cliente['id']}}</p>
<p>Nome: {{$cliente['nome']}}</p>
@endsection
