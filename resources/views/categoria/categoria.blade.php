@extends('layouts.app')

@section('title', $categoria->nome)

@section('content')
    <h2>Cursos de {{ $categoria->nome }}</h2>
    <hr>
    @include('partials.cursos', ['cursos' => $cursos])
@endsection