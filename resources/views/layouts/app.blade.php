<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>
    <title>Cursos - @yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@section('sidebar')
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('index') }}">Cursos</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ route('criador.index') }}">Escolas</a>
                    </li>
                    <li>
                        <a href="{{ route('categoria.index') }}">Categorias</a>
                    </li>
                    <li>
                        <a href="{{ route('curso.index') }}">Todos Cursos</a>
                    </li>
                    <li>
                        <a href="{{ route('categoria.get', ['id' => '1']) }}">PHP</a>
                    </li>
                    <li>
                        <a href="{{ route('categoria.get', ['id' => '2']) }}">Java</a>
                    </li>
                    <li>
                        <a href="{{ route('categoria.get', ['id' => '3']) }}">CSS</a>
                    </li>
                    <li>
                        <a href="#">Python</a>
                    </li>
                    <li>
                        <a href="{{ route('categoria.get', ['id' => '4']) }}">JavaScript</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Mais <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">História</a></li>
                            <li><a href="#">Física</a></li>
                            <li><a href="#">Direito</a></li>
                            <li><a href="#">Biologia</a></li>
                            <li><a href="#">Química</a></li>
                        </ul>
                    </li>
                </ul>
                <form action="{{ route('busca.get') }}" method="get" class="navbar-form navbar-right">
                    <div class="form-group">
                        <input value="{{ $termoDeBusca ?? '' }}" name="q" type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-success">Buscar</button>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
@show

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        @yield('content')
    </div>
</div>

<footer>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <p class="text-muted">
                Desenvolvido por <b>Romário Huebra</b>
            </p>
        </div>
    </div>
</footer>

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>