@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bem-vindo {{ $usuario->name }}</div>
                <div class="panel-body">
                    <div class="list-group">
                        <a href="{{ route('dash.categoria.index') }}" class="list-group-item">Categorias</a>
                        <a href="#" class="list-group-item">Escolas</a>
                        <a href="#" class="list-group-item">Cursos</a>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
