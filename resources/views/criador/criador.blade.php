@extends('layouts.app')

@section('title', $criador->nome)

@section('content')
    <h2>Cursos de {{ $criador->nome }} <small>{{ $criador->quantidadeCursos() }} cursos</small></h2>
    <p>
        Site: <a target="_blank" href="{{ $criador->link }}">{{ $criador->link }}</a>
    </p>
    <hr>
    @include('partials.cursos', ['cursos' => $cursos])
@endsection