@extends('layouts.app')

@section('title', 'Escolas')

@section('content')
    <h2>As escolas de cursos</h2>
    <hr>
    <ul class="media-list">
        @foreach($criadores as $criador)
            <li class="media">
                <div class="media-left">
                    <a href="{{ route('criador.get', ['id' => $criador->id]) }}">
                        <img class="media-object" src="{{ url('/') }}/{{ $criador->logo }}" alt="...">
                    </a>
                </div>
                <div class="media-body text-justify">
                    <h4 class="media-heading">
                        <a href="{{ route('criador.get', ['id' => $criador->id]) }}">
                            {{ $criador->nome }}
                        </a>
                        <small>{{ $criador->quantidadeCursos() }} cursos</small>
                    </h4>
                    @foreach($criador->buscarCursosPopulares() as $curso)
                        <a href="{{ route('curso.get', ['id' => $curso->id]) }}">{{ $curso->nome }}</a>
                    @endforeach
                </div>
            </li>
        @endforeach
    </ul>
@endsection