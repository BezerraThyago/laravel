@extends('layouts.principal')

@section('titulo', 'Opções')

@section('conteudo')

<div class="options">
    <ul>
    <li><a class="warning {{ request()->routeIs('1') ? 'selected' : '' }}" href="{{ route('opcoes', 1) }}">warning</a></li>
        <li><a class="info" href="{{route('opcoes', 2)}}">info</a></li>
        <li><a class="success" href="{{route('opcoes', 3)}}">sucess</a></li>
        <li><a class="error" href="{{route('opcoes', 4)}}">error</a></li>
    </ul>
</div>

@if(isset($opcao))
    @switch($opcao)
        @case(1)
            @alerta(['titulo'=>'erro fatal', 'tipo'=>'warning'])
                <p><strong>warning</strong></p>
                <p>Erro inesperado</p>
            @endalerta
            @break
        @case(2)
            @alerta(['titulo'=>'erro fatal', 'tipo'=>'info'])
                <p><strong>info</strong></p>
                <p>Erro inesperado</p>
            @endalerta
            @break
        @case(3)
            @alerta(['titulo'=>'erro fatal', 'tipo'=>'succes'])
                <p><strong>succes</strong></p>
                <p>Erro inesperado</p>
            @endalerta
            @break
        @case(4)
            @alerta(['titulo'=>'erro fatal', 'tipo'=>'error'])
                <p><strong>error</strong></p>
                <p>Erro inesperado</p>
            @endalerta
            @break
    @endswitch
@endif
@endsection