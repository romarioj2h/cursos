@extends('layouts.app')

@section('title', 'Todos')

@section('content')
    <h2>Todos cursos</h2>
    <hr>
    @include('partials.cursos', ['cursos' => $cursos])
@endsection