@extends('layouts.principal')

@section('titulo', 'departamentos')

@section('conteudo')
<h3>Departamentos</h3>

<ul>
    <li>Computadores</li>
    <li>Eletronicos</li>
    <li>acessorios</li>
    <li>teste</li>
</ul>

@alerta(['titulo'=>'erro fatal', 'tipo'=>'error'])

<p><strong>Erro</strong></p>
    <p>Erro inesperado</p>



@endalerta
@endsection