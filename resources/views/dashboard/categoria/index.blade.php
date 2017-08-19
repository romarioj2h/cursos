@extends('layouts.app')

@section('title', 'Categorias')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Categorias
                    <a href="{{ route('dash.categoria.adicionar') }}" class="btn btn-primary btn-xs pull-right">Adicionar</a>
                </div>
                <div class="panel-body">
                    <ul class="media-list">
                        @foreach($categorias as $categoria)
                            <li class="media col-md-12">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection