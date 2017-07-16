@extends('layouts.app')

@section('title', $curso->nome)

@section('content')
    <h2>Cursos de {{ $curso->nome }}</h2>
    <hr>
    <h3>Curso oferecido por {{ $curso->criador->nome }}</h3>
    <div class="row">
        <div class="col-md-6">
            <p class="text-justify">{{ $curso->descricao }}</p>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-usd"></span></span>
                <input readonly value="{{ $curso->custo() }}" type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
                <input readonly value="{{ $curso->anoPublicacao() }}" type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
            <br>
            <a href="{{ $curso->link }}" target="_blank" class="btn btn-success btn-lg btn-block">
                <span class="glyphicon glyphicon-link" aria-hidden="true"></span>
                Visitar
            </a>
        </div>
    </div>
@endsection