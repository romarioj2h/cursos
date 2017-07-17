@extends('layouts.app')

@section('title', 'Busca')

@section('content')
    <h2>Resultado de busca por {{ $termoDeBusca }}</h2>
    <hr>
    @include('partials.cursos', ['cursos' => $cursos])
@endsection