@extends('layouts.app')

@section('title', 'Página inicial')

@section('content')
    <div class="jumbotron baner">
        <h1>Idx Cursos</h1>
        <p>Catálogo de cursos</p>
        <p>Facilidade de encontrar conhecimento</p>
        <p><a href="{{ route('curso.index') }}" class="btn btn-primary btn-lg">Aprenda!</a></p>
    </div>
    <div class="row">
        <div class="col-md-3 text-center">
            <div class="single-content text-center">
                <div class="item-icon"><i class="glyphicon glyphicon-book"></i></div>
                <div class="item-text">
                    <h1><b>{{ $quantidadeCursos }}</b></h1>
                    <p>Cursos</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <div class="single-content text-center">
                <div class="item-icon"><i class="glyphicon glyphicon-education"></i></div>
                <div class="item-text">
                    <h1><b>{{ $quantidadeCriadores }}</b></h1>
                    <p>Escolas</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <div class="single-content text-center">
                <div class="item-icon"><i class="glyphicon glyphicon-heart"></i></div>
                <div class="item-text">
                    <h1><b>&#x221e;</b></h1>
                    <p>Motivação</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <div class="single-content text-center">
                <div class="item-icon"><i class="glyphicon glyphicon-flash"></i></div>
                <div class="item-text">
                    <h1><b>253</b></h1>
                    <p>Cafés</p>
                </div>
            </div>
        </div>
    </div><!-- end row -->
@endsection