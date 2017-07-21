@extends('layouts.app')

@section('title', 'Contato')

@section('content')
    <h2>Contato</h2>
    <hr>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @elseif (session()->has('mensagem'))
        <div class="alert alert-success">
            {{ session()->get('mensagem') }}
        </div>
    @endif
    <form action="#" name="contato" method="post">
        {{ csrf_field() }}
        <div class="col-md-6">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" maxlength="255" required class="form-control" id="nome" name="nome" placeholder="Digite aqui">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" maxlength="255" required class="form-control" id="email" name="email" placeholder="Digite aqui">
            </div>
            <div class="form-group">
                <label for="assunto">Assunto</label>
                <input type="text" maxlength="255" required class="form-control" id="assunto" name="assunto" placeholder="Digite aqui">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="texto">Assunto</label>
                <textarea required id="texto" name="texto" class="form-control" rows="6"></textarea>
            </div>
            <button class="btn btn-success btn-block pull-right" type="submit">Enviar</button>
        </div>
    </form>
@endsection