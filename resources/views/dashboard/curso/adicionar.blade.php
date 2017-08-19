@extends('layouts.app')

@section('title', 'Adicionar curso')

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
            <form method="post" action="{{ route('dash.curso.adicionar') }}">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Adicionar curso
                    </div>
                    <div class="panel-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ old('nome') }}">
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea id="descricao" name="descricao" class="form-control" rows="3">{{ old('descricao') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="dataPublicacao">Data de publicação</label>
                            <input type="date" class="form-control" id="dataPublicacao" name="dataPublicacao" placeholder="Data de publicação" value="{{ old('dataPublicacao') }}">
                        </div>
                        <div class="form-group">
                            <label for="link">Link de acesso</label>
                            <input type="url" class="form-control" id="link" name="link" placeholder="Link de acesso" value="{{ old('link') }}">
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <select id="categoria" name="categoria" class="form-control">
                                @foreach($categorias as $categoria)
                                    <option {{ old('categoria') == $categoria->id ? 'selected' : '' }} value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="criador">Escola</label>
                            <select id="criador" name="criador" class="form-control">
                                @foreach($criadores as $criador)
                                    <option {{ old('criador') == $criador->id ? 'selected' : '' }} value="{{ $criador->id }}">{{ $criador->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <select id="estado" name="estado" class="form-control">
                                @foreach($estados as $estado)
                                    <option {{ old('estado') == $estado ? 'selected' : '' }} value="{{ $estado }}">{{ $estado }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input value="{{ old('pago') }}" name="pago" type="checkbox"> Pago?
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block pull-right">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection