@extends('layouts.app')

@section('title', 'Adicionar categoria')

@section('content')

<div class="container">
    <div class="row">
        @if ($errors->any())
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @elseif (session()->has('mensagem'))
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-success">
                    {{ session()->get('mensagem') }}
                </div>
            </div>
        @endif
        <div class="col-md-8 col-md-offset-2">
            <form method="post" action="{{ route('dash.categoria.adicionar') }}">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Adicionar categoria
                        <button type="submit" class="btn btn-primary btn-xs pull-right">Salvar</button>
                    </div>
                    <div class="panel-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ old('nome') }}">
                        </div>
                        <div class="form-group">
                            <label for="logo">Endereço da logo</label>
                            <input type="text" class="form-control" id="logo" name="logo" placeholder="img/categoria/php.png" value="{{ old('logo') }}">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input value="{{ old('habilitada') }}" name="habilitada" type="checkbox"> Habilitada?
                            </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection