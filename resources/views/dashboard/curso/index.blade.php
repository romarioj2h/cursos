@extends('layouts.app')

@section('title', 'Cursos')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Cursos
                        <a href="{{ route('dash.curso.adicionar') }}" class="btn btn-primary btn-xs pull-right">Adicionar</a>
                    </div>
                    <div class="panel-body">
                        <ul class="media-list">
                            @foreach($cursos as $curso)
                                <li class="media col-md-12">
                                    <div class="media-body text-justify">
                                        <h4 class="media-heading">
                                            <a href="{{ route('curso.get', ['id' => $curso->id]) }}">
                                                {{ $curso->nome }}
                                            </a>
                                        </h4>
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