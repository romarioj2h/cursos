@extends('layouts.app')

@section('title', 'Categorias')

@section('content')
    <h2>As categorias de cursos</h2>
    <hr>
    <ul class="media-list">
        @foreach($categorias as $categoria)
            <li class="media">
                <div class="media-left">
                    <a href="{{ route('categoria.get', ['id' => $categoria->id]) }}">
                        <img class="media-object" src="{{ url('/') }}/{{ $categoria->logo }}" alt="...">
                    </a>
                </div>
                <div class="media-body text-justify">
                    <h4 class="media-heading">
                        <a href="{{ route('categoria.get', ['id' => $categoria->id]) }}">
                            {{ $categoria->nome }}
                        </a>
                        <small>{{ $categoria->quantidadeCursos() }} cursos</small>
                    </h4>
                    @foreach($categoria->buscarCursosPopulares() as $curso)
                        <a href="{{ route('curso.get', ['id' => $curso->id]) }}">{{ $curso->nome }}</a>
                    @endforeach
                </div>
            </li>
        @endforeach
    </ul>
@endsection